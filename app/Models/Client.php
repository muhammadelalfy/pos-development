<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models;
class Client extends Model {
	use HasFactory;
	protected $table = 'client';
	public $timestamps = true;
	protected  $fillable  = [
        'name' , 'phone', 'email' , 'created_at', 'updated_at' , 'paid' , 'method_pay' , 'rest' , 'employee_id'
    ];



	
		public function employee()
		{
			return $this->belongsTo(Employee::class );
		}
	
		public function product()
		{
			return $this->hasMany(Product::class);
		}
	

}

