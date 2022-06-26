<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Http\Request;
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

    public function store()
    {
        $attributes = request()->validate([
           'title' => 'required|max:255'
        ]);

        Chat::create($attributes);

        return redirect('/status');
    }

    public function show()
    {
        //
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
