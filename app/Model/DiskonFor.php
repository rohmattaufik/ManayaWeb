<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class DiskonFor extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_diskon', 'tanggal_mulai', 'tanggal_selesai', 'jumlah_persen'
    ];

    public function diskonFors()
    {
        return $this->hasMany('App\Model\DiskonFor');
    }
}
