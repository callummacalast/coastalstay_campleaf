<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ContactMessageController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function store(Request $request)
    {


        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|max:255'
        ]);

        $contact_message = new ContactMessage;

        $contact_message->fill($validated);

        $contact_message->save();


        // return Redirect::route('contact.index')->with('success', 'woo');
        return response()->json(['success' => 'Post created successfully.']);
    }
}
