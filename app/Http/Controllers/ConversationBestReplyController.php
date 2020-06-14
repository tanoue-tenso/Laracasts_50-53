<?php

namespace App\Http\Controllers;

use App\Reply;

class ConversationBestReplyController extends Controller
{
    public function store(Reply $reply)
    {
        $conversation = $reply->conversation;
        // memo: コントローラーで呼び出すときは $this->authorizeを使う
        $this->authorize('update', $conversation);

        $conversation->setBestReply($reply);
        return back();
    }
}
