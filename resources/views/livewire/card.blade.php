<div class="flex flex-wrap items-start justify-start gap-y-6 mx-auto w-full">
    @foreach ($projects as $project)
    @if($project->is_published === "1")
    <div class="bg-white flex flex-col items-center justify-center bg-white shadow-md bg-clip-border rounded-xl max-w-md m-2 cursor-pointer transform transition duration-500 hover:scale-105">
        @if (!empty($project->files) && count($project->files) > 0)
        <button x-data x-on:click="Livewire.dispatchTo(null, 'project-modal','show', [{{ $project->id }}])" loading="lazy" class="w-[370px]">
            <img class="relative rounded-t-lg object-contain cursor-pointer w-full h-[270px] " alt="Project Image" src="{{ asset('/admin-images/'. $project->files[0]) }}" />
        </button>
        @endif
        <h2 class="text-dark_gray-400 text-start font-bold text-sm md:text-base lg:text-xl w-full px-4 pt-2">{{$project->title}}</h2>
        <div class="w-full flex flex-row items-center pb-[8px] ">
            <div class="flex flex-row items-center gap-2 px-4 pt-2">
                <div class="rounded-full w-6 h-6 flex items-center justify-center border border-gray-300">
                    <i class="fa-solid fa-user-tie text-base text-gray-700"></i>
                </div>
                <p class="leading-4 text-xs font-medium line-clamp-1 w-60 md:text-sm lg:text-base">
                    @foreach ($project->developer as $developerId)
                    {{ $developerId }}
                    @endforeach
                </p>
            </div>
        </div>
    </div>
    @endif
    @endforeach
</div>