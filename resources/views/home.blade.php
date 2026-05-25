@extends('layouts.master')

@section('content')
<div class="container my-5 position-relative">

    <div class="bg-primary text-white px-4 py-2 text-uppercase fw-bold position-absolute" style="top: -75px; left: 15px; z-index: 3; font-size: 1.1rem;">
        Current Series
    </div>

    <div class="row pt-3">
        @if(isset($comics) && count($comics) > 0)
        @foreach($comics as $comic)
        <x-comic-card :comic="$comic" />
        @endforeach
        @else
        <div class="col-12 text-center py-5">
            <p class="text-muted">Nessun fumetto trovato</p>
        </div>
        @endif
    </div>

    <div class="text-center mt-4">
        <button class="btn btn-primary rounded-0 px-5 text-uppercase fw-bold">Load More</button>
    </div>
</div>
@endsection