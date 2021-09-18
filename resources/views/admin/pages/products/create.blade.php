@extends('admin.layouts.app')


@section('title','cadastrar novo produto')



@section('content')

        <h1>Cadastrar novo Produto</h1>

        <form action="{{ route('produtos.store')}}" method="post" enctype="multipart/form-data">
            @csrf

            <input type="text" name="name" placeholder="Nome">
            <input type="text" name="description" placeholder="Descrição">
            <input type="file" name="photo" id="">
            <button type="submit">Enviar</button>

        </form>

@endsection






