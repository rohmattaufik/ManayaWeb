<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class DiskonTransaksi extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'diskon_id', 'transaksi_id'
    ];

    // public function wisata()
    // {
    //     return $this->belongsTo('App\Model\Wisata');
    // }

    // public function diskon()
    // {
    //     return $this->belongsTo('App\Model\Diskon');
    // }

}
