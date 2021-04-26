<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conversation;

class ConversationController extends Controller
{
    public function index() {
        return view('conversation.index', [
            'conversations' => Conversation::all()
        ]);
    }

    public function show(Conversation $conversation) {
        return view('conversation.show', [
            'conversation' => $conversation
        ]);
    } 
}
