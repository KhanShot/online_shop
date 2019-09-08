<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'name', 'category', 'subcategory','sub_subcategory', 'product_type', 'status' ,'madefrom', 'product_brand', 'product_color' , 'product_format','product_info','images','partners_id'
    ];
}
