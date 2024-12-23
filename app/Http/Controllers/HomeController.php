<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function consult()
    {
        return view('services.consult');
    }

    public function articles()
    {
        return view('services.articles');
    }

    public function profile()
    {
        $user = Auth::user(); // Get the logged-in user
        return view('profile', compact('user'));
    }
}
