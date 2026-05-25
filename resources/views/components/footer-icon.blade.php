@props(['img', 'text'])

<div class="d-flex align-items-center">
    <img src="{{ Vite::asset('resources/img/' . $img) }}" alt="{{ $text }}" height="35" class="me-2">
    <span>{{ $text }}</span>
</div>