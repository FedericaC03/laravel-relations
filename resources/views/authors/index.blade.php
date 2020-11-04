@extends('layouts.admin')

@section('main')

<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">Lastname</th>
        <th scope="col">Birth date</th>
        <th scope="col">Nazionalità</th>
        <th scope="col">Delete</th>
        
      </tr>
    </thead>
    <tbody>
      @foreach ($authors as $author)
        <tr>
            <th scope="row">{{$author->id}}</th>
            <td>{{$author->name}}</td>
            <td>{{$author->lastname}}</td>
            <td>{{$author->birth_date}}</td>
            <td>{{$author->info->nationality}}</td>
            <td>
                    <form action="{{route('Authors.destroy', $author->id)}}"> @method("POST")
                      @csrf
                      @method("DELETE")
                      <button type="button" class="btn btn-danger">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                          <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg>
                      </button>

                    </form>
            </td>
        </tr>
      @endforeach
      
    </tbody>
  </table>


@endsection