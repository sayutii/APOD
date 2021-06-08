<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SkmController extends Controller
{
    public function formSkm() {
        return view('skm.buatskm');
    }

    public function simpan(Request $request) {

          DB::table('skm')->insert(
            ['nama' => $request->nama, 'tempatlahir' => $request->tempatlahir, 'tanggallahir' => $request->tanggallahir, 'jeniskelamin' => $request->jeniskelamin, 'alamat' => $request->alamat],
            // ['email' => 'dayle@example.com', 'votes' => 0],
        );  
    }
}
