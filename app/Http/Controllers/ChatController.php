<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        return view('chats.index');
    }

    public function show()
    {
        //
    }

    public function create()
    {
        return view('chats.create');
    }

    public function store(Request $request)
    {

        $request->validate([
           'message' => 'required'
        ]);

        Chat::create($request->all());

        return redirect()->route('products.index')
            ->with('success','Product created successfully.');
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
