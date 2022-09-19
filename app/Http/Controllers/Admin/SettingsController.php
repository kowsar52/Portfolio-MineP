<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Config,Artisan;

class SettingsController extends Controller
{


     //getSetting
     public function getSetting($type){
        if($type == 'general'){
            $setting = Setting::where('type',1)->get(); //1= general
    	    return view('admin.settings.general',['settings'=>$setting]);
        }else if($type == 'email'){
            $setting = Setting::where('type',2)->get(); //2 = email
    	    return view('admin.settings.email',['settings'=>$setting]);
        }else if($type == 'other'){
            $setting = Setting::whereIn('type',[3,6])->get(); //3 = other
    	    return view('admin.settings.other',['settings'=>$setting]);
        }
    }

    public function saveSetting(Request $request)
    {
        if ($request->isMethod('post')) {

            foreach($request->setting as $key=>$set)
            {
                if($key == 'favicon' || $key == 'logo' || $key == 'white_logo'|| $key == 'default_avatar' )
                {

                    $image_name = time().'-'.rand(10000,99999).'.'.$set->getClientOriginalExtension();
                    $set->move(public_path("assets/logo"), $image_name);
                    $image_path = "assets/logo/" . $image_name;
                    $setting = Setting::where('name',$key)->first();
                    $photo_path = public_path().'/'.$setting->value;
                    if (file_exists($photo_path)){
                        unlink($photo_path);
                    }
                    $setting->value = $image_path;
                    $setting->update();
                }else{
                    $setting = Setting::where('name', $key)->first();
                    $setting->value = $set;
                    $setting->update();
                }

            }


            $path = base_path('.env');
            if (file_exists($path)) {

                $file_content ='APP_NAME='.'"'.getOption('APP_NAME').'"'.PHP_EOL;
                $file_content .='APP_ENV=local'.PHP_EOL;
                $file_content .='APP_KEY=base64:+FW6/kxio66cNyXY+Psfb8fZCdKPddjERI3J4e2DEx4='.PHP_EOL;
                $file_content .='APP_DEBUG='.getOption('APP_DEBUG').PHP_EOL;
                $file_content .='APP_URL='.getOption('APP_URL').PHP_EOL.PHP_EOL;


                $file_content .='LOG_CHANNEL=stack'.PHP_EOL;
                $file_content .='LOG_DEPRECATIONS_CHANNEL=null'.PHP_EOL;
                $file_content .='LOG_LEVEL=debug'.PHP_EOL.PHP_EOL;


                $file_content .='DB_CONNECTION=mysql'.PHP_EOL;
                $file_content .='DB_HOST=127.0.0.1'.PHP_EOL;
                $file_content .='DB_PORT='.config('database.connections.mysql.port').PHP_EOL;
                $file_content .='DB_DATABASE='.config('database.connections.mysql.database').PHP_EOL;
                $file_content .='DB_USERNAME='.config('database.connections.mysql.username').PHP_EOL;
                $file_content .='DB_PASSWORD='.config('database.connections.mysql.password').PHP_EOL.PHP_EOL;


                $file_content .='BROADCAST_DRIVER=pusher'.PHP_EOL;
                $file_content .='CACHE_DRIVER=file'.PHP_EOL;
                $file_content .='FILESYSTEM_DRIVER=local'.PHP_EOL;
                $file_content .='QUEUE_CONNECTION=database'.PHP_EOL;
                $file_content .='SESSION_DRIVER=file'.PHP_EOL;
                $file_content .='SESSION_LIFETIME=120'.PHP_EOL.PHP_EOL;


                $file_content .='MEMCACHED_HOST=127.0.0.1'.PHP_EOL.PHP_EOL;


                $file_content .='REDIS_HOST=127.0.0.1'.PHP_EOL;
                $file_content .='REDIS_PASSWORD=null'.PHP_EOL;
                $file_content .='REDIS_PORT=6379'.PHP_EOL.PHP_EOL;


                $file_content .='MAIL_MAILER='.getOption('mail_driver').PHP_EOL;
                $file_content .='MAIL_HOST='.getOption('mail_host').PHP_EOL;
                $file_content .='MAIL_PORT='.getOption('mail_port').PHP_EOL;
                $file_content .='MAIL_USERNAME='.getOption('mail_username').PHP_EOL;
                $file_content .='MAIL_PASSWORD='.getOption('mail_password').PHP_EOL;
                $file_content .='MAIL_ENCRYPTION='.getOption('mail_encryption').PHP_EOL;
                $file_content .='MAIL_FROM_ADDRESS='.getOption('from_mail').PHP_EOL;
                $file_content .='MAIL_FROM_NAME='.'"'.getOption('from_name').'"'.PHP_EOL.PHP_EOL;

                $file_content .='TIMEZONE=GMT'.PHP_EOL;
                $file_content .='LOCALE=de'.PHP_EOL;
                $file_content .='FALLBACK_LOCALE=de'.PHP_EOL.PHP_EOL;
                
                    file_put_contents($path,$file_content);

                    
                }
        //     //config cache
            // Artisan::call('config:cache');
            // Artisan::call('cache:clear');
            return redirect()->back()->with(['success'=> __('Setting Update Seccessfully.')]);
        }
    }      
}

