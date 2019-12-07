<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $table = 'categories';
    protected $guarded = [];

    public function products(){
      return $this->hasMany(Product::class, 'categoria_id');
    }
}
