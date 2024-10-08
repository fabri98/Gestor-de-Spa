<?php
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\TurnoController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('index');
});

Route::get('/quienes-somos', function(){
    return view('quienes_somos');
});


Route::get('/registroUsuario', [UsuariosController::class,'createUser']);
Route::post('/registroUsuario', [UsuariosController::class,'storeUser']);

route::get('/login', [UsuariosController::class, 'showLoginForm'])->name('login');

Route::post('/iniciar-sesion', [UsuariosController::class,'login'])->name('iniciar-sesion');
Route::get('/logout', [UsuariosController::class,'logout'])->name('logout');

Route::post('/enviar-comentario', [ComentarioController::class,'storeComentario']);

Route::get('/servicios', [ServiciosController::class,'show']);

Route::get('/noticias', [NoticiaController::class,'show']);
Route::get('/noticias/{id}', [NoticiaController::class, 'detalle'])->name('noticias.detalle_noticia');

Route::get('/reservar-turno', [TurnoController::class, 'reservarTurno'])->middleware('auth');
Route::post('/guardar-turno', [TurnoController::class,'guardarTurno'])->middleware('auth');
Route::get('/mis-turnos', [TurnoController::class, 'misTurnos'])->name('turnos.mis_turnos');
Route::get('/turnos/{id}', [TurnoController::class, 'detalle'])->name('turnos.detalle_turno');
Route::delete('/eliminar-turno/{id}',[TurnoController::class, 'cancelarTurno'])->name('turnos.eliminar');

