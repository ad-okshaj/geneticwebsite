<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\Auth\RegisterController;
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
Route::get('/member_registration', function () {
    return view('registermemberr');
});
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

// Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::controller(HomeController::class)->group(function(){
    Route::get('/dashboard','index')->middleware('auth');
    Route::get('/home','index')->name('home')->middleware('auth');
    Route::get('/','redirectToUhome');
    Route::get('/userservices','uservices');
    Route::get('/userabout', 'userabout');
});

Route::controller(UserController::class)->group(function(){
    Route::get('/userevents','userevents');
    Route::get('/userhome','home');
    Route::get('eventInfo/{id}', 'eventInfo');
    Route::get('/contact','contact');
    Route::get('/usergallery','gallery');
});

Route::controller(DonateController::class)->group(function(){
    Route::resource('/donate_form', DonateController::class);
    Route::get('thankyou/{id}','store');
});

// Route::get('/export', [AdminController::class, 'export']);
Route::controller(AdminController::class)->group(function(){
    Route::get('/testimonial', 'testimonial')->middleware('auth');
    Route::get('/team','displayteam')->middleware('auth');
    Route::get('/members', 'displaymembers')->middleware('auth');
    Route::get('/donors', 'displaydonors')->middleware('auth');
    Route::get('/managenews', 'displaynews')->middleware('auth');
    Route::get('/managetestimonial',  'displaytestimonials')->middleware('auth');
    Route::get('/manageevents',  'testimonial')->middleware('auth');
    Route::post('/addtestimonial',  'addtestimonial')->middleware('auth');
    Route::post('/addnewss',  'news')->middleware('auth');
    Route::post('/addeventss',  'events')->middleware('auth');
    Route::post('/addmember', 'member')->middleware('auth');
    Route::post('/addteams', 'team')->middleware('auth');
    Route::get('/addgallery', 'addgallery')->middleware('auth');
    Route::post('/addgallerys', 'postaddgallery')->middleware('auth');
    Route::get('/displaygallery', 'displaygallery')->middleware('auth');
    Route::post('/deleteDonorMultiple',  'deleteDonorMultiple')->middleware('auth');
    Route::post('/delete/{id}', 'delete')->middleware('auth');
    Route::post('/deletegalleryimage/{id}', 'deletegalleryimage')->middleware('auth');
    Route::post('/deletenews/{id}', 'deletenews')->middleware('auth');
    Route::post('/deleteevents/{id}', 'deleteevents')->middleware('auth');
    Route::post('/deletetestimonial/{id}', 'deletetestimonial')->middleware('auth');
    Route::post('/sendMemberEmail/{member}','sendEmailToMember')->middleware('auth');
    Route::post('/deleteMember/{member}',  'deleteMember')->middleware('auth');
    Route::post('/deleteDonor/{donor}',  'deleteDonor')->middleware('auth');
    Route::post('/editTeam/{id}',  'editTeam')->middleware('auth');
    Route::post('/editqry/{id}',  'editqry')->middleware('auth');
});


// Auth::routes(['verify' => false, 'register' => false]);
// Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
// Route::post('/register', [RegisterController::class, 'register'])->name('register');

Auth::routes();
Route::match(['get', 'post'], '/register', [UserController::class, 'registration'])->middleware('auth');
// Route::post('/register2', [UserController::class, 'register2']);


// Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register')->middleware('auth');
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/userhome', 'UserController@home'); ----> redundant route
// Route::get('/displaytestimonial', 'UserController@displaytestimonial'); ---> probably mistake in coding