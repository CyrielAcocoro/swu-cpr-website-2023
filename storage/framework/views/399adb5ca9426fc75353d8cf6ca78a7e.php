<div class="overflow prose prose-slate prose-p:text-lg dark:prose-invert mx-auto max-w-screen-xl my-8 h-full">
    <div class="flex flex-col md:flex-row w-full h-full">
        <div class="flex order-2 basis-2/5 item-start justify-start p-6 md:order-1">
            <div class="flex flex-1 flex-col justify-between p-4 md:p-6">
                <div>
                    <h1 class="text-xl md:text-2xl font-semibold transition duration-300 ease-in-out hover:text-[#ffd650]"><?php echo e($title); ?></h1>
                    <p class="line-clamp-3 md:line-clamp-6 text-base md:text-lg transition duration-300 ease-in-out"><?php echo e($description); ?></p>
                </div>
                <a href="/project" class="mt-2 no-underline uppercase tracking-wider cursor-pointer hover:text-[#ffd650] transition duration-300 ease-in-out">See Project</a>
            </div>
        </div>
        <div class="flex order-1 basis-3/5 justify-center bg-gray-100 md:order-2">
            <img class="object-contain m-auto h-full w-full" src=<?php echo e($featuredImage); ?> />
        </div>
    </div>
</div><?php /**PATH C:\Users\acoco\OneDrive\Desktop\swu-cpr-website\resources\views/components/featured.blade.php ENDPATH**/ ?>