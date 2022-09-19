<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Client;
use App\Models\Member;
use App\Models\Contact;
use App\Models\FunFact;
use App\Models\Project;
use App\Models\Service;
use App\Models\Newsletter;
use App\Models\SliderImage;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class FrontendController extends Controller
{
    //index page for
    public function index(Request $request){
       
        $slider_images = SliderImage::get();
        $services  = Service::where('language',\App::getLocale())->get();
        $projects  = Project::where('status',1)->where('language',\App::getLocale())->get();
        $testimonials  = Testimonial::where('status',1)->where('language',\App::getLocale())->get();
        $fun_facts = FunFact::where('language', \App::getLocale())->get();
        $clients = Client::where('language', \App::getLocale())->get();
        
        return view('index',compact('slider_images','services','projects','testimonials', 'fun_facts', 'clients'));
    }

    //contactPageShow
    public function contactPageShow(){
        return view('contact');
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
    
    //aboutPageShow
    public function aboutPageShow(){

        $fun_facts = FunFact::where('language', \App::getLocale())->get();
        $clients = Client::where('language', \App::getLocale())->get();
        $members = Member::where('language', \App::getLocale())->get();
        $testimonials  = Testimonial::where('status',1)->where('language',\App::getLocale())->get();

        return view('about', compact('fun_facts', 'clients', 'members','testimonials'));
    }
    //portfolioPageShow
    public function projectsPageShow(){
        $projects = Project::orderBy('created_at','desc')->paginate(12);
        return view('projects',compact('projects'));
    }
    //portfolioDetailsPageShow
    public function projectDetailsPageShow($id){
        $project = Project::findOrFail($id);
        return view('project-details',compact('project'));
    }
    //faqPageShow
    public function faqPageShow(){
        return view('faq');
    }
    //servicePageShow
    public function servicesPageShow(){
        return view('services');
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

    public function newsletter(Request $request)
    {
        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'EMAIL' => 'required|email|unique:newsletters',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 200);
        } else {
            $newsletter = new Newsletter();
            $newsletter->ip_address = $request->ip();
            $newsletter->email = $request->EMAIL;

            if($newsletter->save()){
                return response()->json([
                    'success' => true,
                    'message' => __('Thanks for subscribe us')
                ]);
            }
        }

    }
 
}
