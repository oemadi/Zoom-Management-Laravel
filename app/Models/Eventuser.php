<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Support\Facades\Input;
use Auth;

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
        $id_user = Auth::user()->id;

        $id_otority = Auth()->user();
        $id_otority = $id_otority->otority;

        $start  = $start.'-'.'00 '.'00:00:00';
        $end    = $end.'-'.'12 '.'23:59:59';

        $tgl_str_new = date ("Y-m-d").' '.'00:00:00';
        $tgl_end_new = date ("Y-m-d").' '.'23:59:59';

        $offset ='';
        if(isset($page) == false){ $offset =0; }else{ $offset =$page-1; }
        if( $offset != '0'){ $offset = $lmt*$offset;}

        if ($id_otority == 1) {

          if ($start == "" ||  $end == "" )
          {
          return DB::table('events')
                     ->select('events.id','events.password','events.url_event','events.id_meeting','events.deskripsi','events.mulai','events.durasi','user_event.status')
                     ->join('user_event','events.id','user_event.id_event')
                    // ->whereBetween('user_event.created_at', [$tgl_str_new,$tgl_end_new])
                    ->offset($offset)
                    ->limit($lmt)
                    ->get();

            }else{
                      return DB::table('events')
                     ->select('events.id','events.password','events.url_event','events.id_meeting','events.deskripsi','events.mulai','events.durasi','user_event.status')
                     ->join('user_event','events.id','user_event.id_event')
                    ->whereBetween('user_event.created_at', [$start,$end])
                    ->offset($offset)
                    ->limit($lmt)
                    ->get();
            }
        }if($id_otority == 0) {

          if ($start == "" ||  $end == "" )
          {
          return DB::table('events')
                     ->select('events.id','events.password','events.url_event','events.id_meeting','events.deskripsi','events.mulai','events.durasi','user_event.status')
                     ->join('user_event','events.id','user_event.id_event')
                     ->join('users','user_event.id_user','users.id')
                    ->where('user_event.id_user',$id_user)
                    ->where('users.otority',$id_otority)
                    ->whereBetween('user_event.created_at', [$tgl_str_new,$tgl_end_new])
                    ->offset($offset)
                    ->limit($lmt)
                    ->get();

            }else{
                      return DB::table('events')
                     ->select('events.id','events.password','events.url_event','events.id_meeting','events.deskripsi','events.mulai','events.durasi','user_event.status')
                     ->join('user_event','events.id','user_event.id_event')
                     ->join('users','user_event.id_user','users.id')
                    ->where('user_event.id_user',$id_user)
                    ->where('users.otority',$id_otority)
                    ->whereBetween('user_event.created_at', [$start,$end])
                    ->offset($offset)
                    ->limit($lmt)
                    ->get();
            }
        }


    }
    public function scopeGetSerifikat($id)
    {
         $data = DB::table('events')
         ->select('events.id','events.password','events.url_event','events.id_meeting','events.deskripsi','events.mulai','events.durasi','user_event.status')
         ->leftjoin('user_event','events.id','user_event.id_event')
         ->where('user_event.id',6)
         // ->where('user_event.id',$id)
         ->first();
         return $data;

     }

}
//      public function scopeGetDataId($query,$lmt,$page,$start,$end)
//     {
//         $id_user = Auth::user()->id;

//         $start  = $start.'-'.'00 '.'00:00:00';
//         $end    = $end.'-'.'12 '.'23:59:59';

//         $tgl_str_new = date ("Y-m-d").' '.'00:00:00';
//         $tgl_end_new = date ("Y-m-d").' '.'23:59:59';

//         $offset ='';
//         if(isset($page) == false){ $offset =0; }else{ $offset =$page-1; }
//         if( $offset != '0'){ $offset = $lmt*$offset;}

//     if ($start == "" ||  $end == "" )
//       {

//       return DB::table('events')
//                  ->select('events.id','events.password','events.url_event','events.id_meeting','events.deskripsi','events.mulai','events.durasi','user_event.status')
//                  ->join('user_event','events.id','user_event.id_event')
//                 ->whereBetween('events.created_at', [$tgl_str_new,$tgl_end_new])
//                 ->where('user_event.id_user',$id_user)
//                 ->offset($offset)
//                 ->limit($lmt)
//                 ->get();

//         }else{
//                   return DB::table('events')
//                  ->select('events.id','events.password','events.url_event','events.id_meeting','events.deskripsi','events.mulai','events.durasi','user_event.status')
//                  ->join('user_event','events.id','user_event.id_event')
//                 ->where('user_event.id_user',$id_user)
//                 ->whereBetween('events.created_at', [$start,$end])
//                 ->offset($offset)
//                 ->limit($lmt)
//                 ->get();
//         }
//     }

// }

