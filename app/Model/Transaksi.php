<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'user_id',
      'kategori_wisatawan_id',
      'asal_provinsi',
      'asal_kabupaten',
      'asal_negara',
      'total_harga',
      'is_lunas',
      'total_diskon',
      'harga_akhir',
      'jumlah_bayar',
      'email_wisatawan',
      'wisata_id'
    ];

    public function KategoriWisatawans()
    {
        return $this->belongsTo('App\Model\KategoriWisatawan');
    }

}
