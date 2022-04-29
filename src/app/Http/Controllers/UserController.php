<?php

namespace Laravia\User\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{


    public function loginGet()
    {
        return view('user::login');
    }

    public function loginPost(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return back()->with('status', 'Invalid login details');
        }

        return redirect()->route('user.dashboard');
    }

    public function logoutPost(Request $request)
    {
        auth()->logout();
        return redirect('/');
    }
}
