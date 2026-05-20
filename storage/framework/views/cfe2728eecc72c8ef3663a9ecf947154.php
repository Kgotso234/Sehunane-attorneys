

<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('meta_description', $meta_description); ?>

<?php $__env->startSection('content'); ?>
<div class="min-h-screen bg-[#fcfcfc]">

    
    <section class="relative h-[350px] flex items-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="<?php echo e(asset($hero_image)); ?>" class="w-full h-full object-cover bg-zoom-slow">
            <div class="absolute inset-0 bg-gradient-to-r from-[#36251e] to-[#36251e]/60 opacity-90"></div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <nav class="flex items-center space-x-2 text-sm text-[#bb942f] mb-4 font-semibold uppercase tracking-widest">
                <a href="/">Home</a>
                <i data-lucide="chevron-right" class="w-4 h-4"></i>
                <span>Services</span>
                <i data-lucide="chevron-right" class="w-4 h-4"></i>
                <span class="text-white/60"><?php echo e($service_name); ?></span>
            </nav>

            <h1 class="text-3xl md:text-5xl font-bold text-white leading-tight">
                <?php echo $hero_title; ?>

            </h1>
        </div>
    </section>

    
    <div class="container mx-auto px-4 py-16 lg:py-24">
        <div class="flex flex-col lg:flex-row gap-16">

            
            <aside class="lg:w-1/3">
                <div class="sticky top-24 space-y-8">

                    
                    <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-slate-100">
                        <div class="p-6 bg-[#36251e] text-white">
                            <h2 class="text-lg font-bold flex items-center gap-3">
                                <i data-lucide="briefcase" class="w-5 h-5 text-[#bb942f]"></i>
                                Practice Areas
                            </h2>
                        </div>

                        <nav class="p-2">
                            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e(route($service['route'])); ?>"
                                   class="flex justify-between px-4 py-4 rounded-xl mb-1
                                   <?php echo e(request()->routeIs($service['route']) ? 'bg-[#bb942f] text-white' : 'hover:bg-slate-50 text-slate-600'); ?>">
                                    <span class="font-bold text-sm"><?php echo e($service['label']); ?></span>
                                    <i data-lucide="arrow-right" class="w-4 h-4"></i>
                                </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </nav>
                    </div>

                    
                    <div class="bg-gradient-to-br from-[#36251e] to-[#241914] rounded-2xl p-8 text-white">
                        <h3 class="text-2xl font-bold mb-4">
                            <?php echo e($contact_title); ?>

                        </h3>

                        <p class="text-white/70 text-sm mb-6">
                            <?php echo e($contact_text); ?>

                        </p>

                        <a href="tel:0720621529"
                           class="bg-[#bb942f] text-black font-bold py-3 px-6 rounded-xl inline-flex items-center gap-3">
                            <i data-lucide="phone-call"></i>
                            Call Now
                        </a>
                    </div>

                </div>
            </aside>

            
            <main class="lg:w-2/3">

                
                <div class="mb-12">
                    <span class="text-[#bb942f] font-bold uppercase text-xs">
                        Overview
                    </span>

                    <h2 class="text-3xl font-bold mt-2 mb-6">
                        <?php echo e($overview_title); ?>

                    </h2>

                    <div class="space-y-6 text-slate-600 text-lg">
                        <?php echo $overview; ?>

                    </div>
                </div>

                
                <div class="bg-white p-8 md:p-12 rounded-3xl border border-slate-100">
                    <h3 class="text-2xl font-bold mb-10">Our Expertise</h3>

                    <div class="grid md:grid-cols-2 gap-8">
                        <?php $__currentLoopData = $offerings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="flex gap-4">
                                <i data-lucide="check-circle-2" class="text-[#bb942f] w-6 h-6"></i>
                                <div>
                                    <h4 class="font-bold"><?php echo e($item['title']); ?></h4>
                                    <p class="text-sm text-slate-500"><?php echo e($item['desc']); ?></p>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                
                <div class="mt-12 grid md:grid-cols-2 gap-6 border-t pt-12">
                    <?php $__currentLoopData = $footnotes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div>
                            <h4 class="font-bold mb-2"><?php echo e($note['title']); ?></h4>
                            <p class="text-sm text-slate-500"><?php echo e($note['desc']); ?></p>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

            </main>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\sehunane Att\resources\views/services/layouts.blade.php ENDPATH**/ ?>