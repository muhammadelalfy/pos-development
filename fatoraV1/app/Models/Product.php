<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    
    protected $fillable = [
     'purshase_id' , 'including_vat',
     'tax_amount' , 'tax_rate' , 'discount' , 'quantity' , 
     'price', 'details_goods','taxable_amount',
    ];
}
