@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Insert a new comic</h2>
                    <a href=" {{ route('comics.index')}} " class="btn btn-secondary btn-sm">Comics</a>
                </div>
                <div>
                    <form action=" {{ route('comics.store') }} " method="POST">
                        @csrf
                        <div class="class-group">
                            <label class="control-label">Title</label>
                            <input type="text" id="title" name="title" class="form-control" placeholder="Title">
                        </div>
                        <div class="class-group">
                            <label class="control-label">Description</label>
                            <input type="text" id="description" name="description" class="form-control" placeholder="Description">
                        </div>
                        <div class="class-group">
                            <label class="control-label">Thumb</label>
                            <input type="text" id="thumb" name="thumb" class="form-control" placeholder="Thumb">
                        </div>
                        <div class="class-group">
                            <label class="control-label">Cover Image</label>
                            <input type="text" id="cover_image" name="cover_image" class="form-control" placeholder="Cover Image">
                        </div>
                        <div class="class-group">
                            <label class="control-label">Price</label>
                            <input type="text" id="price" name="price" class="form-control" placeholder="Price">
                        </div>
                        <div class="class-group">
                            <label class="control-label">Series</label>
                            <input type="text" id="series" name="series" class="form-control" placeholder="Series">
                        </div>
                        <div class="class-group">
                            <label class="control-label">Sale Date</label>
                            <input type="text" id="sale_date" name="sale_date" class="form-control" placeholder="Sale Date">
                        </div>
                        <div class="class-group">
                            <label class="control-label">Type</label>
                            <input type="text" id="type" name="type" class="form-control" placeholder="Type">
                        </div>
                        <div class="class-group">
                            <label class="control-label">Artists</label>
                            <input type="text" id="artists" name="artists" class="form-control" placeholder="Artists">
                        </div>
                        <div class="class-group">
                            <label class="control-label">Writers</label>
                            <input type="text" id="writers" name="writers" class="form-control" placeholder="Writers">
                        </div>
                        <div class="class-group my-3">
                            <button type="submit" class="btn btn-primary btn-success">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection