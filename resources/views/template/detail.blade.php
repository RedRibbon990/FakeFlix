<x-layout>
    <x-header></x-header>

    <main>
        <div class="wrapper overflow-hidden">
            <section class="main-container overflow-hidden container">
                <div class="main-container">
                    <img width="700" src="{{$item['cover']}}" alt="">
                </div>
                <div class="container">
                    <h1>{{$item['name']}}</h1>
                    <p>{{$item[0]}}</p>
                </div>
            </section>
        </div>
    </main>

    <x-footer></x-footer>
</x-layout>