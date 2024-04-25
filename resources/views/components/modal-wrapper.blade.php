<div class="relative z-50" x-data="{ visible: @entangle('visible') }" x-show="visible" x-on:keydown.escape.window=" visible=false">
    <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="flex flex-col min-h-full justify-center sm:items-center sm:p-0">
            <div class="fixed inset-0 h-full bg-black bg-opacity-75 transition-opacity text-end" x-show="visible" x-transition.opacity.duration.300ms x-on:click="Livewire.dispatchTo(null, '{{ $this->getName() }}', 'hide')">
                <button x-on:click="visible = false" class="text-white-400 hover:text-white-500 mr-2 mt-8">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div class="relative w-full h-screen transform overflow-hidden text-end rounded-t-2xl bg-white-500 mt-8 md:mt-16 shadow-xl transition-all overflow-y-auto" x-show="visible" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
                <div>
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</div>