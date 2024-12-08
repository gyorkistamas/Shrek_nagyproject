<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ora extends Model
{
    use HasFactory;

    protected $table = 'orak';

    protected $fillable = [
        'datum',
        'idotartam_perc',
        'oktato',
        'diak',
    ];

    protected $primaryKey = 'oraID';

    public $incrementing = true;

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
