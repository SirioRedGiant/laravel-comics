@props(['url', 'text', 'active' => false])

<li>
    {{-- se 'active' è true, si attiverà la classe active altrimenti nulla --}}
    <a href="{{ $url }}" class="{{ $active ? 'active' : 'text-dark' }} text-decoration-none">
        {{ $text }}
    </a>
</li>