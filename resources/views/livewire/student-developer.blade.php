<main class="bg-white-500 mb-0">
    <div class="flex flex-col max-w-full px-4 sm:px-8 mx-auto">
        <div class="flex flex-col justify-center items-center gap-8 py-8 sm:py-16">
            <div class="flex flex-col justify-center items-center gap-4 prose prose-slate prose-h1:text-4xl sm:text-base">
                <h1 class="m-0 text-center">Innovative Minds: Our Student Developers</h1>
                <p class="m-0 text-center">Learn about the student developers who are actively contributing to the evolution of technology and the digital landscape.</p>
            </div>
            <label class="relative text-gray-400 focus-within:text-gray-600 block w-full sm:w-1/2">
                <i class="fas fa-search pointer-events-none w-8 h-8 absolute top-1/2 transform -translate-y-1/2 left-3"></i>
                <input type="text" wire:model.live="search" placeholder="Search by name or city" aria-label="Search" class="rounded p-2 pl-10 border border-gray-300 transition duration-300 ease-in-out hover:border-yellow-300 focus:border-yellow-300 focus:outline-none focus:ring focus:ring-yellow-300 focus:ring-opacity-50 w-full" />
            </label>
        </div>
        <div class="flex flex-wrap p-4 sm:p-8 gap-4 sm:gap-8 mx-auto w-full border rounded-md">
            @foreach ($developers as $developer)
                <x-student-card class="flex-grow sm:flex-shrink-0" full-name="{{ $developer->full_name }}"
                    email="{{ $developer->email }}"
                    city="{{ $developer->city }}"
                    province="{{ $developer->province }}"
                    country="{{ $developer->country }}"
                    image="{{ config('app.custom.virtual_directory_base_url'). $developer->image }}"/>
            @endforeach
        </div>
    </div>
</main>
