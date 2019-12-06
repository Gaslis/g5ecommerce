<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    // public $table = 'carrito';
    public $table ='cart_product';
    protected $guarded = [];
}
