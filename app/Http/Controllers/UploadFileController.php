<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadFileController extends Controller
{
    public function uploadFile(Request $request){
        //เช็คว่า $request input ที่ชื่อว่า 'files' เป็นไฟล์หรือไม่
        if ($request->hasFile('files')){

          foreach($request->file('files') as $file){
            if ($file->isValid()) {
              // return "file is valid";
              $filePaths[] = $file->store('uploads');
              //
              // $data = loadCSVFromUpload($filePaths[0]);
              //return $data;
            }
          }

            foreach($filePaths as $filePath){
            //load data from file to table
              //$data = loadCSVFromUpload($filePath);
            return "yes";
            // delete file
              Storage::delete($filePath);
            }
        }
          return "no";
    }
}
