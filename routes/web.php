<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
$this->group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function(){
	$this->post('sacar', 'BalanceController@sacarStore')->name('sacar.store');
	$this->get('sacar', 'BalanceController@sacar')->name('balance.sacar');


	$this->post('deposit', 'BalanceController@depositStore')->name('deposit.store');
	$this->get('deposit', 'BalanceController@deposit')->name('balance.deposit');
	
	$this->get('balance', 'BalanceController@index')->name('admin.balance');
	$this->get('/', 'AdminController@index')->name('admin.home');
});

Route::get('/', 'Site\SiteController@index')->name('home');

Auth::routes();
