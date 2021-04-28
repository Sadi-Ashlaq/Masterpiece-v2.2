<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm()
    {
        return view('dashboard.admin_login');
    }

    public function login(Request $request)
    {
        $this->validate($request,
        [
            'email' => 'required|string|email',
            'password' => 'required|string|min:8',
        ]);

        if(auth()->guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
        {
            return redirect()->intended(route('admin.dashboard'));
        }

        return back()->withInput($request->only('email', 'remember'));
    }

    public function logout(Request $request)
    {
        auth()->guard('admin')->logout();

        return redirect('/home');
    }
}
