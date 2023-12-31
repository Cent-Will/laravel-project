<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

   

    public function index(Request $request)
    {
        Transaction::displayTransaction();
        $transactions = Transaction::with(['category', 'transactionType'])->get();

        // MENGAMBILL VALUE USERNAME DARI SESSION
        $username = $request->session()->get('username');
        $title = 'Home';
        $saldo = Transaction::getSaldo();
        return view('home', [
            'username' => $username,
            'title'=>$title, 
            "transactions" => $transactions,
            'saldo' => $saldo
            ]);
    }

}
