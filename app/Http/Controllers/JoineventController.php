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

	 public function __construct()
    {
        $this->middleware('auth');
    }
    public function add()
    {

        $data = Event::all();

        $data = json_decode($data);

        return view('event.add',['data'=>$data]);

    }


    // public function index()
    // {
    //     $id_user = Auth::user()->id;
    //     $data=DB::table('events')
    //     ->join('user_event','events.id','user_event.id_event')
    //     ->select('events.id','events.password','events.url_event','events.id_meeting','events.deskripsi','events.mulai','events.durasi','user_event.status')
    //     ->where('user_event.id_user',$id_user)
    //     ->get();

    //     $data = json_decode($data);
    //     return view('event.list',['data'=>$data]);
    // }
     // public function download(request $request ,$id)
     public function download()
     {

		// $result = Eventuser::GetSerifikat($id);
  //       $result = json_encode($result);
        	 //$nama = 'Abdul Aziz,S.Kom';
		 $event = 'Pelatihan Komputer Tingkat Profesional';
		 $pt = 'PT. Automata info Nusantara';
		 /*

         $data=DB::table('events')
         ->join('user_event','events.id','user_event.id_event')
         ->select('events.id','events.password','events.url_event','events.id_meeting','events.deskripsi','events.mulai','events.durasi','user_event.status')
         ->where('user_event.id_user',$id_user)
         ->get();
 */
         $nama = Auth::user()->name;

         return view('report.sert',compact('nama','event','pt'));
     }

    public function index(Request $request)
    {
      $page = $request->page;
      $limit = $request->limit;
      $halaman = $request->halaman;
      $start= $request->start_date;
      $end= $request->end_date;

      $start='';
      if($request->start_date == null ){
        $start = date ("Y-m-d").' '.'00:00:00'; }else{
        $start_date_explode = explode('/',$request->start_date);
        $bln = $start_date_explode[0];
        $tgl = $start_date_explode[1];
        $thn = $start_date_explode[2];
        $start = $thn.'-'.$tgl.'-'.$bln;
        }

     $end='';
     if($request->end_date == null ){
       $end = date ("Y-m-d").' '.'23:59:59'; }else{
       $end_date_explode = explode('/',$request->end_date);
       $bln = $end_date_explode[0];
       $tgl = $end_date_explode[1];
       $thn = $end_date_explode[2];
       $end = $thn.'-'.$tgl.'-'.$bln;
       }

        $lmt ='';
        if(isset($request->limit) == false){ $lmt =20; }else{ $lmt =$request->limit; }

        switch ($request->halaman)
        {
            case "":
                    $result =Eventuser::GetData($lmt,$request->page,$start,$end);
                    $data =  json_decode($result);
                    $data  = [
                              "view" => view('ajax.ajax_event',
                              compact('data', 'page','limit'))->render(),
                             ];
            break;
            case "1":
                $offset ='';
                if(isset($request->page) == false){ $offset =0; }else{ $offset =$request->page; }
                $result_total =Eventuser::TotalRow($start,$end);
                $result_total = json_decode(json_encode($result_total));
                $pages = $result_total/$lmt;
                $explode = explode(".", $pages);
                $pages ='';
                if(count($explode) > 1){
                    $pages =json_encode($explode[0]+1);
                }else{
                    $pages =$explode[0];
                }

              $data = [

                    'opt' => array('total' => $result_total ,'limit' =>$lmt,'page' =>$offset,'pages' =>  $pages ),
                ];

                $data = json_decode(json_encode($data));

                $opt = $data->opt;

                 $data  = [
                              "view2" => view('ajax.ajax_pagination',
                              compact('data', 'opt', 'page','halaman','limit'))->render(),
                         ];
              break;
        }
              if ($request->ajax()) {
              return response()->json($data);
              }

        return view('event.list');
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
