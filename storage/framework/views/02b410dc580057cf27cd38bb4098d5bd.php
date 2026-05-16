

<?php $__env->startSection('title', 'Labour Law & CCMA Attorneys Kempton Park | Sehunane Attorneys Inc'); ?>
<?php $__env->startSection('meta_description', 'Facing a workplace dispute? Sehunane Attorneys Inc provides expert representation for CCMA cases, unfair dismissals, and retrenchments in Kempton Park and the East Rand.'); ?>

<?php $__env->startSection('content'); ?>
    <div class="min-h-screen bg-[#fcfcfc]">
        <section class="relative h-[350px] flex items-center overflow-hidden">
            <div class="absolute inset-0 z-0">
                <img src="<?php echo e(asset('images/law-firm-1.jpg')); ?>" alt="Labour Law Attorney Kempton Park CCMA specialist" 
                    class="w-full h-full object-cover bg-zoom-slow">
                <div class="absolute inset-0 bg-gradient-to-r from-[#36251e] to-[#36251e]/60 opacity-90"></div>
            </div>

            <div class="container mx-auto px-4 relative z-10">
                <nav class="flex items-center space-x-2 text-sm text-[#bb942f] mb-4 font-semibold uppercase tracking-widest" data-aos="fade-down">
                    <a href="/" class="hover:text-white transition-colors">Home</a>
                    <i data-lucide="chevron-right" class="w-4 h-4"></i>
                    <span class="text-white/60">Services</span>
                    <i data-lucide="chevron-right" class="w-4 h-4"></i>
                    <span class="text-white">Labour Law</span>
                </nav>
                <h1 class="text-3xl md:text-5xl font-bold text-white leading-tight" data-aos="fade-right">
                    labour <span class="text-[#bb942f]">Law</span>
                </h1>
            </div>
        </section>
        <div class="container mx-auto px-4 py-16 lg:py-24">
            <div class="flex flex-col lg:flex-row gap-16">
                
                <aside class="lg:w-1/3">
                    <div class="sticky top-24 space-y-8">
                        
                        
                        <div class="bg-white rounded-2xl shadow-xl shadow-slate-200/50 overflow-hidden border border-slate-100">
                            <div class="p-6 bg-[#36251e] text-white">
                                <h2 class="text-lg font-bold flex items-center gap-3">
                                    <i data-lucide="briefcase" class="w-5 h-5 text-[#bb942f]"></i>
                                    Practice Areas
                                </h2>
                            </div>
                            <nav class="p-2">
                                <?php
                                    $services = [   
                                        ['route' => 'services.litigation', 'label' => 'Civil Litigation'],
                                        ['route' => 'services.commercial', 'label' => 'Commercial Law'],
                                        ['route' => 'services.constitutional', 'label' => 'Constitutional Litigation'],
                                        ['route' => 'services.criminal', 'label' => 'Criminal Law'],
                                        ['route' => 'services.labour', 'label' => 'Labour Law'],
                                        ['route' => 'services.property', 'label' => 'Property & Conveyancing'],
                                        ['route' => 'services.third-party', 'label' => 'Third Party Claims'],
                                    ];
                                ?>

                                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="<?php echo e(route($service['route'])); ?>"
                                    class="group flex items-center justify-between px-4 py-4 rounded-xl transition-all duration-300 mb-1
                                    <?php echo e(request()->routeIs($service['route']) 
                                        ? 'bg-[#bb942f] text-white shadow-lg shadow-[#bb942f]/20' 
                                        : 'hover:bg-slate-50 text-slate-600 hover:text-black'); ?>">
                                        <span class="font-bold text-sm"><?php echo e($service['label']); ?></span>
                                        <i data-lucide="arrow-right" class="w-4 h-4 opacity-0 group-hover:opacity-100 <?php echo e(request()->routeIs($service['route']) ? 'opacity-100' : ''); ?> transition-all"></i>
                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </nav>
                        </div>

                        
                        <div class="bg-gradient-to-br from-[#36251e] to-[#241914] rounded-2xl p-8 text-white relative overflow-hidden group shadow-2xl">
                            <i data-lucide="users" class="absolute -right-4 -top-4 w-32 h-32 text-white/5 rotate-12 transition-transform group-hover:scale-110"></i>
                            <h3 class="text-2xl font-bold mb-4 leading-tight relative z-10">Workplace <span class="text-[#bb942f]">Legal Solutions</span></h3>
                            <p class="text-white/70 text-sm mb-8 relative z-10 leading-relaxed">
                                Whether you're an employer or employee, we ensure your rights are upheld in CCMA hearings and disciplinary matters.
                            </p>
                            <a href="tel:0603561780" class="flex items-center gap-4 bg-[#bb942f] text-black font-bold py-3 px-6 rounded-xl hover:bg-white transition-all duration-300 relative z-10">
                                <i data-lucide="briefcase" class="w-5 h-5"></i>
                                Contact a Specialist
                            </a>
                        </div>
                    </div>
                </aside>

                <main class="lg:w-2/3">
                    <div class="prose prose-slate max-w-none">
                        <div class="mb-12" data-aos="fade-up">
                            <span class="text-[#bb942f] font-bold uppercase tracking-widest text-xs">Overview</span>
                            <h2 class="text-3xl md:text-4xl font-bold text-black mt-2 mb-6">Navigating Fairness in the Workplace</h2>
                            <div class="space-y-6 text-slate-600 text-lg leading-relaxed">
                                <p>
                                    The South African labour landscape is complex and highly regulated. At <strong>Sehunane Attorneys Inc</strong>, we provide comprehensive legal support rooted in the <strong>Labour Relations Act (LRA)</strong> and the <strong>Basic Conditions of Employment Act (BCEA)</strong>, ensuring that workplace relationships are managed fairly.
                                </p>
                                <p>
                                    From drafting airtight employment contracts to representing clients in high-pressure <strong>CCMA or Bargaining Council</strong> disputes, we offer practical advice to resolve conflicts. We also assist businesses with <strong>restructuring and retrenchment (Section 189)</strong> processes to ensure full legal compliance and minimize risk.
                                </p>
                            </div>
                        </div>

                        
                        <div class="mt-16 bg-white p-8 md:p-12 rounded-3xl border border-slate-100 shadow-sm" data-aos="fade-up">
                            <div class="flex items-center gap-4 mb-10">
                                <h3 class="text-2xl font-bold text-black">Our Expertise</h3>
                                <div class="h-px flex-grow bg-slate-100"></div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <?php
                                    $offerings = [
                                        [
                                            'title' => 'CCMA & Bargaining Councils', 
                                            'desc' => 'Professional representation for conciliation and arbitration regarding unfair dismissal or labor practices.'
                                        ],
                                        [
                                            'title' => 'Retrenchments (Section 189)', 
                                            'desc' => 'Guiding employers and employees through legally compliant restructuring and operational requirement dismissals.'
                                        ],
                                        [
                                            'title' => 'Disciplinary Procedures', 
                                            'desc' => 'Chairing disciplinary hearings for companies or providing expert defense for employees facing charges.'
                                        ],
                                        [
                                            'title' => 'Contractual & Policy Design', 
                                            'desc' => 'Drafting employment agreements and workplace policies that protect your interests and meet statutory standards.'
                                        ],
                                    ];
                                ?>

                                <?php $__currentLoopData = $offerings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="flex gap-4 group">
                                        <div class="w-12 h-12 flex-shrink-0 bg-slate-50 rounded-xl flex items-center justify-center group-hover:bg-[#bb942f]/10 transition-colors">
                                            <i data-lucide="check-circle-2" class="w-6 h-6 text-[#bb942f]"></i>
                                        </div>
                                        <div>
                                            <h4 class="font-bold text-black mb-1"><?php echo e($item['title']); ?></h4>
                                            <p class="text-sm text-slate-500"><?php echo e($item['desc']); ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-6 border-t border-slate-100 pt-12">
                            <div>
                                <h4 class="font-bold text-black mb-2">East Rand Industrial Support</h4>
                                <p class="text-sm text-slate-500">Centrally located to support businesses and workers across the Kempton Park, Isando, and Aerotropolis industrial zones.</p>
                            </div>
                            <div>
                                <h4 class="font-bold text-black mb-2">Labour Court Litigation</h4>
                                <p class="text-sm text-slate-500">Beyond the CCMA, we provide expert representation for reviews and urgent applications in the Labour Court of South Africa.</p>
                            </div>
                        </div>
                        
                        <div class="mt-16 p-8 rounded-3xl bg-slate-50 border-l-4 border-[#bb942f]" data-aos="fade-up">
                            <p class="text-slate-700 italic text-lg leading-relaxed">
                                "At Sehunane Attorneys Inc, we strive for workplace justice through balanced, legally sound advice that protects the rights and interests of all parties involved."
                            </p>
                        </div>
                    </div>
                </main>
                
            </div>
        </div>
       
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/sehunac9n8g7/public_html/resources/views/pages/services/labour.blade.php ENDPATH**/ ?>