<div class="flex flex-col items-center p-6 rounded-md bg-white-500 shadow-md gap-4 w-[320px]">
        <img class="w-36 h-36 mb-4 rounded-full shadow-md object-cover transition-transform duration-300 hover:scale-110" alt="student developer avatar" src="{{ $image }}" />
    <div class="flex flex-col items-center">
        <b class="text-xl font-bold text-gray-800">{{ $fullName }}</b>
        <p class="text-gray-600">{{ $email }}</p>
        <p class="text-sm text-gray-500">{{ $city }}, {{ $province }}, {{ $country }}</p>
    </div>
    <div class="flex flex-row items-center gap-4">
        <a href={{$githubLink}} target="_blank" class="m-0 transform transition duration-500 hover:scale-125">
            <img alt="github Icon" src="/images/github.svg" class="m-0" width=28 />
        </a>
        <a href={{$linkedinLink}} target="_blank" class="m-0 transform transition duration-500 hover:scale-125">
            <img alt="LinkedIn Icon" src="/images/linkedin.svg" class="m-0" width=28 />
        </a>
    </div>
</div>