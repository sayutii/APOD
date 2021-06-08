<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuketController extends Controller
{
    public function formSuket() {
        return view('suket.buatsuket');
    }
}
