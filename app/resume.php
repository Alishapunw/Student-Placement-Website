<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class resume extends Model
{
    protected $table='resume';
    protected $primaryKey='email';
    public $timestamps=true;
}
?>
