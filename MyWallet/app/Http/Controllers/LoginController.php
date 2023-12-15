<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    function index(){
        return view('login', ["title"=>'Login']);
    }


    function login(Request $request){
        // dd($request->all());
    //VALIDASI APAKAH USERNAME DAN PASSWORD DIISI ATAU TIDAK 
        $request->validate([
            'username'=>'required',
            'password'=>'required'],
            [
                'username.required'=> 'Username must be filled in',
                'password.required'=> 'Password must be filled in',
            ]);
    // VALIDASI APAKAH CREDENTIAL ADA DI DATABASE 
        if(Auth::attempt($request->only('username', 'password'))){
            // return redirect()->with(["username"=> $request['username'], "title"=>'home']);  
            return view('add', ["title"=>"Add"]);
        }
        else {
             return back()->with('error', 'Invalid username/password');
        }

    }

}
