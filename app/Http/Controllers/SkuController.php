<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkuController extends Controller
{
    public function formSku() {
        return view('sku.buatsku');
    }
}
