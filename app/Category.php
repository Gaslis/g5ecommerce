<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $table = 'categories';
    protected $guarded = [];

    public function products(){
      return $this->belongsToMany(Product::class, 'categories_products','id_categoria','id_producto');
    }
}
