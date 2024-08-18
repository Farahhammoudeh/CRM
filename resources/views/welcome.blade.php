<x-layout>
    <div class="min-h-screen bg-gray-100">
        <!-- Dashboard Header -->
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold text-gray-900">
                    Dashboard
                </h1>
            </div>
        </header>

        <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <!-- Dashboard Content -->
            <div class="grid grid-cols-1 gap-6 lg:grid-cols-3">
                <!-- Card 1: Summary Metric -->
                <div class="bg-white overflow-hidden shadow rounded-lg p-4">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-indigo-500 rounded-md p-3">
                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M9 16h6"></path>
                            </svg>
                        </div>
                        <div class="ml-4 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500">Total Projects</dt>
                                <dd class="text-2xl font-bold text-gray-900">36</dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <!-- Card 2: Summary Metric -->
                <div class="bg-white overflow-hidden shadow rounded-lg p-4">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-green-500 rounded-md p-3">
                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3"></path>
                            </svg>
                        </div>
                        <div class="ml-4 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500">Active Tasks</dt>
                                <dd class="text-2xl font-bold text-gray-900">128</dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <!-- Card 3: Summary Metric -->
                <div class="bg-white overflow-hidden shadow rounded-lg p-4">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-yellow-500 rounded-md p-3">
                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 11.5A5.5 5.5 0 1014.5 17"></path>
                            </svg>
                        </div>
                        <div class="ml-4 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500">Pending Reviews</dt>
                                <dd class="text-2xl font-bold text-gray-900">24</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Graph Card -->
            <div class="mt-8 bg-white overflow-hidden shadow rounded-lg p-6">
                <h2 class="text-xl font-bold text-gray-900 mb-4">Project Completion Rate</h2>
                <div class="relative">
                    <!-- Replace this with your graph image -->
                    <img src="{{ asset('images/completion-rate-graph.png') }}" alt="Project Completion Rate Graph" class="w-full h-full object-cover rounded-lg">
                </div>
            </div>
        </main>
    </div>
</x-layout>
