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

Route::get('/', function () {
    $menu_link = [
        "Home",
        "Prodotti",
        "News"
    ];
    return view('home', [
        "menu_link"=> $menu_link]
    );
});
// "menu_link"=> 