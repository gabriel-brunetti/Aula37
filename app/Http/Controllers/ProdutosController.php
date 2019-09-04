<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Torno a classe Produto conhecida dentro desse script
use App\Produto;
// Torno a classe Categoria conhecida dentro desse script
use App\Categoria;

class ProdutosController extends Controller
{
    public function index(){
        // Carrega todos os Produtos da tabela
        $produtos = Produto::all();

        // Carrega o produto do id dado (tem que ser a primary key,normalmente é o id)
        // $p = Produto::find(3);
        $categorias = Categoria::all();

        // dd($categorias);

        // Retornando a view listarProduto.blade.php
        return view('listarProdutos',compact('produtos','categorias'));
    }
}
