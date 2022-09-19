<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
 

class AuthController extends Controller
{
    //loginPageShow
    public function loginPageShow(){
       if(Auth::user()){
          return redirect('/admin/dashboard');
       }
       return view('auth.login');
    }
    //forgetPassPageShow
    public function forgetPassPageShow(){
       return view('auth.forgetPass');
    }
    //resetPassPageShow
    public function resetPassPageShow($token){
      return view('auth.resetPass', ['token' => $token]);
    }

    //loginSubmit
    public function loginSubmit(Request $request){
      $request->validate([
         'email' => 'required',
         'password' => 'required',
      ]);

      $user = User::where('email',$request->email)->first();
      
       $credentials = $request->only('email', 'password');
      
       if(Auth::attempt($credentials, isset($request->remember_me) ? true : false)){
            return redirect('admin/dashboard')->withSuccess('Login Successfully');
       }else{
          return back()->withError("Credential doesn't match");
       }

    }

    //logout
    public function logout(Request $request)
    {
         Auth::logout();

         return redirect()->route('login')->withSuccess('Logout Successfully');;
   }

   public function fotgetPasswordSubmit(Request $request){
      $request->validate(['email' => 'required|email']);
 
      $status = Password::sendResetLink(
          $request->only('email')
      );
   
      return $status === Password::RESET_LINK_SENT
                  ? back()->with(['success' => __($status)])
                  : back()->withErrors(['email' => __($status)]);
   }

   public function resetPasswordSubmit(Request $request){
      $request->validate([
         'token' => 'required',
         'email' => 'required|email',
         'password' => 'required|min:8|confirmed',
     ]);
  
     $status = Password::reset(
         $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
               $user->forceFill([
                  'password' => Hash::make($password)
               ])->setRememberToken(Str::random(60));
   
               $user->save();
   
               event(new PasswordReset($user));
            }
      );
   
      return $status === Password::PASSWORD_RESET
                  ? redirect()->route('login')->with('success', __($status))
                  : back()->withErrors(['email' => [__($status)]]);
   }
}
