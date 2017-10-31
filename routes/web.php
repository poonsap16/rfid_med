<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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

Route::get('/uploadfile', function() {
    return view('uploadfile');
});

Route::post('/uploadfile', 'UploadFileController@uploadFile');


Route::get('/rfid', function () {
    return view('rfid_index');
});

Route::get('/activities/index', 'ActivitiesController@index');
Route::get('/activities/create', 'ActivitiesController@create');
