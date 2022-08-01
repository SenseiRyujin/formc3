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

use Knp\Snappy\Pdf;
Route::get('/', function () {
    return view('c2data.index');
});

Route::get('/sender', function(){
    $pdf = App::make('snappy.pdf.wrapper');
    $pdf->loadview('c2data.index');
    return $pdf->inline();
});

Route::get('export', 'MyController@export')->name('export');
Route::get('importExportView', 'MyController@importExportView');
Route::post('import', 'MyController@import')->name('import');