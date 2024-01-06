<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
        protected $table = 'products';
        protected $fillable = 
        ['name','stock','image','price','discount_percentage','price_after_discount'];

        public function category(){
            return $this->belongsTo(Category::class);
        }
}
