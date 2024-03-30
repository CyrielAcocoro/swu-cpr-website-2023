<main class="bg-white-400 mb-auto">
    <div class="h-80 bg-cover bg-no-repeat bg-center overflow-auto" style="
        background-image: url('/images/education.jpeg');
      ">
        <div class="relative flex flex-col items-center justify-center w-full h-full">
            <div class="absolute inset-0 bg-black opacity-75"></div>
            @if($projectHeadline)
            <h1 class="relative text-2xl text-white-500">
                {{$projectHeadline->headline}}
            </h1>
            @else
            <h1 class="relative text-2xl text-white-500">
                There are no project headlines available at the moment.
            </h1>
            @endif
        </div>
    </div>
    <livewire:project-content />
</main>