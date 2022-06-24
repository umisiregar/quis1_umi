<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('/', 'DashboardController@index')->name('/');

    // golongan
    Route::get('golongan', 'GolonganController@index')->name('golongan');
    Route::get('golongan/create', 'GolonganController@create')->name('golongan.create');
    Route::post('golongan', 'GolonganController@insert')->name('golongan.insert');
    Route::get('golongan/edit/{golongan}', 'GolonganController@edit')->name('golongan.edit');
    Route::put('golongan', 'GolonganController@update')->name('golongan.update');
    Route::delete('golongan', 'GolonganController@delete')->name('golongan.delete');

    Route::get('pelanggan', 'PelangganController@index')->name('pelanggan');
    Route::get('pelanggan/create', 'PelangganController@create')->name('pelanggan.create');
    Route::post('pelanggan', 'PelangganController@insert')->name('pelanggan.insert');
    Route::get('pelanggan/edit/{pelanggan}', 'PelangganController@edit')->name('pelanggan.edit');
    Route::put('pelanggan', 'PelangganController@update')->name('pelanggan.update');
    Route::delete('pelanggan', 'PelangganController@delete')->name('pelanggan.delete');

    Route::get('pengguna', 'PenggunaController@index')->name('pengguna');
    Route::get('pengguna/create', 'PenggunaController@create')->name('pengguna.create');
    Route::post('pengguna', 'PenggunaController@insert')->name('pengguna.insert');
    Route::get('pengguna/edit/{user}', 'PenggunaController@edit')->name('pengguna.edit');
    Route::put('pengguna', 'PenggunaController@update')->name('pengguna.update');
    Route::delete('pengguna', 'PenggunaController@delete')->name('pengguna.delete');
    
});


