<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'deskripsi','mulai','durasi','status','id_meeting'
    ];

   protected $table = 'events';

}
