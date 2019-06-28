<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model
{
    use SoftDeletes;
    protected $table = 'rooms';
    protected $primaryKey = 'id';
    protected $fillable = ['room_name', 'type', 'price', 'is_booked', 'book_type', 'note', 'image'];
    public $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function hotel()
    {
        return $this->hasOne('App\Hotel', 'hotel_id', 'id');
    }

    public function reservation()
    {
        return $this->hasOne('App\Reservation', 'reservation_id', 'id');
    }
}
