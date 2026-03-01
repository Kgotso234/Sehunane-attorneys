

<?php $__env->startSection('title', 'Sehunane Attorneys Inc | Full-Service Law Firm in Kempton Park'); ?>
<?php $__env->startSection('meta_description', 'Sehunane Attorneys Inc provides expert legal counsel in Kempton Park for Criminal, Civil, and Corporate matters.'); ?>

<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        /* Optional: Customizing Swiper dots to match your brand */
        .swiper-pagination-bullet-active {
            background: var(--primary) !important;
        }
        /* Ensure slides have equal height for the cards inside */
        .swiper-slide {
            height: auto !important;
        }
        /* Smooth Ken Burns effect for the background */
        @keyframes slowZoom {
            0% { transform: scale(1); }
            50% { transform: scale(1.08); }
            100% { transform: scale(1); }
        }
        .animate-slow-zoom {
            animation: slowZoom 25s ease-in-out infinite;
        }
    
    </style>
    <div class="min-h-screen">
        
        <section class="relative h-[650px] flex items-center overflow-hidden">
            <div class="absolute inset-0 z-0 overflow-hidden">
                <img src="<?php echo e(asset('images/theme-17-1.jpg')); ?>" 
                     alt="Legal Professionals" 
                     class="w-full h-full object-cover animate-slow-zoom">
                <div class="absolute inset-0 bg-black/65 z-10"></div>
            </div>
        
            <div class="container mx-auto px-6 lg:px-12 relative z-20">
                <div class="max-w-3xl pl-6 md:pl-10 border-l-4 border-[var(--accent)]" 
                     data-aos="fade-right" 
                     data-aos-duration="1000">
                    
                    <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-tight">
                        Your Trusted Partners <br class="hidden md:block"> in <span class="text-[var(--accent)]">Legal Excellence</span>
                    </h1>
        
                    <p class="text-lg md:text-xl text-white/90 mb-10 max-w-2xl leading-relaxed" 
                       data-aos="fade-right" 
                       data-aos-delay="300">
                        Based in <span class="text-[var(--accent)] font-semibold">Kempton Park</span> and serving surrounding areas, 
                        Sehunane Attorneys Inc provides comprehensive legal solutions with integrity and expertise. 
                        Our multi-disciplinary team is dedicated to protecting your interests across all fields of law.
                    </p>
        
                    <div class="flex flex-col sm:flex-row gap-5" 
                         data-aos="fade-up" 
                         data-aos-delay="600">
                        
                        <a href="<?php echo e(url('/contact')); ?>" 
                           class="bg-[var(--accent)] hover:bg-[var(--accent)]/90 text-[var(--accent-foreground)] font-bold 
                                  py-4 px-10 rounded-md text-base md:text-lg transition-all shadow-xl 
                                  inline-flex items-center justify-center gap-3 group">
                            Contact Us Today
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                    
                </div>
            </div>
        </section>
        
        <section class="py-20 bg-[var(--muted)]">
            <div class="container max-auto px-4">
                <div class="max-w-3xl mx-auto text-center">
                    <h2 class="text-3xl md:text-4xl font-bold text-[var(--primary)] mb-6" data-aos="zoom-in" data-aos-duration="1000">
                        Dedicated to Protecting Your Rights
                    </h2>
                    <p class="text-lg text-[var(--muted-foreground)] leading-relaxed" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                       At Sehunane Attorneys Inc., we specialize in delivering multifaceted legal services tailored to the unique needs of our clients. Whether you are an individual seeking justice in a personal matter or a corporation navigating complex legal landscapes, our mission is to provide expert counsel and unwavering representation across Criminal, Civil, Corporate, Family, and Property law.
                    </p>
                </div>
            </div>
        </section>
        
        <?php
                $services = [
                    [
                        'title' => 'Constitution Litigation',
                        'slug' => 'constitutional-Litigation',
                        'icon' => 'building', // Suggesting a building/office icon
                        'description' => 'Expert guidance on company formations, corporate governance, director duties, and compliance with the Companies Act.'
                    ],
                    
                    [
                        'title' => 'Commercial Law',
                        'slug' => 'commercial-law',
                        'icon' => 'briefcase',
                        'description' => 'Strategic legal support for business transactions, including drafting and reviewing service level agreements, partnership contracts, and terms of trade.'
                    ],
                    
                    [
                        'title' => 'Civil Litigation',
                        'slug' => 'civil-litigation',
                        'icon' => 'scale', // Changed to scale for balance
                        'description' => 'Expert representation in high-stakes civil disputes, damages claims, and contract litigations to protect your interests.'
                    ],
                    
                    [
                        'title' => 'Criminal Law',
                        'slug' => 'criminal-defense',
                        'icon' => 'gavel',
                        'description' => 'Dedicated defense and representation in all criminal matters, ensuring your constitutional rights are upheld at every stage.'
                    ],
                    [
                        'title' => 'Labour Law',
                        'slug' => 'labour-law',
                        'icon' => 'users',
                        'description' => 'Our signature expertise in CCMA representation, unfair dismissals, and workplace rights for all parties.'
                    ],
                    
                    [
                        'title' => 'Property',
                        'slug' => 'property-law',
                        'icon' => 'home',
                        'description' => 'Expert assistance with property transfers, lease agreements, and specialized real estate legalities.'
                    ],
                    [
                        'title' => 'Third Party Claims',
                        'slug' => 'third-party',
                        'icon' => 'scroll',
                        'description' => 'Secure your legacy with professional will drafting, trust administration, and winding up of deceased estates.'
                    ],
                ];
            ?>
        <section class="py-20 overflow-hidden">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-[var(--primary)] mb-4"
                        data-aos="zoom-in" 
                        data-aos-delay="150">
                        Areas of Expertise
                    </h2>
                    <p class="text-lg text-[var(--muted-foreground)] max-w-2xl mx-auto" 
                       data-aos="zoom-in" 
                       data-aos-delay="400">
                        Comprehensive legal solutions tailored to protect your rights
                    </p>
                </div>
        
                <div class="relative px-0 md:px-12"> 
                    <div class="swiper expertise-slider">
                        <div class="swiper-wrapper">
                            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="swiper-slide h-auto py-4"> <div 
                                        class="rounded-lg border border-gray-400 bg-[var(--card)] text-[var(--card-foreground)] shadow-sm group hover:shadow-md transition-all duration-300 hover:-translate-y-1 h-full flex flex-col"
                                        data-aos="zoom-in" 
                                        data-aos-delay="<?php echo e(100 + ($index * 50)); ?>"
                                    >
                                        <div class="p-6 flex flex-col h-full">
                                            <div class="mb-4 p-3 bg-[var(--accent)]/10 rounded-lg w-fit group-hover:bg-[var(--accent)]/20 transition-colors">
                                                <i data-lucide="<?php echo e($service['icon']); ?>" class="h-8 w-8 text-accent"></i>
                                            </div>
                                    
                                            <h3 class="text-xl font-semibold mb-3 text-[var(--primary)]"><?php echo e($service['title']); ?></h3>
                                            <p class="text-[var(--muted-foreground)] text-sm leading-relaxed mb-6">
                                                <?php echo e($service['description']); ?>

                                            </p>
                                    
                                            <div class="mt-auto pt-4">
                                                <a href="<?php echo e(url('/services/' . $service['slug'])); ?>" 
                                                   class="inline-flex items-center text-sm font-semibold text-[var(--primary)] hover:text-[var(--accent)] transition-colors group/btn">
                                                     Read More 
                                                     <i data-lucide="arrow-right" class="ml-2 h-4 w-4 transition-transform group-hover/btn:translate-x-1"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        
                        <div class="swiper-pagination !-bottom-2"></div>
                    </div>
        
                    <div class="swiper-button-prev !text-[var(--primary)] !-left-2 md:!left-0 after:!text-2xl"></div>
                    <div class="swiper-button-next !text-[var(--primary)] !-right-2 md:!right-0 after:!text-2xl"></div>
                </div>
            </div>
        </section>
        
        <section class="py-20 bg-[var(--muted)] overflow-hidden">
            <div class="container mx-auto px-4">
                <div class="max-w-5xl mx-auto">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                        <div class="order-2 md:order-1" data-aos="fade-right" data-aos-duration="1000">
                            <h2 class="text-3xl md:text-4xl font-bold text-[var(--primary)] mb-4">
                                Meet Our Director
                            </h2>
                            <p class="text-lg text-[var(--muted-foreground)] mb-6 leading-relaxed italic">
                                "Justice is a fundamental right for everyone, whether in the boardroom, the courtroom, or the home. I founded Sehunane Attorneys Inc. to ensure that no individual or business faces legal challenges alone."
                            </p>
                            <p class="text-[var(--foreground)] mb-6">
                                <strong class="text-[var(--primary)]"> Rueben Masilo Sehunane. </strong> Director of Sehunane Attorneys Inc., brings over a decade of legal expertise and a strong commitment to justice. He leads the firm with excellence and a dedication to client advocacy.
                            </p>
                            <a href="<?php echo e(url('/team')); ?>" class="inline-flex items-center justify-center border border-gray-400 text-gray-700 py-3 px-6 rounded-md text-lg hover:bg-gray-100 transition-colors group">
                                Meet Our Full Team
                            </a>
                        </div>
                        <div class="order-1 md:order-2" data-aos="fade-left" data-aos-duration="1000">
                            <img class="rounded-lg shadow-2xl w-full object-cover" src="<?php echo e(asset('images/image_icon.svg')); ?>" alt="Rueben Masilo Sehunane - Director">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-20 overflow-hidden">
            <div class="container mx-auto px-4">
                <div class="max-w-3xl mx-auto text-center">
                    <h2 class="text-3xl md:text-4xl font-bold text-[var(--primary)] mb-6" data-aos="fade-up">
                        Proven Track Record of Success
                    </h2>
                    <p class="text-lg text-[var(--muted-foreground)] mb-8 leading-relaxed" data-aos="fade-up" data-aos-delay="200">
                        Our commitment to excellence has resulted in countless successful outcomes for our clients. From complex civil litigation to CCMA arbitrations, we’ve helped clients secure the justice they deserve.
                    </p>
                    <div class="text-center mt-8" data-aos="zoom-in" data-aos-delay="400">
                        <a href="<?php echo e(url('/services')); ?>" class="inline-flex items-center justify-center border border-gray-400 text-gray-700 py-3 px-6 rounded-md text-lg hover:bg-gray-100 transition-colors group">
                            View Case Studies
                            <i data-lucide="arrow-right" class="ml-2 h-4 w-4 group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-20 bg-[var(--gradient-hero)]">
            <div class="container mx-auto px-4">
                <div class="max-w-3xl mx-auto text-center" data-aos="zoom-in" data-aos-duration="800">
                    <h2 class="text-3xl md:text-4xl font-bold text-[var(--primary-foreground)] mb-6">Schedule a consultation with our experienced team in Kempton Park today.</h2>
                    <p class="text-lg text-[var(--primary-foreground)]/90 mb-8">
                        Schedule a consultation with our experienced legal team today. We’re here to listen, advise, and fight for you.
                    </p>
                    <a href="<?php echo e(url('/contact')); ?>" class="bg-[var(--accent)] hover:bg-[var(--accent)]/90 text-[var(--accent-foreground)] font-semibold py-3 px-6 rounded-md">Get Started Today</a>
                </div>
                
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    new Swiper('.expertise-slider', {
        slidesPerView: 1,      // Default (Mobile)
        spaceBetween: 20,     // Gap between cards
        loop: true,
        centeredSlides: false,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            // When screen is >= 640px (Tablet)
            640: {
                slidesPerView: 2,
                spaceBetween: 24,
            },
            // When screen is >= 1024px (Desktop)
            1024: {
                slidesPerView: 3,
                spaceBetween: 30,
            }
        },
        // Ensures AOS animations trigger correctly within the slider
        on: {
            init: function () {
                AOS.refresh();
            },
        },
    });
});
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/sehunac9n8g7/public_html/resources/views/pages/home.blade.php ENDPATH**/ ?>