<div class="flex flex-col p-8 items-center justify-start rounded-lg bg-white shadow-md ">
  <img class="rounded-2xl w-36 h-36 overflow-hidden shrink-0 object-cover" alt="<?php echo e($alt); ?>" src="<?php echo e($avatar); ?>" />
  <div class="flex flex-col items-center justify-center mt-4 text-wrap">
    <h3 class="font-medium m-0 text-xl text-balance"><?php echo e($name); ?></h3>
    <h4 class="leading-6 text-dimgray-300 text-lg m-0 font-medium text-balance text-center"><?php echo e($position); ?></h4>
  </div>
  <p class="flex flex-grow text-justify mt-4">
    <?php echo e($about); ?>

  </p>
  <div class="flex flex-col items-center justify-center mt-4">
    <b>Specialization</b>
    <p class="flex flex-grow">
      <?php echo e($specialization); ?>

    </p>
  </div>
</div><?php /**PATH C:\Users\acoco\OneDrive\Desktop\swu-cpr-website\resources\views/components/faculty-card.blade.php ENDPATH**/ ?>