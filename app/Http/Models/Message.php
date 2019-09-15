<?php
namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;


class Message extends Model
{
    protected $table = 'messages';
    protected $primaryKey = 'id';


    public static function store($data){

        $tokens = DB::transaction(function () use ($data){
            $events = $data->events;
            $reply_token = array();
            foreach ($events as $event){
                if(!Message::where("reply_token" , $event->replyToken)->first()){
                    if($event->message->type === "text"){
                        $message = new Message();
                        $message->user_id = $event->source->userId;
                        $message->message = $event->message->text;
                        $message->reply_token = $event->replyToken;
                        $message->is_reply = false;
                        $message->save();
                        $reply_token[] = $event->replyToken;
                    }
                }
            }
            return $reply_token;
        });

        return $tokens;
    }

    public static function getAllUser(){
        $users = Message::select("user_id")->distinct()->get();
        if((Cache::has('allUsers'))){
            if(sizeof(Cache::get('allUsers')) == sizeof($users)){
                return Cache::get('allUsers');
            }
            else{
                if(sizeof($users) > 0){
                    $userIdList = array();
                    foreach ($users as $user){
                        $userIdList[] = $user["user_id"];
                    }
                    Cache::put('allUsers', $userIdList, 3600);
                    return $userIdList;
                }
                else{
                    return false;
                }
            }
        }

        else{
            if(sizeof($users) > 0){
                $userIdList = array();
                foreach ($users as $user){
                    $userIdList[] = $user["user_id"];
                }
                Cache::put('allUsers', $userIdList, 3600);
                return $userIdList;
            }
            else{
                return false;
            }
        }
    }

    public static function updateFlagReply($replyToken){
        DB::transaction(function () use ($replyToken) {
            $message = Message::where("reply_token", $replyToken)->first();
            if ($message) {
                $message->is_reply = true;
                $message->save();
            }
        });
    }

}