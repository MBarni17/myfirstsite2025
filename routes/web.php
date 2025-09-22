<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return "Helló világ!";
});

Route::get('/valami', function () {
    return view('valamixd');
});

Route::view('/contact', 'contact');

Route::get('/tomb-visszaad', function(){
    $tomb = ["kulcs" => "érték"];
    return $tomb;
});

Route::get('/udvozles', function(){
    $name = "Barni";
    $age = 18;
    return view("udvozollek", [
        "nev" => $name,
        "kor" => $age
    ]);
});

Route::get('/bevasarlolista', function(){
    $lista = [
        "tej",
        "eper",
        "sor",
        "dinnye"
    ];
    return view("sajatbevasarlas", ["bevasarlolista" => $lista]);
});

Route::get('/felhasznaloiadat', function(){
    return view("userinput", [
        "fnev" => request("felhasznalonev"),
        "vnev" => request("vezeteknev"),
        "knev" => request("keresztnev")
    ]);
});
