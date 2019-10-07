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
        $httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient(env('LINE_CHANNEL_TOKEN'));
        $bot = new \LINE\LINEBot($httpClient, ['channelSecret' => env('LINE_CHANNEL_SECRET')]);
        $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($message);
        $response = $bot->replyMessage($replyToken, $textMessageBuilder);
        if($response->getHTTPStatus() == 200){
            Message::updateFlagReply($replyToken);
        }
    }

    public static function getReplyMessage($index){

        $reply = ["My name is Kittinun Aschasewin" , "I'm Head of Developer at Merchant Partners" , "This for SCG-Test assignment"];
        return$reply[$index];
    }

    public static function sendMessageToAllUser($message){
        $getUsers = Message::getAllUser();
        $httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient(env('LINE_CHANNEL_TOKEN'));
        $bot = new \LINE\LINEBot($httpClient, ['channelSecret' => env('LINE_CHANNEL_SECRET')]);
        $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($message);
        $response = $bot->multicast($getUsers, $textMessageBuilder);
        if($response->getHTTPStatus() == 200){
            return true;
        }
        else{
            return false;
        }

    }



}
