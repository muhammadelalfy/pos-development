<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;


	
	protected $hidden = ['employee_id'];
	public $timestamps = true;

	protected  $fillable  = [
        'name' , 'email' , 'created_at', 'updated_at' ,  'notes'
    ];


	// public function product()
	// {
	// 	return $this->hasMany(Product::class);
	// }

	public function client()
	{
		return $this->hasMany(Client::class);
	}

	public function product()
	{
		return $this->hasMany(Product::class);
	}

}
