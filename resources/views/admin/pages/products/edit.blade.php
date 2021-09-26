@extends('admin.layouts.app')


@section('title',"Editar Produto {$product -> name}")



@section('content')

        <h1>Editando o Produto {{$product -> name}}</h1>

        <form action="{{ route('produtos.update', $product->id)}}" method="post">
            @method('PUT')
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Nome:" value=" {{$product -> name}}">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="price" placeholder="Preço:" value=" {{$product -> price}}">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="description" placeholder="Descrição" value=" {{$product -> decription}}">>
            </div>

            <button type="submit" class="btn btn-success">Enviar</button>

        </form>

@endsection


