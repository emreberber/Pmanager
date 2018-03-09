@extends('layouts.app') 
@section('content')

<div class="col-md-12 col-lg-12">
    <div class="jumbotron">
        <h1 class="display-3">{{ $company->name }}</h1>
        <p>{{ $company->description }}</p>
        <!-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p> -->
    </div>
    <div class="row">
        @foreach($company->project as $project)
        <div class="col-md-6">
            <h2>{{ $project->name }}</h2>
            <p>{{ $project->description }}</p>
            <p><a class="btn btn-secondary" href="/projects/{{ $project->id }}" role="button">View Projects &raquo;</a></p>
        </div>
        @endforeach
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
                <a class="nav-link" href="/companies/{{ $company->id }}/edit">Edit</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Update</a>
            </li>
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