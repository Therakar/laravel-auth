@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h1>Projects List</h1>
        <a href="{{route('admin.projects.create')}}" class="btn btn-success mt-5 mb-3"><i class="fa-solid fa-plus md-1"></i> New Project</a>
        @foreach ($projects as $project)
            <div class="card mb-3">
                <div class="card-header">
                    <h5>{{$project->title}}</h5>
                </div>
                <div class="card-body">
                    <p class="card-text"><strong>Customer:</strong> {{$project->customer}}</p>
                    <p class="card-text"><strong>Version:</strong> v{{$project->version}}</p>
                    <p class="card-text"><strong>Slug:</strong> {{$project->slug}}</p>
                    <div>
                        <a href="{{ route('admin.projects.show', $project->slug) }}" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a> {{-- uso $project->slug al posto di $project->id in modo da usare lo slug al posto dell'id --}}
                        <a href="" class="btn btn-warning"><i class="fa-solid fa-pen"></i></a>
                        <a href="" class="btn btn-danger"><i class="fa-solid fa-skull"></i></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
