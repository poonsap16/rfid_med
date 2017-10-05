<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class RfidData extends Model
{
    protected $table = 'rfid_data';

    protected $fillable = [
	    	  'id',
	    	  'rfid_number',
	        'sap_id',
	        'firstname_lastname',
	        'date_stamp',
	        'time_stamp',
	        'reader_location',
	        'reader_status',
	        'reader_door'
    ];

    public static function loadData($fileName)
    {
    	$rfidRecords = loadCSV($fileName);

    	foreach ($rfidRecords as $rfidRecord) {

    		// RfidData::date_stamp=(Carbon::createFromFormat('m/d/Y', 'date_stamp')->toDateString();)

    		$rfidRecord['date_stamp'] = Carbon::createFromFormat('m/d/Y', $rfidRecord['date_stamp'])->toDateString();

    		RfidData::create($rfidRecord);
    	}


    	// return RfidData::create($rfidRecords[0]);

    	// return $rfidRecords;
    }

    public function loadData1($fileName)
    {
    	return $fileName;
    }
}
