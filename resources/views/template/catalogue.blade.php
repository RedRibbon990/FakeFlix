<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Netflix</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/css/style.css" />

<body>
    <div class="wrapper overflow-hidden">

        <x-header></x-header>

        <section class="main-container overflow-hidden container">
            <div class="box">
                @foreach ($data as $item)

                <a href="{{route('dettaglio', ['uri' => $item['uri']])}}">
                    <img width="420" src="{{$item['cover']}}" alt="">
                </a>
                @endforeach

            </div>
        </section>

        <x-footer></x-footer>

    </div>
</body>

</html>