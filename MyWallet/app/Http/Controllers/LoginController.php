<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;    

class LoginController extends Controller
{
    function index(){
        return view('login', ["title"=>'Login']);
    }

    public function logout()
    {
        Auth::logout();
        Session::flash('sukses', "Berhasil logout");
        return redirect('/');
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
            $username = $request->input('username');
            // Simpan username ke dalam session
            $request->session()->put('username', $username);
            return redirect()->route('home');
            // ->with(["username"=> 'username', "title"=>'home']);  
            // return view('add', ["title"=>"Add"]);
            
        }
        else {
             return back()->with('error', 'Invalid username/password');
        }

    }

}
