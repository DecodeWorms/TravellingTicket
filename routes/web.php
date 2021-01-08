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

Route::view('/register','Auth.register');
Route::post('/create','RegisterUserController@create');
Route::view('/user','Auth.login');
Route::get('/login','loginUserController@login');

Route::view('/getTicket','dashBoard');
Route::view('/display','display');
Route::get('/logout','LogOutController@logout');
Route::get('/getUser','RegisterUserController@getUser');
Route::post('/makeTicket','TicketController@bookTicket');
Route::get('/Ticketdetails','TicketDetailsController@ticketDetails');
