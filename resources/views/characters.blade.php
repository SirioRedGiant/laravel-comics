@extends('layouts.master')

@section('content')
<div class="container my-5 text-white">
    <h1 class="text-uppercase fw-bold mb-4 text-primary">DC Artists & Team</h1>
    <ul class="list-group bg-dark">
        @foreach($artists as $artist)
        <li class="list-group-item bg-transparent text-white border-secondary">
            <i class="fa-solid fa-pen-nib text-primary me-2"></i> {{ $artist }}
        </li>
        @endforeach
    </ul>
</div>
@endsection