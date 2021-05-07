<?php

use Illuminate\Support\Facades\Route;

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

 // 메일 전송을 위한 페이지
Route::get('/mailSend', 'App\Http\Controllers\MailSendController@mailSend')->name('mailSend'); 
    
// 메일 전송 submit
Route::post('/mailSendSubmit', 'App\Http\Controllers\MailSendController@mailSendSubmit')->name('mailSendSubmit');
