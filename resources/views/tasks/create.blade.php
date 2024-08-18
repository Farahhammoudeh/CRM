<x-layout>
    <div class="flex flex-col items-start p-6 bg-gray-100 rounded-lg w-full mx-auto h-screen">
        <h1 class="text-2xl font-bold text-gray-900 mb-6">Create Task</h1>
        <form action="{{ route('tasks.store') }}" method="POST" class="space-y-6 w-full">
            @csrf
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Task Name:</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required
                    class="mt-1 block w-full px-4 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Description:</label>
                <textarea name="description" id="description" rows="4" 
                    class="mt-1 block w-full px-4 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{ old('description') }}</textarea>
            </div>
            <div class="flex justify-end space-x-4">
                <a href="{{ route('tasks.index') }}" class="inline-block px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">Cancel</a>
                <button type="submit" class="inline-block px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Create</button>
            </div>
        </form>
    </div>
</x-layout>
