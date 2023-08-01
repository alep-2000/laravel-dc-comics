@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-12">
                <h1>MY COMICS</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table mb-5 z-3 position-relative">
                    <thead>
                        <tr class="text-primary">
                            <th>ID</th>
                            <th>TITLE</th>
                            <th>PRICE</th>
                            <th>SERIES</th>
                            <th>SALE DATE</th>
                            <th>TYPE</th>
                            <th>ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($comics as $comic)
                        <tr>
                            <td> {{ $comic->id }} </td>
                            <td> {{ $comic->title }} </td>
                            <td> {{ $comic->price }} </td>
                            <td> {{ $comic->series }} </td>
                            <td> {{ $comic->sale_date }} </td>
                            <td> {{ $comic->type }} </td>
                            <td>
                                <a href=" {{ route('comics.show', $comic->id) }} " class="btn btn-info btn-sm"><i class="fa-solid fa-circle-info"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection