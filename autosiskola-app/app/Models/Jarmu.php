<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jarmu extends Model
{
    protected $table = 'jarmuvek';

    protected $primaryKey = 'jarmuID';

    public $incrementing = false;
    protected $keyType = 'integer';

    public $timestamps = false;

    protected $fillable = [
        'marka',
        'evjarat',
        'valtotipus',
        'uzemanyag',
        'kategoria',
    ];
}