@extends('layouts.app')
@section('title', 'Nova categoria')

@section('content')
<form method="POST" action="{{ route('categorias.store') }}">
    @csrf
    @include('categorias._form')
    <button>Salvar</button>
    <a href="{{ route('categorias.index') }}">Voltar</a>
</form>
@endsection