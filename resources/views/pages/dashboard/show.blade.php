@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-2 fw-bold">{{$project->title}}</h1>
    <p>{{$project->description}}</p>


    <div class="d-flex gap-2">
        <a href="{{route('dashboard.projects.edit', $project->id)}}" class="btn btn-warning">EDIT</a>

        <form action="{{route('dashboard.projects.destroy',$project->id)}}" method="POST">

            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger">
                DELETE
            </button>
        </form>
    </div>


</div>
@endsection
