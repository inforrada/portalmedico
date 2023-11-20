<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class HomeController extends Controller
{
    //
    
    public function suma ($a, $b) {
        
        return response()->json(['result' => ($a + $b)]);
    }


    public function index ($name, $surname) {

        return view("inicio", ['name' => $name, 'surname' => $surname]);
    }
    public function end (){
        return view ("fin");
    }

    public function save (Request $request) {

    
        // dd($request);

        if ($request->hasFile('img')) {
            $ruta =  $request->file('img')->store("public/doctors/images");
        }
        $url = Storage::url($ruta);

      // Storage::delete ($ruta);

        return "Fichero guardado en $ruta <br> $url";
    }
}
