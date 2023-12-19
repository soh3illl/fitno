<?php

namespace App\Http\Controllers\Coach;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChatConroller extends Controller
{
    public function index()
    {
        $users = $this->getAthletes();
        return view('coach-panel.chat.index', compact('users'));
    }

    public function create(User $user)
    {
        $users = $this->getAthletes();
        $targetUser = $user;
        $chats = DB::table('chats')->where('sender_id', $targetUser->idreceiver_id)->orWhere('sender_id', auth()->user()->id)->where('receiver_id', $targetUser->id)->orWhere('receiver_id' , auth()->user()->id)->orderBy('created_at')->get();

        return view('coach-panel.chat.create', compact('users', 'targetUser' , 'chats'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'message' => 'required',
            'sender_id' => 'required',
            'receiver_id' => 'required'
        ]);


        Chat::create([
            'message' => $request->input('message'),
            'sender_id' => $request->input('sender_id'),
            'receiver_id' => $request->input('receiver_id')
        ]);


        return back();
    }

    private function getAthletes()
    {
        return DB::table('subscriptions')->where('coach_id', auth()->user()->id)->join('users', 'users.id', '=', 'subscriptions.user_id')->get();
    }
}
