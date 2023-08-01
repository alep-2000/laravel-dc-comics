@extends('layouts.app')

@section('content')
        <section class="bg-dark">
            <div class="container z-1 postion-absolute">
                <div class="row">
                    <div class="col-12">
                        <div class="content text-light d-flex justify-content-between align-items-center my-5">
                            <h1>DC COMICS</h1>
                            <a class="btn btn-secondary btn-sm" href="{{route('comics.index')}}">MY COMICS</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection