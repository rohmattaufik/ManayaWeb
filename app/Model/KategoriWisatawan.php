<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class KategoriWisatawans extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_kategori', 'is_active'
    ];

}
