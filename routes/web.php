<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controller\Auth;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function(){
    Route::get('/',[Admin\Auth\LoginController::class,'loginForm']);
    Route::get('/login',[Admin\Auth\LoginController::class,'loginForm'])->name('admin.login');
    Route::get('/dashboard',[Admin\DashboardController::class,'index'])->name('admin.dashboard');
});

Route::get('/masyarakat',[Admin\MasyarakatController::class,'index'])->name('admin.masyarakat');
Route::get('/buatakun',[Admin\MasyarakatController::class,'create'])->name('admin.buatakun');
Route::post('/buatakun/simpan', [Admin\MasyarakatController::class,'simpan'])->name('admin.buatakun.simpan');

//user

//Route::get('/login',[Auth\LoginController::class,'loginUser'])->name('auth.login');
Route::get('/login', 'Auth\LoginController@loginUser')->name('auth.login');
Route::get('/homeuser', 'HomeuserController@homeUser');
Route::get('/lihatsurat', 'LihatsuratController@lihatSurat');
Route::get('/datasaya', 'DatasayaController@dataSaya');

//surat kurang mampu
Route::get('/buatskm', 'SkmController@formSkm');
Route::post('skm/simpan', 'SkmController@simpan')->name('skm.simpan');

//rekomendasi KTP
Route::get('/buatrekomktp', 'RekomktpController@ktp');

//rekomendasi KK
Route::get('/buatrekomkk', 'RekomkkController@formKk');

//surat ket usaha
Route::get('/buatsku', 'SkuController@formSku');

//surat ket berkelaukuan baik
Route::get('/buatskbb', 'SkbbController@formSkbb');

//surat keterangan biasa
Route::get('/buatsuket', 'SuketController@formSuket');

//surat keterangan Domisili
Route::get('/buatsdomisili', 'SdomisiliController@formSdomisili');

//surat belum nikah
Route::get('/buatsnikah', 'SbelumnikahController@formSbelumnikah');