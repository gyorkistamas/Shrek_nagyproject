namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Befizetes extends Model
{
    protected $table = 'befizetesek';

    protected $primaryKey = 'befizetesID';

    public $incrementing = false;

    protected $keyType = 'integer';

    public $timestamps = false;

    protected $fillable = [
        'befizetesID',
        'oraID',
        'vizsgaID',
        'jarmu',
        'osszeg',
        'datum',
    ];
    public function ora()
    {
        return $this->belongsTo(Ora::class, 'oraID');
    }

    public function vizsga()
    {
        return $this->belongsTo(Vizsga::class, 'vizsgaID');
    }

    public function jarmu()
    {
        return $this->belongsTo(Jarmu::class, 'jarmu');
    }
}
