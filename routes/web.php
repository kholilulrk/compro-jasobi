<?php

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

//========================================================== admin


// Route::middleware('auth:web')->group(function(){
    // diisi route yang harus login terlebih dahulu
    
// });
use Illuminate\Support\Facades\Mail;

Route::middleware('RedirectIfNotLogin')->group(function(){
    Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
});

Route::group(['middleware' => 'auth:admin' ,'as' => 'admin.'], function(){
    // harus login sbg admin
    // Route::get('/dashboard/guest', 'Guest\Home\DashboardController@index')->name('dashboard.guest');
    // ========================
    Route::get('/admin/dashboard', 'Admin\AdminController@index')->name('dashboard');
    Route::get('/admin/{id}/edit', 'Admin\AdminController@edit')->name('edit');
    Route::get('/admin/{id}/update', 'Admin\AdminController@update')->name('update');
    Route::get('/admin/{id}/show', 'Admin\AdminController@show')->name('show');
    Route::get('/admin/category', 'Admin\Category\CategoryController@index')->name('category.index');
    Route::post('/admin/create', 'Admin\AdminController@create')->name('userclient.create');
    Route::post('/admin/{id}/update', 'Admin\AdminController@update')->name('userclient.update');
    Route::get('/admin/{id}/delete', 'Admin\AdminController@delete')->name('userclient.delete');
    Route::post('/admin/category/store', 'Admin\AdminController@store_category')->name('category.store');
    Route::get('/admin/category/{id}/delete', 'Admin\Category\CategoryController@delete')->name('category.delete');

    Route::resource('user','Admin\User\UserController');
    Route::resource('feature', 'Admin\Feature\FeatureController');
    Route::resource('about', 'Admin\About\AboutController');
    Route::resource('whyus', 'Admin\WhyUs\WhyUsController');
    Route::resource('international', 'Admin\International\InternationalController');
    Route::resource('domestic', 'Admin\Domestic\DomesticController');
    Route::resource('team', 'Admin\Team\TeamController');
    Route::resource('contact', 'Admin\Contact\ContactController');
    Route::resource('social_media', 'Admin\SocialMedia\SocialMediaController');
    Route::resource('inbox','Admin\Inbox\InboxController');
});

Route::group(['middleware' => 'auth:user' ,'as' => 'userclient.'], function(){
    Route::get('/userClient', 'Client\DashboardController@index')->name('dashboard');
    Route::get('/userClient/aboutus', 'Client\About\AboutController@index')->name('aboutus.index');
    Route::get('/userClient/contact','Client\Contact\ContactController@index')->name('contact.index');
    Route::get('/userClient/{id}/find','Client\Contact\ContactController@find')->name('contact.find');
});

Route::post('/attempt', 'Auth\LoginController@authenticate')->name('attempt');


Route::middleware('IfUserAkses')->group(function(){
    // diisi route yang harus tidak login
    Route::get('/', 'Guest\Home\DashboardController@index');
    Route::get('/dashboard', 'Guest\Home\DashboardController@index')->name('dashboard');
    // Route::get('/aboutus/guest', 'Guest\About\AboutController@index')->name('about.index');
    Route::resource('aboutus_guest', 'Guest\About\AboutController');
    Route::get('/program', 'Guest\Program\ProgramController@index')->name('program.index');
    Route::resource('packet', 'Guest\Packet\PacketController');
    Route::resource('featureinfo', 'Guest\Feature\FeatureController');
    // Route::get('/contact','Guest\Contact\ContactController@index')->name('contact.index');
    // Route::Auth();
    Route::get('/SignIn', 'Auth\LoginController@index')->name('login'); 
    Route::get('/SignUp', 'Auth\RegisterController@index')->name('regis'); 
    Route::get('/SignUp/store', 'Auth\RegisterController@store')->name('regis.store'); 
    Route::resource('international_guest', 'Guest\International\InternationalController');
    Route::resource('domestic_guest', 'Guest\Domestic\DomesticController');
    Route::resource('contact_guest', 'Guest\Contact\ContactController');

    // Route::get('/email', function () {
    //     Mail::raw(
    //         "Test"
    //         , function ($messages) {
    //         $messages->to('jasobi.solusibisnis@gmail.com');
    //         $messages->from('dentisphere@aksamedia.com');
    //         $messages->subject("Message from contact us");
    //     });
    // });

});

Route::middleware('AccessLoginPage')->group(function(){
    Route::get('/SignIn', 'Auth\LoginController@index')->name('login'); 
});




// 
// 
