<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Event;

class MeetingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Event::all();
        $data = json_decode($data);
        return view('meeting.list',['data'=>$data]);
    }
}
