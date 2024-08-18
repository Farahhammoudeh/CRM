<h2>
    {{ $project->name }}
</h2>

<p>
    Congrats! Your project has been created.
</p>

<p>
    <a href="{{ url('/projects/' . $project->id) }}">View Your project</a>
</p>
