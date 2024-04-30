<main class="mb-auto w-screen">
    <x-hero headlineDescription="{{$headline->description}}" headlineTitle="{{$headline->title }}" />
    <div class="flex flex-col justify-center items-center w-full mx-auto space-y-8 py-16 bg-white-500">
        <div class="flex flex-col justify-center w-full">
            <h3 class="text-center text-2xl mb-2 font-normal">University Project Repository</h3>
            <h1 class="text-center text-4xl font-semibold">Repository for storing and accessing IT students projects and research</h1>
        </div>
        <div class="flex flex-row flex-wrap justify-center w-full gap-5 pt-2 px-4">
            <!-- Web Development Card -->
            <div class="flex flex-col border-dark_gray-900 border border-opacity-30 rounded-lg justify-center items-center p-4 prose prose-h4:text-base prose-h4:font-normal w-full sm:w-96 h-[396px] prose-h2:text-dark_gray-100">
                <img class="p-0 m-0" src="/images/code-solid.png" alt="Web Dev logo">
                <h2>Web Development</h2>
                <div class="flex flex-col justify-center items-center">
                    <h4 class="m-0 text-center mb-1">Discover innovative web development projects that showcase the latest in web technologies, including responsive design, accessibility, and performance optimization.</h4>
                    <a class="text-blue-600 hover:text-blue-800 no-underline" href="/project" wire:navigate> View Projects</a>
                </div>
            </div>
            <!-- Mobile Development Card -->
            <div class="flex flex-col border-dark_gray-900 border border-opacity-30 rounded-lg justify-center items-center p-4 prose prose-h4:text-base prose-h4:font-normal w-full sm:w-96 h-[396px] prose-h2:text-dark_gray-100">
                <img class="p-0 m-0" src="/images/mobile-screen-solid1.png" alt="Mobile Dev logo">
                <h2>Mobile Development</h2>
                <div class="flex flex-col justify-center items-center">
                    <h4 class="m-0 text-center mb-1">Explore cutting-edge mobile app projects that leverage the full potential of mobile platforms, focusing on user experience, app performance, and cross-platform compatibility.</h4>
                    <a class="text-blue-600 hover:text-blue-800 no-underline" href="/project" wire:navigate> View Projects</a>
                </div>
            </div>
            <!-- Artificial Intelligence Card -->
            <div class="flex flex-col border-dark_gray-900 border border-opacity-30 rounded-lg justify-center items-center p-4 prose prose-h4:text-base prose-h4:font-normal w-full sm:w-96 h-[396px] prose-h2:text-dark_gray-100">
                <img class="p-0 m-0" src="/images/robot-solid.png" alt="AI logo">
                <h2>Artificial Intelligence</h2>
                <div class="flex flex-col justify-center items-center ">
                    <h4 class="m-0 text-center mb-1">Dive into AI projects that push the boundaries of what's possible, exploring machine learning, natural language processing, and computer vision applications.</h4>
                    <a class="text-blue-600 hover:text-blue-800 no-underline" href="/project" wire:navigate> View Projects</a>
                </div>
            </div>
            <!-- Cyber Security Card -->
            <div class="flex flex-col border-dark_gray-900 border border-opacity-30 rounded-lg justify-center items-center p-4 prose prose-h4:text-base prose-h4:font-normal w-full sm:w-96 h-[396px] prose-h2:text-dark_gray-100">
                <img class="p-0 m-0" src="/images/shield-halved-solid.png" alt="CyberSecurity logo">
                <h2>Cyber Security</h2>
                <div class="flex flex-col justify-center items-center">
                    <h4 class="m-0 text-center mb-1">Explore projects that enhance cybersecurity, focusing on data protection, network security, and the development of secure software and systems.</h4>
                    <a class="text-blue-600 hover:text-blue-800 no-underline" href="/project" wire:navigate> View Projects</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Carousel Start -->
    <div id="default-carousel" class="bg-white-500 relative w-full" data-carousel="slide">
        <div class="relative h-[712px] max-h-[712px] overflow-hidden rounded-lg">
            @foreach ($projects as $key => $project)
            @if($project->is_featured === "1")
            <!-- Carousel Item -->
            <div class="{{ $loop->first ? '' : 'hidden' }} transition duration-700 ease-in-out" data-carousel-item="{{ $loop->first ? 'active' : '' }}">
                <x-featured title="{{$project->title}}" description="{{$project->description}}" featuredImage="{{ config('app.custom.virtual_directory_base_url') . 'admin-images/' . $project->files[0]) }}" />
            </div>
            @endif
            @endforeach
        </div>

        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
            @foreach ($projects as $key => $project)
            @if($project->is_featured === "1")
            <button type="button" class="w-3 h-3 rounded-full transition duration-300 ease-in-out hover:scale-125 hover:bg-slate-500" aria-current="{{ $loop->first ? 'true' : 'false' }}" aria-label="Slide {{ $loop->index + 1 }}" data-carousel-slide-to="{{ $loop->index }}"></button>
            @endif
            @endforeach
        </div>

        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none max-w-screen-2xl" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white dark:bg-gray-700 border border-gray-400 dark:border-gray-600 group-hover:bg-gray-200 dark:group-hover:bg-gray-600 group-focus:ring-4 group-focus:ring-gray-300 dark:group-focus:ring-gray-600 group-focus:outline-none transition duration-300 ease-in-out">
                <svg class="w-4 h-4 text-gray-700 dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none max-w-screen-2xl" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white dark:bg-gray-700 border border-gray-400 dark:border-gray-600 group-hover:bg-gray-200 dark:group-hover:bg-gray-600 group-focus:ring-4 group-focus:ring-gray-300 dark:group-focus:ring-gray-600 group-focus:outline-none transition duration-300 ease-in-out">
                <svg class="w-4 h-4 text-gray-700 dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
    <!-- Carousel End -->
    <livewire:share-buttons />
    <x-testimonial />
</main>