<?php

namespace App\Http\Controllers;

use App\Models\MessageBoardItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MessageBoardItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $messages = MessageBoardItem::orderBy('likes', 'desc')->paginate(10);


        return view('messages.index', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('messages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'message' => 'required'
        ]);

        $message = new MessageBoardItem;

        $message->fill($validated);

        $message->save();

        return Redirect::route('message.index')->with('success', 'Message Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MessageBoardItem  $messageBoardItem
     * @return \Illuminate\Http\Response
     */
    public function show(MessageBoardItem $messageBoardItem, $message)
    {
        $message = MessageBoardItem::findOrFail($message);
        return view('messages.show', compact('message'));
    }



    public function like($message)
    {
        $message = MessageBoardItem::find($message);

        $current_likes = $message->likes;
        $new_likes = $current_likes + 1;

        $message->likes = $new_likes;
        $message->updated_at = now();
        $message->update();

        return Redirect::route('message.index')->with('success', 'Message Liked');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MessageBoardItem  $messageBoardItem
     * @return \Illuminate\Http\Response
     */
    public function edit(MessageBoardItem $messageBoardItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MessageBoardItem  $messageBoardItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $message)
    {
        $validated = $request->validate([
            'title' => 'required',
            'message' => 'required',
        ]);
        $message = MessageBoardItem::findOrFail($message);

        $message->fill($validated);

        $message->update();

        return Redirect::route('admin.message.index')->with('success', 'Message Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MessageBoardItem  $messageBoardItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(MessageBoardItem $messageBoardItem)
    {
        //
    }
}
