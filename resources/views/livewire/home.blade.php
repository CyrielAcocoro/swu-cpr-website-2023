<main class="mb-auto">
    <x-hero headlineDescription="{{$headline->description}}" headlineTitle="{{$headline->title }}" />
    <!-- Carousel Start -->
    <div id="default-carousel" class="bg-white-500 relative w-full" data-carousel="slide">
        <div class="relative h-[1112px] max-h-[712px] overflow-hidden rounded-lg">
            @foreach ($projects as $key => $project)
            @if($project->is_featured === "1")
            <!-- Carousel Item -->
            <div class="{{ $loop->first ? '' : 'hidden' }} transition duration-700 ease-in-out" data-carousel-item="{{ $loop->first ? 'active' : '' }}">
                <x-featured title="{{$project->title}}" description="{{$project->description}}" featuredImage="{{ asset('/admin-images/'. $project->files[0]) }}" />
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