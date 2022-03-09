<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreLoginRequest;

class AuthenticationController extends Controller
{
    public function index()
    {
        if(Auth::check()) 
        {
            return back();
        }

        return view('auth.login');
    }
    
    public function store(StoreLoginRequest $request)
    {
        $request->authenticate();
        $request->session()->regenerate();
        
        return redirect()
            ->route('home');
    }

    public function destory(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('home');
    }
}
