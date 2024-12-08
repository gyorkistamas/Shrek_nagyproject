<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vizsga extends Model
{
    protected $table = 'vizsga';

    protected $primaryKey = 'vizsgaID';

    public $incrementing = false;
    protected $keyType = 'integer';

    public $timestamps = false;

    protected $fillable = [
        'datum',
        'sikeresseg',
        'vizsgazo',
        'oktato',
        'vizsgaztato',
    ];

     public function vizsgazo()
     {
         return $this->belongsTo(User::class, 'vizsgazo');
     }
 
     public function oktato()
     {
         return $this->belongsTo(User::class, 'oktato');
     }
 
     public function vizsgaztato()
     {
         return $this->belongsTo(User::class, 'vizsgaztato');
     }
}
