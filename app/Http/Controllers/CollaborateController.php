<?php

namespace App\Http\Controllers;

use App\Http\Requests\CollaborateRequest;
use App\Models\Collaborate;
use Exception;

class CollaborateController extends Controller
{

    public function create()
    {
        if (auth()->user()->role != 1) {
            abort(403, 'Unauthorized Action');
        }
        return view('site.collaborate.create');
    }

    public function show(Collaborate $collaborate)
    {
        try {
            if (auth()->user()->role != 1) {
                abort(403, 'Unauthorized Action');
            }
            return view('site.collaborate.show', compact('collaborate'));
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function store(CollaborateRequest $request)
    {
        try {
            $fileName = time() . '_' . $request->image->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('uploads', $fileName, 'public');
            Collaborate::create(array_merge($request->validated(), ['image' => $filePath]));
            return redirect('/')->with('message', 'Collaborate has been created successfully');
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function edit(Collaborate $collaborate)
    {
        if (auth()->user()->role != 1) {
            abort(403, 'Unauthorized Action');
        }
        return view('site.collaborate.edit',  compact('collaborate'));
    }

    public function update(CollaborateRequest $request, Collaborate $collaborate)
    {
        try {
            $fileName = time() . '_' . $request->image->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('uploads', $fileName, 'public');
            $collaborate->update(array_merge($request->validated(), ['image' => $filePath]));
            return redirect('/')->with('message', 'Collaborate Updated successfully');
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function destroy(Collaborate $collaborate)
    {
        try {
            if (auth()->user()->role != 1) {
                abort(403, 'Unauthorized Action');
            }
            $collaborate->delete();
            return redirect('/manage')->with('message', 'Collaborate has been Deleted');
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}
