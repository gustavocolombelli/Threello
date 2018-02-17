<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Balance;
use App\Http\Requests\MoneyValidationFormRequest;

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

    public function depositStore(MoneyValidationFormRequest $request)
    {
     	
        $balance = auth()->user()->balance()->firstOrCreate([]);
        $response = $balance->deposit($request->valorRecarga);

        if ( $response['success']) {
            return redirect()
                            ->route('admin.balance')
                            ->with('success', $response['message']);
        }
        else{
            return redirect()
                            ->back()
                            ->with('error', $response['message']);
        }

    }

    public function sacar(){
    	return view('admin.balance.sacar');
    }

    public function sacarStore(MoneyValidationFormRequest $request){
        dd($request->all());
        $balance = auth()->user()->balance()->firstOrCreate([]);
        $response = $balance->deposit($request->valorRecarga);

        if ( $response['success']) {
            return redirect()
                            ->route('admin.sacar')
                            ->with('success', $response['message']);
        }
        else{
            return redirect()
                            ->back()
                            ->with('error', $response['message']);
        }
    }
}
