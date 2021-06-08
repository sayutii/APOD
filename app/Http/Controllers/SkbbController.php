<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkbbController extends Controller
{
    public function formSkbb() {
        return view('skbb.buatskbb');
    }
}
