<div class="prose prose-slate prose-p:text-lg dark:prose-invert flex flex-col justify-center gap-6 p-6 max-w-screen-2xl mx-auto">
    <div class="flex items-center justify-between px-12 ">
        <div class="flex flex-row items-center gap-4">
            @if($selectedProject)
            <img src="{{ config('app.custom.virtual_directory_base_url') . $selectedProject->files[0] }}" alt="project image" class="h-12 w-12 rounded-lg object-contain">
            @endif
            <div class="flex flex-col">
                <h3 class="text-start m-0 font-bold">{{$selectedProject ? $selectedProject->title : ''}}</h3>
                <h4 class="text-start m-0">{{ $selectedProject && $selectedProject->subject ? $selectedProject->subject->name : '' }}</h4>
            </div>
        </div>
        <div x-data="{ showShareOptions: false }" class="relative " x-init="@this.on('modal-closed', () => { showShareOptions = false })" @click.away="showShareOptions = false">
            <!-- Share Button -->
            <button @click="showShareOptions = !showShareOptions" class="flex items-center justify-center hover:bg-slate-200 hover:text-slate-800 gap-2 rounded-lg border-2 shadow-sm p-2 transition duration-300 ease-in-out">
                <img class="w-6 h-6 m-0" alt="Share Icon" src="{{ url('/images/share.svg') }}" />
                <p class="text-base font-body-small-400 m-0">Share</p>
            </button>
            <div x-show="showShareOptions" class="absolute left-0 mt-1 bg-white rounded-lg drop-shadow-lg p-1 z-10">
                <ul class="flex gap-1 p-0 m-1.5">
                    @foreach($shareLinks as $platform => $link)
                    <a href="{{ $link }}" target="_blank" class="flex items-center justify-center p-2 rounded hover:bg-gray-200" aria-label="Share on {{ ucfirst($platform) }}">
                        @if ($platform === 'facebook')
                        <i class="fab fa-facebook-f text-blue-600 text-lg"></i>
                        @elseif ($platform === 'twitter')
                        <i class="fab fa-twitter text-blue-400 text-lg"></i>
                        @elseif ($platform === 'linkedin')
                        <i class="fab fa-linkedin-in text-blue-700 text-lg"></i>
                        @elseif ($platform === 'whatsapp')
                        <i class="fab fa-whatsapp text-green-500 text-lg"></i>
                        @endif
                    </a>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    @if($selectedProject)
    <!-- Carousel Wrapper -->
    <div id="image-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel Slide Items -->
        <div class="relative w-full h-[712px] overflow-hidden rounded-lg">
            @foreach($selectedProject->files as $file)
            <div class="{{ $selectedImage === $file ? 'opacity-100' : 'opacity-0' }} absolute inset-0 transition-opacity duration-700 ease-in-out flex items-center justify-center bg-slate-100" data-carousel-item>
                <img class="object-contain aspect-square" src="{{ config('app.custom.virtual_directory_base_url') . $file }}" />
            </div>
            @endforeach
        </div>

        <!-- Slider Indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            @foreach($selectedProject->files as $index => $file)
            <button type="button" class="w-10 h-10 rounded-md transform transition duration-500 hover:scale-125 {{ $selectedImage === $file ? 'ring-2 ring-offset-2 ring-offset-gray-100 ring-white' : '' }}" aria-current="{{ $selectedImage === $file ? 'true' : 'false' }}" wire:click="$set('selectedImage', '{{ $file }}')">
                <img class="object-cover w-full h-full rounded-md m-0" src="{{ config('app.custom.virtual_directory_base_url') . $file }}" alt="Slide {{ $index + 1 }}">
            </button>
            @endforeach
        </div>
    </div>
    @endif
    <div class="flex flex-col gap-6 mb-12 md:flex-row">
        <div class="flex basis-2/3 justify-between flex-grow flex-col p-8 rounded-xl gap-8 bg-white shadow-card">
            <div class="flex flex-col gap-3">
                <h3 class="m-0 font-bold text-start">Project Description</h3>
                <p class="text-start">{{$selectedProject ? $selectedProject->description : ''}}</p>
            </div>
            <div class="flex flex-col gap-3">
                <h3 class="m-0 font-bold text-start">Data Privacy</h3>
                @if($selectedProject && $selectedProject->data_privacy)
                <p class="text-start">{{$selectedProject ? $selectedProject->data_privacy : ''}}</p>
                @else
                <p class="text-start">**No project privacy policy available</p>
                @endif
            </div>
            <div class="flex flex-col items-start justify-between md:flex-row md:item-center">
                <div class="text-start">
                    <h3 class="m-0">Instructor</h3>
                    <p>{{$selectedProject ? $selectedProject->faculty->full_name : ''}}</p>
                </div>
                <div class="text-start">
                    <h3 class="m-0">Subject</h3>
                    <p>{{ $selectedProject && $selectedProject->subject ? $selectedProject->subject->full_subject : '' }}</p>
                </div>
                <div class="text-start">
                    <h3 class="m-0">Category</h3>
                    <p>{{ $selectedProject && $selectedProject->category ? $selectedProject->category->name : '' }}</p>
                </div>
                <div class="text-start">
                    <h3 class="m-0">School Year</h3>
                    <p>{{$selectedProject ? $selectedProject->school_year : ''}}</p>
                </div>
            </div>
        </div>
        <div class="flex flex-col basis-1/3 gap-6">
            @if($selectedProject)
            <div class="flex flex-col basis-2/3 p-5 rounded-xl gap-5 bg-white shadow-card">
                <h3 class="font-bold m-0 text-start">Developers</h3>
                @foreach($selectedProject->developers as $developer)
                <div class="flex flex-row gap-2 px-2 items-center">
                    <img src="{{ config('app.custom.virtual_directory_base_url') . $developer->image }}" alt="developer avatar" class="h-12 object-cover flex m-0">
                    <div class="flex flex-col m">
                        <h4 class="text-start m-0 font-bold ">{{ $developer->full_name }}</h4>
                        <h5 class="text-start m-0 font-normal">{{ $developer->email }}</h5>
                        <h6 class="text-start m-0 font-normal">{{ $developer->city }}, {{ $developer->province }}, {{ $developer->country }}</h6>
                    </div>
                </div>
                @endforeach
            </div>
            @endif

            <div class="flex flex-col basis-1/3 p-5 rounded-xl gap-5 bg-white shadow-card">
                <h3 class="m-0 font-bold text-start">Project Preview</h3>
                @if($selectedProject && $selectedProject->project_link)
                <a href="{{ $selectedProject->project_link }}" class="text-start">{{ $selectedProject->project_link }}</a>
                @else
                <p class="text-start">**No project preview available</p>
                @endif
            </div>
        </div>
    </div>
</div>