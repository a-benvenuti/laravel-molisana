<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>Molisana</title>
    </head>
    <body>
        @include('partials.header')
        <main class="mt-20 mb-40">
            <div class="container p-20">
                <section class="lunghe pt-20">
                    <h2>LE LUNGHE</h2>
                    <div class="cards">
                        @foreach ($lunghe as $pasta)
                        <div class="card m-10">
                            <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
                        </div>
                        @endforeach  
                    </div>
                </section>
                <section class="corte pt-40">
                    <h2>LE CORTE</h2>
                    <div class="cards">
                        @foreach ($corte as $pasta)
                        <div class="card m-10">
                            <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
                        </div>
                        @endforeach  
                    </div>
                </section>
                <section class="cortissime pt-40">
                    <h2>LE CORTISSIME</h2>
                    <div class="cards">
                        @foreach ($cortissime as $pasta)
                        <div class="card m-10">
                            <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
                        </div>
                        @endforeach  
                    </div>
                </section>
            </div>
        </main>
        @include('partials.footer')
    </body>
</html>