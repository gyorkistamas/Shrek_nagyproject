namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vizsga extends Model
{
    // Specify the table name
    protected $table = 'vizsga';

    // Define the primary key
    protected $primaryKey = 'vizsgaID';

    // Set primary key type and auto-increment behavior
    public $incrementing = false;
    protected $keyType = 'integer';

    // Disable timestamps
    public $timestamps = false;

    // Fillable fields for mass assignment
    protected $fillable = [
        'datum',
        'sikeresseg',
        'vizsgazo',
        'oktato',
        'vizsgaztato',
    ];

    // Relationships
    public function vizsgazo()
    {
        return $this->belongsTo(Vizsgazo::class, 'vizsgazo'); // Assuming you have a Vizsgazo model
    }

    public function oktato()
    {
        return $this->belongsTo(Oktato::class, 'oktato'); // Assuming you have an Oktato model
    }

    public function vizsgaztato()
    {
        return $this->belongsTo(Vizsgaztato::class, 'vizsgaztato'); // Assuming you have a Vizsgaztato model
    }
}
