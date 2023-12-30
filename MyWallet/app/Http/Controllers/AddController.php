<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Session;

class AddController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth'); // Middleware untuk memeriksa autentikasi
    }

    function index() {
        return view('add', ["title"=>'Add-Transaction']);
    }

    function add(REQUEST $request){
        $request->validate([
            'date'=>'required',
            'nominal'=>'required | numeric',
            'Category_id'=>'required',
            'description'=>'required',
            'TransactionType_id'=>'required'],
            [
                'date.required'=> 'Date must be filled in',
                'password.required'=> 'Nominal must be filled in',
                'Category_id.required'=> 'Choose one',
                'description.required'=> 'If there is no description fill -',
                'TransactionType_id.required'=> 'Choose one'
            ]);
            
            $data = $request->except(['_token']);
            // variabel yang ingin di cek = (condition) ? jika memenuhi condition : jika tidak memenuhi contiditon
            // $data['nominal'] = ($transaction == 1) ? $data['nominal'] : -$data['nominal'];
            $data['nominal'] = ($data['TransactionType_id'] == 2) ? $data['nominal'] : -$data['nominal'];
            
            // dd($data);

            Transaction::create($data);
            Session::flash('sukses', "Transaksi sudah disimpan.");

            return redirect()->route('add');

                

            
            // dd($request->all());   
        // return view('add');
    }
}
