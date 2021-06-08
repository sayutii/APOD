<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SdomisiliController extends Controller
{
    public function formSdomisili() {
        return view('sdomisili.buatsdomisili');
    }
}
