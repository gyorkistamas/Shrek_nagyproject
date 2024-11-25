<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'bejelentkezes';
    protected $primaryKey = 'felhasznalo';
    public $incrementing = false;
    protected $keyType = 'int';

    protected $fillable = [
        'felhasznalo',
        'email',
        'jelszo',
    ];

    protected $hidden = [
        'jelszo',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'jelszo' => 'hashed',
        ];
    }
}
