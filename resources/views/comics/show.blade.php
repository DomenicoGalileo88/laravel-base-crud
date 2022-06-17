@extends('layouts.app')


@section('content')


<div class="container bg_azure py-5">
    <img class="img-fluid" src="{{$comic->thumb}}" alt="">
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