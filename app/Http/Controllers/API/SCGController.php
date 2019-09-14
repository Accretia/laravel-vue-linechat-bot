<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Response;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cache;



class SCGController extends Controller
{
    const APIKEY = "AIzaSyDJT8D-DCA5jCMcu8gIFKfborXdUwPiyNM"; //Should to be in env file

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
        $response = $client->get("https://maps.googleapis.com/maps/api/place/textsearch/json?query=restaurants+in+Bangsue&key=".self::APIKEY);
        if($response->getStatusCode() == 200){
            $result = json_decode((string) $response->getBody(), true);
            Cache::put('restaurants', $result, 3600);
            return Response::json($result);
        }
    }
    public function getHook(Request $request){
        http_response_code(200);
        //echo "XX";
    }

    public function sendMessage(Request $request){
        $httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('Ttf59LhSTSvL5nTfKLYDvZjch6WmP/eqmS7LgLtdAX/l4NsCYUkGMtAjZkZ6ByT8J3BloN8SxAkO54KPyrg1uHWW+TLEZl8uj0ZLpArMdRPlOKyuL2bwwtVRxDMwUqHG9QY2MBpTOP4yna4nMPhz+1GUYhWQfeY8sLGRXgo3xvw=
');
        $bot = new \LINE\LINEBot($httpClient, ['channelSecret' => 'd3e8c72ddbf61a97e5a77b1402568545']);
        $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello');
        $response = $bot->pushMessage('1621650030', $textMessageBuilder);

        echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
    }
}
