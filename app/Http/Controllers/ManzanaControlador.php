<?php

namespace App\Http\Controllers;

use App\Models\Manzana;
use Illuminate\Http\Request;

class ManzanaControlador extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $manzana = Manzana::all();

        return view("welcome", ["manzana"=> $manzana]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("insertarManzanas");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                // Crear una nueva manzana en la base de datos
                $manzana = new Manzana;
                // Coger los parametros del formulario dependiendo de su name          
                $manzana->tipoManzana = $request->input('tipoManzana');
                $manzana->precioKilo = $request->input('precioKilo');
                // Guardar la manzana
                $manzana->save();
        
        
                // Redireccionar a la ruta de la página de inicio
                return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Manzana $manzana)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Manzana $manzana)
    {
        return view("editarManzana");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Manzana $manzana)
    {
        // $request->id
        Manzana::where('id', $request->input('id'))->update(
            ['tipoManzana' => $request->input('tipoManzana'),
            'precioKilo' => $request->input('precioKilo'),]);

            return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Manzana $manzana, Request $request)
    {
        Manzana::where('id', $request->id)->delete();

        return redirect('/');
    }
}
