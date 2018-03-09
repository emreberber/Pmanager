@extends('layouts.app') 

@section('content')

<div class="col-md-12 col-lg-12">
    <form method="post" action="{{ route('companies.update', [$company->id]) }}">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="company-name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-4">
                <input value="{{ $company->name }}" type="text" class="form-control" id="company-name" placeholder="Name">
            </div>
        </div>
        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <textarea type="text" class="form-control" id="description" rows="5">{{ $company->description }}</textarea>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary offset-sm-2">Submit</button>
        </div>
    </form>
</div>

<nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Actions</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/companies/{{ $company->id }}">View Companies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/companies">All Compamies</a>
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