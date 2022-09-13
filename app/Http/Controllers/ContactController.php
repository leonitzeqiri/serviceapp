<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index() {
        return view('site.contact.index');
    }

    public function store(ContactRequest $request) {
        Contact::create($request->validated());
        return redirect(route('contact.index'))->with('message', 'Contact created successfully');
    }



}
