<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Support\Facades\Input;
use Auth;

class Sertifikat extends Model
{
    protected $fillable = [
        'id','title_1','title_2','title_3','title_4','title_5','title_6','image','status'
    ];

   protected $table = 'sertifikats';

    public function scopeTotalRow($query,$start,$end)
    {
        $start  = $start.'-'.'00 '.'00:00:00';
        $end = $end.'-'.'12 '.'23:59:59';

        $tgl_str_new = date ("Y-m-d").' '.'00:00:00';
        $tgl_end_new = date ("Y-m-d").' '.'23:59:59';

        if ($start == ""  ||  $end == "" )
        {
           return $query
                    // ->where('created_at', '>=', $tgl_str_new)
                    // ->where('created_at', '<=', $tgl_end_new)
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
        return $query
             ->selectRaw(DB::raw('id,title_1,title_2,title_3,title_4,title_5,title_6,image,status'))
                 ->whereBetween('created_at', [$tgl_str_new,$tgl_end_new])
                ->offset($offset)
                ->limit($lmt)
                ->get();

        }else{
            return $query
             ->selectRaw(DB::raw('id,title_1,title_2,title_3,title_4,title_5,title_6,image,status'))
                ->whereBetween('created_at', [$start,$end])
                ->offset($offset)
                ->limit($lmt)
                ->get();
        }
    }
 }

