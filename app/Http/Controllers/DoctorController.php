<?php

namespace App\Http\Controllers;

use App\Http\Requests\DoctorRequest;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    //
    public function index (){
        $doctors = [
            [1, 'David', 'Martinez', 'Neurocijano'],
            [2, 'Antonio', 'Fernandez', 'Cardiólogo']     
        ];
        //dd ($doctors);
        return view('doctors.index', ['doctors' => $doctors]);

    }
    public function show ($id) {
        $doctors = [
            [1, 'David', 'Martinez', 'Neurocijano'],
            [2, 'Antonio', 'Fernandez', 'Cardiólogo']     
        ];

        $key = -1;
        $i = 0;
        while (($key < 0) && ($i < count ($doctors))) {
            if ($doctors[$i][0] == $id) {
                $key = $i;
            }
            $i++;
        } 
        
        return view ('doctors.show', ['doctor' => $doctors[$key]]); 
    }
    public function create () {

        return view ('doctors.create');
    }
    public function store (DoctorRequest $request) {
        dd($request);

        return redirect()->route('doctors.index')->with('message', 'Doctor guardado correctamente')->with('code', '0');
    }

    public function edit ($id) {
        $doctors = [
            [1, 'David', 'Martinez', 'Neurocijano'],
            [2, 'Antonio', 'Fernandez', 'Cardiólogo']     
        ];

        $key = -1;
        $i = 0;
        while (($key < 0) && ($i < count ($doctors))) {
            if ($doctors[$i][0] == $id) {
                $key = $i;
            }
            $i++;
        } 
        
        return view ('doctors.edit', ['doctor' => $doctors[$key]]); 
    }
    public function update (DoctorRequest $request, $id) {
        //dd($request);
        return redirect()->route('doctors.index')->with('message', 'Doctor guardado correctamente')->with('code', '0');
    }

    public function destroy ($id) {
        return redirect()->route('doctors.index')->with('message', 'Doctor guardado correctamente')->with('code', '0');
        
    }
}
