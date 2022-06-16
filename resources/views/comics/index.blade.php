@extends('layouts.app')


@section('content')


<div class="mx-5 py-4 bg-light">
    <div class="Add text-center">
        <h1 class="pb-4">Comics</h1>

        <a class="btn btn-primary mb-4" href="{{route('comics.create')}}">Create Comic</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Thumb</th>
                <th>Description</th>
                <th>Price</th>
                <th>Series</th>
                <th>Sale_Date</th>
                <th>Type</th>
                <th>Created_at</th>
                <th>Updated_at</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($comics as $comic)
            <tr>
                <td scope="row">{{$comic->id}}</td>
                <td><strong>{{$comic->title}}</strong></td>
                <td><img width="100" src="{{$comic->thumb}}" alt=""></td>
                <td>{{$comic->description}}</td>
                <td>{{$comic->price}}€</td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->sale_date}}</td>
                <td>{{$comic->type}}</td>
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