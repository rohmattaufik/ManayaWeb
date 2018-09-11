<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class TransaksiDetail extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'transaksi_id',
      'wisatawan_id',
      'jumlah_wisatawan',
      'harga_satuan',
      'total_harga',
    ];

    public function Wisatawans()
    {
        return $this->belongsTo('App\Model\Wisatawan');
    }

    public function Transaksis()
    {
        return $this->belongsTo('App\Model\Transaksi');
    }

}
