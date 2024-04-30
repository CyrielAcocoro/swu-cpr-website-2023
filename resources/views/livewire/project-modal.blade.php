  <x-modal-wrapper>
      <div class="prose prose-slate prose-p:text-lg flex flex-col justify-center gap-6 p-6 max-w-screen-xl mx-auto">
          <div class="flex items-center justify-between px-12 ">
              <div class="flex flex-row items-center gap-4">
                  @if($selectedProject)
                  <img src="{{ config('app.custom.virtual_directory_base_url') . 'admin-images/' . $selectedProject->files[0]) }}" alt="project image" class="h-12 w-12 rounded-lg object-cover">
                  @endif
                  <div class="flex flex-col">
                      <h3 class="text-start m-0 font-bold">{{$selectedProject ? $selectedProject->title : ''}}</h2>
                          <h4 class="text-start m-0">{{ $selectedProject && $selectedProject->subject ? $selectedProject->subject->name : '' }}</h4>
                  </div>
              </div>
              <div x-data="{ showShareOptions: false }" class="relative " x-init="@this.on('modal-closed', () => { showShareOptions = false })" @click.away="showShareOptions = false">
                  <!-- Share Button -->
                  <button @click="showShareOptions = !showShareOptions" class="flex items-center justify-center bg-maroon-400 hover:bg-maroon-500 hover:text-slate-800 gap-2 rounded-lg border-2 shadow-sm p-2 transition duration-300 ease-in-out">
                      <img class="w-6 h-6 m-0.5 text-white-400" alt="Share Icon" src="{{ url('/images/share-from-square-regulars.png') }}" />
                      <p class="text-base text-white-400 font-body-small-400 m-0">Share</p>
                  </button>
                  <div x-show="showShareOptions" class="absolute left-0 mt-1 bg-white-500 rounded-lg drop-shadow-lg p-1 z-10">
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
                  <div class="{{ $selectedImage === $file ? 'opacity-100' : 'opacity-0' }} absolute inset-0 transition-opacity duration-700 ease-in-out flex items-center justify-center bg-maroon-800" data-carousel-item>
                      <img class="object-contain aspect-square" src="{{ config('app.custom.virtual_directory_base_url') . 'admin-images/' . $file) }}" />
                  </div>
                  @endforeach
              </div>
              <!-- Slider Controllers -->
              <button wire:click="previousImage" class="absolute left-0 top-1/2 transform -translate-y-1/2 p-2 rounded-full hover:bg-gray-200 transition duration-300 ease-in-out">
                  <span class="inline-flex items-center justify-center w-10 h-10 rounded-full  dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                      <svg class="w-4 h-4 text-gray-700 dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                      </svg>
                      <span class="sr-only">Previous</span>
                  </span>
              </button>
              <button wire:click="nextImage" class="absolute right-0 top-1/2 transform -translate-y-1/2 p-2 rounded-full hover:bg-gray-200 transition duration-300 ease-in-out">
                  <span class="inline-flex items-center justify-center w-10 h-10 rounded-full  hover:dark:bg-gray-800/30 group-hover:bg-white/50 hover:dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                      <svg class="w-4 h-4 hover:text-gray-700 hover:dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                      </svg>
                      <span class="sr-only">Next</span>
                  </span>
              </button>
              <!-- Slider Indicators -->
              <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                  @foreach($selectedProject->files as $index => $file)
                  <button type="button" class="w-10 h-10 rounded-md transform transition duration-500 hover:scale-125 {{ $selectedImage === $file ? 'ring-2 ring-offset-2 ring-offset-gray-100 ring-white' : '' }}" aria-current="{{ $selectedImage === $file ? 'true' : 'false' }}" wire:click="$set('selectedImage', '{{ $file }}')">
                      <img class="object-cover w-full h-full rounded-md m-0" src="{{ config('app.custom.virtual_directory_base_url') . 'admin-images/' . $file) }}" alt="Slide {{ $index + 1 }}">
                  </button>
                  @endforeach
              </div>
          </div>
          @endif
          <!-- Infomration Details -->
          <div class="flex flex-col gap-6 mb-12 lg:flex-row">
              <!-- Project Description and Details -->
              <div class="flex flex-grow justify-between flex-col p-8 rounded-xl gap-8 bg-white shadow-card lg:w-2/3">
                  <div class="flex flex-col gap-3">
                      <h3 class="m-0 font-bold text-start">Project Description</h3>
                      <p class="text-start">{{$selectedProject ? $selectedProject->description : ''}}</p>
                  </div>
                  <div class="flex flex-col gap-3">
                      <h3 class="m-0 font-bold text-start">Data Privacy</h3>
                      @if($selectedProject && $selectedProject->data_privacy)
                      <a href="{{$selectedProject ? $selectedProject->data_privacy : ''}}" class="text-start text-wrap">{{$selectedProject ? $selectedProject->data_privacy : ''}}</a>
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
              <!-- Developers and Project Preview -->
              <div class="flex flex-col gap-6 lg:w-1/3">
                  @if($selectedProject)
                  <!-- Developers -->
                  <div class="flex flex-col flex-grow p-5 rounded-xl gap-5 bg-white shadow-card lg:w-full">
                      <h3 class="font-bold m-0 text-start">Developers</h3>
                      @foreach($selectedProject->projectAuthors as $developer)
                      <div class="flex flex-row gap-2 px-2 items-center">
                          <img src="{{ config('app.custom.virtual_directory_base_url') . 'admin-images/' . $developer->image) }}" alt="developer avatar" class="h-12 object-cover rounded-full m-0">
                          <div class="flex flex-col items-start gap-2">
                              <h4 class="text-lg font-bold text-gray-900 m-0">{{ $developer->full_name }}</h4>
                              <div class="flex items-center gap-2">
                                  <i class="far fa-envelope text-gray-500"></i>
                                  <a href="mailto:{{ $developer->email }}" class="text-sm text-gray-700">{{ $developer->email }}</a>
                              </div>
                              <div class="flex items-center gap-2">
                                  <i class="fas fa-map-marker-alt"></i>
                                  <p class="text-sm text-gray-700 m-0">{{ $developer->city }}, {{ $developer->province }}, {{ $developer->country }}</p>
                              </div>
                          </div>
                      </div>
                      @endforeach
                  </div>
                  <!-- Project Preview -->
                  <div class="flex flex-col flex-grow p-5 rounded-xl bg-white shadow-card lg:w-full">
                      <h3 class="m-0 font-bold text-start">Project Preview</h3>
                      @if($selectedProject && $selectedProject->project_link)
                      <a href="{{ $selectedProject->project_link }}" class="text-start truncate whitespace-normal">{{ $selectedProject->project_link }}</a>
                      @else
                      <p class="text-start">**No project preview available</p>
                      @endif
                  </div>
                  @endif
              </div>
          </div>

      </div>
  </x-modal-wrapper>