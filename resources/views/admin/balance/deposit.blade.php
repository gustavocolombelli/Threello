@extends('adminlte::page')

@section('title', 'Nova Recarga')

@section('content_header')
    <h1>Fazer recarga</h1>

    <h1>Saldo</h1>
    <ol class="breadcrumb">
    	<li><a href=""></a>Dashboard</li>
    	<li><a href=""></a>Saldo</li>
    	<li><a href=""></a>Depositar</li>
    </ol>

@stop

@section('content')
    <div class="box">
    	<div class="box-header">
    		<h3>Fazer Recarga</h3>
    	</div>

    	<div class="box-body">
    		<form method="POST" action="{{ route('deposit.store') }}">
    			{!! csrf_field()!!}
    			<div class="form-group">
    				<input type="text" placeholder="Valor da Recarga" name="valorRecarga">
    			</div>
    			<div class="form-group">
    				<button type="submit" class="btn btn-success">Recarregar</button>
    			</div>
    		</form>
    	</div>

    </div>
@stop