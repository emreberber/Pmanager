 @extends('layouts.app') 
 @section('content')


<div class="col-md-8 col-sm-12 offset-md-2 table-responsive">
    <a href="/projects/create" class="btn btn-primary"><b style="color:white">Create new Project</b></a>
    <hr>
    <div class="card text-center bg-light">
        <h5 class="card-header">Projects </h5>
        
    </div>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
            <tr>
                <th scope="row">{{ $project->id }}</th>
                <td><a href="/projects/{{ $project->id }}">{{ $project->name }}</a></td>
                <td>{{ $project->description }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection