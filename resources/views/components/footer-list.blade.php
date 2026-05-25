@props(['title', 'links'])

<h5 class="text-white text-uppercase small fw-bold mb-3">{{ $title }}</h5>
<ul class="list-unstyled small mb-4">
    @foreach($links as $link)
    <li>
        <a href="#" class="text-reset text-decoration-none">{{ $link }}</a>
    </li>
    @endforeach
</ul>