<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
// use \App\Http\Controllers\Auth\LoginController;
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
Route::get('/bt-local', function(){
    return view('bt-local');
});

Route::get('/navbar-admin', function () {
    return view('navbars.navbar-admin');
});

Route::get('/navbar-edu', function () {
    return view('navbars.navbar-education');
});

Route::get('/navbar-con', function () {
    return view('navbars.navbar-con');
});

Route::get('/logout', function () {
    return 'You are logout';
});

Route::get('/uploadfile', function() {
    return view('uploadfile');
});

Route::post('/uploadfile', 'UploadFileController@uploadFile');


Route::get('/rfid', function () {
    return view('rfid_index');
});

Route::get('/', function () {
    return view('welcome');
});



Route::get('/activities/index', 'ActivitiesController@index');
Route::get('/activities/create', 'ActivitiesController@create');
Route::post('/activities/store', 'ActivitiesController@store');
Route::get('/activities/edit/{id}', 'ActivitiesController@edit');
Route::patch('/activities/update/{id}', 'ActivitiesController@update');


Route::get('/draft/{viewName}', function($viewName){
    $username = 'poonsap';
    return view('draft.'.$viewName, compact('username'));
});

Route::view('about','rfid_index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/logout', 'LoginController@logout');


Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('guest', function () {
    return view('guest');
});