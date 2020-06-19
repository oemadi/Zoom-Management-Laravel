<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Auth;
use DB;
use App\ApiClient;
use App\Models\Token;


class CallbackController extends Controller
{
    //tes
    public function index()
    {
       $client = new Client(['base_uri' => 'https://zoom.us']);
       $response = $client->request('POST', '/oauth/token', [
        "headers" => [
            "Authorization" => "Basic ". base64_encode(env('client_id_zoom').':'.env('client_secret_zoom'))
        ],
        'form_params' => [
            "grant_type" => "authorization_code",
            "code" => $_GET['code'],
            "redirect_uri" => env('Redirect_URL_OAut_zoom')
        ],
    ]);

    $token = json_decode($response->getBody()->getContents(), true);

    $user = new Token;
    $user->access_token = json_encode($token);
    $user->save();

    }

    public function createMeting(request $request) {

        return view('meeting.add');

    }

    public function storeMeeting(request $request)
    {

    $topic = "topik aza";
    $type = 2;
    $start_time = "2020-06-19T08:30:00";
    $duration = 30;
    $password = 123456;


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
                "start_time" => $start_time,
                "duration" => $duration, // 30 mins
                "password" => $password
            ],
        ]);

        $data = json_decode($response->getBody());
        echo "Join URL: ". $data->join_url;
        echo "<br>";
        echo "Meeting Password: ". $data->password;

    } catch(Exception $e) {
        if( 401 == $e->getCode() ) {
            $refresh_token = $db->get_refersh_token();

            $client = new GuzzleHttp\Client(['base_uri' => 'https://zoom.us']);
            $response = $client->request('POST', '/oauth/token', [
                "headers" => [
                    "Authorization" => "Basic ". base64_encode(env('client_id_zoom').':'.env('client_secret_zoom'))
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
