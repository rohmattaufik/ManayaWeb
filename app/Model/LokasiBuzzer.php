<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class LokasiBuzzer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_kecamatan', 'kabupaten_id'
    ];

}
