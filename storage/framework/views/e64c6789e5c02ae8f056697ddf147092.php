<header class="shadow-md sticky top-0 tracking-wide relative z-50 bg-[var(--background)]" style="border-bottom: 1px solid var(--border)">
    <div class="flex flex-wrap items-center justify-between gap-4 px-10 py-3 bg-[var(--background)] min-h-[75px]">
        <div class ="lg:ml-15 items-center justify-start flex-shrink-0">
            <a href="<?php echo e(url('/')); ?>">
                <img src="<?php echo e(asset('images/company_logo-removebg-preview (1).png')); ?>" alt="company logo" class="h-16 w-auto max-w-none">
            </a>
        </div>

        <?php
            $navItems = [
                ['name' => 'Home', 'path' => '/'],
                ['name' => 'About', 'path' => '/about'],
                ['name' => 'Our Team', 'path' => '/team'],
            ];
        
            $currentUrl = rtrim(url()->current(), '/');
        ?>

        <div id="collapseMenu" class="max-lg:hidden lg:!block max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-50 max-lg:before:inset-0 max-lg:before:z-50">
            <button id="toggleClose" class="lg:hidden fixed top-2 right-4 z-[100] rounded-full bg-white w-9 h-9 flex items-center justify-center border border-gray-200 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 fill-black" viewBox="0 0 320.591 320.591">
                    <path d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"></path>
                    <path d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"></path>
                </svg>
                
            </button>

            <ul class="lg:flex lg:gap-x-6 max-lg:space-y-3 max-lg:fixed max-lg:bg-white max-lg:w-1/2 max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:p-6 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50">
                <li class="mb-6 hidden max-lg:block">
                    <img src="<?php echo e(asset('images/company_logo-removebg-preview (1).png')); ?>" alt="logo" class="w-36" />
                </li>

                
                <?php $__currentLoopData = $navItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $itemUrl = rtrim(url($item['path']), '/');
                        $isActive = ($currentUrl === $itemUrl);
                    ?>
                    <li class="max-lg:border-b max-lg:border-gray-100 max-lg:px-3 max-lg:py-3">
                        <a href="<?php echo e(url($item['path'])); ?>"
                           class="transition-colors duration-200 hover:text-[var(--accent)] block font-medium text-[16px]
                                  <?php echo e($isActive ? 'text-[var(--accent)] font-bold underline underline-offset-8' : 'text-[var(--foreground)]'); ?>">
                            <?php echo e($item['name']); ?>

                        </a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                
                <li class="group max-lg:border-b max-lg:border-gray-300 max-lg:px-3 max-lg:py-3 relative">
                        <?php 
                            // 1. Define all service routes in an array
                            $serviceRoutes = [
                                route('services.labour'),
                                route('services.third-party'),
                                route('services.criminal'),
                                route('services.commercial'),
                                route('services.litigation'),
                                route('services.property'),
                                route('services.constitutional'),
                            ];
                            
                            // 2. Check if current URL is exactly one of these OR contains 'services'
                            $isServicePage = false;
                            foreach($serviceRoutes as $serviceRoute) {
                                if (rtrim(url()->current(), '/') === rtrim($serviceRoute, '/')) {
                                    $isServicePage = true;
                                    break;
                                }
                            }
                            
                            // Backup check: if the path has 'services' in it
                            if (!$isServicePage) {
                                $isServicePage = str_contains(request()->path(), 'services');
                            }
                        ?>
                    
                        <button type="button"
                            class="service-toggle flex items-center w-full lg:w-auto font-medium text-[16px]">
                            Services
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                 class="ml-1 lg:group-hover:rotate-180 transition-transform"
                                 viewBox="0 0 24 24">
                                <path d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"/>
                            </svg>
                        </button>

                    
                        
                        <ul
                            class="service-dropdown absolute left-0 top-8 z-50
                                   bg-[var(--background)] shadow-xl rounded-md min-w-[250px]
                                   hidden
                                   lg:block lg:opacity-0 lg:invisible
                                   lg:group-hover:opacity-100
                                   lg:group-hover:visible
                                   px-2 py-4">
                            <?php $__currentLoopData = [
                                ['route' => 'services.constitutional', 'label' => 'Constitutional Litigation'],
                                ['route' => 'services.litigation', 'label' => 'Civil Litigation'],
                                ['route' => 'services.commercial', 'label' => 'Commercial Law'],
                                ['route' => 'services.criminal', 'label' => 'Criminal Law'],
                                ['route' => 'services.labour', 'label' => 'Labour Law'],
                                ['route' => 'services.property', 'label' => 'Property & Conveyancing'],
                                ['route' => 'services.third-party', 'label' => 'Third Party Claims'],
                            ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subService): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php 
                                    $subActive = (rtrim(url()->current(), '/') === rtrim(route($subService['route']), '/'));
                                ?>
                                <li>
                                    <a href="<?php echo e(route($subService['route'])); ?>" 
                                       class="border-b border-[var(--border)]  hover:text-[var(--accent)] text-sm block px-4 py-2.5  transition-all <?php echo e($subActive ? 'text-[var(--accent)] font-bold bg-[var(--accent)]/5' : 'text-[var(--foreground)]'); ?>">
                                        <?php echo e($subService['label']); ?>

                                    </a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </li>
                    
                <?php
                    $caseActive = (rtrim(url('/case-studies'), '/') === $currentUrl);
                ?>
                
                <li class="max-lg:border-b max-lg:border-gray-100 max-lg:px-3 max-lg:py-3">
                    <a href="<?php echo e(url('/case-studies')); ?>"
                       class="transition-colors duration-200 hover:text-[var(--accent)] block font-medium text-[16px]
                              <?php echo e($caseActive ? 'text-[var(--accent)] font-bold underline underline-offset-8' : 'text-[var(--foreground)]'); ?>">
                        Case Studies
                    </a>
                </li>
                <?php $contactActive = (rtrim(url('/contact'), '/') === $currentUrl); ?>
                <li class="max-lg:border-b max-lg:border-gray-100 max-lg:px-3 max-lg:py-3">
                    <a href="<?php echo e(url('/contact')); ?>" 
                       class="transition-colors duration-200 hover:text-[var(--accent)] block font-medium text-[16px] <?php echo e($contactActive ? 'text-[var(--accent)] font-bold underline underline-offset-8' : 'text-[var(--foreground)]'); ?>">
                       Contact
                    </a>
                </li>
            </ul>
        </div>

        <div class="hidden lg:flex items-center justify-end flex-shrink-0">
            <button type="button" id="openConsultationModal" class="bg-[var(--accent)] text-[var(--foreground)] px-6 py-3 rounded-md font-semibold hover:opacity-90 transition-all shadow-md">
                Schedule Consultation
            </button>
        </div>

        <div class="flex max-lg:ml-auto">
            <button id="toggleOpen" class="lg:hidden cursor-pointer">
                <!--<svg class="w-7 h-7" fill="var(--foreground)" viewBox="0 0 20 20">-->
                <!--    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>-->
                <!--</svg>-->
                <svg class="h-6 w-6" fill="var(--foreground)" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
    </div>
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
    
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('.service-toggle').forEach(button => {
            button.addEventListener('click', () => {
                const dropdown = button.closest('li').querySelector('.service-dropdown');
                dropdown.classList.toggle('hidden');
            });
        });
    });

    
</script>














<?php /**PATH /home/sehunac9n8g7/public_html/resources/views/partials/navbar.blade.php ENDPATH**/ ?>