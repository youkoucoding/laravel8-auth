<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id',
        'user_id',
        'check_in',
        'check_out',
        'order_status',
        'meal_option',
        'customer_num',
        'customer_comment',
    ];


    /*
     * get room information
     *
     */
    public function room()
    {
        return $this->hasMany(Room::class, room_id);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
