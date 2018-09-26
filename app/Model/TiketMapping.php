<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class TiketMapping extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'wisata_id', 'harga_tiket', 'wisatawan_id', 'jumlah_tiket'
    ];

    public function wisata()
    {
        return $this->belongsTo('App\Model\Wisata');
    }

    public function wisatawan()
    {
        return $this->belongsTo('App\Model\Wisatawan');
    }

}