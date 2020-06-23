<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use DB;
use Illuminate\Support\Facades\Input;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','nik','jabatan','instansi',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    /**
     * Get all the associated products
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }


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
        return $query
             ->selectRaw(DB::raw('name, email,nik,jabatan,instansi,created_at '))
                 ->whereBetween('created_at', [$tgl_str_new,$tgl_end_new])
                ->offset($offset)
                ->limit($lmt)
                ->get();

        }else{
            return $query
             ->selectRaw(DB::raw('name, email,nik,jabatan,instansi,created_at'))
                ->whereBetween('created_at', [$start,$end])
                ->offset($offset)
                ->limit($lmt)
                ->get();
        }
    }

}
