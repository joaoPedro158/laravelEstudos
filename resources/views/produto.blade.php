@extends('layout.main')

@section('title', 'Product')

@section('conteudo')
    
    @if ($id !== null) 
        <p>Exibindo o produto de ID: {{$id}}</p>
    @endif
    
@endsection
    