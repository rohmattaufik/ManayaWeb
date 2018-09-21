<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class DiskonFor extends Model
{
    /**
     * The attributes that are mass assignable.
     * Note : for_type => 0 for wisatawan, 1 for Kategori Wisatawan
     * @var array
     */
    protected $fillable = [
        'diskon_id', 'for_type', 'for_id'
    ];

}
