<?php

namespace App\Http\Controllers;

use Exception;
use App\Http\Requests\JobRequest;
use App\Models\Career;

class CareersController extends Controller
{
    public function index()
    {
        try {
            $career = Career::all();
            return view('site.careers.index', ['career' => $career]);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function show(Career $career)
    {
        try {
            return view('site.careers.show', ['career' => $career]);
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
            Career::create($request->validated());
            return redirect('/careers')->with('message', 'Jobs Listing Succesfully');
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function edit(Career $career)
    {
        try {
            if (auth()->user()->role != 1) {
                abort(403, 'Unauthorized Action');
            }
            return view('site.careers.edit', ['career' => $career]);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function update(JobRequest $request, Career $career)
    {
        try {
            $career->update($request->validated());
            return redirect('/careers')->with('message', 'Jobs has been Updated');
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function destroy(Career $career)
    {
        try {
            if (auth()->user()->role != 1) {
                abort(403, 'Unauthorized Action');
            }
            $career->delete();
            return redirect('/careers')->with('message', 'Jobs has been Deleted');
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}
