<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    //
    protected $fillable = ['name', 'email', 'phone', 'address', 'workinghours', 'city_id'];
}
