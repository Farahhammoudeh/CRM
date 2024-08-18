<x-layout>
    <div class="p-6 bg-gray-100 rounded-lg">
        <a href="{{ route('clients.create') }}" class="inline-block px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700 mb-6">Create New Client</a>
        <ul class="space-y-4 h-screen">
            @foreach($clients as $client)
                <li class="p-4 bg-white border border-gray-200 rounded-lg flex justify-between items-center space-x-3">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900">{{ $client->name }}</h3>
                    </div>
                    <div class="space-x-2">
                        <a href="{{ route('clients.edit', $client->id) }}" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Edit</a>
                    </div>                
                </li>
            @endforeach
        </ul>
    </div>
</x-layout>
