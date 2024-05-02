<section class="bg-white-500">
    <div class="relative grid h-[880px] mx-auto lg:gap-8 lg:grid-cols-12">
        <div class="place-self-center pb-32 lg:col-span-5 prose prose-p:text-dark_grey-100 prose-p:text-xl w-full">
            <h1 class="text-6xl xl:text-6xl mb-4 bg-gradient-to-r from-maroon-400 via-orange-400 to-yellow-300 bg-clip-text text-transparent text-phaser">{{ $headlineTitle }}</h1>
            <p class="max-w-2xl mb-6 lg:mb-8">{{ $headlineDescription }}</p>
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
        <div class="hidden absolute place-self-end pr-56 lg:mt-0 lg:flex p-4 mb-4 justify-center items-center">
            <div class="image-container custom-rotation transform rotate-x-51 rotate-z-43 grid grid-gap-8 grid-cols-2">
                <div class="tile tile-1 cursor-pointer custom-style" id="tile1">
                    <img src="/images/lacav.png">
                </div>
                <div class="tile tile-2 cursor-pointer custom-style" id="tile2">
                    <img src="/images/orig.png">
                </div>
                <div class="tile tile-3 cursor-pointer custom-style" id="tile3">
                    <img src="/images/something2.jpg">
                </div>
                <div class="tile tile-4 cursor-pointer custom-style" id="tile4">
                    <img src="/images/gambol.png">
                </div>
            </div>
        </div>
    </div>
</section>
