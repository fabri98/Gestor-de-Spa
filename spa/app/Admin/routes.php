<?php

use App\Admin\Controllers\ComentarioController;
use App\Admin\Controllers\NoticiaController;
use App\Admin\Controllers\ServicioController;
use App\Admin\Controllers\TurnoController;
use App\Admin\Controllers\UserController;
use Illuminate\Routing\Router;
use OpenAdmin\Admin\Facades\Admin;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('/comentarios', ComentarioController::class);
    $router->resource('users', UserController::class);
    $router->resource('servicios', ServicioController::class);
    $router->resource('turnos', TurnoController::class);
    $router->resource('noticias', NoticiaController::class);
});
