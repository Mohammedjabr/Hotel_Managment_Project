<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use SoftDeletes;
    protected $table = 'reservations';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'phone_number', 'email','adults','children','type', 'date_check_in', 'date_check_out'];
    public $timestamps = ['created_at', 'updated_at'];

    public function room()
    {
        return $this->belongsto('App\Room', 'room_id', 'id');
    }
}
