@extends('taskTemplate')

@section('content')
<div class="max-w-2xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
    <div class="bg-white shadow overflow-hidden rounded-lg">
        <div class="px-6 py-5 border-b border-gray-200 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-gray-900">Task Details</h1>
            <a href="{{ route('tasks.edit', $id) }}" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150">
                Edit Task
            </a>
        </div>
        <div class="px-6 py-5">
            <div class="mb-4">
                <h2 class="text-lg font-semibold text-gray-800">{{ $title }}</h2>
                <p class="mt-2 text-gray-600">{{ $description }}</p>
            </div>
            
            <div class="mt-6 border-t border-gray-200 pt-4">
                <a href="{{ route('tasks.index') }}" class="text-blue-600 hover:text-blue-800 transition duration-150">
                    &larr; Back to all tasks
                </a>
            </div>
        </div>
    </div>
</div>
@endsection