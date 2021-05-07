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
        <header>
            <!-- logo -->
            <div class="header_logo container pt-30 pb-50">
                <img src="{{ asset('img/marchio-sito-test.png') }}" alt="logo">
            </div>
            <!-- /logo -->
            <!-- navbar -->
            <nav class="header_nav">
                <ul>
                    <li class="active "><a class="p-20" href="">Home</a></li>
                    <li><a class="p-20" href="">Prodotti</a></li>
                    <li><a class="p-20" href="">News</a></li>
                </ul>
                <!-- hamburger menu -->
                <div class="hamburger">
                    <i class="fas fa-bars"></i>
                </div>
                <!-- /hamburger menu -->
            </nav>
            <!-- /navbar -->
        </header>
        
    </body>
</html>