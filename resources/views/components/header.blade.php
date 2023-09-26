<header class="overflow-hidden">
    <div class="netflixLogo">
        <a href="{{route('homepage')}}" id="logo">
            <img src="/img/logo.png" alt="Logo Image">
        </a>
    </div>
    <nav class="main-nav">
        <nav class="main-nav">
            <a href="{{route('homepage')}}">Home</a>
            <a href="{{route('lista', ['tipologia' => 'series'])}}">Serie TV</a>
            <a href="{{route('lista', ['tipologia' => 'films'])}}">Film</a>
        </nav>
    </nav>
</header>