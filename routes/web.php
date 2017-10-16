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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/import', function () {
    return view('import_csv');
});

Route::post('/test', 'RfidDataController@loadData');

http://justlaravel.com/import-csv-data-store-database/
https://appdividend.com/2017/06/12/import-export-data-csv-excel-laravel-5-4/#Step_8_Create_the_itemsbladephp_file
https://www.cloudways.com/blog/import-export-csv-using-php-and-mysql/
https://www.grok-interactive.com/blog/import-large-csv-into-mysql-with-php-part-1/
http://laraveldaily.com/upload-multiple-files-laravel-5-4/
https://www.codetutorial.io/laravel-5-file-upload-storage-download/
