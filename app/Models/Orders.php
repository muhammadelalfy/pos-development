<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $fillable=[
        'customer_name',
        'customer_phone', 
        'customer_email', 
        'item_total', 
        'items_total_befor', 
        'items_total_after', 
        'notes', 
        'pay_method',
        'paid', 'rest' , 'emp_name' , 'user_id' , 'type','bou_number'];

public function user()
    {
        return $this->belongsTo('App\Models\User');
       
    }


}







