<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'phone_number', 'DoB', 'address', 'salary',
        'work_hours', 'work_days', 'from', 'to'
    ];

    public function hotel()
    {
        return $this->belongsto('App/Hotel', 'hotel_id', 'id');
    }
}
