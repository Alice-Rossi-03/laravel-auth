@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-2 fw-bold">My projects:</h1>

    <table class="table table-striped mt-4">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
          </tr>
        </thead>
        <tbody>

            @foreach ( $projects as $project)
            <tr>
                <th>{{$project->id}}</th>
                <td>{{$project->title}}</td>
                <td>{{$project->slug}}</td>
              </tr>
            @endforeach


        </tbody>
      </table>
</div>
@endsection
