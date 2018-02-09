@extends('adminlte::page')

@section('title', 'Saldo')

@section('content_header')
    <h1>Saldo</h1>
    <ol class="breadcrumb">
    	<li><a href=""></a>Dashboard</li>
    	<li><a href=""></a>Saldo</li>
    </ol>

@stop

@section('content')
    
    	


    		<div class="col-lg-3 col-xs-6">

          		<!-- small box -->
	          <div class="small-box bg-green">

	            <div class="inner">
	              <h3>R$ {{ number_format($amount, 2, ',' , '') }}<sup style="font-size: 20px"></sup></h3>

	              <p>Bounce Rate</p>
	            </div>
	            <div class="icon">
	              <i class="ion ion-stats-bars"></i>
	            </div>
	            <a href="#" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
	          </div>
                <div class='box=header'>
                      <a href="{{ route('balance.deposit') }}" class="btn btn-primary"><i class="fa fa-cart-plus"></i> Recarregar</a>   
                      <a href="{{ route('balance.sacar') }}" class="btn btn-danger"><i class="fa fa-credit-card"></i> Sacar</a> 
                </div>

                <div class="box-body">
                
	        </div>

    	</div>

   
@stop