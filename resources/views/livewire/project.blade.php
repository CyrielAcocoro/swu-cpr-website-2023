<main class="bg-white-500 mb-auto">
    <div class="h-[500px] bg-cover bg-no-repeat bg-center overflow-auto z-30" style="
        background-image: url('/images/florian-olivo-4hbJ-eymZ1o-unsplash.jpg');
      ">
        <div class="relative flex flex-col items-center justify-center w-full h-full">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="prose">
                @if($projectHeadline)
                <h1 class="relative font-extrabold text-5xl bg-white-500 font-mono bg-clip-text text-transparent text-phaser w-max">
                    {{$projectHeadline->headline}}
                </h1>
                @else

                <h1 class="relative text-2xl text-white-500">
                    There are no project headlines available at the moment.
                </h1>
                @endif
            </div>
        </div>
    </div>
    <livewire:project-content />
</main>