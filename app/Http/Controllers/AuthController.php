<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'exists:users,name'],
            'password' => ['required'],
            'remember' => ['boolean']
        ]);
        $user = User::where('name', $validated['name'])->first();
        if ($user->password != $validated['password']) {
            return redirect()->back()->withErrors(['password' => 'هذا الباسورد خاطئ!']);
        }
        Auth::login($user,  $validated['remember']);
        return redirect()->route('index');
    }

    public function loginform()
    {
        return view('login.login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('index');
    }
    
}
