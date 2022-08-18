<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        return view('site.contact.index');
    }

    public function store(Request $request) {
            $data = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'description' => 'required'
        ]);

        Contact::create($data);
        return redirect(route('contact.index'))->with('message', 'Contact created successfully');
    }



}
