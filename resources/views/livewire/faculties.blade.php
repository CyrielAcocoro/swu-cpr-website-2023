<main class="bg-white-500 mb-0">
    <div class="overflow prose-slate prose-p:text-md dark:prose-invert mx-auto ">
        <div class="relative overflow-hidden bg-cover bg-no-repeat bg-center w-full h-[912px]" style="
        background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/146.webp');
      ">
            <div class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsla(0,0%,0%,0.75)] bg-fixed">
                <div class="flex h-full items-center justify-center">
                    <div class="px-6 text-center text-white md:px-12">
                        <h1 class="text-white-500 mt-2 text-3xl font-bold tracking-tight md:text-4xl xl:text-5xl">
                            Inspiring Minds, <br /><span>Empowering Futures</span>
                        </h1>
                        <p class="text-white-500 text-center mt-8 mb-16 text-base md:text-base lg:text-xl max-w-screen-2xl">
                            Welcome to our Information Technology Department, where we are committed to inspiring minds and empowering futures. Our dedicated faculty members are industry professionals who bring a wealth of knowledge and experience into the classroom. They are passionate about shaping the next generation of IT leaders and innovators. Explore their profiles below to learn more about their expertise and contributions.
                        </p>
                        <button type="button" class="rounded-full border-2 border-neutral-50 p-4 text-sm font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out  hover:bg-neutral-100 hover:bg-opacity-10 hover:text-neutral-100 " x-on:click="document.getElementById('facultyElement').scrollIntoView({ behavior: 'smooth' })">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="animate-bounce h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div id="facultyElement" class="m-4">
        <div class="flex flex-wrap p-8 gap-4 sm:gap-8 mx-auto w-full border rounded-md justify-center">
                @foreach ($faculty as $facultyMember)
                <x-faculty-card alt="{{ $facultyMember->fullName }}" about="{{ $facultyMember->about }}" avatar="{{ config('app.custom.virtual_directory_base_url'). $facultyMember->image}}" name="{{ $facultyMember->fullName }}" position="{{ $facultyMember->position }}" specialization="{{ is_array(json_decode($facultyMember->specialization))? implode(', ', json_decode($facultyMember->specialization)) : $facultyMember->specialization }}" />
                @endforeach
            </div>
        </div>
    </div>
</main>