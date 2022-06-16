@extends('layouts.app')


@section('content')


<div class="container py-4">
    <h1>Create a new comic</h1>

    <form action="{{route('comics.store')}}" method="post">
    @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Comic title" aria-describedby="titleHelper">
            <small id="titleHelper" class="text-muted">Type the comic name</small>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Thumb</label>
            <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Comic thumb" aria-describedby="thumbHelper">
            <small id="thumbHelper" class="text-muted">Type the thumb image</small>
        </div>

        <div class="mb-3">
            <label for="cover_img" class="form-label">Cover image</label>
            <input type="text" name="cover_img" id="cover_img" class="form-control" placeholder="Comic cover_img" aria-describedby="cover_imgHelper">
            <small id="cover_imgHelper" class="text-muted">Type the cover image</small>
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <textarea class="form-control" name="description" id="description" rows="8"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Add Comic</button>

    </form>

</div>


@stop