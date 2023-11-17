<?php

namespace App\Http\Controllers\Doctors;

use App\Http\Controllers\Controller;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class DoctorsController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;
}
