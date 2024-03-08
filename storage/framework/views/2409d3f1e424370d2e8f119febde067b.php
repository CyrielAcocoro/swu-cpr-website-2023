<div class="relative z-50" x-data="{ visible: <?php if ((object) ($attributes->wire('model')) instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e($attributes->wire('model')->value()); ?>')<?php echo e($attributes->wire('model')->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e($attributes->wire('model')); ?>')<?php endif; ?>}" x-show="visible" x-on:keydown.escape.window=" visible=false">
    <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="flex flex-col min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <div class="fixed inset-0 h-full bg-black bg-opacity-75 transition-opacity text-end" x-show="visible" x-transition.opacity.duration.300ms x-on:click="Livewire.dispatchTo(null, '<?php echo e($this->getName()); ?>', 'hide')">
                <button x-on:click="visible = false" class="text-white hover:text-black mr-2 mt-8">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div class="relative w-full h-screen transform overflow-hidden text-end rounded-t-2xl bg-white px-4 mt-8 md:mt-16 shadow-xl transition-all overflow-y-auto" x-show="visible" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
                <div>
                    <?php echo e($slot); ?>

                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\Users\acoco\OneDrive\Desktop\swu-cpr-website\resources\views/components/modal-wrapper.blade.php ENDPATH**/ ?>