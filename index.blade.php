<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
  @vite('resources/css/app.css')
</head>
<body>

<!-- NavBar -->
<nav class="bg-gray-100 border-gray-200">
    <div class="max-w-screen-xl px-4 py-1 mx-auto md:px-6">
        <div class="flex items-center">
            <ul class="flex flex-row mt-0 mr-6 space-x-8 text-sm font-medium">
                <li>
                    <a href="#" class="text-black dark:text-white hover:underline" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="#" class="text-black dark:text-white hover:underline">Company</a>
                </li>
                <li>
                    <a href="#" class="text-black dark:text-white hover:underline">Team</a>
                </li>
                <li>
                    <a href="#" class="text-black dark:text-white hover:underline">Features</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- SideBar -->
<div class="flex flex-wrap  w-10/12 h-screen">
    <div class="w-3/12 bg-gray-100 rounded p-3 shadow-lg">
        <ul class="space-y-2 text-sm">
            <li>
                <a href="#" class="flex items-center space-x-3 text-violet-500 p-2 rounded-md font-medium hover:bg-gray-200 bg-gray-200 focus:shadow-outline">
                    <span class="text-gray-600">
                        <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </span>
                    <span>Home</span>
                </a>
            </li>
           
            <li>
                <a href="#" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                    <span class="text-gray-600">
                        <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </span>
                    <span>My profile</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                    <span class="text-gray-600">
                        <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </span>
                    <span>Change password</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                    <span class="text-gray-600">
                        <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                    </span>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>


<!-- halaman konten -->

    <div class="w-9/12">
        <div class="p-4 ">
             <table class="w-full text-left font-sans table-auto mt-12 text-sm" >
             <h1 class="text-center text-4xl font-bold">LogBook </h1>
        <thead>
            <tr>
                <th>KEGIATAN</th>
                <th>TANGGAL</th>
                <th>KENDALA</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach($logs as $log)
            <tr>
                <td>{{$log->kegiatan}}</td>
                <td>{{$log->tanggal}}</td>
                <td>{{$log->kendala}}</td>
                <td>
                    <!-- edit -->
                    <button class="bg-violet-700 py-1 px-2 rounded-full">
                    <a href="/logs/{{$log->id }}/edit">
                    <img src="img/icons8-edit-48.png" alt="" class="w-4">
                    </a>
                    </button>

                    <!-- delete -->
                    <form action="/logs/{{$log->id}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="bg-orange-500 py-1 px-2 rounded-full">
                        <img src="/img/trash.png" alt="" class="w-4">
                        <!-- <input type="submit" value="delete"> -->
                        </button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
        <!-- create -->
        <button class="border-solid border-2 border-indigo-600" type="submit">
        <a href="/logs/create">create</a>
        </button>

        
    </table>
        </div>
    </div>
</div>
 
 
   


  

    @vite('resource/js/app.js')
</body>
</html>
