<main class="mb-auto">
    <div class="overflow prose prose-slate prose-p:text-lg dark:prose-invert mx-auto max-w-screen-xl">
        <section class="flex justify-center align-center py-24 lg:py-48">
            <div class="flex flex-col items-center justify-center text-center">
                <h2>About us</h2>
                <p>
                    We are a passionate team of IT students from Southwestern University
                    - PHINMA, driven by a common goal: to create a positive impact
                    through innovative IT solutions. Over the years, we have witnessed
                    countless projects developed by ourselves and our fellow IT
                    students, each showcasing the exceptional skills and creativity that
                    our institution nurtures.
                </p>
            </div>
        </section>
        <section class="flex flex-col md:flex-row justify-between items-center mx-auto py-16 md:py-18 lg:py-20 gap-4 md:gap-20">
            <div class="order-2 flex flex-col items-center justify-center text-center md:order-1 lg:order-1 ">
                <h2>Our Mission</h2>
                <p>
                    Realizing that these projects were gathering digital dust in
                    isolated storage spaces, we felt compelled to establish a platform
                    that would bring them into the spotlight. Thus, we developed this
                    website repository as a way to share and celebrate the remarkable
                    work of our University's IT students.
                </p>
            </div>
            <img class="w-full md:w-[500px] h-auto order-1 md:order-2 lg:order-2" alt="" src="<?php echo e(url('/images/missionImage.svg')); ?>" />
        </section>
        <section class="flex flex-col md:flex-row justify-between items-center mx-auto py-16 md:py-18 lg:py-20 gap-4 md:gap-20 h-auto md:h-4/6">
            <img class="w-full md:w-[500px] h-auto" alt="" src="<?php echo e(url('/images/collaborationImage.svg')); ?>" />
            <div class="flex flex-col items-center justify-center text-center">
                <h2>
                    Fostering collaboration
                </h2>
                <p>
                    By providing a space for these projects to be showcased online, we
                    aim to not only highlight the students' abilities and innovative
                    thinking but also to inspire future generations to build upon these
                    ideas. We believe that by connecting the IT community within our
                    university, we can foster collaboration, exchange knowledge, and
                    continue to push the boundaries of what is possible in the world of technology.
                </p>
            </div>
        </section>

        <section class="flex flex-col items-center justify-center mx-auto gap-12 py-16 md:py-18 lg:py-20">
            <img class="w-full md:w-96 lg:w-500 h-auto" alt="" src="<?php echo e(url('/images/meetTheTeamImage.svg')); ?>" />
            <div class="flex flex-col items-center justify-center text-center">
                <h2>
                    Meet The Team
                </h2>
                <p>
                    Discover the talented student developers who built this IT
                    solution from scratch. Through their dedication and expertise,
                    they created a platform that showcases the innovative works of IT
                    students in Southwestern University - PHINMA
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 grid-rows-2 gap-12">
                <?php if (isset($component)) { $__componentOriginaldb9661daf8627e1ba43c7a00a33c1ece = $component; } ?>
<?php $component = App\View\Components\DeveloperCard::resolve(['avatar' => ''.e(asset('/images/cyriel.png')).'','alt' => 'cyriel','name' => 'Cyriel John Acocoro','role' => 'Full-stack Developer | UX/UI Designer','about' => 'Hello, I’m an IT student at SWU-PHINMA, with a passion for software development and UX/UI design. If you\'re interested in collaborating on an exciting project, let\'s make it happen - contact me using this link!','facebookLink' => 'https://www.facebook.com/','showFacebookIcon' => 'true','instagramLink' => 'https://www.instagram.com/','showInstagramIcon' => 'true','linkedinLink' => 'https://www.linkedin.com/in/cyriel-acocoro/','showLinkedinIcon' => 'true'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('developer-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\DeveloperCard::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldb9661daf8627e1ba43c7a00a33c1ece)): ?>
<?php $component = $__componentOriginaldb9661daf8627e1ba43c7a00a33c1ece; ?>
<?php unset($__componentOriginaldb9661daf8627e1ba43c7a00a33c1ece); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginaldb9661daf8627e1ba43c7a00a33c1ece = $component; } ?>
<?php $component = App\View\Components\DeveloperCard::resolve(['avatar' => ''.e(asset('/images/danica.png')).'','alt' => 'danica','name' => 'Danica Marie Arnaiz','role' => 'Project Manager | Backend Developer','about' => 'I\'m an IT student with a versatile skill set covering web, mobile app, and game development. I thrive in leadership roles, handling responsibilities effectively. My keen interest lies in the intersection of business IT and cloud computing, where I envision contributing and excelling in the dynamic landscape of technology and innovation.','facebookLink' => 'https://www.facebook.com/nonononoway0','showFacebookIcon' => 'true','instagramLink' => 'https://instagram.com/saintdaniiii','showInstagramIcon' => 'true','linkedinLink' => 'https://linkedin.com/in/danica-arnaiz','showLinkedinIcon' => 'true'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('developer-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\DeveloperCard::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldb9661daf8627e1ba43c7a00a33c1ece)): ?>
<?php $component = $__componentOriginaldb9661daf8627e1ba43c7a00a33c1ece; ?>
<?php unset($__componentOriginaldb9661daf8627e1ba43c7a00a33c1ece); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginaldb9661daf8627e1ba43c7a00a33c1ece = $component; } ?>
<?php $component = App\View\Components\DeveloperCard::resolve(['avatar' => ''.e(asset('/images/romnee.png')).'','alt' => 'romnee','name' => 'Romnee James Banaay','role' => 'Quality Control','about' => ' Hi! I\'m Romnee James, a perpetual explorer of life\'s intricacies, a seeker of wisdom in everyday moments, and a passionate advocate for embracing the extraordinary in the ordinary. Join me on a journey through the kaleidoscope of my experiences, where every day is an opportunity to discover something new and meaningful.','facebookLink' => 'https://www.facebook.com/','showFacebookIcon' => 'true','instagramLink' => 'https://www.instagram.com/','showInstagramIcon' => 'true','linkedinLink' => 'https://www.instagram.com/','showLinkedinIcon' => 'true'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('developer-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\DeveloperCard::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldb9661daf8627e1ba43c7a00a33c1ece)): ?>
<?php $component = $__componentOriginaldb9661daf8627e1ba43c7a00a33c1ece; ?>
<?php unset($__componentOriginaldb9661daf8627e1ba43c7a00a33c1ece); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginaldb9661daf8627e1ba43c7a00a33c1ece = $component; } ?>
<?php $component = App\View\Components\DeveloperCard::resolve(['avatar' => ''.e(asset('/images/lj.png')).'','alt' => 'romnee','name' => 'Lauren Jade Cuico Yting','role' => 'Quality Control','about' => 'Hi, I\'m an IT student at SWU-PHINMA. I\'m passionate about creating scalable and maintainable code that solves real-world problems. If you need help with your web application, let\'s work together to make it awesome!','facebookLink' => 'https://www.facebook.com/','showFacebookIcon' => 'true','instagramLink' => 'https://www.instagram.com/','showInstagramIcon' => 'true','linkedinLink' => 'https://www.instagram.com/','showLinkedinIcon' => 'true'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('developer-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\DeveloperCard::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldb9661daf8627e1ba43c7a00a33c1ece)): ?>
<?php $component = $__componentOriginaldb9661daf8627e1ba43c7a00a33c1ece; ?>
<?php unset($__componentOriginaldb9661daf8627e1ba43c7a00a33c1ece); ?>
<?php endif; ?>
            </div>
        </section>
    </div>
</main><?php /**PATH C:\Users\acoco\OneDrive\Desktop\swu-cpr-website\resources\views/livewire/about.blade.php ENDPATH**/ ?>