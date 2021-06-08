<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RekomktpController extends Controller
{
    public function ktp() {
        return view('rekomendasiktp.buatrekomktp');
    }
}
