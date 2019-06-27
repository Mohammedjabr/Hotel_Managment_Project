<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Employee extends User
{
    protected $table = 'employees';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name','type','phone_number', 'DoB', 'address', 'salary', 'work_days'
    ];
    public $hidden = ['password' , 'remember_token'];

    public function hotel()
    {
        return $this->belongsto('App/Hotel', 'hotel_id', 'id');
    }
}
