@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-2 fw-bold">Create a new project:</h1>

        <form action="{{ route('dashboard.projects.store') }}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="my-3">
                <label for="title" class="form-label">Insert The Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                    aria-describedby="title" name="title" value='{{ old('title') }}' required>
                @error('title')
                    <div class="alert alert-danger mt-1">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Insert The Description</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ old('description') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="cover" class="form-label">Insert The Cover</label>
                <input type="file" class="form-control @error('cover') is-invalid @enderror" id="cover" aria-describedby="cover" name="cover"
                    value='{{ old('cover') }}'>
                @error('cover')
                    <div class="alert alert-danger mt-1">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary d-block ms-auto">ADD</button>
        </form>

    </div>
@endsection
