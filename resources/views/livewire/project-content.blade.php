<div class="bg-white-500 flex flex-col items-start justify-start mx-auto py-8 h-fit">
    <div class="flex flex-col lg:flex-row items-start justify-start w-full h-full divide-y lg:divide-y-0 lg:divide-x">
        <!-- Search and Categories Section -->
        <div class="flex flex-row flex-grow py-4 lg:flex-shrink-0 lg:basis-1/12 px-4 lg:mb-0 items-start justify-start max-h-full">
            <div class="flex flex-col items-start justify-start gap-2 w-full h-full ">
                <input type="text" wire:model="search" wire:keydown.enter="updateSearch" placeholder="Search" aria-label="Search" class="rounded p-2 border border-gray-300 transition duration-300 ease-in-out hover:border-yellow-300 focus:border-yellow-300 focus:outline-none focus:ring focus:ring-yellow-300 focus:ring-opacity-50 bg-white w-full" />
                <div class="flex lg:flex-col max-w-screen-2xl w-full">
                    <div class="flex flex-col my-2 gap-2">
                        <div class="prose prose-h3:text-dark_gray-400 prose-h3:font-semibold">
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
                        <div class="prose prose-h3:text-dark_gray-400 prose-h3:font-semibold">
                            <h3>
                                Filter
                            </h3>
                            <div class="space-y-4">
                                <div wire:key="{{ $filterKey }}">
                                    <select wire:change="filterSchoolYear($event.target.value)" class="rounded p-2 border border-gray-300 transition duration-300 ease-in-out hover:border-yellow-300 focus:border-yellow-300 focus:outline-none focus:ring focus:ring-yellow-300 focus:ring-opacity-50 bg-white w-full">
                                        <option value="">Select School Year</option>
                                        <option value="2022-2023">2021-2022</option>
                                        <option value="2023-2024">2023-2024</option>
                                        <option value="2024-2025">2024-2025</option>
                                        <option value="2025-2026">2025-2026</option>
                                        <option value="2026-2027">2026-2027</option>
                                        <option value="2027-2028">2027-2028</option>
                                        <option value="2028-2029">2028-2029</option>
                                        <option value="2029-2030">2029-2030</option>
                                        <option value="2030-2031">2030-2031</option>
                                        <option value="2031-2032">2031-2032</option>
                                        <option value="2032-2033">2032-2033</option>
                                        <option value="2033-2034">2033-2034</option>
                                        <option value="2034-2035">2034-2035</option>
                                    </select>
                                </div>
                                <div wire:key="{{ $filterKey }}">
                                    <select wire:change="filterSubjectCode($event.target.value)" class="rounded p-2 border border-gray-300 transition duration-300 ease-in-out hover:border-yellow-300 focus:border-yellow-300 focus:outline-none focus:ring focus:ring-yellow-300 focus:ring-opacity-50 bg-white w-full">
                                        <option value="">Select Subject Code</option>
                                        @foreach($subject_codes as $subject)
                                        <option value="{{ $subject->subject_code }}">{{ $subject->subject_code }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end ">
                        <button wire:click="clearFilters" class="p-1 bg-white text-slate-800 rounded border border-slate-800 font-medium text-sm transition duration-300 ease-in-out hover:bg-yellow-400 hover:text-dark_grey-400 hover:border-yellow-400 transform hover:-translate-y-1 hover:shadow-lg">Clear Filters</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap flex-col items-center justify-center flex-grow lg:basis-10/12 px-4 max-w-full py-4">
            <div class="flex flex-wrap items-start justify-start gap-y-6 mx-auto w-full">
                @foreach ($projects as $project)
                @if($project->is_published === "1")
                <div class="bg-white flex flex-col items-center justify-center bg-white shadow-md bg-clip-border rounded-xl max-w-md m-2 cursor-pointer transform transition duration-500 hover:scale-105">
                    @if (!empty($project->files) && count($project->files) > 0)
                    <button x-data wire:click="$dispatchTo('project-modal','show', [{{ $project->id }}])" loading="lazy" class="w-[370px]">
                        <img class="relative rounded-t-lg object-cover cursor-pointer w-full h-[270px] " alt="Project Image" src="{{ config('app.custom.virtual_directory_base_url') . $project->files[0]) }}" />
                    </button>
                    @endif
                    <h2 class="text-dark_gray-400 text-start font-bold text-sm md:text-base lg:text-xl w-full px-4 pt-2">{{$project->title}}</h2>
                    <div class="w-full flex flex-row items-center pb-[8px]">
                        <div class="flex flex-row items-center gap-2 px-4 pt-2">
                            @if($project->projectAuthors->isNotEmpty())
                            <div class="rounded-full w-6 h-6 flex items-center justify-center border border-gray-300">
                                <img src="{{ config('app.custom.virtual_directory_base_url') . $project->projectAuthors->first()->image) }}" alt="First developer's image" class="h-full w-full rounded-full object-cover">
                            </div>
                            @endif
                            <div class="flex-grow whitespace-nowrap overflow-hidden w-[370px]">
                                @foreach($project->projectAuthors as $developer)
                                <p class="text-base font-normal inline-block">
                                    {{ $developer->full_name }}
                                </p>
                                @if (!$loop->last)
                                <span class="inline-block">, </span>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
                @endif
                @endforeach
            </div>
            @if(empty($search))
            <div class="flex items-center justify-center gap-5 mt-6">
                <button wire:click="$dispatch('loadMoreProjects')" class="p-1 bg-white text-slate-800 rounded border border-slate-800 font-medium text-sm transition duration-300 ease-in-out hover:bg-yellow-400 hover:text-dark_grey-400 hover:border-yellow-400 transform hover:-translate-y-1 hover:shadow-lg">
                    Load More
                </button>
            </div>
            @endif
        </div>
    </div>
</div>