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
Route::get('/dashboard',[HomeController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

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


Route::get('/testimonial', [AdminController::class, 'testimonial']);
Route::get('/team', [AdminController::class, 'displayteam']);
Route::get('/members', [AdminController::class, 'displaymembers']);
Route::get('/donors', [AdminController::class, 'displaydonors']);
// Route::get('/export', [AdminController::class, 'export']);
Route::get('/managenews', [AdminController::class, 'displaynews']);
Route::get('/managetestimonial', [AdminController::class, 'displaytestimonials']);
Route::get('/manageevents', [AdminController::class, 'testimonial']);

Route::post('/addtestimonial', [AdminController::class, 'addtestimonial']); //cmt this

Route::post('/addnewss', [AdminController::class, 'news']);
Route::post('/addeventss', [AdminController::class, 'events']);
Route::post('/addmember', [AdminController::class, 'member']);
Route::post('/addteams', [AdminController::class, 'team']);


//cmt these
// Route::post('/delete/{id}', [AdminController::class, 'delete']);
// Route::post('/deletegalleryimage/{id}', [AdminController::class, 'deletegalleryimage']);
// Route::post('/deletenews/{id}', [AdminController::class, 'deletenews']);
// Route::post('/deleteevents/{id}', [AdminController::class, 'deleteevents']);
// Route::post('/deletetestimonial/{id}', [AdminController::class, 'deletetestimonial']);
// Route::post('/sendMemberEmail/{member}', [AdminController::class, 'sendEmailToMember']);
// Route::post('/deleteMember/{member}', [AdminController::class, 'deleteMember']);
// Route::post('/deleteDonor/{donor}', [AdminController::class, 'deleteDonor']);
Route::post('/deleteDonorMultiple', [AdminController::class, 'deleteDonorMultiple']);
// Route::post('/editTeam/{id}', [AdminController::class, 'editTeam']);
// Route::post('/editqry/{id}', [AdminController::class, 'editqry']);
//cmt these



Route::get('/', [HomeController::class, 'redirectToUhome']);
Route::get('/addgallery', [AdminController::class, 'addgallery'] ); 
Route::post('/addgallerys', [AdminController::class, 'postaddgallery']);  
// Route::get('/userhome', 'UserController@home'); ----> redundant route
Route::get('/userservices', [HomeController::class, 'uservices']);

Route::get('/displaygallery', [AdminController::class, 'displaygallery']);

// Route::get('/displaytestimonial', 'UserController@displaytestimonial'); ---> probably mistake in coding
Route::get('/usergallery', [UserController::class, 'gallery']);

// Route::get('/userabout', function () {
//     $sc = team::where('committe', 'scientific')->get();
//     $ad = team::where('committe', 'advisory')->get();
//     $mg = team::where('committe', 'managing')->get();
//     return view('uabout')->with(['sc' => $sc, 'ad' => $ad, 'mg' => $mg]);
// });

Route::get('/userpartners', function () {
    return view('upartners');
});

Route::get('/userevents', [UserController::class, 'userevents']);
Route::get('/userresources', function () {
    return view('uresources');
});

Route::get('/contact', [UserController::class, 'contact']);

Route::get('/userrgd', function () {
    return view('urgd');
});

Route::get('/supportus', function () {
    return view('usupportus');
});

Route::get('eventInfo/{id}', [UserController::class, 'eventInfo']);
Route::get('thankyou/{id}',  [DonateController::class, 'store']);

Route::resource('/donate_form', DonateController::class);

// Auth::routes(['verify' => false, 'register' => false]);
// Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('/register', 'Auth\RegisterController@register')->name('register');

Route::get('/userhome', [UserController::class, 'home']);
Route::get('/download/{file}', function ($file) {
    return Storage::download('crgbmd-uploads/' . $file);
});
 