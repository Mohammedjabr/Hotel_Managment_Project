<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';
    protected $primaryKey = 'room_number';
    protected $fillable = ['room_number', 'type', 'price', 'book_type', 'services', 'image','created_at','updated_at'];
    public $dates = ['created_at', 'updated_at'];

    public function hotel()
    {
        return $this->hasMany('App\Hotel', 'hotel_id', 'room_number');
    }
}
