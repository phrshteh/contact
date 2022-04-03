<?php

namespace Phrshteh\Contact\Http\Controllers;

use \App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Phrshteh\Contact\Mail\ContactMailable;
use Phrshteh\Contact\Models\Contact;

class ContactController extends Controller
{

    public function index()
    {
        return view('contact::contact');
    }

    public function store(Request $request)
    {
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable(
            $request->input('message'),
            $request->input('name')));

        Contact::create($request->all());

        return redirect(route('contact'));
    }
}