<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table = 'products';
    protected $guarded = [];

    // public function categories(){
    //   return $this->belongsToMany(Category::class, 'categories_products', 'id_producto','id_categoria');
    // }

    public function categories(){
      return $this->belongsTo(Category::class,'id');
    }

    public function carts()
    {
      return $this->belongsToMany(Cart::class)->withPivot('cantidad', 'precio_unitario');
    }
}
