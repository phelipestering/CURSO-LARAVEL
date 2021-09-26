@extends('admin.layouts.app')


@section('title','cadastrar novo produto')



@section('content')

        <h1>Cadastrar novo Produto</h1>

{{-- adicionando mensagem de erro de validação de formularios - AULA 35 --}}

    @include('admin.includes.alerts')


        <form action="{{ route('produtos.store')}}" method="post" enctype="multipart/form-data" class="form-group">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Nome:" value="{{ old('name') }}">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="price" placeholder="Preço:" value="{{ old('price') }}">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="description" placeholder="Descrição" value="{{ old('description')}}">>
            </div>

            <div class="form-group">
                <input type="file"class="form-control" name="image" id="">
            </div>


            <button type="submit" class="btn btn-success">Enviar</button>


        </form>

@endsection







