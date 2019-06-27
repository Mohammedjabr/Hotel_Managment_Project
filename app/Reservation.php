<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservations';
    protected $primaryKey = 'id';
    protected $fillable = ['customer_name', 'customer_phone_number', 'number_of_people', 'room_id', 'date_check_in', 'date_check_out'];
    public $timestamps = ['created_at', 'updated_at'];

    public function room()
    {
        return $this->belongsto('App\Room', 'room_id', 'id');
    }
}
