<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'mobile',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
//        'password',
//        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    /**
     * @var mixed|string
     */
    private $updated_at;
    /**
     * @var mixed|string
     */
    private $created_at;
    /**
     * @var mixed|string
     */
    private $email_verified_at;
    /**
     * @var mixed|string
     */
    private $password;
    /**
     * @var mixed
     */
    private $email;
    /**
     * @var mixed
     */
    private $mobile;
    /**
     * @var mixed
     */
    private $name;

}
