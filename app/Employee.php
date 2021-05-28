<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
	use SoftDeletes;
    protected $fillable = 
    	[
    		'name',
    		'father_name',
    		'mother_name',
    		'department',
    		'province',
    		'district',
    		'address',
    		'dni',
    		'gender',
    		'birth_date',
    		'email',
    		'phone',
    		'family_burden'
    	];
    protected $dates = ['delete_at'];
}
