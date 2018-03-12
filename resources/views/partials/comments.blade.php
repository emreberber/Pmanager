<h3><b>{{ count($project->comments) }}  Comment</b></h3>
<div class="row">

    @foreach($comments as $comment)
    <div class="col-md-6">
        <h4>{{ $comment->body }}</h4>
        <p>{{ $comment->url }}</p>
        <a href="/users/{{ $comment->user->id }}">{{ $comment->user->email }}</a>
        <small><p>{{ $comment->created_at }}</p></small>
        <p><a class="btn btn-sm btn-success" href="/projects/{{ $project->id }}" role="button">View Project &raquo;</a></p>
    </div>
    @endforeach

</div>