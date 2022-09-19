<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ProfileSettingsController;
use App\Http\Controllers\Admin\EmailController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ThemeManagementController;
use App\Http\Controllers\Admin\SliderImageController;
use App\Http\Controllers\Admin\ServiceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/admin/login',[AuthController::class, 'loginPageShow'])->name('login');
Route::post('admin/login/submit',[AuthController::class, 'loginSubmit']);
Route::get('/admin/logout',[AuthController::class, 'logout']);
Route::get('/forget/password',[AuthController::class, 'forgetPassPageShow']);
Route::post('/forget/password',[AuthController::class, 'fotgetPasswordSubmit']);
Route::get('/reset-password/{token}',[AuthController::class, 'resetPassPageShow'])->name('password.reset');
Route::post('/reset-password/submit',[AuthController::class, 'resetPasswordSubmit'])->name('password.update');


Route::post('/contact-form-data/save',[FrontendController::class, 'contactFromDataSave']);


Route::get('/', [FrontendController::class, 'index']);
Route::get('/{slug}', [FrontendController::class, 'getPage'])->where('slug', '(terms|about-us|privacy-policy|imprint|faq|agb)');


Route::middleware('auth')->prefix('admin')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

    ############## Profile ##############
    Route::get('/profile', [ProfileSettingsController::class,'index'])->name('admin.profile');
    Route::post('/profile/update', [ProfileSettingsController::class, 'settingsUpdate'])->name('admin.profile.update');
    Route::post('/profile/change-password', [ProfileSettingsController::class ,'changePassword'])->name('admin.change_password');

    ######## Pages ########
    Route::get('/all-pages', [PageController::class, 'index'])->name('admin.pages');
    Route::get('/pages/create-page', [PageController::class, 'create'])->name('admin.page.create');
    Route::get('/pages/edit-page/{id}', [PageController::class, 'edit'])->name('admin.page.edit');
    Route::post('/pages/update', [PageController::class, 'updatePage'])->name('admin.page.update');
    Route::get('/pages/delete/{id}', [PageController::class, 'delete'])->name('admin.page.delete');


    ######## SLIDER IMAGES ########
    Route::get('/slider-images', [SliderImageController::class,'index'])->name('admin.slider-images');
    Route::get('/slider-images/{id}', [SliderImageController::class,'getSliderImage'])->name('admin.slider-images.get');
    Route::post('/slider-images/save', [SliderImageController::class,'save'])->name('admin.slider-images.save');
    Route::get('/slider-images/delete/{id}', [SliderImageController::class,'delete'])->name('admin.slider-images.delete');

    ######## SERVICES ########
    Route::get('/services', [ServiceController::class,'index'])->name('admin.services');
    Route::get('services/{id}', [ServiceController::class,'getService'])->name('admin.services.get');
    Route::post('services/save', [ServiceController::class,'save'])->name('admin.services.save');
    Route::get('services/delete/{id}', [ServiceController::class,'delete'])->name('admin.services.delete');


    ####### Theme Management ########
    Route::get('/theme-settings/{page}', [ThemeManagementController::class,'index'])->name('admin.theme-management');
    Route::post('/theme/save-settings/{page}', [ThemeManagementController::class,'saveSetting'])->name('admin.theme.save');

        
    ###### Contact #########
    Route::get('/contact/contact-list', [ContactController::class, 'index'])->name('admin.contact-list');
    Route::get('/contact/get/{id}', [ContactController::class, 'getContact'])->name('admin.contact-get');
        
    ############## Settings #############
    Route::get('/all-settings/{type}', [SettingsController::class,'getSetting'])->name('admin.settings.type');
    Route::post('/save-settings', [SettingsController::class,'saveSetting'])->name('admin.settings.save');

});



//################ IMPORTANT !!!!!!!!!!!!!!!!!
// cron job . set this cron job for every minutes in cpanel
Route::get('/run-artisan', function() {
    \Artisan::call('queue:work');
    return "Queue Success";
});
//############# IMPORTANT !!!!!!!!!!!!!!!!!

//clear cache route
Route::get('/cache-clear', function () {
    \Artisan::call('config:cache');
    \Artisan::call('cache:clear');
    \Artisan::call('queue:clear');
    return back()->with('success','Cache Cleared Successfully!');
});

// change language
Route::get('/change-language/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'de'])) {
        abort(400);
    }

    session()->put('locale',$locale);
    \App::setLocale($locale);
    return back()->with('success', __('Language Updated Success'));
});