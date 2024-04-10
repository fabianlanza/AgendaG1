<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Telefono;
use App\Models\Correo;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $personas = Persona::all();
        return view('persona.index')->with('personas', $personas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('persona.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $persona = new Persona();

        $persona -> CodPersona = $request -> get('CodPersona');
        $persona -> Nombre = $request -> get('Nombre');
        $persona -> Apellido = $request -> get('Apellido');

        $persona -> save();

        return redirect('persona');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $personaEdit = Persona::find($id);
        return view('persona.edit')->with('personaEdit', $personaEdit);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $personaEdit = Persona::find($id);

        $personaEdit -> CodPersona = $request -> get('CodPersona');
        $personaEdit -> Nombre = $request -> get('Nombre');
        $personaEdit -> Apellido = $request -> get('Apellido');

        $personaEdit ->save();
        return redirect('persona');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eliminarpersona=Persona::find($id);
        $eliminarpersona->delete();

        return redirect('persona');
    }
}
