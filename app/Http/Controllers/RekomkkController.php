<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RekomkkController extends Controller
{
    public function formKk() {
        return view('rekomendasikk.buatrekomkk');
    }
}
