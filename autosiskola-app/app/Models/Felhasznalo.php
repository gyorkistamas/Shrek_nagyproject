<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Felhasznalo extends Model
{
    public $timestamps = false;
    protected $table = 'felhasznalo';
    protected $primaryKey = 'taj';
    public $incrementing = false;
    protected $keyType = 'int';

    protected $fillable = [
        'id',
        'nev',
        'taj',
        'szemelyi',
        'adoszam',
        'szulido',
        'szulhely',
        'elsosegelyvizsga',
        'szemuveg',
        'roleID',
    ];

    protected $hidden = [

    ];

    protected function casts(): array
    {
        return [
            'id' => 'int',
            'nev' => 'string',
            'taj' => 'int',
            'szemelyi' => 'int',
            'adoszam' => 'int',
            'szulido' => 'datetime',
            'szulhely' => 'string',
            'elsosegelyvizsga' => 'boolean',
            'szemuveg' => 'boolean',
        ];
    }
}
