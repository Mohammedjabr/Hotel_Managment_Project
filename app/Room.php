<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';
<<<<<<< HEAD
    protected $primaryKey = 'id';
    protected $fillable = ['room_number', 'type', 'price', 'book_type', 'is_booked', 'image'];
    public $timestamps = ['created_at', 'updated_at'];

    public function hotel()
    {
        return $this->hasMany('App\Hotel', 'hotel_id', 'id');
=======
    protected $primaryKey = 'room_number';
    protected $fillable = ['room_number', 'type', 'price', 'book_type', 'services', 'image','created_at','updated_at'];
    public $dates = ['created_at', 'updated_at'];

    public function hotel()
    {
        return $this->hasMany('App\Hotel', 'hotel_id', 'room_number');
>>>>>>> 47d84e8abedba70af7d5d2c1438edc573aff5cf3
    }
}
