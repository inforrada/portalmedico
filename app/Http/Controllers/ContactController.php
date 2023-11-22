<?php

namespace App\Http\Controllers;

use App\Mail\EmailMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Doctors\DoctorController;
use App\Jobs\MiTrabajoJob;

class ContactController extends Controller
{
    //
    public function create () {

        return view ('contacts.create');
    }

    public function store (Request $request) {

        //dd ($request);
        $nombre = $request->name;
        $correo = $request->correo;
        $mensaje = $request->msg;

        $for = 'valor@pordefecto.com';
        
        $aux = new EmailMessage($nombre, $correo, $mensaje);
        $aux->nombrevista ="emails.correo";

        Mail::to($for)->send($aux);
        dispatch(new MiTrabajoJob ());
        return redirect()->back();

    }
}
