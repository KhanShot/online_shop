<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model{
    protected $table = "wishlist";
    protected $fillable = [
    	'product_id','user_id'
    ];
}
