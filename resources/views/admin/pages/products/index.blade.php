@extends('admin.layouts.app')

@section('title', 'Gestao de Produtos')

@section('content')


        <h1> exibindo os produtos aqui</h1>

        @if ($teste === 'aui')

            é igual

        @elseif ($teste == 123)

            é igual 123

            @else

            é diferente

        @endif

        @unless ($teste === '123')

            fsdafsf

            @else

            fsdafsd

        @endunless

        @isset ($teste2)

            <p>{{ $teste2 }}</p>

        @endisset

        @empty($teste3)

            <p>exibe a função empty</p>

        @endempty


        @auth

            <p>Autenticação</p>

        @else

            <p>Não autenticado</p>

        @endauth

        @guest

            <p>nao autenticado</p>

        @endguest


        @switch($teste)

            @case(1)
                igual 1
                @break

            @case(123)
                igual 2

                @break

            @case (123)

                igual 3
                @break

            @default
                default


        @endswitch




@endsection



