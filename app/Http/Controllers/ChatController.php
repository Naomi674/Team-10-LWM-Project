<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class ChatController extends Controller
{
    public function index()
    {
        $messages = Chat::all();
        return view('chats.index', compact('messages'));
    }

    public function create()
    {
        return view('chats.create');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
           'title' => 'required|max:255'
        ]);

        Chat::create($attributes);

        return redirect('/status')->with('success', 'Message was successfully send');
    }

    public function show()
    {
        $messages = DB::table('chats')->get();

        echo $messages;
    }

    public function edit()
    {
        //
    }

    public function update()
    {
        //
    }

    public function delete()
    {
        //
    }
}
