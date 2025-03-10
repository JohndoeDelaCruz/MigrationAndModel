@extends('taskTemplate')

<a href="{{ url('/tasks/create') }}" class="btn btn-primary">Add New Task</a>
<ul>

@foreach($tasks as $task)
    <li>{{ $task->title }} - {{ $task->description }} <a href="{{ route('tasks.show', $task->id) }}">View Task</a>;</li>
@endforeach

</ul>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif