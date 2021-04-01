<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    /**
     * 与模型关联的表名
     * 默认
     * 可指定
     * @var string
     */
    protected $table = 'rooms';
    protected $fillable = [
        'room_sn',
        'price',
        'room_type',
        'room_capacity',
        'room_status',
        'room_description',
        'room_image_url',
    ];


    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
