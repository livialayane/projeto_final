<?php

use Illuminate\Support\Facades\Route;
use App\Models\Sobre;
use App\Models\Contato;
use App\Models\Equipe;
use App\Models\Servico;
use App\Models\Destaque;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $sobre = Sobre::latest()->first()->toArray();
    $servico_blade = Servico::all()->toArray();
    $destaques = Destaque::all()->toArray();
    $equipe = Equipe::all()->toArray();
    $contato = Contato::latest()->first()->toArray();
    return view('welcome',
    array('sobre'=>$sobre,'missao'=>$sobre,'valores'=>$sobre,'titulo'=>$sobre,'subtitulo'=>$sobre,'contato'=>$contato,'servico'=>$servico_blade,'destaques'=>$destaques)
)->with( array('equipe'=>$equipe));
});

Route::get('/clientes', function () {
    return view('clientes');
});