<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'quantity', 'cost-price', 'sell-price', 'image'];

}
