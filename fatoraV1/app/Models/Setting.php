<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
    'name',
    'email',
    'phone',
    'address',
    'terms',
    'image',
    'commercial',
    'tax_num',
    'build_no',
    'street', 
    'neboor', 
    'city', 
    'country',
    'plus_number_address',
    'postal_code',
    ];
}
