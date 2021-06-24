<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\db_laravel;
use App\Http\Controllers\EmailController;
use App\Mail\MyTestMail;

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





  // send email start

Route::get('/send-email',[EmailController::class,'send'])->name('send-email');

Route::post('/send-email',[EmailController::class,'sendSubmit'])->name('sendSubmit');

  // send email end


  Route::get('/showModel',[db_laravel::class,'getDataModel'])->name('getDataModel');