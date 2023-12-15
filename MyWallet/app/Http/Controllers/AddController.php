<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddController extends Controller
{
    function index() {
        return view('add', ["title"=>'Add']);
    }

    function create(REQUEST $request){
        $request->validate([
            'date'=>'required',
            'nominal'=>'required | numeric',
            'category'=>'required',
            'description'=>'required',
            'transaction'=>'required'],
            [
                'date.required'=> 'Date must be filled in',
                'password.required'=> 'Nominal must be filled in',
                'category.required'=> 'Choose one',
                'description.required'=> 'If there is no description fill -',
                'transaction.required'=> 'Choose one'
            ]);
            
            $data = $request->except(['_token']);
            // variabel yang ingin di cek = (condition) ? jika memenuhi condition : jika tidak memenuhi contiditon
            // $data['nominal'] = ($transaction == 1) ? $data['nominal'] : -$data['nominal'];
            $data['nominal'] = ($data['transaction'] == 2) ? $data['nominal'] : -$data['nominal'];
 
            dd($data);

                

            
            // dd($request->all());   
        // return view('add');
    }
}
