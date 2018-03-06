 @extends('layouts.app') 
 @section('content')


<div class="col-md-8 col-sm-12 offset-md-2 table-responsive">
    <div class="card text-center bg-light">
        <h5 class="card-header">Companies</h5>
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
            @foreach($companies as $company)
            <tr>
                <th scope="row">{{ $company->id }}</th>
                <td><a href="/companies/{{ $company->id }}">{{ $company->name }}</a></td>
                <td>{{ $company->description }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection