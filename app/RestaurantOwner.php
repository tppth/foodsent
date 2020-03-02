<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RestaurantOwner extends Model
{
    //
    protected $fillable = ['name', 'email', 'password', 'phone', 'address'];
}
