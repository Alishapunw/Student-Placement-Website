<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company_details extends Model
{
     protected $table='company_details';
    protected $primaryKey='c_id';
    public $timestamps=true;
}
