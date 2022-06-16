@extends('layouts.app')


@section('content')


<div class="container py-4">
    <h1 class="text-center pb-4">Comics</h1>

    <a class="btn btn-primary" href="{{route('comics.create')}}" >Create Comic</a>

    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Thumb</th>
                <th>Description</th>
                <th>Cover_img</th>
                <th>Created_at</th>
                <th>Updated_at</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($comics as $comic)
            <tr>
                <td scope="row">{{$comic->id}}</td>
                <td>{{$comic->title}}</td>
                <td><img width="60" src="{{$comic->thumb}}" alt=""></td>
                <td>{{$comic->description}}</td>
                <td><img width="60" src="{{$comic->cover_img}}" alt=""></td>
                <td>{{$comic->created_at}}</td>
                <td>{{$comic->updated_at}}</td>
                <td>
                    <a href="{{route('comics.show', $comic->id)}}">View</a> - <a href="#">Edit</a> - <a href="#">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>


@stop