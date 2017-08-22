<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class survey extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'arc_srvd_survey';
    protected $dates = ['date'];

     protected $fillable = array(
    	'date',
        'flight_num',
        'time',
        'destination',
        'aircraft_type',
        'aircraft_num',
        'flight_percentage',
        'aircraft_percentage',
        'encoded_by',
        'remarks',
        'bc_f_load',
        'ec_f_load'
    );

}
