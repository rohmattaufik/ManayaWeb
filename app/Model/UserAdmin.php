<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class UserAdmin extends Model
{

    protected $fillable = [
        'nama',
        'role',
      ];
}