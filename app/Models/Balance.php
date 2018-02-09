<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    //
    public $timestamps = false;

	/**
	 * @param float $valorRecarga
	 * @return mixed
     */
	public function deposit(float $valorRecarga) : Array
    {
    	$totalBefore = $this->amount ? $this->amount : 0;
    	$this->amount += number_format($valorRecarga, 2, '.', '');
    	$deposit = $this->save();



    	$historic = auth()->user()->historics()->create([
    		'type' 		    => 'I',
    		'amount' 		=> $valorRecarga,
    		'total_before'  => $totalBefore,
    		'total_after'   => $this->amount,
    		'date'		    => date('Ymd'),
    	]);

    	if($deposit && $historic)
    	
    	return [
    				'success' => true,
    				'message' => 'Deposito realizado com sucesso'

    			];
    	
    	return [
    				'success' => false,
    				'message' => 'Falha ao carregar'

    			];
    }
}
