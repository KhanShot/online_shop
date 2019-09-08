<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub_SubCategory extends Model{
	protected $table = 'sub_subcategory';
    protected $fillable = [
        'name', 'add', 'category_id', 'subcategory_id', 
    ];
}
