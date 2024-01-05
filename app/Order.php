<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
     
        'status', 'customer_detail', 'product_id', 'category_id'];
}
