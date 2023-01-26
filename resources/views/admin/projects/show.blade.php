@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="card mt-5 mb-3">
            <div class="card-header">
                <h5>{{$project->title}}</h5>
            </div>
            <div class="card-body">
                <p class="card-text"><strong>Customer:</strong> {{$project->customer}}</p>
                <p class="card-text"><strong>Version:</strong> v{{$project->version}}</p>
                <p class="card-text"><strong>Description:</strong> {{$project->description}}</p>
                <div>
                    <a href="" class="btn btn-warning">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </div>
            </div>

        </div>
        <a href="{{ route('admin.projects.index')}}" class="btn btn-primary">Return to Projects List</a>
    </div>
    
@endsection