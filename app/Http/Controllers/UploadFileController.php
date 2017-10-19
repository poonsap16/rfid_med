<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadFileController extends Controller
{
    public function uploadFile(Request $request){
        //เช็คว่า $request input ที่ชื่อว่า 'files' เป็นไฟล์หรือไม่
        if ($request->hasFile('files')){
          return "yes";
        }
          return "no";
    }
}
