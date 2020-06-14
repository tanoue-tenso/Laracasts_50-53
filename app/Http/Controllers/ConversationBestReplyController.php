<?php

namespace App\Http\Controllers;

use App\Reply;

class ConversationBestReplyController extends Controller
{
    public function store(Reply $reply)
    {
        // memo: コントローラーで呼び出すときは $this->authorizeを使う
        $this->authorize('update-conversation', $reply->conversation);

        $reply->conversation->best_reply_id = $reply->id;
        $reply->conversation->save();

        return back();
    }
}
