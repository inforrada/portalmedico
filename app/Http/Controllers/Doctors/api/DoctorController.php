<?php

namespace App\Http\Controllers\Doctors\api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Doctors\core\DoctorController as DoctorCore;

class DoctorController extends Controller
{


    public function softDelete ($id) {
        DoctorCore::softDeleteCore($id);
        // \App\Http\Controllers\Doctors\core\DoctorController::softDeleteCore($id);

        return response()->json ([
            'status' => 'success',
            'code' => 201,
            'message' => "Soft delete succesful"
        ], 200);
    }
}
