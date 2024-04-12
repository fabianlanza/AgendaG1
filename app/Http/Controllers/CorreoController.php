<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Correo;
use App\Models\Persona;

class CorreoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $correos = Correo::all();
        return view('correo.index')->with('correos', $correos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        //
        return view('correo.create')->with('id', $id);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $correo = new Correo();

        $correo -> CodCorreo = $request -> get('CodCorreo');
        $correo -> Correo = $request -> get('Correo');
        $correo -> CodPersona = $request -> get('CodPersona');

        $correo -> save();

        //return redirect('/correo');


        $correos = Correo::all();
        return view('correo.index')->with('correos', $correos)->with('persona', $request->get('CodPersona'));

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $correos = Correo::All();
        $persona = Persona::find($id);
        return view('correo.index2')->with('persona', $persona)->with('correos', $correos);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $correoEdit = Correo::find($id);
        return view('correo.edit')->with('correoEdit', $correoEdit);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $correoEdit = Correo::find($id);

        $correoEdit -> CodCorreo = $request -> get('CodCorreo');
        $correoEdit -> Correo = $request -> get('Correo');
        $correoEdit -> CodPersona = $request -> get('CodPersona');

        $correoEdit ->save();
        return redirect('/correo');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
