<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Requests\AboutRequest;
use App\Models\Position;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::latest()->filter(request(['search']))->paginate(3);
        return view('site.about.index', ['abouts' => $abouts]);
    }

    public function show(About $about) {
        return view('site.about.show' ,['about' => $about]);
    }

    public function create()
    {
        $positions = Position::all();
        return view('site.about.create' , compact('positions'));
    }

    public function store(AboutRequest $request)
    {

        $fileName = time() . '_' . $request->logo->getClientOriginalName();
        $filePath = $request->file('logo')->storeAs('uploads', $fileName, 'public');

        About::create(array_merge($request->validated(), ['logo' => $filePath]));

        return redirect('/about')->with('message', 'Created Succesfully');
    }

    public function edit(About $about)
    {
        return view('site.about.edit',['about' => $about]);
    }

    public function update(AboutRequest $request, About $about)
    {

        $fileName = time() . '_' . $request->logo->getClientOriginalName();
        $filePath = $request->file('logo')->storeAs('uploads', $fileName, 'public');

        $about->update(array_merge($request->validated(), ['logo' => $filePath]));
        return view('site.about.index')->with('message', 'About Updated Succesfully');
    }

    public function destroy(About $about) {
        $about->delete();
        return view('site.about.index')->with('message', 'About Deleted');
    }
}
