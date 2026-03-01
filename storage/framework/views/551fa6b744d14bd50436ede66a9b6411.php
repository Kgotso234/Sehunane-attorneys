

<?php $__env->startSection('title', 'Expert Civil Litigation Services | Sehunane Attorneys Inc'); ?>
<?php $__env->startSection('meta_description', 'Specialized civil litigation representation in Kempton Park. We handle contract disputes, personal injury claims, and civil lawsuits with professional excellence.'); ?>

<?php $__env->startSection('content'); ?>
    <div class="min-h-screen">
        
        <section class="relative h-[250px] flex items-center">
            <div class="absolute inset-0 overflow-hidden">
                <img src="<?php echo e(asset('images/law-firm-1.jpg')); ?>" alt="about-img" class="w-full h-full object-cover transition-transform duration-[5000ms] hover:scale-110" >
                <div class="absolute inset-0 bg-[var(--gradient-hero)] opacity-70"></div>
            </div>
            <div class="container mx-auto px-4 relative z-10">
                <nav class="flex items-center justify-center space-x-2 text-sm md:text-base mb-6">
                    <a href="/" class="text-[var(--primary-foreground)] font-medium hover:text-[var(--accent)] transition-colors">Home</a>
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-white w-3 -rotate-90" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M11.99997 18.1669a2.38 2.38 0 0 1-1.68266-.69733l-9.52-9.52a2.38 2.38 0 1 1 3.36532-3.36532l7.83734 7.83734 7.83734-7.83734a2.38 2.38 0 1 1 3.36532 3.36532l-9.52 9.52a2.38 2.38 0 0 1-1.68266.69734z" clip-rule="evenodd"></path>
                        </svg>
                    <a href="/" class="text-[var(--primary-foreground)] font-medium hover:text-[var(--accent)] transition-colors">Practice Areas</a>
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-white w-3 -rotate-90" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M11.99997 18.1669a2.38 2.38 0 0 1-1.68266-.69733l-9.52-9.52a2.38 2.38 0 1 1 3.36532-3.36532l7.83734 7.83734 7.83734-7.83734a2.38 2.38 0 1 1 3.36532 3.36532l-9.52 9.52a2.38 2.38 0 0 1-1.68266.69734z" clip-rule="evenodd"></path>
                        </svg>
                    <span class="text-white font-bold">Civil Litigation </span>
                </nav>
                <h1 class="text-center text-3xl md:text-5xl font-bold text-white mb-4" data-aos="fade-up" data-aos-duration="1000">
                    Civil Litigation Services
                </h1>
                
            </div>
        </section>
        
        <div class="flex flex-col-reverse lg:flex-row min-h-screen ">
             <aside class="lg:w-96 bg-white  flex-shrink-0 lg:flex flex-col ">
                 <div class="p-6 flex items-center gap-2">
                    <h2 class="text-md  text-[var(--primary)] whitespace-nowrap">
                        Practice Areas
                    </h2>
                    
                    <div class="h-[1px] flex-grow bg-[var(--primary)]"></div>
                </div>
                <nav class="flex-1  py-4 flex flex-col items-center">
                    <?php
                        $services = [
                            [   
                                'route' => 'services.labour',
                                'label' => 'Labour Law',
                                
                            ],
                            [
                                'route' => 'services.litigation',
                                'label' => 'Civil Litigation',
                                
                            ],
                            [
                                'route' => 'services.commercial',
                                'label' => 'Commercial Law',
                                
                            ],
                            [
                                'route' => 'services.criminal',
                                'label' => 'Criminal Law',
                                
                            ],
                            [
                                'route' => 'services.constitutional',
                                'label' => 'Constitutional litigation',
                                
                            ],
                            [
                                'route' => 'services.property',
                                'label' => 'Property & Conveyancing',
                            ],
                            [
                                'route' => 'services.third-party',
                                'label' => 'Third Party Claims',
                                
                            ],
                        ];
                    ?>

                
                    <ul class="space-y-2 w-full px-4">
                        <?php
                            $activeClass = 'bg-[var(--primary)] text-white';
                            $inactiveClass = 'bg-[var(--accent)] text-[var(--primary)]';
                        ?>
                        <ul class="space-y-2 w-full px-4 ">
                            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li >
                                    <a href="<?php echo e(route($service['route'])); ?>"
                                       class="flex items-center px-6 rounded-lx py-3 font-semibold transition-all duration-300 rounded-xl
                                       <?php echo e(request()->routeIs($service['route']) ? $activeClass : $inactiveClass); ?>">
                        
                                        <?php echo e($service['label']); ?>

                                    </a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <div class="mt-10 px-6 mb-10" data-aos="fade-up" data-aos-delay="400">
                            <div class="bg-[var(--accent)] p-6 rounded-xl border border-black/10"> 
                                <h3 class="font-bold text-lg mb-4 text-black">Schedule Consultation</h3>
                                <form action="#" class="space-y-3 ">
                                    <input type="text" placeholder="Name *" class="w-full p-2.5 border border-black/20 bg-white/80 focus:outline-none focus:ring-1 focus:ring-black">
                                    <input type="email" placeholder="E-mail *" class="w-full p-2.5 border border-black/20 bg-white/80 focus:outline-none focus:ring-1 focus:ring-black">
                                    <input type="text" placeholder="Phone *" class="w-full p-2.5 border border-black/20 bg-white/80 focus:outline-none focus:ring-1 focus:ring-black">
                                    <textarea placeholder="Message *" rows="4" class="w-full p-2.5 border border-black/20 bg-white/80 focus:outline-none focus:ring-1 focus:ring-black"></textarea>
                                    
                                    <button type="submit" class="w-full bg-[var(--primary)] text-white py-3 rounded-xl font-bold hover:bg-black transition-colors uppercase text-sm tracking-wider">
                                        Contact Us
                                    </button>
                                </form>
                            </div>
                        </div>
                        
                        <div class="mt-6 px-6 mb-10" data-aos="fade-up" data-aos-delay="500">
                            <div class="bg-[#2D241E] p-8 text-white text-center rounded-xl shadow-lg border border-white/5">
                                <p class="text-xs uppercase tracking-widest mb-2 opacity-80">Are you looking for</p>
                                <h3 class="text-2xl font-serif font-bold mb-1">Experienced</h3>
                                <h3 class="text-2xl font-serif font-bold mb-4">Attorneys?</h3>
                                <p class="text-sm mb-8 opacity-90 leading-tight">Reach out to us for consultation right now.</p>
                        
                                <div class="space-y-4 text-left inline-block mx-auto">
                                    
                                    <div class="flex items-center gap-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                        </svg>
                                        <span class="text-sm">072 062 1529</span>
                                    </div>
                        
                                    
                                    <div class="flex items-center gap-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-[#25D366]" viewBox="0 0 24 24">
                                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.335-1.662c1.72.937 3.659 1.43 5.63 1.43h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                                        </svg>
                                        <span class="text-sm">072 062 1529</span>
                                    </div>
                        
                                    
                                    <div class="flex items-center gap-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                        <span class="text-sm">info@sehunaneattorneys.co.za</span>
                                    </div>
                        
                                    
                                    <div class="flex items-center gap-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                        <span class="text-sm">Mon - Fri 8h00am - 4h30pm</span>
                                    </div>
                                </div>
                        
                                
                                <a href="#consultation" class="mt-8 block w-full bg-[#E9E49B] text-black py-3 rounded-xl font-bold hover:bg-white transition-all duration-300 uppercase text-xs tracking-widest">
                                    schedule consultation
                                </a>
                            </div>
                        </div>
                </nav>
             </aside>
             <main class="flex-1 flex flex-col overflow-hidden p-8 lg:p-16">
                <div class="max-w-4xl" data-aos="fade-up" data-aos-duration="1000">
                    <h2 class="text-3xl md:text-4xl font-bold text-[var(--primary)] mb-8">oooo</h2>
                    
                    
                    
                    <div class="mt-16" data-aos="fade-up" data-aos-delay="300">
                        <div class="flex items-center gap-4 mb-8">
                            <h3 class="text-xl font-bold text-[var(--primary)] whitespace-nowrap">Frequently Asked Questions</h3>
                            <div class="h-[1px] flex-grow bg-gray-200"></div>
                        </div>
                    
                        <div class="space-y-4 max-w-4xl">
                            <?php
                                $faqs = [
                                    ['q' => '1- What areas of law does the firm specialize in?', 'a' => 'Sehunane Attorneys Inc provides legal services across several practice areas, including litigation, labour law, family law, estate planning, conveyancing, and related legal matters.'],
                                    ['q' => '2- How much do your services cost?', 'a' => 'Legal fees depend on the nature and complexity of the matter. During your initial consultation, we will assess your case and explain the applicable fees clearly.'],
                                    ['q' => '3- How can I schedule a consultation with an attorney?', 'a' => 'You can schedule a consultation by contacting our office via phone, email, or through the contact form on our website.'],
                                    ['q' => '4- What should I bring to my consultation?', 'a' => 'Please bring any relevant documents related to your matter, such as contracts, correspondence, court documents, or notices.'],
                                    ['q' => '5- How long will it take to resolve my case?', 'a' => 'The duration of a case varies depending on the type of matter, its complexity, and the resolution method (negotiation vs litigation).']
                                ];
                            ?>
                    
                            <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="faq-item group">
                                    
                                    <button type="button" 
                                        class="faq-toggle w-full flex items-center justify-between p-5 bg-[#F7F7F7] border-l-4 border-[var(--accent)] transition-all duration-300 text-left">
                                        <span class="faq-question font-semibold text-[var(--accent)] text-lg transition-colors duration-300"><?php echo e($faq['q']); ?></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" 
                                            class="faq-icon w-5 h-5 text-[var(--accent)] transition-all duration-300 rotate-180" 
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                        </svg>
                                    </button>
                    
                                    
                                    <div class="faq-answer hidden overflow-hidden">
                                        <div class="px-5 py-4 text-gray-600 leading-relaxed text-md">
                                            <?php echo e($faq['a']); ?>

                                        </div>
                                    </div>
                                    
                                    
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        
                    </div>
                </div>
            </main>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggles = document.querySelectorAll('.faq-toggle');
        
        toggles.forEach(toggle => {
            toggle.addEventListener('click', function() {
                const item = this.parentElement;
                const answer = item.querySelector('.faq-answer');
                const icon = this.querySelector('.faq-icon');
                const questionText = this.querySelector('.faq-question');
                
                const isOpen = !answer.classList.contains('hidden');

                // Reset this item
                if (isOpen) {
                    // Back to Inactive State
                    answer.classList.add('hidden');
                    this.classList.remove('bg-[var(--accent)]', 'text-white');
                    this.classList.add('bg-[#F7F7F7]');
                    questionText.classList.remove('text-white');
                    questionText.classList.add('text-[var(--accent)]');
                    icon.classList.remove('text-white', 'rotate-0');
                    icon.classList.add('text-[var(--accent)]', 'rotate-180');
                } else {
                    // Set to Active State 
                    answer.classList.remove('hidden');
                    this.classList.remove('bg-[#F7F7F7]');
                    this.classList.add('bg-[var(--accent)]');
                    questionText.classList.remove('text-[var(--accent)]');
                    questionText.classList.add('text-white');
                    icon.classList.remove('text-[var(--accent)]', 'rotate-180');
                    icon.classList.add('text-white', 'rotate-0');
                }
            });
        });
    });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/sehunac9n8g7/public_html/resources/views/pages/services/litigation.blade.php ENDPATH**/ ?>