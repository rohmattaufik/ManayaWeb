<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class DiskonMapping extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'wisata_id', 'diskon_id'
    ];

    public function wisata()
    {
        return $this->belongsTo('App\Model\Wisata');
    }

    public function diskon()
    {
        return $this->belongsTo('App\Model\Diskon');
    }

}