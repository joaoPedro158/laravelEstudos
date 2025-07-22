@extends('layout.main')

@section('title', 'Produtos')

@section('conteudo')
    
    <h1>Tabela de produtos</h1>

    @if ($busca !== '')
        <p>Buscando por: {{$busca}}</p>
        
    @endif
    
@endsection
    

