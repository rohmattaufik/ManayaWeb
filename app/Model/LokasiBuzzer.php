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
        'buzzer_id', 'wisata_id', 'waktu_mulai', 'waktu_selesai', 'poin'
    ];

}
