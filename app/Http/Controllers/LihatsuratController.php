<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LihatsuratController extends Controller
{
    public function lihatSurat() {
        return view('lihatsurat');
    }
}
