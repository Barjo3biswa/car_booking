<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $fillable = ['user_id','full_name', 'phone_no', 'pickup_location',	'no_of_per', 'pick_date', 'ret_date', 'pickup_status', 'return_status',	'status','product_id'];
}
