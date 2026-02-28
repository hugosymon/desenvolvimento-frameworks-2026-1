@extends('layouts.app')
@section('title', 'Categorias')

@section('content')
<a href="{{ route('categorias.create') }}">Nova categoria</a>

@forelse($categorias as $categoria)
<div>
    <div>{{ $categoria->nome }}</div>
    <div>{{ $categoria->cor }}</div>
    <div>{{ $categoria->descricao }}</div>

    <a href="{{ route('categorias.show', $categoria) }}">Ver</a>
    <a href="{{ route('categorias.edit', $categoria) }}">Editar</a>

    <form method="POST" action="{{ route('categorias.destroy', $categoria) }}" onsubmit="return confirm('Remover?')">
        @csrf
        @method('DELETE')
        <button>Remover</button>
    </form>
</div>
@empty
<p>Nenhuma categoria cadastrada</p>
@endforelse
@endsection