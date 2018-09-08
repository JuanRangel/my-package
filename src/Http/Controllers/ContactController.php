<?php

namespace Vsellis\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Vsellis\Contact\Mail\ContactMailable;
use Vsellis\Contact\Models\Contact;

class ContactController extends Controller
{

    public function index()
    {
        return view('contact::contact');
    }

    public function store()
    {
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable(request('message'), request('name')));
        Contact::create(request()->all());

        return redirect()->route('contact');
    }
}
