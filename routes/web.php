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

Route::get('/','WelcomeController@index')->name('/');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'datasiswa'], function(){
    route::get('index','DataSiswaController@index')->name('datasiswa');
    route::get('create','DataSiswaController@create')->name('datasiswa.create');
    route::get('/edit/{user}','DataSiswaController@edit')->name('datasiswa.edit');
    route::patch('edit-data/{user}','DataSiswaController@update')->name('datasiswa.updated');
    route::post('store','DataSiswaController@store')->name('datasiswa.store');
    route::delete('delete/{user}','DataSiswaController@destroy')->name('datasiswa.delete');
});

route::group(['prefix' => 'activity'], function(){
    route::get('index','ActivityController@index')->name('activity');
    route::get('create','ActivityController@create')->name('activity.create');
    route::get('edit/{activity}','ActivityController@edit')->name('activity.edit');
    route::patch('edit-data/{activity}','ActivityController@update')->name('activity.update');
    route::post('store','ActivityController@store')->name('activity.store');
    route::delete('delete/{id}','ActivityController@destroy')->name('activity.delete');
});

route::group(['prefix' => 'verifikasi'], function(){
    route::get('index','VerifikasiController@index')->name('verifikasi');
    route::get('pendaftaran','PendaftaranController@index')->name('verifikasi.pendaftaran');
    route::get('peserta','PesertaController@index')->name('verifikasi.peserta');
    route::patch('acc/{register}','PesertaController@store')->name('verifikasi.acc');
});

route::group(['prefix' => 'activitycek'], function(){
    route::get('index','ActivityCekController@index')->name('activitycek');
});

route::group(['prefix' => 'kegiatanku'], function(){
    route::get('/','KegiatankuController@index')->name('kegiatanku');
});

route::group(['prefix' => 'kegiatan'], function(){
    route::get('tampilkan','KegiatanController@show')->name('kegiatan.show');
    route::get('/create/{kegiatan}','KegiatanController@create')->name('kegiatan.create');
    route::post('/store','KegiatanController@store')->name('kegiatan.store');
});

route::group(['prefix' => 'user'], function(){
    route::get('ambil-form/{register}','PaymentController@create')->name('user.ambil-form');
    route::post('verifikasi-pembayaran/{register}','PaymentController@store')->name('user-verifikasi-pembayaran');
    
});

route::group(['prefix' => 'pendaftaran'], function(){
    route::get('pending','Pendaftaran\PendingController@index')->name('pendaftaran.pending');
    route::get('verified','Pendaftaran\VerifiedController@index')->name('pendaftaran.verified');
    
});

route::group(['prefix' => 'cetak'], function(){
    route::get('index','Report\ActivityController@index')->name('cetak.activity');
    route::get('all','Report\ActivityController@edit')->name('cetak.all');
    
});

route::get('/cetak/{register}','CetakController@index')->name('cetak.sertifikat');

route::get('resoult/{register}','ResoultController@show')->name('resoult');




