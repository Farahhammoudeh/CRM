<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="flex h-full ">
        <!-- Sidebar -->
        <div class="bg-indigo-600 text-white w-64 p-4">
          <div class="text-2xl font-bold mb-6">CRM</div>
          <ul>
            <li class="mb-4">
              <a href="#" class="flex items-center px-4 py-2 rounded-md bg-indigo-700">
                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7m-9 2v12m6-6H9"></path>
                </svg>
                Dashboard
              </a>
            </li>
            <li class="mb-4">
              <a href="{{ route('users.index') }}" class="flex items-center px-4 py-2 rounded-md hover:bg-indigo-700">
                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5V10a1 1 0 00-1-1h-4V7a1 1 0 00-1-1h-4V4a1 1 0 00-1-1h-4V2a1 1 0 00-1-1H3a1 1 0 00-1 1v16a1 1 0 001 1h4v2a1 1 0 001 1h8a1 1 0 001-1v-2z"></path>
                </svg>
                Users
              </a>
            </li>
            <li class="mb-4">
              <a href="{{ route('clients.index') }}" class="flex items-center px-4 py-2 rounded-md hover:bg-indigo-700">
                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18M3 12h18M3 17h18"></path>
                </svg>
                Clients
              </a>
            </li>
            <li class="mb-4">
              <a href="{{ route('tasks.index') }}" class="flex items-center px-4 py-2 rounded-md hover:bg-indigo-700">
                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11V3m8 8V3m-8 8h8"></path>
                </svg>
                Tasks
              </a>
            </li>
            <li class="mb-4">
              <a href="{{route('projects.index')}}" class="flex items-center px-4 py-2 rounded-md hover:bg-indigo-700">
                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h14M5 8h14M5 12h14m-7 4h7"></path>
                </svg>
                Projects
              </a>
            </li>
            <li class="mb-4">
              <a href="/login" class="flex items-center px-4 py-2 rounded-md hover:bg-indigo-700">
                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                Log In 
              </a>
            </li>
          </ul>
        </div>
      <main class="w-full">{{ $slot }}</main>      
    </div>
  </body>
</html>