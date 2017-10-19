<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RfidDataController extends Controller
{
  public static function loadData($fileName)
  {
    $rfidRecords = loadCSV($fileName);

    foreach ($rfidRecords as $rfidRecord) {

      // RfidData::date_stamp=(Carbon::createFromFormat('m/d/Y', 'date_stamp')->toDateString();)

      $rfidRecord['date_stamp'] = Carbon::createFromFormat('m/d/Y', $rfidRecord['date_stamp'])->toDateString();

      RfidData::create($rfidRecord);
    }
  }

  public function upload(Request $request){
        //Check ว่า input มีไฟล์หรือไม่
        if ($request->hasFile('files')){
          foreach($request->file('files') as $file){
              if ($file->isValid()) {
                  // return "file is valid";
                  $filePaths[] = $file->store('uploads');

                  // $data = $this->loadCSVFromUpload($filePaths[0]);
                  //return $data;
              }
            }
              // return "file is invalid";

          foreach($filePaths as $filePath){
              //load data from file to table
              // $data = loadCSVFromUpload($filePath);

              //delete file
              Storage::delete($filePath);
          }
      }
      return "No file to select";
      //return $filePath;
      //return $request->all();
}

function loadCSVFromUpload($fileName) {
    // ไฟล์ csv ต้องเก็บไว้ที่ storage/csv
    $fileName = storage_path('app/' . $fileName);

    // check ก่อนว่าไฟล์นี้มีจริงและอ่านได้ด้วย ถ้าไม่ได้ก็เลิก
    if(!file_exists($fileName) || !is_readable($fileName))
        return FALSE;
    else {
        $header = NULL; // คือ headrow เก็บ ชื่อ filed นั่นเอง
        $data = array(); // เอาไว้เก็บข้อมูลจากไฟล์
        $count = 0;

        // เช็คก่อนว่า เปิดอ่านได้ไหม ส่วน 'r' = read only
        if (($handle = fopen($fileName, 'r')) !== FALSE){
            // วนลูปตามจำนวณ row ที่ได้จาก fgetcsv ส่วน 3000 คือค่าสูงสุดของจำนวณ chars ใน 1 row
            while (($row = fgetcsv($handle, 3000, ",")) !== FALSE){
                if(!$header) // ถ้า $header ยังว่างอยู่
                    $header = $row; // ดังนั้น $header = row แรก
                else
                    // $row ต่อๆมาก็จะเป็น data จึงให้ combine กับ $header เป็น associate array แล้วใส่ใน $data
                    $data[] = array_combine($header, $row);
            }
        }
        fclose($handle); // ปิดไฟล์
        return $data;
    }
}
}
