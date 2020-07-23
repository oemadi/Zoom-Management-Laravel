<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Auth;
use DB;
use Illuminate\Support\Facades\Redirect;
use Alert;
use Session;

class CekValidasiController extends Controller
{
    public function index(request $request, $id)
    {
        check_vlidasi($request,$id);
        session()->flash('succes','Silahkan cek Email Anda');
        return redirect('login');
    }
<<<<<<< HEAD
=======

    public function ceklogin(request $request)
    {
        return redirect('register');

    }
>>>>>>> 81e2a8088923e12142692814006d03869ed27ea5
}
