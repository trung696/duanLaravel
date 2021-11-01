<?php

namespace App\Http\Controllers;

use App\Models\ChatMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\User;
use \App\Models\Message;

class InboxController extends Controller
{

    public function index() {
        // Show just the users and not the admins as well
        $users = User::where('id_role', 3)->orderBy('id', 'DESC')->get();

        if (auth()->user()->id_role == 3) {
            $messages = ChatMessage::where('user_id', auth()->id())->orWhere('receiver', auth()->id())->orderBy('id', 'DESC')->get();
        }

        return view('home', [
            'users' => $users,
            'messages' => $messages ?? null
        ]);
    }

    public function show($id) {
        if (auth()->user()->id_role == 3) {
            abort(404);
        }

        $sender = User::findOrFail($id);

        $users = User::with(['message' => function($query) {
            return $query->orderBy('created_at', 'DESC');
        }])->where('id_role', 3)
            ->orderBy('id', 'DESC')
            ->get();

        if (auth()->user()->id_role == 3) {
            $messages = ChatMessage::where('user_id', auth()->id())->orWhere('receiver', auth()->id())->orderBy('id', 'DESC')->get();
        } else {
            $messages = ChatMessage::where('user_id', $sender)->orWhere('receiver', $sender)->orderBy('id', 'DESC')->get();
        }

        return view('show', [
            'users' => $users,
            'messages' => $messages,
            'sender' => $sender,
        ]);
    }

}
