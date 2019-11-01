<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model {
    protected $table = 'appointments';
    protected $fillable = [
        'name',
        'descr',
        'timeslot'
    ];
}