<header>
    <!-- logo -->
    <div class="header_logo container pt-30 pb-50">
        <img src="{{ asset('img/marchio-sito-test.png') }}" alt="logo">
    </div>
    <!-- /logo -->
    <!-- navbar -->
    <nav class="header_nav">
        <ul>
            <li class="active "><a class="p-20" href="{{route('homepage')}}">Home</a></li>
            <li><a class="p-20" href="{{route('prodotti')}}">Prodotti</a></li>
            <li><a class="p-20" href="{{route('news')}}">News</a></li>
        </ul>
        <!-- hamburger menu -->
        <div class="hamburger">
            <i class="fas fa-bars"></i>
        </div>
        <!-- /hamburger menu -->
    </nav>
    <!-- /navbar -->
</header>