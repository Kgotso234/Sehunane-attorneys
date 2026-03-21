

<?php $__env->startSection('title', 'Sehunane Attorneys Inc | Full-Service Law Firm in Kempton Park'); ?>
<?php $__env->startSection('meta_description', 'Sehunane Attorneys Inc provides expert legal counsel in Kempton Park for Criminal, Civil, and Corporate matters.'); ?>

<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <div class="min-h-screen">
        
        <section class="relative h-[650px] flex items-center overflow-hidden">
            <div class="absolute inset-0 z-0 overflow-hidden">
                <img src="<?php echo e(asset('images/theme-17-1.jpg')); ?>" 
                     alt="Legal Professionals" 
                     class="w-full h-full object-cover animate-slow-zoom">
                <div class="absolute inset-0 bg-black/65 z-10"></div>
            </div>
        
            <div class="container mx-auto px-6 lg:px-12 relative z-20">
                <div class="max-w-3xl pl-6 md:pl-10 border-l-4 border-[#b38b2d]" 
                     data-aos="fade-right" 
                     data-aos-duration="1000">
                    
                    <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-white mb-2 leading-tight">
                        Your Trusted Partners <br class="hidden md:block"> in <span class="text-[#b38b2d]">Legal Excellence</span>
                    </h1>
        
                    <p class="text-lg md:text-xl text-white/90 mb-6 max-w-2xl leading-relaxed" 
                       data-aos="fade-right" 
                       data-aos-delay="300">
                        Based in <span class="text-[#b38b2d] font-semibold">Kempton Park</span> and serving surrounding areas, 
                        Sehunane Attorneys Inc provides comprehensive legal solutions with integrity and expertise. 
                        Our multi-disciplinary team is dedicated to protecting your interests across all fields of law.
                    </p>
        
                    <div class="flex flex-col sm:flex-row gap-5" 
                         data-aos="fade-up" 
                         data-aos-delay="600">
                        <a href="<?php echo e(url('/contact')); ?>"
                        class="bg-[#b38b2d] text-white hover:bg-[var(--foreground)]/90 font-bold py-4 px-10 rounded-md text-white md:text-lg transition-all shadow-xl inline-flex items-center justify-center gap-3 group">
                            Schedule a Consultation  
                            <i data-lucide="phone" class="w-5 h-5"></i>
                        </a>
                    </div> 
                </div>
            </div>
        </section>
        
        <?php
            $services = [
                [
                    'title' => 'Constitution Litigation',
                    'slug' => 'constitutional-Litigation',
                    'icon' => 'building',
                    'description' => 'Expert guidance on company formations, corporate governance, director duties, and compliance with the Companies Act.',
                    'img' => 'https://images.unsplash.com/photo-1589829545856-d10d557cf95f?auto=format&fit=crop&w=1200&q=80',
                    'span' => 'md:col-span-7' // Large card
                ],
                [
                    'title' => 'Commercial Law',
                    'slug' => 'commercial-law',
                    'icon' => 'briefcase',
                    'description' => 'Strategic legal support for business transactions, drafting agreements, and terms of trade.',
                    'img' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=1200&q=80',
                    'span' => 'md:col-span-5' // Medium card
                ],
                [
                    'title' => 'Civil Litigation',
                    'slug' => 'litigation',
                    'icon' => 'scale',
                    'description' => 'Expert representation in high-stakes civil disputes and contract litigations.',
                    'img' => 'https://images.unsplash.com/photo-1505664194779-8beaceb93744?auto=format&fit=crop&w=1200&q=80',
                    'span' => 'md:col-span-4' // Small card
                ],
                [
                    'title' => 'Criminal Law',
                    'slug' => 'criminal-law',
                    'icon' => 'gavel',
                    'description' => 'Dedicated defense ensuring your constitutional rights are upheld at every stage.',
                    'img' => 'https://images.unsplash.com/photo-1589578594224-4bb0124ddcd1?auto=format&fit=crop&w=1200&q=80',
                    'span' => 'md:col-span-4' // Small card
                ],
                [
                    'title' => 'Labour Law',
                    'slug' => 'labour-law',
                    'icon' => 'users',
                    'description' => 'Our signature expertise in CCMA representation and workplace rights.',
                    'img' => 'https://images.unsplash.com/photo-1521791136364-798a730bb361?auto=format&fit=crop&w=1200&q=80',
                    'span' => 'md:col-span-4' // Small card
                ],
                [
                    'title' => 'Property & Conveyancing',
                    'slug' => 'property',
                    'icon' => 'home',
                    'description' => 'Expert assistance with property transfers and lease agreements.',
                    'img' => 'https://images.unsplash.com/photo-1560518883-ce09059eeffa?auto=format&fit=crop&w=1200&q=80',
                    'span' => 'md:col-span-5' // Medium card
                ],
                [
                    'title' => 'Third Party Claims',
                    'slug' => 'Third-Party-Claims',
                    'icon' => 'scroll',
                    'description' => 'Secure your legacy with professional will drafting and estate administration.',
                    'img' => 'https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=1200&q=80',
                    'span' => 'md:col-span-7' // Large card
                ],
            ];
        ?>

        <section class="py-5 relative overflow-hidden bg-white">
            <div class="container mx-auto px-4 relative z-10">
                <div class="text-center mb-10">
                    <h2 class="heading text-3xl md:text-4xl font-bold text-black inline-block relative pt-5 pb-1">
                        Our Legal Practice Areas              
                    </h2>   
                    <div class="heading-line"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-12 gap-4 lg:gap-6">
                    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="<?php echo e($service['span']); ?> group relative overflow-hidden rounded-2xl bg-slate-900 min-h-[400px]" 
                            data-aos="fade-up" 
                            data-aos-delay="<?php echo e(100 + ($index * 50)); ?>">
                            
                            <div class="absolute inset-0 bg-cover bg-center grayscale group-hover:grayscale-0 group-hover:scale-110 transition-all duration-1000 opacity-40" 
                                style="background-image: url('<?php echo e($service['img']); ?>');">
                            </div>
                            
                            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/80 to-transparent"></div>
                            
                            <div class="relative h-full p-8 flex flex-col justify-end">
                                <div class="mb-4 p-3 bg-[#bb942f] rounded-lg w-fit transition-transform group-hover:scale-110 duration-500">
                                    <i data-lucide="<?php echo e($service['icon']); ?>" class="h-6 w-6 text-black"></i>
                                </div>
                                
                                <h3 class="text-2xl md:text-3xl font-bold text-white mb-3"><?php echo e($service['title']); ?></h3>
                                
                                <p class="text-slate-200 text-sm md:text-base leading-relaxed mb-6 max-w-md opacity-90 group-hover:opacity-100 transition-opacity">
                                    <?php echo e($service['description']); ?>

                                </p>
                                
                                <div class="flex items-center opacity-0 group-hover:opacity-100 transition-all duration-500 translate-y-4 group-hover:translate-y-0">
                                    <a href="<?php echo e(url('/services/' . $service['slug'])); ?>" 
                                    class="flex items-center gap-2 text-[#bb942f] hover:text-white transition-colors text-sm font-bold uppercase tracking-wider">
                                        Explore Expertise 
                                        <i data-lucide="arrow-right" class="h-4 w-4"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
       <section class="relative py-24 overflow-hidden bg-[#212529]">
            <div class="absolute inset-0 z-0">
                <img src="<?php echo e(asset('images/office picture.jpg')); ?>" 
                    class="w-full h-full object-cover opacity-20 grayscale bg-zoom-slow" 
                    alt="Legal Office Background">
                <div class="absolute inset-0 bg-gradient-to-r from-[#212529] via-[#212529]/80 to-transparent"></div>
            </div>

            <div class="container mx-auto px-4 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
                    
                    <div class="lg:col-span-7 space-y-8">
                        <div>
                            <h2 class="heading text-3xl md:text-5xl font-bold text-white mb-4">
                                Trusted Legal Guidance in Kempton Park
                            </h2>
                            <div class="heading-line dark-line !ml-0"></div> </div>

                        <div class="space-y-6 text-[#bb942f] text-lg leading-relaxed">
                            <p data-aos="fade-right">
                                Without reliable and professional legal guidance, individuals and businesses can face serious financial loss, disputes, compliance risks, and unnecessary legal exposure.
                            </p>
                            <p data-aos="fade-right" data-aos-delay="200">
                                Unresolved business disputes, employment conflicts, family matters, regulatory challenges, or risky agreements can disrupt your life or your operations.
                            </p>
                        </div>
                    </div>

                    <div class="lg:col-span-5 bg-[#bb942f] rounded-2xl p-10 text-white shadow-lg shadow-gold/20" data-aos="fade-left">
                        <i data-lucide="award" class="h-10 w-10 text-white mb-6"></i>
                        <h3 class="heading text-2xl font-bold mb-6">Why Sehunane Attorneys Inc?</h3>
                        <div class="space-y-6 text-white text-lg opacity-90 leading-relaxed">
                            <p>
                                That is why we established Sehunane Attorneys Inc — to provide clear, practical, and dependable legal solutions.
                            </p>
                            <p>
                                We offer structured legal support across consultation, drafting, and legal representation. If you are looking for trusted guidance, we are here to navigate your challenges.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="py-5 bg-white relative overflow-hidden">
            <div class="container mx-auto px-4 relative z-10">
                
                <div class="text-center mb-16">
                    <h2 class="heading text-3xl md:text-5xl font-bold text-black mb-4">
                        Our Process
                    </h2>
                    <div class="heading-line"></div>
                    <p class="text-slate-600 mt-6 max-w-2xl mx-auto text-lg">
                        Three simple steps to professional legal representation and peace of mind.
                    </p>
                </div>

                <div class="relative">
                    

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-12 relative z-10">
                        
                        <div class="group text-center" data-aos="fade-up" data-aos-delay="100">
                            <div class="relative mb-8">
                                <div class="w-20 h-20 bg-[#bb942f] rounded-full flex items-center justify-center mx-auto transition-transform group-hover:scale-110 duration-500 shadow-lg shadow-gold/20">
                                    <i data-lucide="phone-call" class="h-8 w-8 text-black"></i>
                                </div>
                                <div class="absolute -top-2 right-1/2 translate-x-10 w-8 h-8 bg-black text-white rounded-full flex items-center justify-center font-bold text-sm border-2 border-white">
                                    1
                                </div>
                            </div>
                            <h3 class="heading text-2xl font-bold text-black mb-4">Contact Us</h3>
                            <p class="text-slate-600 leading-relaxed">
                                Get in touch with us via calling us, visiting us or sending us an email through our contact form or email address.
                            </p>
                        </div>

                        <div class="group text-center" data-aos="fade-up" data-aos-delay="300">
                            <div class="relative mb-8">
                                <div class="w-20 h-20 bg-[#36251e] rounded-full flex items-center justify-center mx-auto transition-transform group-hover:scale-110 duration-500 shadow-lg shadow-brown/20">
                                    <i data-lucide="messages-square" class="h-8 w-8 text-white"></i>
                                </div>
                                <div class="absolute -top-2 right-1/2 translate-x-10 w-8 h-8 bg-[#bb942f] text-black rounded-full flex items-center justify-center font-bold text-sm border-2 border-white">
                                    2
                                </div>
                            </div>
                            <h3 class="heading text-2xl font-bold text-black mb-4">Consultation</h3>
                            <p class="text-slate-600 leading-relaxed">
                                Discuss your unique needs with one of our attorneys and get a customized quotation for your legal needs.
                            </p>
                        </div>

                        <div class="group text-center" data-aos="fade-up" data-aos-delay="500">
                            <div class="relative mb-8">
                                <div class="w-20 h-20 bg-[#bb942f] rounded-full flex items-center justify-center mx-auto transition-transform group-hover:scale-110 duration-500 shadow-lg shadow-gold/20">
                                    <i data-lucide="shield-check" class="h-8 w-8 text-black"></i>
                                </div>
                                <div class="absolute -top-2 right-1/2 translate-x-10 w-8 h-8 bg-black text-white rounded-full flex items-center justify-center font-bold text-sm border-2 border-white">
                                    3
                                </div>
                            </div>
                            <h3 class="heading text-2xl font-bold text-black mb-4">Client Service</h3>
                            <p class="text-slate-600 leading-relaxed">
                                Once you approve your quote, one of our friendly attorneys will work with you to solve your legal problem.
                            </p>
                        </div>

                    </div>
                </div>

                <div class="mt-10 text-center" data-aos="zoom-in">
                    <a href="<?php echo e(url('/contact')); ?>" class="inline-flex items-center gap-3 bg-[#36251e] text-white px-10 py-4 rounded-full font-bold hover:bg-[#bb942f] hover:text-black transition-all shadow-xl">
                        Start Step 1 Today
                        <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                </div>
            </div>
        </section>
        
        <section class="relative py-15 overflow-hidden bg-[#36251e]">
            <div class="absolute inset-0 z-0">
                <img src="<?php echo e(asset('images/Lawyer Office Designs_ Elevate.jpg')); ?>" 
                    class="w-full h-full object-cover opacity-10 grayscale bg-zoom-slow" 
                    alt="Legal Consultation Background">
                <div class="absolute inset-0 bg-radial-gradient from-transparent to-[#36251e]/80"></div>
            </div>

            <div class="container mx-auto px-4 relative z-10">
                <div class="max-w-4xl mx-auto text-center" data-aos="zoom-in" data-aos-duration="1000">
                    
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-[#bb942f]/10 rounded-full mb-8 border border-[#bb942f]/30">
                        <i data-lucide="calendar-check" class="h-8 w-8 text-[#bb942f]"></i>
                    </div>

                    <h2 class="heading text-3xl md:text-5xl font-bold text-white mb-6 leading-tight">
                        Secure Your <span class="text-[#bb942f]">Legal Future</span> Today
                    </h2>
                    
                    <p class="text-lg md:text-xl text-slate-300 mb-10 max-w-2xl mx-auto leading-relaxed">
                        Expert legal representation is just a conversation away. Our team in Kempton Park is ready to listen, advise, and advocate for your rights.
                    </p>

                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                        <a href="<?php echo e(url('/contact')); ?>" 
                        class="group relative inline-flex items-center gap-3 bg-[#bb942f] text-black font-bold py-4 px-10 rounded-full transition-all duration-300 hover:bg-white hover:scale-105 shadow-xl shadow-gold/20">
                            Schedule Your Consultation
                            <i data-lucide="arrow-right" class="w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
                        </a>
                        
                        <a href="tel:0720621529" class="text-white hover:text-[#bb942f] transition-colors font-medium flex items-center gap-2">
                            <i data-lucide="phone" class="w-4 h-4"></i>
                            Or Call Us: 072 062 1529
                        </a>
                    </div>

                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\public_html\resources\views/pages/home.blade.php ENDPATH**/ ?>