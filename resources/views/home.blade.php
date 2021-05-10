@extends('layouts.main')

@section('pageTitle')
    La Molisana | Home
@endsection

@section('main')

<section class="lunghe pt-20">
    <h2>LE LUNGHE</h2>
    <div class="cards">
        @foreach ($lunghe as $pasta)
        <div class="card m-10">
            <a href="{{route('prodotti', ['id' =>$pasta['id']])}}"><img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}"></a>
        </div>
        @endforeach  
    </div>
</section>
<section class="corte pt-40">
    <h2>LE CORTE</h2>
    <div class="cards">
        @foreach ($corte as $pasta)
        <div class="card m-10">
            <a href="{{route('prodotti', ['id' =>$pasta['id']])}}"><img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}"></a>
        </div>
        @endforeach  
    </div>
</section>
<section class="cortissime pt-40">
    <h2>LE CORTISSIME</h2>
    <div class="cards">
        @foreach ($cortissime as $pasta)
        <div class="card m-10">
            <a href="{{route('prodotti', ['id' =>$pasta['id']])}}"><img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}"></a>
        </div>
        @endforeach  
    </div>
</section>

@endsection