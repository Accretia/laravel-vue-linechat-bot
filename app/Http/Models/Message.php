<?php
namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;


class Message extends Model
{
    protected $table = 'messages';
    protected $primaryKey = 'id';


    public static function store($data){
        $events = $data->events;
        foreach ($events as $event){
            if(!Message::where("reply_token" , $event->replyToken)->first()){
                if($event->message->type === "text"){
                    $message = new Message();
                    $message->user_id = $event->source->userId;
                    $message->message = $event->message->text;
                    $message->reply_token = $event->replyToken;
                    $message->is_reply = false;
                    $message->save();
                }
            }
        }
    }

}