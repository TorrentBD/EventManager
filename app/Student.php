<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name','roll','fname','bdate','email','phone','aca','token',
    ];

    public $timestamps = false;


    protected $hidden = [
         
    ];
}
