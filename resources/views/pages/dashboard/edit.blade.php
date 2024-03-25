@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-2 fw-bold">Edit the project:</h1>

    <form action="{{route('dashboard.projects.update', $project->id)}}" method="POST">

        @csrf
        @method('PUT')

        <div class="my-3">
          <label for="title" class="form-label">Insert The Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="title" name="title" value='{{old('title') ?? $project->title}}' required>
          @error('title')
          <div class="alert alert-danger mt-1">
            {{$message}}
          </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">Insert The Description</label>
          <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{old('description')?? $project->description}}</textarea>
        </div>

        <div class="mb-3">
            <label for="cover" class="form-label">Insert The Cover</label>
            <input type="text" class="form-control" id="cover" aria-describedby="cover" name="cover" value='{{old('cover') ?? $project->cover}}'>
        </div>

        <button type="submit" class="btn btn-primary d-block ms-auto">ADD</button>
    </form>

</div>
@endsection
