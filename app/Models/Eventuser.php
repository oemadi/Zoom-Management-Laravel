<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Eventuser extends Model
{
    protected $fillable = [
        'id_user','id_event','status'
    ];

   protected $table = 'user_event';

}
