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

    $menu_link = [
        "Home",
        "Prodotti",
        "News"
    ];
    
    $data = config('paste');

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

    $footer_link = [
        "Pastificio" => [
            "Il Pastificio",
            "Grano decorticato a pietra",
            "Il Molise c’è",
            "Filiera Integrata",
            "100 anni di pasta",
            "Sartoria della pasta",
            "Spaghetto Quadrato",
            "Le Persone",
        ],
        "Collezione da chef" => [
            "Collezione da Chef",
            "Grandi Cucine",
            "Biologiche",
            "Quadrate",
        ],
        "Prodotti" => [
            "Le Classiche",
            "Le Integrali",
            "Le Speciali",
            "Le Biologiche",
            "Le Gluten-Free",
            "Le Semole",
            "Le Extra di Lusso",
        ], 
    ];

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

    $data = config('paste');

    if ($id>= count($data)) {
        abort(404);
    }

    $footer_link = [
        "Pastificio" => [
            "Il Pastificio",
            "Grano decorticato a pietra",
            "Il Molise c’è",
            "Filiera Integrata",
            "100 anni di pasta",
            "Sartoria della pasta",
            "Spaghetto Quadrato",
            "Le Persone",
        ],
        "Collezione da chef" => [
            "Collezione da Chef",
            "Grandi Cucine",
            "Biologiche",
            "Quadrate",
        ],
        "Prodotti" => [
            "Le Classiche",
            "Le Integrali",
            "Le Speciali",
            "Le Biologiche",
            "Le Gluten-Free",
            "Le Semole",
            "Le Extra di Lusso",
        ], 
    ];

    $pasta = $data[$id];

    return view('prodotto', [
        'pasta'=> $pasta,
        "footer_link" => $footer_link
    ]);
})->where('id', '[0-9]+')->name('prodotto');


Route::get('/prodotti', function(){
    $footer_link = [
        "Pastificio" => [
            "Il Pastificio",
            "Grano decorticato a pietra",
            "Il Molise c’è",
            "Filiera Integrata",
            "100 anni di pasta",
            "Sartoria della pasta",
            "Spaghetto Quadrato",
            "Le Persone",
        ],
        "Collezione da chef" => [
            "Collezione da Chef",
            "Grandi Cucine",
            "Biologiche",
            "Quadrate",
        ],
        "Prodotti" => [
            "Le Classiche",
            "Le Integrali",
            "Le Speciali",
            "Le Biologiche",
            "Le Gluten-Free",
            "Le Semole",
            "Le Extra di Lusso",
        ], 
    ];
    return view('prodotti',
        [
       
        "footer_link" => $footer_link
        ]
    );
})->name('i_prodotti');



Route::get('/news', function(){
    $footer_link = [
        "Pastificio" => [
            "Il Pastificio",
            "Grano decorticato a pietra",
            "Il Molise c’è",
            "Filiera Integrata",
            "100 anni di pasta",
            "Sartoria della pasta",
            "Spaghetto Quadrato",
            "Le Persone",
        ],
        "Collezione da chef" => [
            "Collezione da Chef",
            "Grandi Cucine",
            "Biologiche",
            "Quadrate",
        ],
        "Prodotti" => [
            "Le Classiche",
            "Le Integrali",
            "Le Speciali",
            "Le Biologiche",
            "Le Gluten-Free",
            "Le Semole",
            "Le Extra di Lusso",
        ], 
    ];
    return view('news',
         [
        "footer_link" => $footer_link
        ]
    );
})->name('le_news');;