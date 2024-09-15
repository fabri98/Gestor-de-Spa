<?php

namespace App\Http\Controllers;

use App\Models\servicios;
use App\Models\Turno;
use Auth;
use Illuminate\Http\Request;

class TurnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function reservarTurno(Request $request)
    {
        $servicios = servicios::all();
        $servicioSeleccionado = $request->input('servicio');

        return view('reservar_turno', compact('servicios', 'servicioSeleccionado'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function guardarTurno(Request $request)
    {
        $turno = new Turno();
        $turno->id_user = $request->id_user;
        $turno->id_servicio = $request->id_servicio;
        $turno->fecha_turno = $request->fecha_turno;
        $turno->hora_turno = $request->hora_turno;

        $turno->save();

        return redirect()->intended('/mis-turnos');
    }

    /**
     * Display the specified resource.
     */
    public function misTurnos()
    {
        $turnos = Auth::user()->turnos()->with('servicio')->paginate(10);
        return view('mis_turnos', compact('turnos'));
    }

    public function detalle($id)
    {
        $turno = Turno::find($id);

        return view('detalle_turno', compact('turno'));
    }
    public function show(Turno $turno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Turno $turno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Turno $turno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function cancelarTurno($id)
    {
        $turno = Turno::findOrFail($id);
        $turno -> delete();

        return redirect()->intended('/mis-turnos');
    }
}
