<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Foreach_;

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

Route::get('/home', function () {
    $data = config('paste');
    $lunga = [];
    $corta = [];
    $cortissima = [];

    foreach($data as $key => $pasta){
        $pasta['id'] = $key;
       if($pasta['tipo'] == 'lunga'){
           $lunga[] = $pasta;
       } elseif($pasta['tipo'] == 'corta'){
            $corta[] = $pasta;
       } elseif ($pasta['tipo'] == 'cortissima') {
            $cortissima[] = $pasta;
       }
    }
    return view('home', [
        'lunghe' => $lunga,
        'corte' => $corta,
        'cortissime' => $cortissima
    ]);
})->name('homepage');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('prodotti{id}', function ($id) {
    $data = config('paste');
    if($id >= count($data)){
        abort(404);
    }

    $pasta = $data[$id];
    // if ($id > count($data)) {
    //     $pasta = $data[0];
    // }if ($id <= 0) {
    //     $pasta = $data[11];
    // } else {
    //     foreach ($data as $item) {
    //         if ($item['id'] == $id) {
    //             $pasta = $item;
    //         }
    //     }
    // }



    return view('prodotti', [
        'pasta'=> $pasta,
    ]);
})->where('id', '[0-9]+')->name('prodotti');
