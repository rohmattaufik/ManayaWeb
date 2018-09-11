<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Buzzer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_buzzer', 'phone'
    ];

    public function lokasiBuzzers()
    {
        return $this->hasMany('App\Model\LokasiBuzzer');
    }
}
