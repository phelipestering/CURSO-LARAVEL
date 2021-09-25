@extends('admin.layouts.app')

@section('title', 'Gestao de Produtos')

@section('content')


        <h1> exibindo os produtos aqui</h1>
        <a href="{{route('produtos.create')}}">Cadastrar Produtos</a>

        <hr>

        <table border="1">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{ $product -> name }}</td>
                    <td>{{ $product -> price }}</td>
                    <td>
                        <a href="">Detalhes</a>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>

        {{-- {!! $products->link() !!} --}}


@endsection
