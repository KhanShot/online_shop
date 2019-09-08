<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model{
    protected $table = 'cart';
    protected $fillable = [
    	'product_id', 'user_id', 'qty'
    ];
}
