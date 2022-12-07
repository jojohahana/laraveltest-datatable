<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PermitController extends Controller
{
    public function getIzinSakit () {
        return view ('izin_sakit');
    }
}
