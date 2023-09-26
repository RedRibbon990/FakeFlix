<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Netflix</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css" />
</head>

<body>
    <div class="wrapper overflow-hidden">
        <header class="overflow-hidden">
            <div class="netflixLogo">
                <a href="{{ route('homepage') }}" id="logo">
                    <img src="/img/logo.png" alt="Logo Image">
                </a>
            </div>
            <nav class="main-nav">
                <a href="{{ route('homepage') }}">Home</a>
                <a href="{{ route('lista', ['tipology' => 'series']) }}">Serie TV</a>
                <a href="{{ route('lista', ['tipology' => 'films']) }}">Film</a>
            </nav>
        </header>

        <section class="main-container overflow-hidden container">
            <div class="main-container">
                <img width="380" src="{{ $item['cover'] }}" alt="">
            </div>
            <div class="container">
                <h1>{{ $item['name'] }}</h1>
                <p>{{ $item[0] }}</p>
            </div>
        </section>

        <footer>

        </footer>
    </div>
</body>

</html>
