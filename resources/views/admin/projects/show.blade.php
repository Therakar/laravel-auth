@extends('layouts.admin')

@section('content')
    <div class="container">
        @if (session('message'))
            <div class="alert alert-success mt-3">
                {{session('message')}}
            </div>
        @endif
        <div class="card mt-5 mb-3">
            <div class="card-header">
                <h5>{{$project->title}}</h5>
            </div>
            <div class="card-body">
                <p class="card-text"><strong>Customer:</strong> {{$project->customer}}</p>
                <p class="card-text"><strong>Version:</strong> v{{$project->version}}</p>
                <p class="card-text"><strong>Description:</strong> {{$project->description}}</p>
                <div>
                    <a href="" class="btn btn-warning"><i class="fa-solid fa-pen"></i></a>
                    <a href="" class="btn btn-danger"><i class="fa-solid fa-skull"></i></a>
                </div>
            </div>

        </div>
        <a href="{{ route('admin.projects.index')}}" class="btn btn-primary">Return to Projects List</a>
    </div>
    
@endsection