<section class="bg-white-500">
    <div class="relative grid max-w-screen-3xl h-[1000px] px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-20 lg:grid-cols-12">
        <div class="place-self-center mb-24 lg:col-span-5 prose prose-p:text-dark_grey-100 prose-p:text-2xl prose-slate dark:prose-invert w-full">
            <h1 class=" text-6xl xl:text-6xl mb-4 bg-gradient-to-r from-maroon-400 via-orange-400 to-yellow-300 bg-clip-text text-transparent text-phaser ">{{ $headlineTitle }}</h1>
            <p class="max-w-2xl mb-6 lg:mb-8">{{$headlineDescription}}</p>
            <div class="flex flex-row items-center gap-5 my-2">
                <a href="/project" class="flex items-center justify-center font-medium text-center md:text-xs lg:text-sm text-white rounded-lg button-custom">
                    Get started
                    <svg>
                        <rect class="px-5 py-5 mr-3 m-2" x="0" y="0" fill="none" width="100%" height="100%" />
                    </svg>
                </a>
                <a href="/about" class="flex items-center justify-center font-medium text-center md:text-xs lg:text-sm text-white rounded-lg button-custom-other">
                    About
                    <svg>
                        <rect class="px-5 py-5 mr-3 m-2" x="0" y="0" fill="none" width="100%" height="100%" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="hidden absolute place-self-end "></div>
        <div class="hidden absolute place-self-end pr-56 lg:mt-0 lg:col-span-7 lg:flex p-4 mb-4 justify-center items-center">
            <div class="image-container custom-rotation transform rotate-x-51 rotate-z-43 grid grid-gap-8 grid-cols-2">
                <a href="/projects" class="tile tile-1 cursor-pointer custom-style">
                    <img src="/images/lacav.png">
                </a>
                <div class="tile tile-2 cursor-pointer custom-style">
                    <img src="/images/orig.png">
                </div>
                <div class="tile tile-3 cursor-pointer custom-style">
                    <img src="/images/something2.jpg">
                </div>
                <div class="tile tile-4 cursor-pointer custom-style">
                    <img src="/images/gambol.png">
                </div>
            </div>
        </div>
    </div>
</section>