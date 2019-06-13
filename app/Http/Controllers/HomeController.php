<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                // $this->middleware('auth');
         $client = new Client(); 
         //https://www.metaweather.com/api/location/search/?query=san
        $res = $client->request('GET', 'https://www.metaweather.com/api/location/1225448/', [  'verify' => false
        ]);
        //          echo $res->getStatusCode();
        // // "200"
        //     echo $res->getHeader('content-type')[0];
        // // 'application/json; charset=utf8'
        //     echo $res->getBody();


$obj = json_decode((string) $res->getBody());
$consolidated_weather = $obj->consolidated_weather;
// foreach ($obj as $key => $value) {
//     // echo $value->title ; 

// }
// print_r($consolidated_weather);
// echo "<hr>";

        return view('test.index',[
            'data' =>  $obj,
           'hi' => $consolidated_weather
        ]);
        
    }
}
