<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\smsController;
use App\Http\Controllers\TestEnrollmentController;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/private',[HomeController::class,'private']);
Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// mailing route
// Route::get('/email', function() {
//     Mail::to('backagain010@gmail.com')->send(new WelcomeMail(
        
//     ));
//     return new WelcomeMail();
// });

Route::get('/email',[EmailController::class,'email']);

Route::get('/send',[TestEnrollmentController::class,'send']);

Route::get('/sms',[smsController::class,'sms']);