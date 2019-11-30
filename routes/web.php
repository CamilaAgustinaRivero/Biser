<?php

//Home
Route::get('/home', function () {
    return view('home');
});

//Registro
Route::get('/registro', function () {
    return view('registro');
});
Route::post('/registro', function () {
    return ("Este es el registro por post");
});

//Login
Route::get('/login', function () {
    return view('login');
});
Route::post('/login', function () {
    return ("Este es el login por post");
});

//Perfil
Route::get('/perfil', function () {
    return view('perfil');
});
Route::post('/perfil', function () {
    return ("Este es el perfil por  post");
});

//FAQ
Route::get('/faq', function () {
    return view("faq");
});

//Contacto
Route::get('/contacto', function () {
    return view("contacto");
});

//Productos
Route::get('/productos', function () {
    return ("Un listado de los productos");
});

//Detalle producto
Route::get('/detalle-prod', function () {
    return view("detalle-prod");
});

//Carrito
Route::get('/carrito', function () {
    return view("carrito");
});

//Checkout
Route::get('/checkout', function () {
    return view("checkout");
});

?>
