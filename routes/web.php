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


//Route::post('/uploadfile', 'RfidDataController@upload');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/import', function () {
    return view('import_csv');
});




// Route::get('/upload', function () {
//     return view('upload');
// });
//
// Route::post('/upload', function (Request $request) {
//     if ($request->hasFile('files')){
//
//         foreach($request->file('files') as $file){
//             if ($file->isValid()) {
//                 // return "file is valid";
//                 $filePaths[] = $file->store('uploads');
//
//                 // $data = loadCSVFromUpload($filePaths[0]);
//                 // return $data;
//             }
//         }
//             // return "file is invalid";
//
//         foreach($filePaths as $filePath){
//             //load data from file to table
//             // $data = loadCSVFromUpload($filePath);
//
//             //delete file
//             Storage::delete($filePath);
//         }
//     }
//     return $filePaths;
//     // return $request->all();
// });
//
// function loadCSVFromUpload($fileName) {
//     // ไฟล์ csv ต้องเก็บไว้ที่ storage/csv
//     $fileName = storage_path('app/' . $fileName);
//
//     // check ก่อนว่าไฟล์นี้มีจริงและอ่านได้ด้วย ถ้าไม่ได้ก็เลิก
//     if(!file_exists($fileName) || !is_readable($fileName))
//         return FALSE;
//     else {
//         $header = NULL; // คือ headrow เก็บ ชื่อ filed นั่นเอง
//         $data = array(); // เอาไว้เก็บข้อมูลจากไฟล์
//         $count = 0;
//
//         // เช็คก่อนว่า เปิดอ่านได้ไหม ส่วน 'r' = read only
//         if (($handle = fopen($fileName, 'r')) !== FALSE){
//             // วนลูปตามจำนวณ row ที่ได้จาก fgetcsv ส่วน 3000 คือค่าสูงสุดของจำนวณ chars ใน 1 row
//             while (($row = fgetcsv($handle, 3000, ",")) !== FALSE){
//                 if(!$header) // ถ้า $header ยังว่างอยู่
//                     $header = $row; // ดังนั้น $header = row แรก
//                 else
//                     // $row ต่อๆมาก็จะเป็น data จึงให้ combine กับ $header เป็น associate array แล้วใส่ใน $data
//                     $data[] = array_combine($header, $row);
//             }
//         }
//         fclose($handle); // ปิดไฟล์
//         return $data;
//     }
// }


// http://justlaravel.com/import-csv-data-store-database/
// https://appdividend.com/2017/06/12/import-export-data-csv-excel-laravel-5-4/#Step_8_Create_the_itemsbladephp_file
// https://www.cloudways.com/blog/import-export-csv-using-php-and-mysql/
// https://www.grok-interactive.com/blog/import-large-csv-into-mysql-with-php-part-1/
// http://laraveldaily.com/upload-multiple-files-laravel-5-4/
// https://www.codetutorial.io/laravel-5-file-upload-storage-download/
