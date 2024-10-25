<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

Route::middleware('auth')->group(function () {

    Route::get('/login', function () {
        return view("admin.login");
    })->name('login');

    // Rotas por GET (receber dados) 
    Route::get('/', [PaginaController::class, 'index']) -> name('paginaAdministrativa'); 

    //Rota para exibir Crud Usuário
    Route::resource('usuario', UsuarioController::class);
    Route::get('/usuario', [UsuarioController::class, 'show']) -> name('usuario.index');

    //Rota para exibir Crud Categoria
    Route::resource('categoria', CategoriaController::class)->parameters(['categoria' => 'categoria',]);

    //Rota para exibir Crud Produto
    Route::resource('produto', ProdutoController::class);

    
});

Route::get('/home/index', [HomeController::class, 'home']) -> name('home.index'); 
Route::get('/home/produtos', [HomeController::class, 'produtos']) -> name('home.produtos'); 


//rotas de autenticação de usuário 
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
