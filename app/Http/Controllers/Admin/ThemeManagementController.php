<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ThemeManagement;
use App\Models\Language;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class ThemeManagementController extends Controller
{

    public function index($page)
    {
        $locale = \App::getLocale();

        $data = ThemeManagement::where('page', $page)->where('language', $locale)->get();
        

        return view('admin.theme_management.index', compact('data','page','locale'));
    }


    public function saveSetting(Request $request, $page)
    {
  
        $locale = \App::getLocale();

        foreach($request->setting as $key=>$set)
        {

            if($key == 'favicon' || $key == 'logo' || $key == 'white_logo'|| $key == 'default_avatar' || $key == 'image'  )
            {

                $image_name = time().'-'.rand(10000,99999).'.'.$set->getClientOriginalExtension();
                $set->move(public_path("assets/logo"), $image_name);
                $image_path = "assets/logo/" . $image_name;
                $setting = ThemeManagement::where('language',$locale)->where('page',$page)->where('slug',$key)->first();
                $photo_path = public_path().'/'.$setting->value;
                if (file_exists($photo_path)){
                    unlink($photo_path);
                }
                $setting->data = $image_path;
                $setting->update();
            }else{
                $setting = ThemeManagement::where('language',$locale)->where('page',$page)->where('slug', $key)->first();
                $setting->data = $set;
                $setting->update();
            }

        }
      
        return back()->withSuccess('Settings Updated Successfully');
    }


}
