@extends('layouts.admin')

@section('content')
    <h1>Projects List</h1>
    {{-- <table class="table table-dark table-striped">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Author</th>
              <th scope="col">Version</th>
              <th scope="col">Slug</th>
              <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            
                <tr>
                    <td>{{$project->id}}</td>
                    <td>{{$project->title}}</td>
                    <td>{{$project->author}}</td>
                    <td>{{$project->version}}</td>
                    <td>{{$project->slug}}</td>
                    <td></td>
                </tr>
            
            
        </tbody>
    </table> --}}
    @foreach ($projects as $project)
        <div class="card mb-3">
            <div class="card-header">
                Featured
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$project->title}}</h5>
                <p class="card-text"><strong>Author:</strong> {{$project->author}}</p>
                <p class="card-text"><strong>Version:</strong> v{{$project->version}}</p>
                <p class="card-text"><strong>Slug:</strong> {{$project->slug}}</p>
                <a href="#" class="btn btn-primary">Info</a>
            </div>
        </div>
    @endforeach
@endsection