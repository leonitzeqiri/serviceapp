<?php

namespace App\Http\Controllers;

use Exception;
use App\Http\Requests\JobRequest;
use App\Models\Careers;
use Illuminate\Contracts\Queue\Job;

class CareersController extends Controller
{
    public function index()
    {
        try {
            $careers = Careers::all();
            return view('site.careers.index', ['careers' => $careers]);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function show(Careers $careers)
    {
        try {
            return view('site.careers.show', ['careers' => $careers]);
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
            return view('site.careers.create');
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function store(JobRequest $request)
    {
        try {
            Careers::create($request->validated());
            return redirect('/careers')->with('message', 'Jobs Listing Succesfully');
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function edit(Careers $careers)
    {
        try {
            if (auth()->user()->role != 1) {
                abort(403, 'Unauthorized Action');
            }
            return view('site.careers.edit', ['careers' => $careers]);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function update(JobRequest $request, Careers $careers)
    {
        try {
            $careers->update($request->validated());
            return redirect('/careers')->with('message', 'Jobs has been Updated');
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function destroy(Careers $careers)
    {
        try {
            if (auth()->user()->role != 1) {
                abort(403, 'Unauthorized Action');
            }
            $careers->delete();
            return view('/careers')->with('message', 'Jobs has been Deleted');
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}
