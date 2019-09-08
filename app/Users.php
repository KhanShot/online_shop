<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model{
    protected $fillable = [
        'name', 'surname', 'email', 'phone', 'verified', 'market', 'tin' , 'is_partner','password',
    ];
    
}
