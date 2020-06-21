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
    public function add()
    {

        $data = Event::all();

        $data = json_decode($data);

        return view('event.add',['data'=>$data]);

    }

 
    public function index()
    {
        
        $data=DB::table('events')
        ->join('user_event','events.id','user_event.id_event')
        ->select('events.id_meeting','events.deskripsi','events.mulai','events.durasi','user_event.status')
        ->get();

        $data = json_decode($data);
        return view('event.list',['data'=>$data]);
    }
    public function save(request $request)
    {
        $user = auth()->user();
        $id_event = $request->id_event;



        $join_event = new Eventuser;
        $join_event->id_user =  $user->id;
        $join_event->id_event = $id_event;
        $join_event->status = 1;
        $join_event->save();
        return redirect('join/event');
    }

}
