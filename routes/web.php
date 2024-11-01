<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\PagamentoController;

Route::middleware('auth')->group(function () {

    Route::get('/checkout', [PagamentoController::class, 'criarPagamento'])->name('checkout');

    Route::get('/', [PaginaController::class, 'index'])->name('paginaAdministrativa');

    // Rotas para CRUD Usuário
    Route::resource('usuario', UsuarioController::class);
    Route::get('/usuario', [UsuarioController::class, 'show'])->name('usuario.index');

    // Rotas para CRUD Categoria
    Route::resource('categoria', CategoriaController::class)->parameters(['categoria' => 'categoria']);

    // Rotas para CRUD Produto
    Route::resource('produto', ProdutoController::class);

    Route::get('/contato', [ContatoController::class, 'index'])->name('contato.index');
    Route::put('/carrinho/update/{item}', [CarrinhoController::class, 'update'])->name('carrinho.update');
    Route::delete('/carrinho/delete/{item}', [CarrinhoController::class, 'destroy'])->name('carrinho.destroy');
    Route::get('/carrinho', [CarrinhoController::class, 'index'])->name('carrinho.index');
 


    // Rotas para gerenciar produtos no carrinho
    Route::get('/home/show/{id}', [HomeController::class, 'show'])->name('home.show');
    Route::post('/home/show/{id}', [HomeController::class, 'adicionar'])->name('carrinho.adicionar');
});

// Rotas públicas
Route::get('/home/index', [HomeController::class, 'home'])->name('home.index');
Route::get('/home/produtos', [HomeController::class, 'produtos'])->name('home.produtos');
Route::get('/home/sobre-nos', [HomeController::class, 'sobreNos'])->name('home.sobre-nos');

// Rotas de contato
Route::get('/home/contato', [ContatoController::class, 'showForm'])->name('contato.show');
Route::post('/home/contato', [ContatoController::class, 'enviar'])->name('contato.enviar');

// Rotas de autenticação de usuário 
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
