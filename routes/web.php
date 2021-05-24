<?php

use App\Http\Controllers\Financeiro\FinanceiroController;
use App\Http\Controllers\Financeiro\CaixaController;
use App\Http\Controllers\Acoes\FamiliaController;
use App\Http\Controllers\Acoes\ComunidadeController;
use App\Http\Controllers\Acoes\ArrecadacaoController;
use App\Http\Controllers\Acoes\AcoesController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return redirect()->route('home');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/home', [HomeController::class, 'home'] )->name('home');

/*ROTAS DOS MENUS DAS AÇÕES*/
Route::get('/acoes/dashboard', [AcoesController::class, 'dashboard' ])->name('acoes.dashboard'); //DASHBOARD
Route::get('/acoes/acoes', [AcoesController::class, 'acoes' ])->name('acoes.acoes');

/*ROTAS DOS MENUS DAS ARRECADAÇÕES*/
Route::get('/acoes/arrecadacao', [ArrecadacaoController::class, 'arrecadacao' ])->name('acoes.arrecadacao.index');

/*ROTAS DOS MENUS DAS COMUNIDADESS*/
Route::get('/acoes/comunidade', [ComunidadeController::class, 'comunidade' ])->name('acoes.comunidade.index');
Route::get('/acoes/comunidade/add', [ComunidadeController::class, 'addView' ])->name('acoes.comunidade.addView');
Route::post('/acoes/comunidade/inserir', [ComunidadeController::class, 'add' ])->name('acoes.comunidade.add');
Route::get('/acoes/comunidade/{comunidadeID}', [ComunidadeController::class, 'dados' ])->name('acoes.comunidade.dados');
Route::put('/acoes/comunidade/editEndereco/{endComunidadeID}', [ComunidadeController::class, 'editEndereco' ])->name('acoes.comunidade.editEndereco');
Route::post('/acoes/comunidade/inserirResponsavel', [ComunidadeController::class, 'addResponsavel'])->name('acoes.comunidade.addResponsavel');
Route::delete('/acoes/comunidade/apagarResponsavel/{respComunidadeID}', [ComunidadeController::class, 'apagarResponsavel'])->name('acoes.comunidade.apagarResponsavel');
Route::put('/acoes/comunidade/editObs/{ComunidadeID}', [ComunidadeController::class, 'editObs' ])->name('acoes.comunidade.editObs');

/*ROTAS DOS MENUS DAS FAMILIAS*/
Route::get('/acoes/familia', [FamiliaController::class, 'familia' ])->name('acoes.familia.index');
Route::get('/acoes/familiaAddView', [FamiliaController::class, 'familiaAddView' ])->name('acoes.familia.addView');
Route::post('/acoes/familiaAdd', [FamiliaController::class, 'familiaAdd' ])->name('acoes.familia.add');
Route::get('/acoes/familiaPerfilView/{perfil}', [FamiliaController::class, 'familiaPerfilView' ])->name('acoes.familia.PerfilView');
Route::put('/acoes/familiaPerfilView/{perfil}/edit', [FamiliaController::class, 'familiaEdit' ])->name('acoes.familia.PerfilEdit');


/*ROTAS DO MENUS DO FINANCEIRO*/
Route::get('/financeiro/dashboard', [FinanceiroController::class, 'dashboard' ])->name('financeiro.dashboard'); //DASHBOARD

/*ROTAS DO MENUS DO CAIXA*/
Route::get('/financeiro/caixa', [CaixaController::class, 'caixa' ])->name('financeiro.caixa.index');