<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Telefono;
use App\Models\Persona;

class TelefonoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $telefonos = Telefono::all();
        return view('telefono.index')->with('telefonos', $telefonos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('telefono.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $telefono = new Telefono();

        $telefono -> CodTelefono = $request -> get('CodTelefono');
        $telefono -> Telefono = $request -> get('Telefono');
        $telefono -> CodPersona = $request -> get('CodPersona');

        $telefono -> save();

        return redirect('/telefono');
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
        $telefonoEdit = Telefono::find($id);
        return view('telefono.edit')->with('telefonoEdit', $telefonoEdit);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $telefonoEdit = Telefono::find($id);

        $telefonoEdit -> CodTelefono = $request -> get('CodTelefono');
        $telefonoEdit -> Telefono = $request -> get('Telefono');
        $telefonoEdit -> CodPersona = $request -> get('CodPersona');

        $telefonoEdit ->save();
        return redirect('/telefono');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
