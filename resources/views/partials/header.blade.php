@php
    $links = ['characters', 'comics', 'movies', 'tv', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop'];
@endphp

<div class="container">
    <nav class="d-flex justify-content-center align-items-center mt-5">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt=" DC logo">
        <ul class="d-flex">
            @foreach ($links as $link)
                <li class="p-3">{{ $link }}</li>
            @endforeach
        </ul>
    </nav>
</div>
