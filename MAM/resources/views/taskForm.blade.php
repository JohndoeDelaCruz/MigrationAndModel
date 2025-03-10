@extends('taskTemplate')

@if(isset($id))
<form method="POST" action="/tasks/{{ $id }}">
    @method('PUT')
@else
<form method="POST" action="/tasks">
@endif

    @csrf

    @if(isset($id))
    <input type="hidden" name="id" value="{{ $id }}">
    <input type="text" name="title" value="{{ $title }}" required>
    <input type="text" name="description" value="{{ $description }}" required>
    @else
    <input type="text" name="title" required>
    <input type="text" name="description" required>
    @endif
    
    <input type="submit" value="Submit">
</form>