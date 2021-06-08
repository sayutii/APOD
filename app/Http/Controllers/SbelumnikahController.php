<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SbelumnikahController extends Controller
{
    public function formSbelumnikah() {
        return view('sbelumnikah.buatsnikah');
    }
}
