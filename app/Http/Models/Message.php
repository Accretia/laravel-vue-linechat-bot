<?php
namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


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
        $users = Message::select("user_id")->distinct();
        return $users;
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