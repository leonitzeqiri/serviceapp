<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class CareersController extends Controller
{
    public function index() {
        try {
        return view('site.careers.index');
        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }
    }
}
