<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class event extends Model
{
     protected $table='event';
    protected $primaryKey='event_no';
    public $timestamps=true;
}
