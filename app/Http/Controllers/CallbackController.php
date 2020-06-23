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


class CallbackController extends Controller
{
    //tes
    public function index()
    {
       $client = new Client(['base_uri' => 'https://zoom.us']);
       $response = $client->request('POST', '/oauth/token', [
        "headers" => [
            "Authorization" => "Basic ". base64_encode(env('CLIENT_ID_ZOOM').':'.env('CLIENT_SECRET_ZOOM'))
        ],
        'form_params' => [
            "grant_type" => "authorization_code",
            "code" => $_GET['code'],
            "redirect_uri" => env('REDIRECT_URL_OAUTH_ZOOM')
        ],
    ]);
//Redirect_URL_OAut_zoom
    $token = json_decode($response->getBody()->getContents(), true);

    //$user = new Token;
   // $user->access_token = json_encode($token);
   // $user->save();
  // $user = new Token;
    $id=1;
    $user = Token::find($id);
    $user->access_token = json_encode($token);
    $user->save();

    // Token::where('id', 1)
    //       ->update(['access_token' => json_encode($token)]);

    //
    }

    public function createMeting(request $request) {

        return view('meeting.add');

    }

    public function storeMeeting(request $request)
    {

    $topic = $request->topic;
    $type = 2;
    // $start_time =$request->start_time;
    $tgl =$request->tgl;
    $jam =$request->jam;

    $start_date_tgl = explode('/',$request->tgl);
    $bln = $start_date_tgl[0];
    $tgl = $start_date_tgl[1];
    $thn = $start_date_tgl[2];
    $startt = $thn.'-'.$tgl.'-'.$bln;

     $startj = $jam.':'.'00';

    // $start_time1 = substr($start_time,0,10);
    // $start_time2 = substr($start_time,11,8);
    $start_time1_ina = $startt.' '.$startj;
    $start_time1_usa = $startt.'T'.$startj;

    $duration = $request->duration;
    $password = $request->password;


    $client = new Client(['base_uri' => 'https://api.zoom.us']);
    $result = DB::table('token')->select('access_token')->first();
    $arr_token = json_decode($result->access_token);
    $accessToken = $arr_token->access_token;

    try {
        $response = $client->request('POST', '/v2/users/me/meetings', [
            "headers" => [
                "Authorization" => "Bearer $accessToken"
            ],
            'json' => [
                "topic" => $topic,
                "type" => $type,
                "start_time" => $start_time1_usa,
                "duration" => $duration, // 30 mins
                "password" => $password
            ],
        ]);

        $data = json_decode($response->getBody());

        $user = new Event;

        $arr1 = explode('/',$data->join_url);
        $ar1 = $arr1[4];
        $arr2 = explode('?',$ar1);
        $ar2 = $arr2[0];
        $id_meeting= $ar2;

        $user->url_event = $data->join_url;
        $user->deskripsi = $data->topic;
        $user->durasi = $data->duration;
        $user->mulai = $start_time1_ina;
        $user->password = $data->password;
        $user->id_meeting = $id_meeting;
        $user->status = 1;
        $user->save();
        return redirect('list/meeting');
        // echo "Join URL: ". $data->join_url;
        // echo "<br>";
        // echo "Meeting Password: ". $data->password;

    } catch(Exception $e) {
        if( 401 == $e->getCode() ) {
            $refresh_token = $db->get_refersh_token();

            $client = new GuzzleHttp\Client(['base_uri' => 'https://zoom.us']);
            $response = $client->request('POST', '/oauth/token', [
                "headers" => [
                    "Authorization" => "Basic ". base64_encode(env('CLIENT_ID_ZOOM').':'.env('CLIENT_SECRET_ZOOM'))
                ],
                'form_params' => [
                    "grant_type" => "refresh_token",
                    "refresh_token" => $refresh_token
                ],
            ]);

        } else {
            echo $e->getMessage();
        }
    }
}


    public function getOauth(request $request)
    {
        return view('clientapi.oauth');
    }
}
