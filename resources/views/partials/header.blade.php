<header class="bg-white text-uppercase fw-bold shadow-sm">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="py-3">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Logo" height="75">
        </div>

        <nav class="h-100">
            <ul class="nav gap-4 small fw-semibold h-100">
                @foreach(config('menus.header_links') as $text => $routeName)
                <x-nav-link
                    :url="$routeName === '#' ? '#' : route($routeName)"
                    :text="$text"
                    :active="$routeName === '#' ? false : request()->routeIs($routeName)" />
                <!--//note "request()->routeIs($routeName)" ==> è una funzione nativa di Laravel che controlla direttamente se la rotta attiva ha quel nome -->
                @endforeach
            </ul>
        </nav>
    </div>
</header>