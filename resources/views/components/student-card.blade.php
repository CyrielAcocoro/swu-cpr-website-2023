<div class="flex flex-col items-center p-6 rounded-xl bg-white-500 shadow-xl hover:drop-shadow-xl transition-all duration-500">
    <div class="w-36 h-36 mb-4 overflow-hidden rounded-full shadow-md">
        <img class="w-full h-full object-cover transition-transform duration-300 hover:scale-110" alt="student developer avatar" src="{{ $image }}" />
    </div>
    <div class="flex flex-col items-center">
        <h3 class="text-2xl font-semibold text-gray-800">{{ $fullName }}</h3>
        <p class="text-gray-600">{{ $email }}</p>
        <p class="text-sm text-gray-500 mt-1">{{ $city }}, {{ $province }}, {{ $country }}</p>
    </div>
    <div class="flex flex-row items-center gap-2">
        <a href={{$githubLink}} target="_blank" class="m-0 transform transition duration-500 hover:scale-125">
            <img alt="github Icon" src="/images/github.svg" class="m-0" width=28 />
        </a>
        <a href={{$linkedinLink}} target="_blank" class="m-0 transform transition duration-500 hover:scale-125">
            <img alt="LinkedIn Icon" src="/images/linkedin.svg" class="m-0" width=28 />
        </a>
    </div>
</div>