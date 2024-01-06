<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Display extends Model
{
    protected $fillable = [
        // 
    ];
    
    public function products(){
        return $this->belongsTo(Products::class);
    }
}