<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';


     public function logout()
    {
        $guards = ['admin'];

   
       if(Auth::guard("admin")->check())
        {
            Auth::guard("admin")->logout();
            return $this->redirectLoggedOut("admin");   
        }
   // return redirect('/login');
    }

    public function redirectLoggedOut($guard)
    {
        switch($guard) {
           
            case 'admin':
                return redirect('admin/login');
            default:
                return redirect('/login');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
