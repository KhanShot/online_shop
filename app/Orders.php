<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model{
    protected $table = "orders";
    protected $fillable = [
    	'user_id','product_id','partners_id'
    ];
}
