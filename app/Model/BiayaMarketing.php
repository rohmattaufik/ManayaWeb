<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class BiayaMarketing extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'alokasi_dana', 'waktu_penggunaan', 'jumlah_dana'
    ];
}
