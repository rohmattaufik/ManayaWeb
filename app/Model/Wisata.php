<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'nama',
      'lokasi',
      'provinsi_id',
      'kabupaten_id',
      'kecamatan_id',
    ];

    public function Provinsis()
    {
        return $this->belongsTo('App\Model\Provinsi');
    }

    public function Kabupatens()
    {
        return $this->belongsTo('App\Model\Kabupaten');
    }

    public function Kecamatans()
    {
        return $this->belongsTo('App\Model\Kecamatans');
    }

}
