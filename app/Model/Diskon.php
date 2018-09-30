<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Diskon extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_diskon', 'flag_active', 'jumlah_persen'
    ];

    public function diskonFors()
    {
        return $this->hasMany('App\Model\DiskonFor');
    }

    public function diskonMappings()
    {
        return $this->hasMany('App\Model\DiskonMapping');
    }
}
