<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $patients = Patient::paginate(6);
        return view('patients.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $patient = [];
        $patient['nombre'] =  $request->input('nombre');
        $patient['apellido1'] =  $request->input('apellido1');
        $patient['apellido2'] =  $request->input('apellido2');
        $patient['email'] =  $request->input('email');
        
        $miPaciente = new Patient($patient);
       // dd($miPaciente);
       
        $miPaciente->saveOrFail ();
        //dd($request);
        return redirect()->route('patients.index')->with('message', 'Paciente guardado correctamente')->with('code', '0');
  
    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        //
        //dd($patient);
        return view ('patients.show', compact('patient')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patient $patient)
    {
        //
        return view ('patients.edit', compact('patient')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patient $patient)
    {
        //
        //dd ($patient);
        $patient->nombre=  $request->input('nombre');
        $patient->apellido1 =  $request->input('apellido1');
        $patient->apellido2 =  $request->input('apellido2');
        $patient->email =  $request->input('email');

    //    $patient->fill ($request->validated());
            
        $patient->saveOrFail ();
        //dd($request);
        return redirect()->route('patients.index')->with('message', 'Paciente guardado correctamente')->with('code', '0');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        //dd ($patient);
        $patient->deleteOrFail();
        
        return redirect()->route('patients.index')->with('message', 'Paciente borrado correctamente')->with('code', '0');
    
    }
}
