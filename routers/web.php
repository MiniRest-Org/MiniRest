<?php

use MiniRestFramework\Http\Request\Request;
use MiniRestFramework\Http\Response\Response;
use MiniRestFramework\Router\Route;

Route::get('/example/view/{nome}', function (Request $request, string $nome) {
    return Response::html(
        view('admin.example', [
            'username' => $nome,
            'items' => ['Item 10', 'Item 20', 'Item 30', 'Item 40']
        ])
    );
});


Route::get('/example/view2/{nome}', function (Request $request, string $nome) {
    return Response::html(
        view('example', [
            'username' => $nome,
            'items' => ['Item 10', 'Item 20', 'Item 30', 'Item 40', 'Item 50']
        ])
    );
});