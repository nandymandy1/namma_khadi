<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    	'product_name',
    	'description',
    	'category',
    	'image_a',
    	'image_b',
    	'image_c',
    ];
    
}
