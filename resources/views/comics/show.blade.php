@extends('layouts.app')


@section('content')


<div class="container py-4">
    <img class="img-fluid" src="{{$comic->cover_img}}" alt="">
    <div class="text my-4">
        <h1>
            {{$comic->title}}
        </h1>
        <p>
            {{$comic->description}}
        </p>
    </div>

</div>


@stop