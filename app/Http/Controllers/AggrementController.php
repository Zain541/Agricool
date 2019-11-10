<?php

namespace App\Http\Controllers;
use App\Model\Aggrement;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class AggrementController extends Controller
{
    public function agreement(){
        return view('layouts.pages.agreement');
    }
    public function form(){
        return view('layouts.pages.form');
    }
    public function store(Request $request){
        $request->validate([
            'surname' => 'required',
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'number' => 'required',
        ]);
        $aggrement = new Aggrement();
        $aggrement->surname = $request->surname;
        $aggrement->name = $request->name;
        $aggrement->email = $request->email;
        $aggrement->address = $request->address;
        $aggrement->cell_no= $request->number;

        $aggrement->save();
//        Mail::send(new ContactMail($aggrement));
        Mail::to($aggrement->email)->send(new ContactMail($aggrement));
        return redirect()->route('form')->with('success', 'Mail Successfully Send');

    }

}

