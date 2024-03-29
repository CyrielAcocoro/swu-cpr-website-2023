<div class="bg-white-500 flex flex-col items-center justify-center mx-auto py-8 h-fit">
    <div class="flex flex-col lg:flex-row items-center justify-start mx-6 w-full h-full divide-y lg:divide-y-0 lg:divide-x">
        <!-- Search and Categories Section -->
        <div class="flex flex-grow py-4 lg:flex-shrink-0 lg:basis-1/12 px-4 lg:mb-0 items-start justify-start max-h-full w-screen">
            <div class="flex flex-col items-start justify-start gap-2 w-full h-full ">
                <input type="text" wire:model="search" wire:keydown.enter="updateSearch" placeholder="Search" aria-label="Search" class="rounded p-2 border border-gray-300 transition duration-300 ease-in-out hover:border-yellow-300 focus:border-yellow-300 focus:outline-none focus:ring focus:ring-yellow-300 focus:ring-opacity-50 bg-white w-full" />
                <div class="flex lg:flex-col max-w-screen-2xl w-full">
                    <div class="flex flex-col my-2 gap-2">
                        <div class="prose prose-h3:text-dark_gray-400">
                            <h3>
                                Tags
                            </h3>
                        </div>
                        <div class="flex flex-wrap gap-2">
                            @foreach($categories as $category)
                            @if($category->name !== null && $category->is_active === '1')
                            <button wire:click="filterProjectsByCategory({{ $category->id }})" class="{{ $filteredProject == $category->id ? 'bg-yellow-300 text-black' : 'bg-white text-slate-800' }} p-1 rounded border border-slate-800 font-medium text-sm transition duration-300 ease-in-out hover:bg-yellow-300 hover:text-black transform hover:-translate-y-1 hover:shadow-lg">
                                {{ $category->name }} ({{ $category->projects_count }})
                            </button>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="flex flex-col my-2 gap-2">
                        <div class="prose prose-h3:text-dark_gray-400">
                            <h3>
                                Filter
                            </h3>
                        </div>
                        <div class="flex flex-wrap gap-2">
                            @foreach($categories as $category)
                            @if($category->name !== null && $category->is_active === '1')
                            <button wire:click="filterProjectsByCategory({{ $category->id }})" class="{{ $filteredProject == $category->id ? 'bg-yellow-300 text-black' : 'bg-white text-slate-800' }} p-1 rounded border border-slate-800 font-medium text-sm transition duration-300 ease-in-out hover:bg-yellow-300 hover:text-black transform hover:-translate-y-1 hover:shadow-lg">
                                {{ $category->name }} ({{ $category->projects_count }})
                            </button>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="flex flex-wrap flex-col items-center justify-center flex-grow lg:basis-4/5 px-4 max-w-full py-4">
            <livewire:card :projects="$projects" />
            @if(empty($search))
            <div class="flex items-center justify-center gap-5">
                <button wire:click="$dispatch('loadMoreProjects')" class="p-1 bg-white text-slate-800 rounded border border-slate-800 font-medium text-sm transition duration-300 ease-in-out hover:bg-maroon-400 hover:text-white-400 hover:border-maroon-400 transform hover:-translate-y-1 hover:shadow-lg">
                    Load More
                </button>
            </div>
            @endif
        </div>
    </div>
</div>