<?php

use Illuminate\Support\Facades\DB;
use App\Models\Sertifikat;
use Carbon\Carbon;
/**
 * Return sizes readable by humans
 *
 * @return human size readable
 */


if (!function_exists('human_file_size')) {
    /**
     * Returns a human readable file size
     *
     * @param integer $bytes
     * Bytes contains the size of the bytes to convert
     *
     * @param integer $decimals
     * Number of decimal places to be returned
     *
     * @return string a string in human readable format
     *
     * */
    function human_file_size($bytes, $decimals = 2)
    {
        $sz = 'BKMGTPE';
        $factor = (int)floor((strlen($bytes) - 1) / 3);
        return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . $sz[$factor];

    }
}

if (!function_exists('in_arrayi')) {

    /**
     * Checks if a value exists in an array in a case-insensitive manner
     *
     * @param mixed $needle
     * The searched value
     *
     * @param $haystack
     * The array
     *
     * @param bool $strict [optional]
     * If set to true type of needle will also be matched
     *
     * @return bool true if needle is found in the array,
     * false otherwise
     */
    function in_arrayi($needle, $haystack, $strict = false)
    {
        return in_array(strtolower($needle), array_map('strtolower', $haystack), $strict);
    }
}


if (!function_exists('save_sertifikat')) {
    function save_sertifikat($request)
    {
        if($request->file('cover')) {
            $file = $request->file('cover');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak;
            $request->file('cover')->move("public/images/sertifikat", $fileName);
            $cover = $fileName;
        }else {
            $cover = NULL;
        }

       $data = new Sertifikat();
       $data->title_1 = $request->title_1;
       $data->title_2 = $request->title_2;
       $data->title_3 = $request->title_3;
       $data->title_4 = $request->title_4;
       $data->title_5 = $request->title_5;
       $data->title_6 = $request->title_6;
       $data->image   = $cover;
       $data->status = 1;
       $data->save();
    }
}

if (!function_exists('update_sertifikat')) {
    function update_sertifikat($request,$id)
    {
        if($request->file('cover')) {
            $file = $request->file('cover');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak;
            $request->file('cover')->move("public/images/sertifikat", $fileName);
            $cover = $fileName;
        } else {
            $cover = NULL;
        }
          $data_update = Sertifikat::where('id',$id)->first();
          $data_update->title_1 = $request->title_1;
          $data_update->title_2 = $request->title_2;
          $data_update->title_3 = $request->title_3;
          $data_update->title_4 = $request->title_4;
          $data_update->title_5 = $request->title_5;
          $data_update->title_6 = $request->title_6;
          $data_update->image   = $cover;
          $data_update->status = 5;
          $data_update->save();
    }
}
