<div class="flex flex-col p-8 items-center justify-start rounded-lg bg-white shadow-md prose prose-p:text-center dark:prose-invert">
  <img class="rounded-full w-36 h-36 overflow-hidden shrink-0 object-cover" alt="<?php echo e($alt); ?>" src="<?php echo e($avatar); ?>" />
  <div class="flex flex-col items-center justify-center">
    <h3 class="font-medium m-0 text-xl"><?php echo e($name); ?></h3>
    <p class="leading-6 text-dimgray-300 w-max text-lg m-0 font-medium"><?php echo e($role); ?></p>
  </div>
  <p class="flex flex-grow text-justify">
    <?php echo e($about); ?>

  </p>
  <div class="flex flex-row items-center m-0 justify-center gap-12">
    <!--[if BLOCK]><![endif]--><?php if($showFacebookIcon): ?>
    <a href="<?php echo e($facebookLink); ?>" target="_blank" class="m-0 transform transition duration-500 hover:scale-125">
      <img alt="facebook Icon" src="/images/facebookIcon.svg" class="m-0" width=28 />
    </a>
    <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
    <!--[if BLOCK]><![endif]--><?php if($showInstagramIcon): ?>
    <a href="<?php echo e($instagramLink); ?>" target="_blank" class="m-0 transform transition duration-500 hover:scale-125">
      <img alt="Instagram Icon" src="/images/instagramIcon.svg" class="m-0" width=28 />
    </a>
    <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
    <!--[if BLOCK]><![endif]--><?php if($showLinkedinIcon): ?>
    <a href="<?php echo e($linkedinLink); ?>" target="_blank" class="m-0 transform transition duration-500 hover:scale-125">
      <img alt="LinkedIn Icon" src="/images/linkedinIcon.svg" class="m-0" width=36 />
    </a>
    <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
  </div>
</div><?php /**PATH C:\Users\acoco\OneDrive\Desktop\swu-cpr-website\resources\views/components/developer-card.blade.php ENDPATH**/ ?>