@extends('adminlte::page')

@section('title', 'Nova Recarga')

@section('content_header')
    <h1>Fazer Retirada</h1>
    <ol class="breadcrumb">
    	<li><a href=""></a>Dashboard</li>
    	<li><a href=""></a>Saldo</li>
    	<li><a href=""></a>Sacar</li>
    </ol>

@stop

@section('content')
    <div class="box">
    	<div class="box-header">

    	</div>

        @include('admin.includes.messages')

    	<div class="box-body">
    		<form method="POST" action="{{ route('sacar.store') }}">
    			{!! csrf_field()!!}
    			<div class="form-group">
    				<input type="text" placeholder="Valor da Retirada" name="valorRetirada">
    			</div>
    			<div class="form-group">
    				<button type="submit" class="btn btn-success">Sacar</button>
    			</div>
    		</form>
    	</div>

    </div>
@stop