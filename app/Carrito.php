<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    public $table = 'carritos';
    // public $table ='carts';

    protected $guarded = [];

    // public function user()
    // {
    //   return $this->belongsTo(User::class);
    // }
}
