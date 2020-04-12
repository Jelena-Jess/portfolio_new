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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'PagesController@index');
Route::get('/project1', 'PagesController@project1');
Route::get('/project2', 'PagesController@project2');
Route::get('/project3', 'PagesController@project3');
Route::get('/project3', 'PagesController@project3');
Route::get('/website', 'PagesController@website');
Route::get('/logo', 'PagesController@logo');
Route::get('/wordpress', 'PagesController@wordpress');
Route::get('/content', 'PagesController@content');

Route::get('/contact', 'EmailController@home');
Route::post('/send', 'EmailController@send');
Route::get('/project_plan', 'EmailController@project_plan');
Route::post('/project_plan_send', 'EmailController@project_plan_send');