<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\About;
use App\Models\Service;
use App\Models\Collaborate;
use App\Http\Requests\ServiceRequest;

use Exception;


class ServiceController extends Controller
{
    public function index()
    {
        try {
            $collaborate = Collaborate::paginate(1);
            $services = Service::paginate(1);
            return view('site.services.index', compact('services' ,'collaborate'));
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }

    }

    public function show(Service $service)
    {
        try {
            if (auth()->user()->role != 1) {
                abort(403, 'Unauthorized Action');
            }
            return view('site.services.show', compact('service'));
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function create()
    {
        try {
            if (auth()->user()->role != 1) {
                abort(403, 'Unauthorized Action');
            }
            return view('site.services.create');
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function store(ServiceRequest $request)
    {
        try {
            $fileName = time() . '_' . $request->logo->getClientOriginalName();
            $filePath = $request->file('logo')->storeAs('uploads', $fileName, 'public');

            Service::create(array_merge($request->validated(), ['logo' => $filePath]));

            return redirect('/')->with('message', 'Service Created successfully');
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function edit(Service $service)
    {
        try {
            if (auth()->user()->role != 1) {
                abort(403, 'Unauthorized Action');
            }
            return view('site.services.edit', compact('service'));
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
}
    public function update(ServiceRequest $request, Service $service)
    {
        try {
            $fileName = time() . '_' . $request->logo->getClientOriginalName();
            $filePath = $request->file('logo')->storeAs('uploads', $fileName, 'public');

            $service->update(array_merge($request->validated(), ['logo' => $filePath]));
            return redirect('/')->with('message', 'Service Updated successfully');
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }

    }

    public function destroy(Service $service)
    {
        try {
            if (auth()->user()->role != 1) {
                abort(403, 'Unauthorized Action');
            }
            $service->delete();
            return redirect('/')->with('message', 'Service deleted successfully');
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function manage(Service $service)
    {
        try {
            if (auth()->user()->role != 1) {
                abort(403, 'Unauthorized Action');
            }
            $services = Service::all();
            $abouts = About::all();
            return view('site.manage', compact('services','abouts'));
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

}
