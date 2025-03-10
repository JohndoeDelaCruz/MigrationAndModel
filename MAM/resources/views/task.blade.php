@extends('taskTemplate')

<div class="container mx-auto px-4 py-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Tasks</h2>
        <a href="{{ url('/tasks/create') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded shadow transition duration-200">
            Add New Task
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded shadow" role="alert">
            <p>{{ session('success') }}</p>
        </div>
    @endif

    <ul class="bg-white rounded-lg shadow divide-y divide-gray-200">
        @foreach($tasks as $task)
            <li class="p-4 hover:bg-gray-50 transition duration-150">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="font-semibold text-gray-800">{{ $task->title }}</h3>
                        <p class="text-gray-600 mt-1">{{ $task->description }}</p>
                    </div>
                    <a href="{{ route('tasks.show', $task->id) }}" class="text-blue-500 hover:text-blue-700 font-medium transition duration-150">
                        View Task →
                    </a>
                </div>
            </li>
        @endforeach
    </ul>

    @if(count($tasks) === 0)
        <div class="text-center py-8 text-gray-500">
            <p>No tasks found. Create your first task to get started!</p>
        </div>
    @endif
</div>