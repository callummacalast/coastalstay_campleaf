<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class AdminContactMessageController extends Controller
{
    public function index()
    {
        $contact_messages = ContactMessage::paginate(10);

        return view('admin.contacts.index', compact('contact_messages'));
    }
}
