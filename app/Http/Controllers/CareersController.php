<?php

namespace App\Http\Controllers;

use Exception;
use App\Http\Requests\JobRequest;
use App\Models\Careers;

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

    public function show()
    {
    }

    public function create()
    {
        try {
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
}
