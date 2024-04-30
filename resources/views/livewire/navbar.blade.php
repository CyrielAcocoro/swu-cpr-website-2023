    <header class="bg-maroon-700 opacity-90 backdrop-blur bg-glass shadow-md py-5 px-4 lg:px-10 sticky top-0 z-50">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-2xl">
            <a href="/" class="flex items-center space-x-4">
                <img src="{{ config('app.custom.virtual_directory_base_url') . 'admin-images/'. $logo->image)}}" alt="University Logo" class="h-14 object-cover">
                <div class="flex flex-col">
                    <b class="text-white-500 text-lg ">Southwestern University - PHINMA</b>
                    <div class="text-base text-white-500">{{$logo->name}}</div>
                </div>
            </a>
            <button wire:click="toggleMobileMenu" class="inline-flex items-center p-2 ml-1 text-sm rounded-lg lg:hidden hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-300">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                </svg>
                <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="{{ $isMobileMenuOpen ? 'block' : 'hidden' }} lg:block">
                <ul class="flex flex-col mt-4 lg:flex-row lg:space-x-8 lg:mt-0">
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