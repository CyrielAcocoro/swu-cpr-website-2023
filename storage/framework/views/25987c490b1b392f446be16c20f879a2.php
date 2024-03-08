<header class="bg-white shadow-md py-5 px-4 lg:px-10 sticky top-0 z-50">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-2xl">
        <a href="/" class="flex items-center space-x-4">
            <img src="<?php echo e(asset('/admin-images/'. $logo->image)); ?>" alt="University Logo" class="h-12 object-cover">
            <div class="flex flex-col">
                <b class="text-gray-800">Southwestern University - PHINMA</b>
                <div class="text-sm text-gray-600"><?php echo e($logo->name); ?></div>
            </div>
        </a>
        <button wire:click="toggleMobileMenu" class="inline-flex items-center p-2 ml-1 text-sm rounded-lg lg:hidden hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-300">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            </svg>
            <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </button>
        <div class="<?php echo e($isMobileMenuOpen ? 'block' : 'hidden'); ?> lg:block">
            <ul class="flex flex-col mt-4 lg:flex-row lg:space-x-8 lg:mt-0">
                <li>
                    <a href="<?php echo e(route('home')); ?>" class="block py-2 pr-4 pl-3 text-base font-medium <?php echo e($currentRoute == 'home' ? 'text-[#ffd65b]' : 'text-gray-800'); ?> hover:text-[#ffd650] transition-colors duration-300">Home</a>
                </li>
                <li>
                    <a href="<?php echo e(route('project')); ?>" class="block py-2 pr-4 pl-3 text-base font-medium <?php echo e($currentRoute == 'project' ? 'text-[#ffd65b]' : 'text-gray-800'); ?> hover:text-[#ffd650] transition-colors duration-300">Projects</a>
                </li>
                <li>
                    <a href="<?php echo e(route('faculty')); ?>" class="block py-2 pr-4 pl-3 text-base font-medium <?php echo e($currentRoute == 'faculty' ? 'text-[#ffd65b]' : 'text-gray-800'); ?> hover:text-[#ffd650] transition-colors duration-300">Faculty</a>
                </li>
                <li>
                    <a href="<?php echo e(route('about')); ?>" class="block py-2 pr-4 pl-3 text-base font-medium <?php echo e($currentRoute == 'about' ? 'text-[#ffd65b]' : 'text-gray-800'); ?> hover:text-[#ffd650] transition-colors duration-300">About</a>
                </li>
                <li>
                    <a href="<?php echo e(route('student-developer')); ?>" class="block py-2 pr-4 pl-3 text-base font-medium <?php echo e($currentRoute == 'student-developer' ? 'text-[#ffd65b]' : 'text-gray-800'); ?> hover:text-[#ffd650] transition-colors duration-300">Students</a>
                </li>
            </ul>
        </div>
    </div>
    </div>
</header><?php /**PATH C:\Users\acoco\OneDrive\Desktop\swu-cpr-website\resources\views/livewire/navbar.blade.php ENDPATH**/ ?>