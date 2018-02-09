<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Balance;

class BalanceController extends Controller
{
    public function index()
    {
    	//dd( auth()->user()->balance->amount);
    	$balance = auth()->user()->balance;
    	$amount =  $balance ? $balance->amount : 0;
    	return view('admin.balance.index', compact('amount'));
    }

    public function deposit()
    {
    	return view('admin.balance.deposit');
    }

    public function depositStore(Request $request, Balance $balance)
    {
     	//$balance->deposit($request->valorRecarga);
        $balance = auth()->user()->balance()->firstOrCreate([]);
        dd($balance->deposit($request->valorRecarga));
    }
    public function sacar(){
    	return view('admin.balance.sacar');
    }
}