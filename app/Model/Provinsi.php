<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_provinsi', 'jumlah_penduduk'
    ];

    public function kabupatens()
    {
        return $this->hasMany('App\Model\Kabupaten');
    }

}