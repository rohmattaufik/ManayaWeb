<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Negara extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_negara', 'jumlah_penduduk'
    ];

    public function provinsis()
    {
        return $this->hasMany('App\Model\Provinsi');
    }

}