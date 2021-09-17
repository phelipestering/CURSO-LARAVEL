<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControleProdutos extends Controller
{
    public function index()
    {
        $products = ['product 01', 'product 02', 'product03'];
        return  $products;
    }

    public function show($id){
        return "exibindo o produto de id: {$id}";
    }

    public function create(){
        return "exibindo o formulario de cadastro";
    }

    public function edit($id){
        return "exibir o formulario editando o produto: {$id}";
    }

    public function store(){
        return "cadastrando um novo produto";
    }

    public function update($id){
        return "Editando o Produto: {$id}";
    }


    public function destroy($id){
        return "deletando o Produto: {$id}";
    }

}



