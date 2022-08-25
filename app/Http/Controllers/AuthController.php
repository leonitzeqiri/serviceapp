<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use App\Http\Requests\LoginRequest;

class AuthController extends Controller
{
    public function register()
    {
        try {
            return view('site.users.register');
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function store(AuthRequest $request)
    {
        try {
            $formFields = $request->validated();
            $formFields['password'] = bcrypt($formFields['password']);
            $user = User::create($formFields);
            auth()->login($user);
            return redirect('/')->with('message', 'User Created and logged in');
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function login()
    {
        try {
            return view('site.users.login');
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function authenticate(LoginRequest $request)
    {
        try {
            $formFields = $request->validated();
            if (auth()->attempt($formFields)) {
                $request->session()->regenerate();
                return redirect('/')->with('message', 'You are now logged in');
            }
            return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function logout(Request $request)
    {
        try {
            auth()->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/')->with('message', 'You have been logged out');
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}
