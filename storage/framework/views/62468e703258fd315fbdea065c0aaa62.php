<header class="sticky top-0 z-50 shadow-md">
    <div class="bg-white px-14 pt-4 pb-5 flex items-center justify-between">
        <div class="flex-shrink-0">
            <a href="<?php echo e(url('/')); ?>">
                <img src="<?php echo e(asset('images/company_logo-removebg-preview (1).png')); ?>" alt="Logo" class="h-16 w-auto">
            </a>
        </div>

        <div class="hidden lg:flex items-center gap-10 text-[var(--primary-text)]">
            <div class="flex items-center gap-3">
                <i data-lucide="phone" class="w-5 h-5"></i>
                <span class="font-bold text-lg ">0720621529</span>
            </div>
            <!-- Vertical Divider -->
            <div class="h-6 w-px bg-[var(--primary-text)] opacity-40"></div>
            <div class="flex items-center gap-3">
                <i data-lucide="mail" class="w-5 h-5"></i>
                <span class="font-bold text-lg">info@sehunaneattorneys.co.za</span>
            </div>
        </div>

        <div class="lg:hidden">
            <button id="toggleOpen" class="p-2">
                <i data-lucide="menu" class="w-8 h-8 text-[var(--primary-text)]"></i>
            </button>
        </div>
    </div>
    <nav class="lg:absolute lg:left-45 lg:right-45 lg:-bottom-17 z-50">
        <div id="collapseMenu" class="max-lg:hidden lg:!block max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-50 max-lg:before:inset-0 max-lg:before:z-50">
            
            <button id="toggleClose" class="lg:hidden fixed top-4 right-4 z-[100] rounded-full bg-white w-10 h-10 flex items-center justify-center">
                <i data-lucide="x" class="w-6 h-6 text-black"></i>
            </button>

            <ul class="min-h-[90px] bg-[var(--foreground)] lg:flex lg:items-stretch max-lg:fixed max-lg:bg-white max-lg:w-2/3 max-lg:top-0 max-lg:left-0 max-lg:p-6 max-lg:h-full max-lg:shadow-md z-50">
                
                <?php
                    $navLinks = [
                        ['name' => 'Home', 'path' => '/'],
                        ['name' => 'About', 'path' => '/about'],
                        ['name' => 'Our Team', 'path' => '/team'],
                    ];
                    $currentUrl = rtrim(url()->current(), '/');
                ?>

                <?php $__currentLoopData = $navLinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $itemUrl = rtrim(url($item['path']), '/');
                        $isActive = ($currentUrl === $itemUrl);
                    ?>
                    <li class="lg:border-r lg:border-white/20 flex">
                        <a href="<?php echo e(url($item['path'])); ?>"
                        class="relative px-15 py-5 flex items-center justify-center text-[15px] font-medium transition-all duration-500 overflow-hidden group
                                <?php echo e($isActive 
                                    ? 'bg-[#b38b2d] text-white' 
                                    : 'text-white max-lg:text-[#3d251e] before:absolute before:left-0 before:top-0 before:z-0 before:h-full before:w-0 before:bg-[#BB942F] before:transition-all before:duration-500 hover:text-white hover:before:w-full'); ?>">
                            
                            <span class="relative z-10"><?php echo e($item['name']); ?></span>
                        </a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               <li class="group relative lg:border-r lg:border-white/20 flex">
                    <button type="button" 
                            class="relative px-8 py-5 flex items-center justify-center text-[15px] font-medium transition-all duration-500 overflow-hidden text-white max-lg:text-[#3d251e] w-full
                                before:absolute before:left-0 before:top-0 before:z-0 before:h-full before:w-0 before:bg-[#BB942F] before:transition-all before:duration-500 
                                hover:text-white hover:before:w-full">
                        
                        <span class="relative z-10 flex items-center">
                            Services
                            <i data-lucide="chevron-down" class="ml-2 w-4 h-4 transition-transform lg:group-hover:rotate-180"></i>
                        </span>
                    </button>

                    <ul class="service-dropdown absolute left-0 top-full hidden lg:group-hover:block bg-[#3d251e] min-w-[240px] shadow-2xl border-t-2 border-[#b38b2d] z-50">
                        <?php $__currentLoopData = [
                                ['route' => 'services.constitutional', 'label' => 'Constitutional Litigation'],
                                ['route' => 'services.litigation', 'label' => 'Civil Litigation'],
                                ['route' => 'services.commercial', 'label' => 'Commercial Law'],
                                ['route' => 'services.criminal', 'label' => 'Criminal Law'],
                                ['route' => 'services.labour', 'label' => 'Labour Law'],
                                ['route' => 'services.property', 'label' => 'Property & Conveyancing'],
                                ['route' => 'services.third-party', 'label' => 'Third Party Claims'],
                            ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php 
                                $subActive = (rtrim(url()->current(), '/') === rtrim(route($service['route']), '/'));
                                
                            ?>
                            <li>
                                <a href="<?php echo e(route($service['route'])); ?>" class="text-white block px-6 py-3 border-b border-white/5 hover:bg-[#BB942F] text-sm transition-colors <?php echo e($subActive ? 'bg-[#BB942F]' : ''); ?>">
                                    <?php echo e($service['label']); ?>

                                </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                            
                    
                    </ul>
                </li>

                <li class="lg:border-r lg:border-white/20 flex">
                    <a href="<?php echo e(url('/case-studies')); ?>" 
                    class="relative px-8 py-5 flex items-center justify-center text-[15px] font-medium transition-all duration-500 overflow-hidden text-white max-lg:text-[#3d251e]
                            before:absolute before:left-0 before:top-0 before:z-0 before:h-full before:w-0 before:bg-[#BB942F] before:transition-all before:duration-500 hover:before:w-full">
                        <span class="relative z-10">Case Studies</span>
                    </a>
                </li>

                <li class="flex">
                    <a href="<?php echo e(url('/contact')); ?>" 
                    class="relative px-8 py-5 flex items-center justify-center text-[15px] font-medium transition-all duration-500 overflow-hidden text-white max-lg:text-[#3d251e]
                            before:absolute before:left-0 before:top-0 before:z-0 before:h-full before:w-0 before:bg-[#BB942F] before:transition-all before:duration-500 hover:before:w-full">
                        <span class="relative z-10">Contact Us</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    
</header>
<script>
    const toggleOpen = document.getElementById('toggleOpen');
    const toggleClose = document.getElementById('toggleClose');
    const collapseMenu = document.getElementById('collapseMenu');

    function toggleMenu() {
        collapseMenu.classList.toggle('max-lg:hidden');
    }

    toggleOpen.addEventListener('click', toggleMenu);
    toggleClose.addEventListener('click', toggleMenu);

    // Mobile Dropdown logic
    document.querySelectorAll('.service-toggle').forEach(button => {
        button.addEventListener('click', (e) => {
            if (window.innerWidth < 1024) {
                const dropdown = button.nextElementSibling;
                dropdown.classList.toggle('hidden');
                dropdown.classList.toggle('max-lg:block');
                dropdown.classList.toggle('max-lg:bg-gray-50');
            }
        });
    });
</script><?php /**PATH C:\xampp\htdocs\public_html\resources\views/partials/navbar.blade.php ENDPATH**/ ?>