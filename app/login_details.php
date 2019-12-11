<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class login_details extends Model
{
     protected $table='login_details';
    protected $primaryKey='master_id';
    public $timestamps=true;
}
