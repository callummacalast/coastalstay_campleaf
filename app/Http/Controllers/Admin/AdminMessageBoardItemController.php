<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MessageBoardItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminMessageBoardItemController extends Controller
{
    public function index()
    {
        $messages = MessageBoardItem::paginate(10);
        return view('admin.messages.index', compact('messages'));
    }

    public function show($message)
    {
        $message = MessageBoardItem::find($message);
        return view('admin.messages.show', compact('message'));
    }

    public function edit()
    {
    }


    public function update(Request $request, $message)
    {

        $message = MessageBoardItem::findOrFail($message);

        $validated = $request->validate([
            'title' => 'required',
            'message' => 'required'
        ]);

        $message->fill($validated);
        $message->update();

        return Redirect::route('admin.messages.index')->with('success', 'Message Updated');
    }
    public function create()
    {
    }
}
