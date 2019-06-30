<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    protected $table = 'employees';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'type', 'phone_number', 'DoB', 'address', 'salary'];

    public $hidden = ['password', 'remember_token'];
    public function hotel()
    {
        return $this->belongsto('App/Hotel', 'hotel_id', 'id');
    }
}
