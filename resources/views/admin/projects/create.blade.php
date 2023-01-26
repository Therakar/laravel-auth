@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h1>Create a New Project</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div> 
        @endif 
        <form action="{{route('admin.projects.store')}}" method="POST" class="mb-5">
        @csrf
            <div class="mb-3">
               <label for="title" class="form-label">Title*</label>
               <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="customer" class="form-label">Customer*</label>
                <input type="text" class="form-control" id="customer" name="customer">
            </div>
            <div class="mb-3">
                <label for="version" class="form-label">Version*</label>
                <input type="text" class="form-control" id="version" name="version">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description*</label>
                <textarea class="form-control" id="description" name="description" rows="10"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Confirm</button>
        </form>

        <div>
            <a href="{{ route('admin.projects.index')}}" class="btn btn-primary">Return to Projects List</a>
        </div>
        
    </div>
    
@endsection