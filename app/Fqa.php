<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Fqa extends Model 
{
	use Notifiable;


    protected $fillable = [
        'event_id','event_title','fqa','user_id',
    ];

    public $timestamps = false;


    protected $hidden = [
         
    ];
}
