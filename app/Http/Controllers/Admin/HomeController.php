<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class HomeController extends Controller
{

	public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
    	$admin = auth('admin')->user();
    	return view('admin.home', compact('admin'));
    }
}
