<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
  protected $table = 'activities';

  protected $fillable = [
    'activity_id',
    'activity_name',
    'activity_acronym',
    'time_start',
    'time_end',
    'job_id_ref',
    'person_type',
    'reader_location'
  ];
}
