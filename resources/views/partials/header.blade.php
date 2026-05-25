<header class="bg-white text-uppercase fw-bold shadow-sm">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="py-3">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Logo" height="75">
        </div>

        <nav class="h-100">
            <ul class="nav gap-4 small fw-semibold h-100">
                @foreach(config('menus.header_links') as $text => $url)
                <x-nav-link :url="$url" :text="$text" :active="$text === 'Comics'" />
                @endforeach
            </ul>
        </nav>
    </div>
</header>