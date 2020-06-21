<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Support\Facades\Input;

class Eventuser extends Model
{
    protected $fillable = [
        'id_user','id_event','status'
    ];

   protected $table = 'user_event';


     public function scopeTotalRow($query,$start,$end)
    {
        $start  = $start.'-'.'00 '.'00:00:00';
        $end = $end.'-'.'12 '.'23:59:59';

        $tgl_str_new = date ("Y-m-d").' '.'00:00:00';
        $tgl_end_new = date ("Y-m-d").' '.'23:59:59';

        if ($start == ""  ||  $end == "" )
        {
           return $query
                    ->where('created_at', '>=', $tgl_str_new)
                    ->where('created_at', '<=', $tgl_end_new)
                    ->count('ID');
        }else{

            if ($start != "" && $end == "") {
                return $query
                        ->where('created_at', '>=', $start)
                        ->count('ID');
            } else if ($start == "" && $end != "") {
                return $query
                        ->where('created_at', '<=', $end)
                        ->count('ID');
            }

            return $query
                    ->where('created_at', '>=', $start)
                    ->where('created_at', '<=', $end)
                    ->count('ID');
        }
}

    public function scopeGetData($query,$lmt,$page,$start,$end)
    {
        $start  = $start.'-'.'00 '.'00:00:00';
        $end    = $end.'-'.'12 '.'23:59:59';

        $tgl_str_new = date ("Y-m-d").' '.'00:00:00';
        $tgl_end_new = date ("Y-m-d").' '.'23:59:59';

        $offset ='';
        if(isset($page) == false){ $offset =0; }else{ $offset =$page-1; }
        if( $offset != '0'){ $offset = $lmt*$offset;}

       if ($start == "" ||  $end == "" )
      {

      return DB::table('events')
                 ->select('events.id','events.password','events.url_event','events.id_meeting','events.deskripsi','events.mulai','events.durasi','user_event.status')
                 ->join('user_event','events.id','user_event.id_event')
                ->whereBetween('events.created_at', [$tgl_str_new,$tgl_end_new])
                ->offset($offset)
                ->limit($lmt)
                ->get();

        }else{
                  return DB::table('events')
                 ->select('events.id','events.password','events.url_event','events.id_meeting','events.deskripsi','events.mulai','events.durasi','user_event.status')
                 ->join('user_event','events.id','user_event.id_event')
                ->whereBetween('events.created_at', [$start,$end])
                ->offset($offset)
                ->limit($lmt)
                ->get();
        }
    }

}
        // $id_user = Auth::user()->id;
        // return DB::table('events')
        // ->select('events.id','events.password','events.url_event','events.id_meeting','events.deskripsi','events.mulai','events.durasi','user_event.status')
        // ->join('user_event','events.id','user_event.id_event')
        // ->get();
