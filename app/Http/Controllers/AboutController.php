<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        return view('site.about.index');
    }

    public function create() {
        return view('site.about.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'name' => 'required',
            'description' => 'required'
        ]);

        $fileName = time() . '_' . $request->logo->getClientOriginalName();
        $filePath = $request->file('logo')->storeAs('uploads', $fileName, 'public');

        About::create(array_merge($request->validated(), ['logo' => $filePath]));

        return redirect('/site.about')->with('message', 'Created Succesfully');
    }
}
