<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{

    public function register(): View
    {
        return view('auth.login');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:250',
            'meja_id' => 'required',
            'status' => 'required|string'
        ]);

        $credentials = $request->only('meja_id', 'status');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect()->route('home');
    }

    public function login(): View
    {
        return view('auth.login');
    }


    // CEK LOGIN
    public function authenticate(Request $request)//: RedirectResponse
    {
        $credentials = $request->validate([
            'nama' => 'required',
            'meja_id' => 'required',
            'status' => 'required'
        ]);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();

            $role = Auth::User()?->role?->nama_role;

            return match($role){
                'admin' => redirect()->route('admin.dashboard'),
                'customer' => redirect()->route('customer.homepage'),
                default => redirect()->route('login')
            };
        }
    }



    // LOGOUT
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')
            ->withSuccess('You have logged out successfully!');
    }
}
