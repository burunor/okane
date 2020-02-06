<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description','barcode', 'quantity', 'cost_price', 'sell_price', 'image'];

}
