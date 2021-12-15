<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purshase extends Model
{
    use HasFactory;
    
    protected $fillable = [
     'date_of_supply' , 'name' , 'building_no' , 
     'street', 'district' , 'city',
     'country' , 'plus_number_address' , 'postal_code' , 
     'vat_no' , 'other_id_client', 'other_id',
     'total_without_tax','discount_total', 'excluding_vat',
     'total_vat',  'total_amount_due', 'type','bou_number','user_id'
    ];

   public function user()
    {
        return $this->belongsTo('App\Models\User');
       
    }


}
