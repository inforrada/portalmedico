<?php

namespace App\Http\Controllers\Doctors\core;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DoctorController extends Controller
{
    public static function softDeleteCore ($id) {
        DB::table('doctors')
        ->where ('id', '=', $id)
        ->update (['baja' => 'S']);

    }


}
