<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $table = 'users';
    protected $fillable = [
        'name',
        'email',
        'telefono',
        'password',
        'estado'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $dates = [
        'create_ad',
        'update_at'
    ];
}
