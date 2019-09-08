<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model{
	protected $table = 'subcategory';
    protected $fillable = [
        'name', 'add', 'category_id',
    ];
}
