<div class="flex flex-col items-center justify-center mx-auto py-8 h-fit">
    <div class="flex flex-col lg:flex-row items-center justify-start mx-6 w-full h-full">
        <!-- Search and Categories Section -->
        <div class="flex flex-grow lg:flex-shrink-0 lg:basis-1/12 px-4 mb-4 lg:mb-0 items-start justify-start h-full">
            <div class="flex flex-col items-start justify-start gap-6 w-full max-w-md">
                <input type="text" wire:model="search" wire:keydown.enter="updateSearch" placeholder="Search" aria-label="Search" class="rounded p-2 border border-gray-300 transition duration-300 ease-in-out hover:border-yellow-300 focus:border-yellow-300 focus:outline-none focus:ring focus:ring-yellow-300 focus:ring-opacity-50 bg-white" />
                <div class="flex flex-wrap gap-2">
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!--[if BLOCK]><![endif]--><?php if($category->name !== null && $category->is_active === '1'): ?>
                    <button wire:click="filterProjectsByCategory(<?php echo e($category->id); ?>)" class="<?php echo e($filteredProject == $category->id ? 'bg-yellow-300 text-black' : 'bg-white text-slate-800'); ?> p-1 rounded border border-slate-800 font-medium text-sm transition duration-300 ease-in-out hover:bg-yellow-300 hover:text-black transform hover:-translate-y-1 hover:shadow-lg">
                        <?php echo e($category->name); ?> (<?php echo e($category->projects_count); ?>)
                    </button>
                    <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>
        </div>
        <div class="hidden lg:block lg:flex-shrink-0 lg:basis-px w-px bg-gray-300 h-full"></div>
        <div class="flex flex-wrap flex-col items-center justify-center flex-grow lg:basis-4/5 px-4 max-w-full">
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('card', ['projects' => $projects]);

$__html = app('livewire')->mount($__name, $__params, 'aIzFTxI', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <!--[if BLOCK]><![endif]--><?php if(empty($search)): ?>
            <div class="flex items-center justify-center">
                <button wire:click="$dispatch('loadMoreProjects')" class="p-1 bg-white text-slate-800 rounded border border-slate-800 font-medium text-sm transition duration-300 ease-in-out hover:bg-yellow-300 hover:text-black transform hover:-translate-y-1 hover:shadow-lg">
                    Load More
                </button>
            </div>
            <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
        </div>
    </div>
</div><?php /**PATH C:\Users\acoco\OneDrive\Desktop\swu-cpr-website\resources\views/livewire/project-content.blade.php ENDPATH**/ ?>