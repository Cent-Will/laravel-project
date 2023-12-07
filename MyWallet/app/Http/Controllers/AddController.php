<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddController extends Controller
{
    function index() {
        return view('add', ["title"=>'Add']);
    }

    function create(){
        $request->validate([
            'date'=>'required',
            'nominal'=>'required | numeric',
            'category'=>'required'],
            [
                'date.required'=> 'Date must be filled in',
                'password.required'=> 'Nominal must be filled in',
                'category.required'=> 'Category must be filled in'
            ]);
    // VALIDASI APAKAH CREDENTIAL ADA DI DATABASE 
        if(Auth::attempt($request->only('username', 'password'))){
            return redirect('add');
        }
        else {
             return back()->with('error', 'Invalid username/password');
        }

        return view('add');
    }
}
