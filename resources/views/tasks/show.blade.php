<x-layout>
    <div class="p-6 bg-gray-100 rounded-lg h-screen">
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-900 mb-2">{{ $task->name }}</h1>
            <p class="text-gray-700 text-lg mb-4">{{ $task->description }}</p>
            <p class="text-sm text-gray-600">Project: <span class="font-semibold text-gray-800">{{ $task->project->name }}</span></p>
        </div>
        
        <div class="flex space-x-4">
            <a href="{{ route('tasks.edit', $task->id) }}" class="inline-block px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Edit task</a>
            <a href="{{ route('tasks.index') }}" class="inline-block px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">Back to task</a>
        </div>
    </div>
</x-layout>
