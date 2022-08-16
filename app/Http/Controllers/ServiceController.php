<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::latest()->get();
        return view('site.services.index', compact('services'));
    }

    public function show()
    {

    }

    public function create() {
        return view('site.services.create');
    }

    public function store(Request $request) {
       $formFields = $request->validate([
            'title' => 'required',
        ]);
        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        Service::Create($formFields);

        return redirect('/',)->with('message', 'Service Ccreated successfully');

    }
}
