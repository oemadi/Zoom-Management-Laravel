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
}
