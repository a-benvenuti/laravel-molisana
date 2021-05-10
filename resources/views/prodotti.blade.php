@extends('layouts.main')

@section('pageTitle')
    La Molisana | Prodotti
@endsection

@section('main')
<div class="product">
    <a href=""><i class="fas fa-chevron-left"></i></a>
    
    <h1>{{$pasta['titolo']}}</h1>
    <img src="{{$pasta['src-h']}}">
    <img src="{{$pasta['src-p']}}" alt="{{$pasta['titolo']}}">
    <p>{!! $pasta['descrizione'] !!}</p>

    <a href=""><i class="fas fa-chevron-right"></i></a>
</div>

@endsection

@section('css')
<style>
    main{background: none; background-color: #b7dae5;}
</style>
@endsection
