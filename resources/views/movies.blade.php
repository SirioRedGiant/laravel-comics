@extends('layouts.master')

@section('content')
<div class="container my-5 text-white">
    <h1 class="text-uppercase fw-bold mb-4 text-primary">Graphic Novels & Movies</h1>
    <div class="row">
        @foreach($movies as $comic)
        <x-comic-card :comic="$comic" />
        @endforeach
    </div>
</div>
@endsection