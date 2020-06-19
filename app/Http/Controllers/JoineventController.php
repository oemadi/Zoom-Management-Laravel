<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Auth;
use DB;
use App\ApiClient;
use App\Models\Token;
use App\Models\Event;
use App\Models\Eventuser;


class JoineventController extends Controller
{
    public function index()
    {

        $data = Event::all();

        $data = json_decode($data);

        return view('event.add',['data'=>$data]);

    }

    public function storeEvent(request $request)
    {
        $user = auth()->user();
        $id_event = $request->id_event;



        $join_event = new Eventuser;
        $join_event->id_user =  $user->id;
        $join_event->id_event = $id_event;
        $join_event->status = 1;
        $join_event->save();
    }


}
