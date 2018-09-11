<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_kabupaten', 'provinsi_id', 'jumlah_penduduk'
    ];

    
}