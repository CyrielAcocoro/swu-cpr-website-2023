<header class=" dark:bg-gray-900 bg-maroon-700 opacity-90 backdrop-blur bg-glass shadow-md py-5 px-4 lg:px-10 sticky top-0 z-50">
    <div class="max-w-screen-3xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-4 rtl:space-x-reverse">
            <img src="{{ asset('/admin-images/'. $logo->image)}}" alt="University Logo" class="h-16" />
            <div class="flex flex-col">
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-white-400 dark:text-white">Southwestern University - PHINMA</span>
                <span class="text-xl font-regular whitespace-nowrap text-white-400 dark:text-white">College of Information Technology</span>
            </div>
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white-500 rounded-lg md:hidden  focus:outline-none focus:ring-2 focus:ring-white-500 transition-all duration-300 ease-in-out transform group-hover:scale-110 group-focus:scale-105" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border rounded-lg  md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="{{ route('home') }}" class="block py-2 pr-4 pl-3 text-base font-medium {{ $currentRoute == 'home' ? 'text-yellow-400' : 'text-white-500' }} hover:text-yellow-400 transition-colors duration-300">Home</a>
                </li>
                <li>
                    <a href="{{ route('project') }}" class="block py-2 pr-4 pl-3 text-base font-medium {{ $currentRoute == 'project' ? 'text-yellow-400' : 'text-white-500' }} hover:text-yellow-400 transition-colors duration-300">Projects</a>
                </li>
                <li>
                    <a href="{{ route('faculty') }}" class="block py-2 pr-4 pl-3 text-base font-medium {{ $currentRoute == 'faculty' ? 'text-yellow-400' : 'text-white-500' }} hover:text-yellow-400 transition-colors duration-300">Faculty</a>
                </li>
                <li>
                    <a href="{{ route('student-developer') }}" class="block py-2 pr-4 pl-3 text-base font-medium {{ $currentRoute == 'student-developer' ? 'text-yellow-400' : 'text-white-500' }} hover:text-yellow-400 transition-colors duration-300">Students</a>
                </li>
                <li>
                    <a href="{{ route('about') }}" class="block py-2 pr-4 pl-3 text-base font-medium {{ $currentRoute == 'about' ? 'text-yellow-400' : 'text-white-500' }} hover:text-yellow-400 transition-colors duration-300">About</a>
                </li>
            </ul>
        </div>
    </div>
</header>