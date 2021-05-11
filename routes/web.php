<?php

use Illuminate\Support\Facades\Route;

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

    $menu_link = config('menu.menu_link');
    $data = config('paste.data');

    $lunga = [];
    $corta = [];
    $cortissima = [];


    foreach ($data as $key => $pasta ) {

        $pasta['id'] = $key;

        if ($pasta['tipo'] == 'lunga') {
            $lunga[] = $pasta;
        }elseif ($pasta['tipo'] == 'corta') {
            $corta [] = $pasta;
        }elseif ($pasta['tipo'] == 'cortissima') {
            $cortissima [] = $pasta;
        }
    };

    $footer_link = config('link_footer.footer_link');

    return view('home', 
        [
        "menu_link"=> $menu_link,
        "corte" => $corta,
        "lunghe" => $lunga,
        "cortissime" => $cortissima,       
        "footer_link" => $footer_link
        // var_dump($footer_link)
        ], 
    );
})->name('homepage');


Route::get('prodotto/{id}',function ($id) {

    $data = config('paste.data');

    if ($id>= count($data)) {
        abort(404);
    }

    if ($id == count($data) -1) {
        $next = 0;
        $prev = $id - 1;
    }elseif ($id == 0) {
        $prev = count($data) - 1;
        $next = $id +1;
    }else{
       $prev = $id - 1;
       $next = $id + 1; 
    }

    $footer_link = config('link_footer.footer_link');
    $menu_link = config('menu.menu_link');

    $pasta = $data[$id];

    return view('prodotto', [
        'pasta'=> $pasta,
        'footer_link' => $footer_link,
        'menu_link'=> $menu_link,
        'prevProdottoId' => $prev,
        'nextProdottoId' => $next
    ]);
})->where('id', '[0-9]+')->name('prodotto');


Route::get('/prodotti', function(){
    
    $footer_link = config('link_footer.footer_link');
    $menu_link = config('menu.menu_link');

    return view('prodotti',
        [
        'menu_link'=> $menu_link,  
        "footer_link" => $footer_link
        ]
    );
})->name('i_prodotti');



Route::get('/news', function(){

    $footer_link = config('link_footer.footer_link');
    $menu_link = config('menu.menu_link');

    return view('news',
         [
        "footer_link" => $footer_link,
        'menu_link'=> $menu_link,
        ]
    );
})->name('le_news');;