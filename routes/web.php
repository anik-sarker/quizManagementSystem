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
Route::get('/', 'LoginController@index');


//login
Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@verify');

//Registretion
Route::get('/reg','regController@index');
Route::post('/reg','regController@verify');

//userHome EDIT profile
Route::get('/user/editProfile/{id}','studentHomeController@edit');
Route::post('/user/editProfile/{id}','studentHomeController@update');

//Reports INFO
Route::get('/user/getReports/{id}','studentHomeController@viewReports');

//emails
Route::get('/user/emails/{email}','chatboxController@viewEmails');
Route::post('/user/emails/{email}','chatboxController@sendEmail');


//quiz
Route::get('/user/quiz/{id}','quizController@index');

