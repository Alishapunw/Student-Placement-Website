<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student_details extends Model
{
    protected $table='student_details';
    protected $primaryKey='stud_id';
    public $timestamps=true;
}
