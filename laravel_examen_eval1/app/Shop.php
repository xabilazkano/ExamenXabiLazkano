<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $table = 'shops';

    public function product()
    {
    	return $this->hasMany('App\Product');
    }
}
