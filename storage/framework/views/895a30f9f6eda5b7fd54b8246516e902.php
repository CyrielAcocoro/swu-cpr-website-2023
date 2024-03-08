<main class="mb-auto">
    <div class="overflow prose-slate prose-p:text-md dark:prose-invert mx-auto ">
        <div class="relative overflow-hidden bg-cover bg-no-repeat bg-center w-full h-[912px]" style="
        background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/146.webp');
      ">
            <div class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsla(0,0%,0%,0.75)] bg-fixed">
                <div class="flex h-full items-center justify-center">
                    <div class="px-6 text-center text-white md:px-12">
                        <h1 class="text-white mt-2 text-3xl font-bold tracking-tight md:text-4xl xl:text-5xl">
                            Inspiring Minds, <br /><span>Empowering Futures</span>
                        </h1>
                        <p class="text-white text-center mt-8 mb-16 text-base md:text-base lg:text-xl max-w-screen-2xl">
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
        <div id="facultyElement" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 grid-rows-2 gap-12 py-12 m-2 max-w-screen-2xl">
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $faculty->sortBy('fullName'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faculty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!--[if BLOCK]><![endif]--><?php if($faculty->is_active): ?>
            <?php if (isset($component)) { $__componentOriginal26c24187eb69c5a86ad7ea0c22c0b5cb = $component; } ?>
<?php $component = App\View\Components\FacultyCard::resolve(['alt' => ''.e($faculty->fullName).'','about' => ''.e($faculty->about).'','avatar' => ''.e(asset('/admin-images/' . $faculty->image)).'','name' => ''.e($faculty->fullName).'','position' => ''.e($faculty->position).'','specialization' => ''.e(implode(', ', $faculty->specialization)).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('faculty-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\FacultyCard::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal26c24187eb69c5a86ad7ea0c22c0b5cb)): ?>
<?php $component = $__componentOriginal26c24187eb69c5a86ad7ea0c22c0b5cb; ?>
<?php unset($__componentOriginal26c24187eb69c5a86ad7ea0c22c0b5cb); ?>
<?php endif; ?>
            <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
        </div>
    </div>
</main><?php /**PATH C:\Users\acoco\OneDrive\Desktop\swu-cpr-website\resources\views/livewire/faculties.blade.php ENDPATH**/ ?>