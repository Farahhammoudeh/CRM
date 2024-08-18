<x-layout>
    <div class="flex flex-col items-start p-6 bg-gray-100 rounded-lg w-full mx-auto h-screen">
        <h1 class="text-2xl font-bold text-gray-900 mb-6">Edit User</h1>
        <form action="{{ route('users.update', $user->id) }}" method="POST" class="space-y-6 w-full">
            @csrf
            @method('PATCH')
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Name:</label>
                <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" required
                    class="mt-1 block w-full px-4 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" required
                    class="mt-1 block w-full px-4 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700"> Password:</label>
                <input type="password" name="password" id="password" required
                    class="mt-1 block w-full px-4 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div class="flex justify-end space-x-4">
                <a href="{{ route('users.index') }}" class="inline-block px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">Cancel</a>
                <button type="submit" class="inline-block px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Update</button>
            </div>
        </form>
    </div>
</x-layout>
