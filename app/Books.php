<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $guarded=array('id');

    public $timestamps=false;

    public static $rules = array(
        'name' => 'required',
        'other' => 'required',
        'price' => 'required',
    );
}
