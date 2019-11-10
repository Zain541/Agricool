<?php

namespace App\Http\Controllers\Admin\Auth;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
	public function __construct()
    {
        $this->middleware('guest');
    }

	public function showAdminLoginForm()
	{
		return view('admin.auth.login');
	}

	protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:50', 'unique:admins'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    public function login(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email|exists:admins',
            'password' => 'required|min:8'
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {


             return redirect()->route('admin.home');
        }
        // echo "wrong";return;
        return back()->withInput($request->only('email', 'remember'))->withErrors(['email'=> 'Email or password is incorrect']);
    }
}
