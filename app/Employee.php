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
            'dni',
            'gender',
            'birth_date',
            'profession_id',
            'email',
            'phone',
            'family_burden',
            'pension',
            'license',
            'agency_id',
            'address',
            'reference',
            'department_id',
            'province_id',
            'district_id',
            'curriculum',
            'criminal_record',
            'photo'
        ];
    protected $dates = ['delete_at'];

    public function agency()
    {
        return $this->belongsTo('App\Agency');
    }
}
