<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Http\Requests\AboutRequest;
use App\Models\Position;
use Exception;

class AboutController extends Controller
{
    public function index()
    {

        try {
            $abouts = About::latest()->filter(request(['search']))->paginate(3);
            return view('site.about.index', ['abouts' => $abouts]);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function show(About $about)
    {
        try {
            if (auth()->user()->role != 1) {
                abort(403, 'Unauthorized Action');
            }
            return view('site.about.show', compact('about'));
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
            $positions = Position::all();
            return view('site.about.create', compact('positions'));
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function store(AboutRequest $request)
    {
        try {
            $fileName = time() . '_' . $request->logo->getClientOriginalName();
            $filePath = $request->file('logo')->storeAs('uploads', $fileName, 'public');

            About::create(array_merge($request->validated(), ['logo' => $filePath]));

            return redirect('/about')->with('message', 'Created Succesfully');
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function edit(About $about)
    {
        try {
            if (auth()->user()->role != 1) {
                abort(403, 'Unauthorized Action');
            }
            $positions = Position::all();
            return view('site.about.edit',compact('positions', 'about'));
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function update(AboutRequest $request, About $about)
    {
        try {
            $fileName = time() . '_' . $request->logo->getClientOriginalName();
            $filePath = $request->file('logo')->storeAs('uploads', $fileName, 'public');
            $about->update(array_merge($request->validated(), ['logo' => $filePath]));
            return view('site.about.show', compact('about'))->with('message', 'About Updated Succesfully');
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function destroy(About $about)
    {
        try {
            if (auth()->user()->role != 1) {
                abort(403, 'Unauthorized Action');
            }
            $about->delete();
            return view('site.about.index')->with('message', 'About Deleted');
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}
