<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\DoctorRequest;

class DoctorController extends Controller
{
    //
    public function index (){
        /* $doctors = [
            [1, 'David', 'Martinez', 'Neurocijano'],
            [2, 'Antonio', 'Fernandez', 'Cardiólogo']     
        ]; */
        
        $doctors = DB::table('doctors')
        //->join ('users', 'users.id', '=', 'doctors.id')
        // ->whereNull ('baja')
        // ->whereNotNull ('baja')
        //->where('telefono', '999888777')
        //->whereNot('telefono', '999888777')
       // ->where('telefono', '999888777')
        //->orWhere('telefono', '999888666')
       // ->where("telefono", '=', '9998888777') // <> / !=  > < <= >= like
        //->whereRaw("nombre like '%v%' or nombre like '%a%'")
        //->get();
        ->paginate(3);
//                dd($doctors);
    /*    $objSQL = DB::table('doctors'); //->join ('users', 'users.id', '=', 'doctors.id');

        if (1 == 1) {
            $objSQL = $objSQL->whereRaw("nombre like '%v%' or nombre like '%a%'");
        }

        //->join ('users', 'users.id', '=', 'doctors.id')
        // ->whereNull ('baja')
        // ->whereNotNull ('baja')
        //->where('telefono', '999888777')
        //->whereNot('telefono', '999888777')
       // ->where('telefono', '999888777')
        //->orWhere('telefono', '999888666')
       /* ->whereRaw("nombre like '%v%' or nombre like '%a%'")
        
        ->get(); 

//        $doctors = $objSQL->limit(2)->orderBy('nombre', 'desc')->get();
        $doctors = $objSQL->limit(2)->orderByDesc('nombre')->get(); */
       /* $objSQL = DB::table('doctors')
        ->select ('apellido1', DB::raw('max(telefono) as contador'))->groupBy('apellido1')->get(); 
        */
       // $objSQL = DB::statement('select * from doctors')->get();
       
      // $subSQL = DB::table('users')->selct ('id')->where ('id', '>', 0);

        //$objSQL = DB::table ('doctors')
        //->joinSub ($subSQL, 'subsql', 'subsql.id', '=', 'doctors.id')->get();

        //dd ($objSQL);
        return view('doctors.index', ['doctors' => $doctors]);

    }
    public function show ($id) {
       /*$doctors = [
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
        } */
        $doctor = DB::table('doctors')->find($id);
        return view ('doctors.show', ['doctor' => $doctor]); 
    }
    public function create () {

        return view ('doctors.create');
    }
    public function store (DoctorRequest $request) {
      //  dd($request);
        
        $doctor = $request->validated();

        /* $doctor =[
            'nombre' => $request->nombre,
            'apellido1' => $request->input('apellido1')
        ]; */
        $doctor['apellido1'] =  $request->input('apellido1');
        $doctor['apellido2'] =  $request->input('apellido2');
        $doctor['email'] =  $request->input('email');
        $doctor['telefono'] =  $request->input('telefono');
        $doctor['dni'] =  $request->input('dni');

        DB::table('doctors')->insert ($doctor);
        
        return redirect()->route('doctors.index')->with('message', 'Doctor guardado correctamente')->with('code', '0');
    }

    public function edit ($id) {
       /* $doctors = [
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
        }  */
        $doctor = DB::table('doctors')->find($id);
        
        return view ('doctors.edit', ['doctor' => $doctor]); 
    }
    public function update (DoctorRequest $request, $id) {
        $doctor = $request->validated();
        $doctor['apellido1'] =  $request->input('apellido1');
        $doctor['apellido2'] =  $request->input('apellido2');
        $doctor['email'] =  $request->input('email');
        $doctor['telefono'] =  $request->input('telefono');
        $doctor['dni'] =  $request->input('dni');
        
        //$doctor['id'] =  $id;
        
        DB::table('doctors')
            ->where ('id', '=', $id)
            ->update ($doctor);
        //dd($request);
        
        return redirect()->route('doctors.index')->with('message', 'Doctor guardado correctamente')->with('code', '0');
    }

    public function softdelete ( $id) {
        DB::table('doctors')
            ->where ('id', '=', $id)
            ->update (['baja' => 'S']);
            return redirect()->route('doctors.index')->with('message', 'Doctor dado de baja correctamente')->with('code', '0');
        }
    public function destroy ($id) {
       // dd($id);
       /* 
       ORM

       Doctor->borraVisitas ()
       Doctor->destroy ();
       ----
       QB

       sqlDoctorDelete
       sqlVisitasDoctorDelete

       ---
       sqlVisitasDoctorDelete
       sqlDoctorDelete

       */ 
       DB::table('doctors')->delete($id);

       // DB::table('doctor_patient')->where('doctor_id', '=', $id)->delete();

        return redirect()->route('doctors.index')->with('message', 'Doctor borrado correctamente')->with('code', '0');
        
    }
}
