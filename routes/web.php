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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'FeedbackController@index');
Route::post('/submit-feedback', 'FeedbackController@submit_feedback');

/* Admin Panel */
Route::get('/admin', 'AdminController@index');
Route::get('/feedbacks', 'AdminController@view_feedbacks');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
