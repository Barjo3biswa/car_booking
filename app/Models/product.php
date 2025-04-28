<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model

{
    // use HasFactory;
    protected $fillable = ['product_name','category_id','product_description','price','image'];
    // use softdeletes;
}


