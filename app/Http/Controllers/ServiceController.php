<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Requests\ServiceRequest;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::paginate(1);
        return view('site.services.index', ['services' => $services]);
    }

    public function show(Service $service) {
        return view('site.services.show', ['service' => $service]);
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

        $fileName = time() . '_' . $request->logo->getClientOriginalName();
        $filePath = $request->file('logo')->storeAs('uploads', $fileName, 'public');

        Service::create(array_merge($request->validated(), ['logo' => $filePath]));

        return redirect('/')->with('message', 'Service Created successfully');
    }

    public function edit(Service $service) {
        if( auth()->user()->role != 1) {
            abort(403, 'Unauthorized Action');
        }
        return view('site.services.edit',['service' => $service]);
    }

    public function update(ServiceRequest $request, Service $service) {
        $fileName = time() . '_' . $request->logo->getClientOriginalName();
        $filePath = $request->file('logo')->storeAs('uploads', $fileName, 'public');

        $service->update(array_merge($request->validated(), ['logo' => $filePath]));
        return redirect('/')->with('message', 'Service Updated successfully');
    }

    public function destroy(Service $service)
    {
        if( auth()->user()->role != 1) {
            abort(403, 'Unauthorized Action');
        }
        $service->delete();
        return redirect('/')->with('message', 'Service deleted successfully');
    }

    public function manage(Service $service) {
        return view('site.manage', compact('service'));
    }


}
