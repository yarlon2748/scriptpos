<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['title','sku','category_id','purchase_price','sell_price','price_type','tax_id','short_description','thumbnail'];
}
