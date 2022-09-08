<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Exception;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        try {
            return view('site.contact.index');
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'firstname' => 'required',
                'lastname' => 'required',
                'email' => 'required',
                'description' => 'required'
            ]);

            Contact::create($data);
            return redirect(route('contact.index'))->with('message', 'Contact created successfully');
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}
