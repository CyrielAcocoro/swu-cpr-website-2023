<div class="flex flex-wrap items-start justify-start gap-0.5 w-full">
    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <!--[if BLOCK]><![endif]--><?php if($project->is_published === "1"): ?>
    <div class="bg-white flex flex-col items-center justify-center gap-0.5 rounded-md max-w-md m-2">
        <?php if(!empty($project->files) && count($project->files) > 0): ?>
        <button x-data x-on:click="Livewire.dispatchTo(null, 'project-modal','show', [<?php echo e($project->id); ?>])" loading="lazy" class="relative cursor-pointer transform transition duration-500 hover:scale-105 w-[390px] h-[270px] bg-white">
            <img class="relative rounded-lg w-full h-full object-contain cursor-pointer" alt="Project Image" src="<?php echo e(asset('/admin-images/'. $project->files[0])); ?>" />
            <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-b from-dark_gray-100 from-1% via-transparent rounded-lg"></div>
            <h2 class="absolute top-0 left-0 text-white text-start font-semibold text-sm md:text-base lg:text-xl px-2 pt-2 line-clamp-1 w-72"><?php echo e($project->title); ?></h2>
        </button>
        <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
        <div class="w-full flex flex-row items-center justify-between pb-[8px] ">
            <div class="flex flex-row items-center justify-start gap-2">
                <div class="rounded-full w-6 h-6 flex items-center justify-center border border-gray-300">
                    <i class="fa-solid fa-user-tie text-base text-gray-700"></i>
                </div>
                <p class="leading-4 text-xs font-medium line-clamp-1 w-60 md:text-sm lg:text-base">
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $project->developer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $developerId): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($developerId); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
                </p>
            </div>
        </div>
    </div>
    <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
</div><?php /**PATH C:\Users\acoco\OneDrive\Desktop\swu-cpr-website\resources\views/livewire/card.blade.php ENDPATH**/ ?>