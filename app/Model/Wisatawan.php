<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Wisatawan extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'nama',
      'harga_tiket',
      'flag_active',
    ];

}
