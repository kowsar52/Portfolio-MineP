<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ProfileSettingsController;
use App\Http\Controllers\Admin\EmailController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FAQController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ThemeManagementController;
use App\Http\Controllers\Admin\SliderImageController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\FunFactsController;
use App\Http\Controllers\Admin\TestimonialController;

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

Route::get('/contact',[FrontendController::class, 'contactPageShow']);
Route::get('/about',[FrontendController::class, 'aboutPageShow']);
Route::get('/faq', [FrontendController::class, 'faqPageShow']);
Route::get('/projects', [FrontendController::class, 'projectsPageShow']);
Route::get('/project/{id}', [FrontendController::class, 'projectDetailsPageShow']);

Route::post('/contact-form-data/save',[FrontendController::class, 'contactFromDataSave']);

##### NewsLetter Subscribe ######
Route::post('/newsletter',[FrontendController::class, 'newsletter']);


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

    ######## FAQ ########
    Route::get('/all-faqs', [FAQController::class,'index'])->name('admin.faq');
    Route::get('/faqs/get-faq/{id}', [FAQController::class,'getFaq'])->name('admin.faq.get');
    Route::post('/faqs/save', [FAQController::class,'save'])->name('admin.faq.save');
    Route::get('/faqs/delete/{id}', [FAQController::class,'delete'])->name('admin.faq.delete');

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

    ######## fun-facts ########
    Route::get('/fun-facts', [FunFactsController::class,'index'])->name('admin.fun-facts');
    Route::get('fun-facts/{id}', [FunFactsController::class,'get'])->name('admin.fun-facts.get');
    Route::post('fun-facts/save', [FunFactsController::class,'save'])->name('admin.fun-facts.save');
    Route::get('fun-facts/delete/{id}', [FunFactsController::class,'delete'])->name('admin.fun-facts.delete');

        
    ###### Contact #########
    Route::get('/contact/contact-list', [ContactController::class, 'index'])->name('admin.contact-list');
    Route::get('/contact/get/{id}', [ContactController::class, 'getContact'])->name('admin.contact-get');
        
    ############## Settings #############
    Route::get('/all-settings/{type}', [SettingsController::class,'getSetting'])->name('admin.settings.type');
    Route::post('/save-settings', [SettingsController::class,'saveSetting'])->name('admin.settings.save');


    ############## Email templates ##############
    Route::get('/email-templates', [EmailController::class,'index'])->name('admin.email.template');
    Route::get('/email-template/{id}', [EmailController::class,'edit']);
    Route::post('/email-template/update', [EmailController::class,'emailTemplateUpdate']);



    ############## Category #############
    Route::get('/categories', [CategoryController::class, 'index'])->name('admin.categories');
    Route::post('/categories/save', [CategoryController::class, 'save'])->name('admin.categories.save');
    Route::get('/categories/{id}', [CategoryController::class, 'getCategory'])->name('admin.categories.get');
    Route::get('/categories/delete/{id}', [CategoryController::class, 'delete'])->name('admin.categories.delete');


    ############## Project #############
    Route::get('/projects', [ProjectController::class, 'index'])->name('admin.projects');
    Route::post('/projects/save', [ProjectController::class, 'save'])->name('admin.projects.save');
    Route::get('/projects/{id}', [ProjectController::class, 'getCategory'])->name('admin.projects.get');
    Route::get('/projects/delete/{id}', [ProjectController::class, 'delete'])->name('admin.projects.delete');

    ############## Testimonial #############
    Route::get('/testimonials', [TestimonialController::class, 'index'])->name('admin.testimonials');
    Route::post('/testimonials/save', [TestimonialController::class, 'save'])->name('admin.testimonials.save');
    Route::get('/testimonials/{id}', [TestimonialController::class, 'getCategory'])->name('admin.testimonials.get');
    Route::get('/testimonials/delete/{id}', [TestimonialController::class, 'delete'])->name('admin.testimonials.delete');

    ############## Service Types #############
    Route::get('/service-types', 'ServiceTypesController@index')->name('admin.service-types');
    Route::post('/service-types/save', 'ServiceTypesController@save')->name('admin.service-types.save');
    Route::get('/service-types/get/{id}', 'ServiceTypesController@getServiceType')->name('admin.service-types.get');
    Route::get('/service-types/delete/{id}', 'ServiceTypesController@delete')->name('admin.service-types.delete');

    ######## LOVING CLIENTS ########
    Route::get('/clients', [ClientController::class,'index'])->name('admin.clients');
    Route::get('/clients/{id}', [ClientController::class,'getClientLogo'])->name('admin.clients.get');
    Route::post('/clients/save', [ClientController::class,'save'])->name('admin.clients.save');
    Route::get('/clients/delete/{id}', [ClientController::class,'delete'])->name('admin.clients.delete');
    
    ######## LOVING CLIENTS ########
    Route::get('/members', [MemberController::class,'index'])->name('admin.members');
    Route::get('/members/{id}', [MemberController::class,'getMember'])->name('admin.members.get');
    Route::post('/members/save', [MemberController::class,'save'])->name('admin.members.save');
    Route::get('/members/delete/{id}', [MemberController::class,'delete'])->name('admin.members.delete');





    ###### Review #########
    Route::get('/reviews/all-review', 'ReviewController@index')->name('admin.all-review');
    Route::get('/review/change-status/{id}', 'ReviewController@changeStatus')->name('admin.review.status');

    ############ Newsletter #############
    Route::get('newsletter/newsletter-list','NewsletterController@index')->name('admin.newsletter');
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