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
    public function create()
    {
        //
        return view('correo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
