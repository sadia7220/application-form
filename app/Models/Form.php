<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $table = "forms";
    public $timestamps = true;

    protected $fillable = [
        'name',
        'email',
        'phone'   
    ];
}
