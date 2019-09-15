<?php
/**
 * Created by PhpStorm.
 * User: Accretia
 * Date: 2019-09-15
 * Time: 15:44
 */

namespace App\Http\Controllers\Util;


use App\Http\Models\Message;

trait LineTrait
{

    public static function replyMessage($replyToken , $message){
        $httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('Ttf59LhSTSvL5nTfKLYDvZjch6WmP/eqmS7LgLtdAX/l4NsCYUkGMtAjZkZ6ByT8J3BloN8SxAkO54KPyrg1uHWW+TLEZl8uj0ZLpArMdRPlOKyuL2bwwtVRxDMwUqHG9QY2MBpTOP4yna4nMPhz+1GUYhWQfeY8sLGRXgo3xvw=');
        $bot = new \LINE\LINEBot($httpClient, ['channelSecret' => 'd3e8c72ddbf61a97e5a77b1402568545']);
        $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($message);
        $response = $bot->replyMessage($replyToken, $textMessageBuilder);
        if($response->getHTTPStatus() == 200){
            Message::updateFlagReply($replyToken);
        }
        //echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
    }

    public static function getReplyMessage($index){

        $reply = ["My name is Kittinun Aschasewin" , "I'm Head of Developer at Merchant Partners" , "This for SCG-Test assignment"];
        return$reply[$index];
    }

    public static function sendMessageToAllUser($message){
        $getUsers = Message::getAllUser();
        $httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('Ttf59LhSTSvL5nTfKLYDvZjch6WmP/eqmS7LgLtdAX/l4NsCYUkGMtAjZkZ6ByT8J3BloN8SxAkO54KPyrg1uHWW+TLEZl8uj0ZLpArMdRPlOKyuL2bwwtVRxDMwUqHG9QY2MBpTOP4yna4nMPhz+1GUYhWQfeY8sLGRXgo3xvw=');
        $bot = new \LINE\LINEBot($httpClient, ['channelSecret' => 'd3e8c72ddbf61a97e5a77b1402568545']);
        $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($message);
        $response = $bot->multicast($getUsers, $textMessageBuilder);
        //echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
        if($response->getHTTPStatus() == 200){
            return true;
        }
        else{
            return false;
        }

    }



}