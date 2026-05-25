@props(['url', 'text', 'active' => false])

<li class="nav-item d-flex align-items-center {{ $active ? 'border-bottom border-primary border-4' : '' }}">
    <a class="nav-link px-0 py-5 {{ $active ? 'text-primary' : 'text-dark' }}" href="{{ $url }}">
        {{ $text }}
    </a>
</li>