<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MasyarakatController extends Controller
{
    public function index() {
        return view('admin.masyarakat');
    }

    public function create() {
        return view('admin.buatakun');
    }

    public function simpan(Request $request) {
        // echo "sayuti";
        DB::table('masyarakat')->insert(
            ['nik' => $request->nik, 'nama' => $request->nama, 'tempatlahir' => $request->tempatlahir, 'tanggallahir' => $request->tanggallahir, 'jeniskel' => $request->jeniskel, 'alamat' => $request->alamat, 'password' => $request->password],
        );
        return redirect()->route('admin.buatakun')->with('message','Data berhasi disimpan.');
    }
}
