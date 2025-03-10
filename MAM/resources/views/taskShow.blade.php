
@extends('taskTemplate')

<h1>Show Task</h1>
<a href="{{ route('tasks.edit', $id) }}">Edit Task</a>
<ul>

    <li>{{ $title }} - {{ $description }}</li>
</ul>
<script src="{{ asset('js/app.js') }}"></script>
