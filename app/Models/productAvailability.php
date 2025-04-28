<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class productAvailability extends Model
{
    protected $fillable = ['product_id','product_name','quantity'];
}
