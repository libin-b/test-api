<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $primaryKey ="s_id";
    protected $fillable = ["place_of_supply"];
}
