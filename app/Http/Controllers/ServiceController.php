<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Requests\ServiceRequest;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::latest()->get();
        return view('site.services.index', compact('services'));
    }


    public function create()
    {
        if( auth()->user()->role != 1) {
            abort(403, 'Unauthorized Action');
        }
        return view('site.services.create');
    }

    public function store(ServiceRequest $request)
    {
        if( auth()->user()->role != 1) {
            abort(403, 'Unauthorized Action');
        }

        $fileName = time() . '_' . $request->logo->getClientOriginalName();
        $filePath = $request->file('logo')->storeAs('uploads', $fileName, 'public');

        Service::create(array_merge($request->validated(), ['logo' => $filePath]));

        return redirect('/')->with('message', 'Service Created successfully');
    }
}
