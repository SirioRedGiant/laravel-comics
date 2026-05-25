@props(['comic'])

<div class="col-6 col-md-4 col-lg-2 mb-4">
    <div class="card bg-transparent border-0 h-100 text-white text-start">
        <div class="ratio ratio-1x1 overflow-hidden mb-2 shadow">
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" class="img-fluid object-fit-cover w-100 h-100">
        </div>
        <div>
            <h6 class="text-uppercase small fw-bold m-0 text-truncate">
                {{ $comic['series'] }}
            </h6>
            <small class="text-primary fw-semibold">{{ $comic['price'] }}</small>
        </div>
    </div>
</div>