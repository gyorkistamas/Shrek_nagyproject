<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ora extends Model
{
    use HasFactory;

    protected $table = 'orak';

    protected $primaryKey = 'oraID';

    public $incrementing = false;

    protected $keyType = 'bigint';

    protected $fillable = [
        'datum',
        'idotartam_perc',
        'oktato',
        'diak',
    ];

    public $timestamps = false;

    public function oktato()
    {
        return $this->belongsTo(User::class, 'oktato');
    }

    public function diak()
    {
        return $this->belongsTo(User::class, 'diak');
    }
}
