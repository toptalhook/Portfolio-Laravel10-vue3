<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function get_all_messages()
    {
        $messages = Message::orderBy('id','DESC')->get();

        return response()->json([
           'messages'=>$messages
        ]);
    }
}
