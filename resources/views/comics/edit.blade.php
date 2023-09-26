@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Modify comic</h2>
                <a href=" {{ route('comics.index')}} " class="btn btn-secondary btn-sm">Comics</a>
            </div>
            <div>
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action=" {{ route('comics.update', $comic->id) }} " method="POST">
                    @csrf
                    @method('PUT')
                    <div class="class-group">
                        <label class="control-label">Title</label>
                        <input type="text" id="title" name="title" class="form-control" placeholder="Title" value="{{ old('title' ?? $comic->title) }}">
                    </div>
                    <div class="class-group">
                        <label class="control-label">Description</label>
                        <input type="text" id="description" name="description" class="form-control" placeholder="Description" value="{{ old('description' ?? $comic->description) }}">
                    </div>
                    <div class="class-group">
                        <label class="control-label">Thumb</label>
                        <input type="text" id="thumb" name="thumb" class="form-control" placeholder="Thumb" value="{{ old('thumb' ?? $comic->thumb) }}">
                    </div>
                    <div class="class-group">
                        <label class="control-label">Cover Image</label>
                        <input type="text" id="cover_image" name="cover_image" class="form-control" placeholder="Cover Image" value="{{ old('cover_image' ?? $comic->cover_image) }}">
                    </div>
                    <div class="class-group">
                        <label class="control-label">Price</label>
                        <input type="text" id="price" name="price" class="form-control" placeholder="Price" value="{{ old('price' ?? $comic->price) }}">
                    </div>
                    <div class="class-group">
                        <label class="control-label">Series</label>
                        <input type="text" id="series" name="series" class="form-control" placeholder="Series" value="{{ old('series' ?? $comic->series) }}">
                    </div>
                    <div class="class-group">
                        <label class="control-label">Sale Date</label>
                        <input type="text" id="sale_date" name="sale_date" class="form-control" placeholder="Sale Date" value="{{ old('sale_date' ?? $comic->sale_date) }}">
                    </div>
                    <div class="class-group">
                        <label class="control-label">Type</label>
                        <input type="text" id="type" name="type" class="form-control" placeholder="Type" value="{{ old('type' ?? $comic->type) }}">
                    </div>
                    <div class="class-group">
                        <label class="control-label">Artists</label>
                        <input type="text" id="artists" name="artists" class="form-control" placeholder="Artists" value="{{ old('artists' ?? $comic->artists) }}">
                    </div>
                    <div class="class-group">
                        <label class="control-label">Writers</label>
                        <input type="text" id="writers" name="writers" class="form-control" placeholder="Writers" value="{{ old('writers' ?? $comic->writers) }}">
                    </div>
                    <div class="class-group my-3">
                        <button type="submit" class="btn btn-primary btn-success">Modify</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection