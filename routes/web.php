<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;


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
// Route::post('/addtestimonial', [AdminController::class, 'addtestimonial']);
Route::post('/addnewss', [AdminController::class, 'news']);
Route::post('/addeventss', [AdminController::class, 'events']);
Route::post('/addmember', [AdminController::class, 'member']);
Route::post('/addteams', [AdminController::class, 'team']);
// Route::post('/delete/{id}', [AdminController::class, 'delete']);
// Route::post('/deletegalleryimage/{id}', [AdminController::class, 'deletegalleryimage']);
// Route::post('/deletenews/{id}', [AdminController::class, 'deletenews']);
// Route::post('/deleteevents/{id}', [AdminController::class, 'deleteevents']);
// Route::post('/deletetestimonial/{id}', [AdminController::class, 'deletetestimonial']);
// Route::post('/sendMemberEmail/{member}', [AdminController::class, 'sendEmailToMember']);
// Route::post('/deleteMember/{member}', [AdminController::class, 'deleteMember']);
// Route::post('/deleteDonor/{donor}', [AdminController::class, 'deleteDonor']);
// Route::post('/deleteDonorMultiple', [AdminController::class, 'deleteDonorMultiple']);
// Route::post('/editTeam/{id}', [AdminController::class, 'editTeam']);
// Route::post('/editqry/{id}', [AdminController::class, 'editqry']);

Route::get('/userhome', [UserController::class, 'home']);
