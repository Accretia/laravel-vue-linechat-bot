<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Util\LineTrait;
use App\Http\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Response;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cache;



class SCGController extends Controller
{
    //const APIKEY = env('GOOLE_API_KEY'); //Should to be in env file

    public static function findString(Request $request)
    {
        $strings = $request->string;
        if(is_array($strings)){
            $result = array();
            foreach($strings as $index => $string){

                if (!preg_match('/[^A-Za-z]+/', $string["string"])){
                    $result[] = $string["string"];
                }
            }
            return Response::json($result);
        }
        return false;
    }

    public static function findRestaurants(){
        if(Cache::get('restaurants')){
            return Response::json(Cache::get('restaurants'));
        }
        $client = new Client();
        $response = $client->get("https://maps.googleapis.com/maps/api/place/textsearch/json?query=restaurants+in+Bangsue&key=".env('GOOGLE_API_KEY'));
        if($response->getStatusCode() == 200){
            $result = json_decode((string) $response->getBody(), true);
            Cache::put('restaurants', $result, 3600);
            return Response::json($result);
        }
    }

    public function getHook(Request $request){
        $data = json_decode(file_get_contents('php://input'));
        file_put_contents('log.txt', file_get_contents('php://input') . PHP_EOL, FILE_APPEND);
        $tokens = Message::store($data);
        if(is_array($tokens) && sizeof($tokens) > 0){
            foreach ($tokens as $token){
                LineTrait::replyMessage($token , LineTrait::getReplyMessage(rand(0,2)));
            }
        }
    }

    public function sendMessage(Request $request){

        $message = $request->message;
        $broadcast = LineTrait::sendMessageToAllUser($message);
        return Response::json($broadcast);

    }
}
