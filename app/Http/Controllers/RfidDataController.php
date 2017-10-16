<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
