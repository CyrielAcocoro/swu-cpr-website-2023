<main class="mb-auto">
    <?php if (isset($component)) { $__componentOriginal20742eb2771d985bdc9eeee85f5ff6b5 = $component; } ?>
<?php $component = App\View\Components\Hero::resolve(['headlineDescription' => ''.e($headline->description).'','headlineTitle' => ''.e($headline->title).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('hero'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Hero::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal20742eb2771d985bdc9eeee85f5ff6b5)): ?>
<?php $component = $__componentOriginal20742eb2771d985bdc9eeee85f5ff6b5; ?>
<?php unset($__componentOriginal20742eb2771d985bdc9eeee85f5ff6b5); ?>
<?php endif; ?>
    <!-- Carousel Start -->
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <div class="relative h-[1112px] max-h-[712px] overflow-hidden rounded-lg">
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!--[if BLOCK]><![endif]--><?php if($project->is_featured === "1"): ?>
            <!-- Carousel Item -->
            <div class="<?php echo e($loop->first ? '' : 'hidden'); ?> transition duration-700 ease-in-out" data-carousel-item="<?php echo e($loop->first ? 'active' : ''); ?>">
                <?php if (isset($component)) { $__componentOriginalbb2ca0b885a6b37032595427a36e0d4a = $component; } ?>
<?php $component = App\View\Components\Featured::resolve(['title' => ''.e($project->title).'','description' => ''.e($project->description).'','featuredImage' => ''.e(asset('/admin-images/'. $project->files[0])).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('featured'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Featured::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbb2ca0b885a6b37032595427a36e0d4a)): ?>
<?php $component = $__componentOriginalbb2ca0b885a6b37032595427a36e0d4a; ?>
<?php unset($__componentOriginalbb2ca0b885a6b37032595427a36e0d4a); ?>
<?php endif; ?>
            </div>
            <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->

        </div>

        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!--[if BLOCK]><![endif]--><?php if($project->is_featured === "1"): ?>
            <button type="button" class="w-3 h-3 rounded-full transition duration-300 ease-in-out hover:scale-125 hover:bg-slate-500" aria-current="<?php echo e($loop->first ? 'true' : 'false'); ?>" aria-label="Slide <?php echo e($loop->index + 1); ?>" data-carousel-slide-to="<?php echo e($loop->index); ?>"></button>
            <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
        </div>

        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none max-w-screen-2xl" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white dark:bg-gray-700 border border-gray-400 dark:border-gray-600 group-hover:bg-gray-200 dark:group-hover:bg-gray-600 group-focus:ring-4 group-focus:ring-gray-300 dark:group-focus:ring-gray-600 group-focus:outline-none transition duration-300 ease-in-out">
                <svg class="w-4 h-4 text-gray-700 dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none max-w-screen-2xl" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white dark:bg-gray-700 border border-gray-400 dark:border-gray-600 group-hover:bg-gray-200 dark:group-hover:bg-gray-600 group-focus:ring-4 group-focus:ring-gray-300 dark:group-focus:ring-gray-600 group-focus:outline-none transition duration-300 ease-in-out">
                <svg class="w-4 h-4 text-gray-700 dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
    <!-- Carousel End -->

    <?php if (isset($component)) { $__componentOriginal06cf8767fb67761f17058e74be611369 = $component; } ?>
<?php $component = App\View\Components\Testimonial::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('testimonial'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Testimonial::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal06cf8767fb67761f17058e74be611369)): ?>
<?php $component = $__componentOriginal06cf8767fb67761f17058e74be611369; ?>
<?php unset($__componentOriginal06cf8767fb67761f17058e74be611369); ?>
<?php endif; ?>
</main><?php /**PATH C:\Users\acoco\OneDrive\Desktop\swu-cpr-website\resources\views/livewire/home.blade.php ENDPATH**/ ?>