<?php

namespace App\Http\Controllers\Admin;

use App\Events\NotificationMailSend;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;

class ProfileSettingsController extends Controller
{
    public function index()
    {
        return view('admin.profile_settings');
    }

    public function settingsUpdate(Request $request){

        //dd($request->toArray());

        $credentials = $request->validate([
            'name' => ['required'],
            'username' => ['required'],
            'email' => ['required'],
        ]);


        $admin= Auth::user();
        $admin->name = $request->name;
        $admin->username = $request->username;
        $admin->email = $request->email;

         //profile avatar upload start
         if($request->file('avatar'))
         {
             if($admin->avatar != '')
             {
                 $photo_path = base_path().'/public/'.$admin->avatar;
                 if (file_exists($photo_path)){
                     unlink($photo_path);
                 }
             }

             $file = $request->file('avatar');
             $image_name = time().'-'.rand(10000,99999).'.'.$file->getClientOriginalExtension();
             $file->move(public_path("uploads/avatar/"), $image_name);
             $photo_path = public_path('uploads/avatar/') . $image_name;

             $filepath = 'uploads/avatar/'.$image_name;
             $admin->avatar = $filepath;
         }//profile avatar upload end

        $admin->update();

        return back()->with(['success'=> __('Updated Successfully!')]);
    }

    public function changePassword(Request $request)
    {
        $credentials = $request->validate([
            'old' => ['required'],
            'new' => ['required', 'confirmed'],

        ]);

        $admin = Auth::user();

        if(Hash::check($request->old, $admin->password)){
            $admin->password = Hash::make($request->new);

            $admin->update();
        }
        //1=data, 2= mail type based on mail templates table, 
        // NotificationMailSend::dispatch($admin,'admin_password_changed');
        return back()->with(['success'=>__("Password Changed Successfully!")]);
    }
}
