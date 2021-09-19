@extends('admin.layouts.app')


@section('title','cadastrar novo produto')



@section('content')

        <h1>Cadastrar novo Produto</h1>

{{-- adicionando mensagem de erro de validação de formularios - AULA 35 --}}

@if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
@endif

        <form action="{{ route('produtos.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="text" name="name" placeholder="Nome:" value="{{ old('name') }}">
            <input type="text" name="description" placeholder="Descrição" value="{{ old('description')}}">>
            <input type="file" name="photo" id="">
            <button type="submit">Enviar</button>

        </form>

@endsection







