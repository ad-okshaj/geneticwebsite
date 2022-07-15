<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DonateController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Route::get('/', );
*/

Route::get('/admin', function () {
    return redirect('/dashboard');
});

Route::get('/download/{file}', function ($file) {
    return Storage::download('crgbmd-uploads/' . $file);
});
 
//Route::view("about", '/about'); -------> new routing

Route::get('/addevents', function () {
    return view('addevents');
});
Route::get('/adminnews', function () {
    return view('addnews1');
});
Route::get('/member_registration', function () {
    return view('registermember');
});
Route::get('/addteam', function () {
    return view('addteam');
});

Route::get('/userpartners', function () {
    return view('upartners');
});

Route::get('/userresources', function () {
    return view('uresources');
});

Route::get('/userrgd', function () {
    return view('urgd');
});

Route::get('/supportus', function () {
    return view('usupportus');
}); 

// Show Register Form and Login
// Route::post('/logout2', [UserController::class, 'logout2']);
// Route::get('/login', [UserController::class, 'login'])->name('login');
// Route::get('/register', [UserController::class, 'register'])->name('register');
// Route::post('/users', [UserController::class, 'store']);



Route::controller(HomeController::class)->group(function(){
    Route::get('/dashboard','index')->middleware('auth');
    Route::get('/','redirectToUhome');
    Route::get('/userservices','uservices');
});

Route::controller(UserController::class)->group(function(){
    Route::get('/userevents','userevents');
    Route::get('/userhome','home');
    Route::get('eventInfo/{id}', 'eventInfo');
    Route::get('/contact','contact');
    Route::get('/usergallery','gallery');
});

Route::controller(DonateController::class)->group(function(){
    Route::get('/userevents','userevents');
    Route::resource('/donate_form', DonateController::class);
    Route::get('thankyou/{id}','store');
});

Route::controller(AdminController::class)->group(function(){
    Route::get('/testimonial', 'testimonial');
    Route::get('/team','displayteam');
    Route::get('/members', 'displaymembers');
    Route::get('/donors', 'displaydonors');
    Route::get('/managenews', 'displaynews');
    Route::get('/managetestimonial',  'displaytestimonials');
    Route::get('/manageevents',  'testimonial');
    Route::post('/addtestimonial',  'addtestimonial'); //cmt this
    Route::post('/addnewss',  'news');
    Route::post('/addeventss',  'events');
    Route::post('/addmember', 'member');
    Route::post('/addteams', 'team');
    Route::get('/addgallery', 'addgallery'); 
    Route::post('/addgallerys', 'postaddgallery'); 
    Route::get('/displaygallery', 'displaygallery');
    Route::post('/deleteDonorMultiple',  'deleteDonorMultiple');
});





// Route::get('/export', [AdminController::class, 'export']);


//cmt these
// Route::post('/delete/{id}', [AdminController::class, 'delete']);
// Route::post('/deletegalleryimage/{id}', [AdminController::class, 'deletegalleryimage']);
// Route::post('/deletenews/{id}', [AdminController::class, 'deletenews']);
// Route::post('/deleteevents/{id}', [AdminController::class, 'deleteevents']);
// Route::post('/deletetestimonial/{id}', [AdminController::class, 'deletetestimonial']);
// Route::post('/sendMemberEmail/{member}', [AdminController::class, 'sendEmailToMember']);
// Route::post('/deleteMember/{member}', [AdminController::class, 'deleteMember']);
// Route::post('/deleteDonor/{donor}', [AdminController::class, 'deleteDonor']);
// Route::post('/editTeam/{id}', [AdminController::class, 'editTeam']);
// Route::post('/editqry/{id}', [AdminController::class, 'editqry']);
//cmt these


// Route::get('/userhome', 'UserController@home'); ----> redundant route
// Route::get('/displaytestimonial', 'UserController@displaytestimonial'); ---> probably mistake in coding
// Route::get('/userabout', function () {
//     $sc = team::where('committe', 'scientific')->get();
//     $ad = team::where('committe', 'advisory')->get();
//     $mg = team::where('committe', 'managing')->get();
//     return view('uabout')->with(['sc' => $sc, 'ad' => $ad, 'mg' => $mg]);
// });


// Auth::routes(['verify' => false, 'register' => false]);
// Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('/register', 'Auth\RegisterController@register')->name('register');


// Route::get('/', function () {
//     return view('welcome');
// });