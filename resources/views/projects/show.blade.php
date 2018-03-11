@extends('layouts.app') 
@section('content')

<div class="col-md-12 col-lg-12">
    <div class="well well-lg">
        <h1 class="display-3">{{ $project->name }}</h1>
        <p>{{ $project->description }}</p>
        <!-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p> -->
    </div>
    <br>
 
    <form method="post" action="{{ route('comments.store') }}">
        {{ csrf_field() }}
        
        <input name="commentable_type" type="hidden" value="Project">
        <input name="commentable_id" type="hidden" value="{{ $project->id }}">

        <div class="form-group row">
            <label for="body" class="col-sm-2 col-form-label">Comment</label>
            <div class="col-sm-10">
                <textarea type="text" name="body" class="form-control" id="body" rows="3"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="url" class="col-sm-2 col-form-label">Proof of work done (Url/Photos)</label>
            <div class="col-sm-10">
                <textarea type="text" name="url" class="form-control" id="url" rows="1"></textarea>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary offset-sm-2">Submit</button>
        </div>
    </form>
  
    <div class="row">
        {{--
        @foreach($project->project as $project)
        <div class="col-md-6">
            <h2>{{ $project->name }}</h2>
            <p>{{ $project->description }}</p>
            <p><a class="btn btn-secondary" href="/projects/{{ $project->id }}" role="button">View Projects &raquo;</a></p>
        </div>
        @endforeach
        --}}
    </div>
</div>

<nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Actions</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/projects/{{ $project->id }}/edit">Edit</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/projects/create">Create Proejct</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/projects">My Projects</a>
            </li>

            @if($project->user_id == Auth::user()->id)

            <li class="nav-item">
            <a  class="nav-link" 
              href="#"
                  onclick="
                  var result = confirm('Are you sure you wish to delete this project?');
                      if( result ){
                              event.preventDefault();
                              document.getElementById('delete-form').submit();
                      }
                          "
                          >
                  Delete
              </a>

              <form id="delete-form" action="{{ route('projects.destroy', [$project->id]) }}" 
                method="POST" style="display: none;">
                        <input type="hidden" name="_method" value="delete">
                        {{ csrf_field() }}
              </form>

            </li>

            @endif

            <li class="nav-item">
                <a class="nav-link" href="#">Add new user</a>
            </li>
            <li class="nav-item dropup">
            <a class="nav-link dropdown-toggle" href="" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Members</a>
            <div class="dropdown-menu" aria-labelledby="dropdown10">
              <a class="dropdown-item" href="#">Action</a>
            </div>
          </li>
        </ul>
    </div>
</nav>


@endsection