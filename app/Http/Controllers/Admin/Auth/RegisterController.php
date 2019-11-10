<?php

namespace App\Http\Controllers\Admin\Auth;

use Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\Admin;


class RegisterController extends Controller
{

	public function __construct()
    {
        $this->middleware('guest');
    }
    public function showAdminRegisterForm()
    {
    	return view('admin.auth.register');
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:10'],
            'last_name' => ['required', 'string', 'max:10'],
            'email' => ['required', 'string', 'email', 'max:50', 'unique:admins'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    public function register(Request $request)
    {
    	 $validator = $this->validator($request->all())->validate();
	    $pasword_without_hash = $request['password'];
    	$request['password'] = Hash::make($request['password']);
	    $admin = new Admin();

 		$admin->create($request->all());
	    $auth = Auth::guard('admin')->attempt(['email' => $request['email'], 'password' => $pasword_without_hash]);

	       if($auth)
	       {
	       		return redirect()->route('admin.home');
	       }
    }
}
