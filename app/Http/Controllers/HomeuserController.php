<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeuserController extends Controller
{
    public function homeUser() {
        return view('homeuser');
    }
}
