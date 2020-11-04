@extends('layouts.admin')

@section('main')

<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">View</th>
        <th scope="col">Update</th>
        <th scope="col">Delete</th>

      </tr>
    </thead>
    <tbody>
      @foreach ($genres as $genre)
        <tr>
            <th scope="row">{{$genre->id}}</th>
            <td>{{$genre->name}}</td>
            <td><a href=""><button type="button" class="btn btn-link">View</button></a> </td>
            <td><a href="{{route("genres.edit")}}"><button type="button" class="btn btn-primary">Update</button></a></td>
            <td><a href=""><button type="button" class="btn btn-danger">Delete</button></a></td>
        </tr>
      @endforeach
      
    </tbody>
  </table>


@endsection