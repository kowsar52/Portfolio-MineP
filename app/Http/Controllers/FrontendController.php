<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Contact;
use App\Models\Service;
use App\Models\SliderImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class FrontendController extends Controller
{
    //index page for
    public function index(Request $request){
       
        $slider_images = SliderImage::get();
        $services  = Service::where('language',\App::getLocale())->get();
        
        return view('index',compact('slider_images','services'));
    }


    //contact From Data Save
    public function contactFromDataSave(Request $request)
    {
        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'phone_number' => ['required'],
            'msg_subject' => ['required'],
            'message' => ['required'],
            'gridCheck' => ['required']
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 200);
        } else {
            $contact = new Contact();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->phone = $request->phone_number;
            $contact->subject = $request->msg_subject;
            $contact->message = $request->message;

            if($contact->save()){
                return response()->json([
                    'success' => true,
                    'message' => __('We will response you shortly')
                ]);
            }
        }
    }


    //get dynamic page
    public function getPage($slug){
        $local = \App::getLocale();
        $page = Page::where('slug',$slug)->where('language',$local)->first();

        if(empty($page)){

            return abort(404);

        }

        return view('page',compact('page'));

    }

    
 
}
