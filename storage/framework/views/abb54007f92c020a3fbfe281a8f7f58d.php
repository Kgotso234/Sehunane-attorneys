<?php $__env->startSection('title', 'Commercial & Business Lawyers in Kempton Park | Sehunane Attorneys Inc'); ?>
<?php $__env->startSection('meta_description', 'Specialized commercial law representation in Kempton Park. We handle business contracts, corporate transactions, and commercial disputes with professional excellence.'); ?>


<?php $__env->startSection('content'); ?>
<div class="min-h-screen bg-[#fcfcfc]">
    
    <section class="relative h-[350px] flex items-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="<?php echo e(asset('images/law-firm-1.jpg')); ?>" alt="Commercial Law" 
                 class="w-full h-full object-cover bg-zoom-slow">
            <div class="absolute inset-0 bg-gradient-to-r from-[#36251e] to-[#36251e]/60 opacity-90"></div>
        </div>
        
        <div class="container mx-auto px-4 relative z-10">
            <nav class="flex items-center space-x-2 text-sm text-[#bb942f] mb-4 font-semibold uppercase tracking-widest" data-aos="fade-down">
                <a href="/" class="hover:text-white transition-colors">Home</a>
                <i data-lucide="chevron-right" class="w-4 h-4"></i>
                <span class="text-white/60">Services</span>
                <i data-lucide="chevron-right" class="w-4 h-4"></i>
                <span class="text-white">Commercial Law</span>
            </nav>
            <h1 class="text-3xl md:text-5xl font-bold text-white leading-tight">
                Commercial & <span class="text-[#bb942f]">Business Law</span> Kempton Park
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
                                    ['route' => 'services.labour', 'label' => 'Labour Law'],
                                    ['route' => 'services.litigation', 'label' => 'Civil Litigation'],
                                    ['route' => 'services.commercial', 'label' => 'Commercial Law'],
                                    ['route' => 'services.criminal', 'label' => 'Criminal Law'],
                                    ['route' => 'services.constitutional', 'label' => 'Constitutional Litigation'],
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
                        <i data-lucide="help-circle" class="absolute -right-4 -top-4 w-32 h-32 text-white/5 rotate-12 transition-transform group-hover:scale-110"></i>
                        <h3 class="text-2xl font-bold mb-4 leading-tight relative z-10">Need Expert Commercial Advice?</h3>
                        <p class="text-white/70 text-sm mb-8 relative z-10 leading-relaxed">
                            Our team in Kempton Park is ready to protect your business interests. Reach out for a consultation.
                        </p>
                        <a href="tel:0720621529" class="flex items-center gap-4 bg-[#bb942f] text-black font-bold py-3 px-6 rounded-xl hover:bg-white transition-all duration-300">
                            <i data-lucide="phone-call" class="w-5 h-5"></i>
                            Call 072 062 1529
                        </a>
                    </div>
                </div>
            </aside>

            
            <main class="lg:w-2/3">
                <div class="prose prose-slate max-w-none">
                    <div class="mb-12" data-aos="fade-up">
                        <span class="text-[#bb942f] font-bold uppercase tracking-widest text-xs">Overview</span>
                        <h2 class="text-3xl md:text-4xl font-bold text-black mt-2 mb-6">Strategic Legal Solutions for Modern Businesses</h2>
                        <div class="space-y-6 text-slate-600 text-lg leading-relaxed">
                            <p>
                                Our expertise covers the full spectrum of </strong>South African commercial law</strong>, 
                                ensuring your enterprise remains compliant with the </strong>Companies Act 71 of 2008</strong and the </strong> Consumer Protection Act (CPA)</strong>. At <strong>Sehunane Attorneys Inc</strong>, 
                                we understand that businesses in </strong> Kempton Park and Gauteng</strong> require practical 
                                legal solutions that support growth.
                            </p>
            
                            <p>
                                Legal uncertainty can affect operations, profitability, and reputation. We provide commercially sound legal advice tailored to your business needs, helping you manage risk and resolve disputes effectively.
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
                                        'title' => 'Contract Law & SLA', 
                                        'desc' => 'Drafting Service Level Agreements (SLA), non-disclosure agreements, and bespoke commercial contracts.'
                                    ],
                                    [
                                        'title' => 'Corporate Governance', 
                                        'desc' => 'Expert guidance on director duties, Memorandum of Incorporation (MOI), and Companies Act compliance.'
                                    ],
                                    [
                                        'title' => 'Dispute Resolution', 
                                        'desc' => 'Strategic litigation and mediation for breach of contract and commercial partnership disputes.'
                                    ],
                                    [
                                        'title' => 'Business Structuring', 
                                        'desc' => 'Partnership agreements, Shareholder agreements, and business formation for Kempton Park startups.'
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
                            <h4 class="font-bold text-black mb-2">Serving Kempton Park Businesses</h4>
                            <p class="text-sm text-slate-500">From the industrial hubs near OR Tambo to local retail enterprises, we provide the legal backbone for the Kempton Park business community.</p>
                        </div>
                        <div>
                            <h4 class="font-bold text-black mb-2">100% Black-Owned Expertise</h4>
                            <p class="text-sm text-slate-500">Leverage our B-BBEE status and deep understanding of the South African regulatory environment to give your business a competitive edge.</p>
                        </div>
                    </div>
                    
                    <div class="mt-16 p-8 rounded-3xl bg-slate-50 border-l-4 border-[#bb942f]" data-aos="fade-up">
                        <p class="text-slate-700 italic text-lg leading-relaxed">
                            "At Sehunane Attorneys Inc, we don't just provide legal advice; we provide the foundation for your business's future growth and security."
                        </p>
                    </div>
                </div>
            </main>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\sehunane Att\resources\views/pages/services/commercial.blade.php ENDPATH**/ ?>