<?php

namespace App\Http\Controllers;

use App\Http\Requests\HospitalRequest;
use App\Models\Hospital;


class HospitalController extends Controller
{

    public function __construct()
    {
        $this->middleware('onehospital')->only(['create', 'store']); // MIDDLEWARE LA VALIDAR UN SOLO HOSPITAL [NO SE PUEDE PUEDE ACCEDER A LA RUTA '/hospital/create']
                                                        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(count(Hospital::all()) ? 'TRUE' : 'FALSE');
        $hospitals = Hospital::all(); // Obtenemos los hospitales
        return view('hospital.index', compact('hospitals')); // Se envian por 'compact'
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hospital.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HospitalRequest $request) // FormRequest [app/Request]
    {             
        Hospital::create($request->all()); // Agregar hospital por medio del formulario con el $request[POST]
        return redirect()->route('hospital.index'); // Ya registrado el hospital nos vamos a la vista de los medicos
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function show(Hospital $hospital)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function edit(Hospital $hospital)
    {
        return view('hospital.edit', compact('hospital')); // Apartado para editar hospital
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function update(HospitalRequest $request, Hospital $hospital)
    {
        $hospital->update($request->all());
        return redirect()->route('hospital.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hospital $hospital)
    {
        $hospital->delete();
        return redirect()->route('hospital.index');
    }
}
