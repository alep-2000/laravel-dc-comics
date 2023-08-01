@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-between">
            <div>
                <p class="mt-4"><span class="fw-bold">Title Comic:</span> {{ $comic->title}} </p>
            </div>
            <div class="mt-3">
                <a href=" {{ route('comics.index')}} " class="btn btn-secondary btn-sm">Comics</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <img class="my-3" src="{{ $comic->thumb }}" alt="{{ $comic->thumb }}">
        </div>
        <div class="col-6 mt-3">
            <p> <span class="fw-bold">Description:</span> {{ $comic->description }} </p>
            <p> <span class="fw-bold">Price:</span> {{ $comic->price }} </p>
            <p> <span class="fw-bold">Serie:</span> {{ $comic->series }} </p>
            <p> <span class="fw-bold">Sale date:</span> {{ $comic->sale_date }} </p>
        </div>
    </div>
</div>
@endsection