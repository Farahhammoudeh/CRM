<x-layout>
    <div class="p-6 bg-gray-100 rounded-lg h-screen">
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-900 mb-2">{{ $project->name }}</h1>
            <p class="text-gray-700 text-lg mb-4">{{ $project->description }}</p>
            <p class="text-sm text-gray-600">Client: <span class="font-semibold text-gray-800">{{ $project->client->name }}</span></p>
        </div>
        
        <div class="flex space-x-4">
            <a href="{{ route('projects.edit', $project->id) }}" class="inline-block px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Edit Project</a>
            <a href="{{ route('projects.index') }}" class="inline-block px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">Back to Projects</a>
        </div>
    </div>
</x-layout>
