<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
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

Route::get('/navbar-admin', function () {
    return view('navbars.navbar-admin');
});

Route::get('/navbar-edu', function () {
    return view('navbars.navbar-education');
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
