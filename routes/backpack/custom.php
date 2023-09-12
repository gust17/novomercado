<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::get('dashboard',function (){
        return redirect(url(url('admin/produto')));
    });
    Route::crud('categoria', 'CategoriaCrudController');
    Route::crud('loja', 'LojaCrudController');
    Route::crud('produto', 'ProdutoCrudController');
    Route::crud('foto', 'FotoCrudController');
    Route::crud('comentario', 'ComentarioCrudController');
    Route::crud('usuario-mercado', 'UsuarioMercadoCrudController');
    Route::crud('cartao', 'CartaoCrudController');
    Route::crud('acesso', 'AcessoCrudController');
}); // this should be the absolute last line of this file
