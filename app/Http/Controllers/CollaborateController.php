<?php

namespace App\Http\Controllers;

use App\Http\Requests\CollaborateRequest;
use App\Models\Collaborate;
use Exception;

class CollaborateController extends Controller
{

    public function create() {
        return view('site.collaborate.create');
    }

    public function store(CollaborateRequest $request) {
        try {
        Collaborate::create($request->validated());
        return redirect('/')->with('message', 'Collaborate has been created successfully');
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}
