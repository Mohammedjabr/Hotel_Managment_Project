<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD

class Employee extends Model
=======
use Illuminate\Foundation\Auth\User;

class Employee extends User
>>>>>>> 47d84e8abedba70af7d5d2c1438edc573aff5cf3
{
    protected $table = 'employees';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'phone_number', 'DoB', 'address', 'salary', 'work_days'
    ];
<<<<<<< HEAD
=======
    public $hidden = ['password' , 'remember_token'];
>>>>>>> 47d84e8abedba70af7d5d2c1438edc573aff5cf3

    public function hotel()
    {
        return $this->belongsto('App/Hotel', 'hotel_id', 'id');
    }
}
