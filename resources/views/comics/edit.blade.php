@extends('layouts.app')


@section('content')


<h1 class="text-center py-4">Update comic</h1>

@include('partials.error')

<div class="container py-4 d-flex justify-content-center">

    <form class="w-50" action="{{route('comics.update', $comic->id)}}" method="post">
        @csrf

        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Comic title" aria-describedby="titleHelper" value="{{$comic->title}}">
            <small id="titleHelper" class="text-muted">Type the comic name</small>
        </div>
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3">
            <label for="thumb" class="form-label">Thumb</label>
            <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Comic thumb" aria-describedby="thumbHelper" value="{{$comic->thumb}}">
            <small id="thumbHelper" class="text-muted">Type the thumb image</small>
        </div>
        @error('thumb')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" name="price" id="price" class="form-control" placeholder="Comic price" aria-describedby="priceHelper" value="{{$comic->price}}">
            <small id="priceHelper" class="text-muted">Price comic</small>
        </div>
        @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" name="series" id="series" class="form-control" placeholder="Comic series" aria-describedby="seriesHelper" value="{{$comic->series}}">
            <small id="seriesHelper" class="text-muted">Type series</small>
        </div>
        @error('series')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale date</label>
            <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="Comic sale_date" aria-describedby="sale_dateHelper" value="{{$comic->sale_date}}">
            <small id="sale_dateHelper" class="text-muted">Sale date period</small>
        </div>
        @error('sale_date')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" name="type" id="type" class="form-control" placeholder="Comic type" aria-describedby="typeHelper" value="{{$comic->type}}">
            <small id="typeHelper" class="text-muted">Type comic</small>
        </div>
        @error('type')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="8">
            {{$comic->description}}
            </textarea>
            @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Add Comic</button>

    </form>

</div>


@stop