<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\Reply;

class BestReplyController extends Controller
{
    public function store(Reply $reply) {
        // if (Gate::denies('update', $reply->conversation)) {
        //     dd('funny business huh?');
        // }
        $this->authorize('update', $reply->conversation);
        $reply->conversation->setBestReply($reply);

        return back();
    }
}
