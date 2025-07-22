@extends('layout.main')

@section('title', 'Arduino events')
    
@section('conteudo')
    

       <h1>Teste de Laravel</h1>
       <img src="/img/arduino-banner.jpg" alt="banner de um arduino">
       <p>{{$nome}}</p>
       <p>{{$idade}}</p>
       @if ($nome == "JP" && $idade == 20)
            <p>Ola ADM</p>
       @else
           <p>sai fora otario</p>
        @endif

        @for($i = 0; $i < count($array); $i++)
            <p>{{$array[$i]}}</p>
        @endfor
@endsection
  
