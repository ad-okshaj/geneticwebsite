<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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



