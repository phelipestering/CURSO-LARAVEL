@extends('admin.layouts.app')

@section('title', 'Gestao de Produtos')

@section('content')


        <h1> exibindo os produtos aqui</h1>
        <a href="{{route('produtos.create')}}" class="btn btn-primary">Cadastrar Produtos</a>

        {{-- <form action="{{route('produtos.search')}}" method="POST" class="form form-inline">
            @csrf
            <input type="text" name="filter" id="" placeholder="Filtrar:" class="form-control">
 --}}

        </form>


        <hr>

        <table class="table table-dark">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{ $product -> name }}</td>
                    <td>{{ $product -> price }}</td>
                    <td>{{ $product -> description }}</td>
                    <td>
                        <a href="{{ route('produtos.show', $product->id)}}">Detalhes</a> <br>
                        <a href="{{ route('produtos.edit', $product->id)}}">Editar o Produto</a>
                    </td>

                </tr>

                @endforeach
            </tbody>
        </table>
        <hr>

        {!! $products -> links() !!}


@endsection
