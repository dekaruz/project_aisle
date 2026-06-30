<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'name'        ,
        'seller_id'   ,
        'price'       ,
        'availability',
        'category_id' ,
        'description' 
    ];
}
