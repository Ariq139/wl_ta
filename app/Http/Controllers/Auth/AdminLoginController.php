<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    public function __construct()
	{
		$this->middleware('guest:admin', ['except'=> ['logout']]);
	}

	function showLoginForm()
	{
		return view('auth.admin-login');
	}

	function login(Request $request)
	{
		// Validate the form data
		$this->validate($request, [
			'username_adm' => 'required',
			'password'     => 'required|min:6',
		]);

		// Attempt to log the user in
		if (Auth::guard('admin')->attempt(['username_adm' => $request->username_adm, 'password' => $request->password], $request->remember))
		{
			// If successful, then redirect to their intended location
			return redirect()->intended(route('admin.dashboard'));
		}
		// If unsuccessful, then redirect back to the login with the form data
		redirect()->back()->withInput($request->only('username_adm', 'remember'));
	}

	public function logout()
	{
		Auth::guard('admin')->logout();
		return redirect('/');
	}
}
