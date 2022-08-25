<?php

namespace App\Http\Controllers;

use App\Http\Requests\PositionRequest;
use App\Models\Position;
use Exception;

class PositionController extends Controller
{
    public function index()
    {
        try {
            return view('site.positions.index');
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function create()
    {
        try {

            return view('site.positions.create');
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function store(PositionRequest $request)
    {
        try {
            Position::create($request->validated());
            return redirect('/about')->with('message', 'Position Added Succesfully');
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}
