<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use DB;

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
    // public function index()
    // {
    //     $data = Event::all();
    //     $data = json_decode($data);
    //     return view('meeting.list',['data'=>$data]);
    // }

    public function index(Request $request)
    {
            $page = $request->page;
            $limit = $request->limit;
            $halaman = $request->halaman;
            $start= $request->start_date;
            $end= $request->end_date;

          $start='';
          if($request->start_date == null )
            { $start = date ("Y-m-d").' '.'00:00:00'; }else{
            $start_date_explode = explode('/',$request->start_date);
            $bln = $start_date_explode[0];
            $tgl = $start_date_explode[1];
            $thn = $start_date_explode[2];
            $start = $thn.'-'.$tgl.'-'.$bln;
          }

          $end='';
          if($request->end_date == null )
            { $end = date ("Y-m-d").' '.'23:59:59'; }else{
            $end_date_explode = explode('/',$request->end_date);
            $bln = $end_date_explode[0];
            $tgl = $end_date_explode[1];
            $thn = $end_date_explode[2];
            $end = $thn.'-'.$tgl.'-'.$bln;
          }

        $lmt ='';
        if(isset($request->limit) == false){ $lmt =20; }else{ $lmt =$request->limit; }

        switch ($request->halaman) {
            case "":
                    $result =Event::GetData($lmt,$request->page,$start,$end);

                    $data =  json_decode($result);
                    $data  = [
                              "view" => view('ajax.ajax_meeting',
                              compact('data', 'page','limit'))->render(),
                  ];

            break;
            case "1":
                $offset ='';
                if(isset($request->page) == false){ $offset =0; }else{ $offset =$request->page; }

                $result_total =Event::TotalRow($start,$end);

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

        return view('meeting.list');
    }


    public function getDelete($id)
    {
        $data_event = Event::all();
        $data_event = json_decode($data_event);

        $push = [];
        foreach ($data_event as $key )
        {
            if ($key->id == $id) {
                $data['id_meeting'] = $key->id_meeting;
                array_push($data, $push);
            }
        }

        $delete_api = $data['id_meeting'];
        $client = new Client(['base_uri' => 'https://api.zoom.us']);

        $result = DB::table('token')->select('access_token')->first();
        $arr_token = json_decode($result->access_token);
        $accessToken = $arr_token->access_token;

        $response = $client->request('DELETE', '/v2/meetings/'.$delete_api.'', [
            "headers" => [
                "Authorization" => "Bearer $accessToken"
            ]
        ]);

        $evn = Event::find($id);
        $evn->delete();
        return redirect('list/meeting');

    }
}
