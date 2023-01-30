<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use App\Models\MessageBoardItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminMessageBoardItemController extends Controller
{
    public function index(MessageBoardItem $messageBoardItem)
    {
        $messageBoardItem = MessageBoardItem::paginate(10);
        return view('admin.messages.index', compact('messageBoardItem'));
    }

   
    public function edit(MessageBoardItem $messageBoardItem)
    {
        return view('admin.messages.edit', compact('messageBoardItem'));
    }

    public function update(Request $request, MessageBoardItem $messageBoardItem)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'contactMessage' => 'required'
        ]);

        $messageBoardItem->fill($validated);
        $messageBoardItem->update();

        return Redirect::route('admin.messages.index')->with('success', 'Message Updated');
    }
   
    public function destroy(MessageBoardItem $messageBoardItem) 
    {
        $messageBoardItem->delete();
        return Redirect::route('admin.messages.index')->with('success', 'Message Item Deleted');

    }
}
