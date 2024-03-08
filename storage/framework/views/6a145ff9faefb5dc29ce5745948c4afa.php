<div class="w-full inline-flex flex-nowrap overflow-hidden my-8">
    <ul class="flex items-center justify-center md:justify-start [&_li]:mx-8 [&_img]:max-w-none animate-infinite-scroll">
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <img src="<?php echo e(asset('/admin-images/' . $testimonial->image)); ?>" width="400px" height="400px" alt="Facebook" />
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
    </ul>
    <ul class="flex items-center justify-center md:justify-start [&_li]:mx-8 [&_img]:max-w-none animate-infinite-scroll" aria-hidden="true">
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <img src="<?php echo e(asset('/admin-images/' . $testimonial->image)); ?>" width="400px" height="400px" alt="Facebook" />
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
    </ul>
</div><?php /**PATH C:\Users\acoco\OneDrive\Desktop\swu-cpr-website\resources\views/components/testimonial.blade.php ENDPATH**/ ?>