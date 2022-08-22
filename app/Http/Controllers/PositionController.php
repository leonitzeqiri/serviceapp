<?php

namespace App\Http\Controllers;

use App\Http\Requests\PositionRequest;
use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function index() {
        return view('site.positions.index');
    }

    public function create() {
        return view('site.positions.create');
    }

    public function store(PositionRequest $request) {
        Position::create($request->validated());
        return redirect('/about')->with('message', 'Position Added Succesfully');
    }
}
