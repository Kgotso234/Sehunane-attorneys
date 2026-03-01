@extends('layouts.app')

@section('title', 'Sehunane Attorneys Inc | Full-Service Law Firm in Kempton Park')
@section('meta_description', 'Sehunane Attorneys Inc provides expert legal counsel in Kempton Park for Criminal, Civil, and Corporate matters.')

@section('content')
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
        {{-- Hero section --}}
        <section class="relative h-[550px] flex items-center overflow-hidden">
            <div class="absolute inset-0 z-0 overflow-hidden">
                <img src="{{ asset('images/theme-17-1.jpg') }}" 
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
                        <a href="{{ url('/contact') }}"
                        class="bg-[#b38b2d] text-white hover:bg-[var(--foreground)]/90 font-bold py-4 px-10 rounded-md text-white md:text-lg transition-all shadow-xl inline-flex items-center justify-center gap-3 group">
                            Schedule a Consultation  
                            <i data-lucide="phone" class="w-5 h-5"></i>
                        </a>
                    </div> 
                </div>
            </div>
        </section>
        {{-- services --}}
        @php
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
                        'slug' => 'litigation',
                        'icon' => 'scale', // Changed to scale for balance
                        'description' => 'Expert representation in high-stakes civil disputes, damages claims, and contract litigations to protect your interests.'
                    ],
                    
                    [
                        'title' => 'Criminal Law',
                        'slug' => 'criminal-law',
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
                        'title' => 'Property and Conveyancing',
                        'slug' => 'property',
                        'icon' => 'home',
                        'description' => 'Expert assistance with property transfers, lease agreements, and specialized real estate legalities.'
                    ],
                    [
                        'title' => 'Third Party Claims',
                        'slug' => 'Third-Party-Claims',
                        'icon' => 'scroll',
                        'description' => 'Secure your legacy with professional will drafting, trust administration, and winding up of deceased estates.'
                    ],
                ];
            @endphp
        <section class="py-20 overflow-hidden">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-black inline-block relative pb-4"
                        data-aos="zoom-in" 
                        data-aos-delay="150">
                        Our Legal Practice Area
                        <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-48 h-1.5 flex">
                            <div class="bg-[#36251e] h-full w-1/2"></div>
                            <div class="bg-[#bb942f] h-full w-1/2"></div>
                        </div>
                    </h2>   
                </div>
        
                <div class="relative px-0 md:px-12"> 
                    <div class="swiper expertise-slider">
                        <div class="swiper-wrapper">
                            @foreach($services as $index => $service)
                                <div class="swiper-slide h-auto py-4"> <div 
                                        class="rounded-lg border border-[#36251e] bg-[var(--card)] text-[var(--card-foreground)] shadow-sm group hover:shadow-md transition-all duration-300 hover:-translate-y-1 h-full flex flex-col"
                                        data-aos="zoom-in" 
                                        data-aos-delay="{{ 100 + ($index * 50) }}"
                                    >
                                        <div class="p-6 flex flex-col h-full">
                                            <div class="mb-4 p-3 bg-[#bb942f] rounded-lg w-fit group-hover:bg-[#bb942f]/20 transition-colors">
                                                <i data-lucide="{{ $service['icon'] }}" class="h-8 w-8 text-black"></i>
                                            </div>
                                    
                                            <h3 class="text-xl font-semibold mb-3 text-black">{{ $service['title'] }}</h3>
                                            <p class="text-black text-sm leading-relaxed mb-6">
                                                {{ $service['description'] }}
                                            </p>
                                    
                                            <div class="mt-auto pt-4">
                                                <a href="{{ url('/services/' . $service['slug']) }}" 
                                                   class="inline-flex items-center text-sm font-semibold black hover:text-black transition-colors group/btn">
                                                     Read More 
                                                     <i data-lucide="arrow-right" class="ml-2 h-4 w-4 transition-transform group-hover/btn:translate-x-1"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        
                        {{-- <div class="swiper-pagination !-bottom-2"></div> --}}
                    </div>
        
                    <div class="swiper-button-prev !text-[var(--primary)] !-left-2 md:!left-0 after:!text-2xl"></div>
                    <div class="swiper-button-next !text-[var(--primary)] !-right-2 md:!right-0 after:!text-2xl"></div>
                </div>
            </div>
        </section>
        <section class="py-20 bg-[#bb942f] overflow-hidden">
            <div class="container mx-auto ">
                <div class="max-w-4xl mx-auto">
                    <h2 class="text-xl md:text-4xl font-bold mb-8 text-center text-black" 
                        data-aos="fade-down">
                        Trusted Legal Guidance in Kempton Park
                    </h2>
                    <div class="space-y-6 text-lg text-black leading-relaxed">
                        <p data-aos="fade-right" data-aos-delay="200">
                            Without reliable and professional legal guidance, individuals and businesses
                            in Kempton Park and surrounding areas can face serious financial loss, 
                            disputes, compliance risks, and unnecessary legal exposure.
                        </p>
                        <p data-aos="fade-left" data-aos-delay="400">
                           Depending on the situation, you may be dealing with unresolved business disputes, 
                            employment conflicts, family matters, regulatory challenges, or agreements that 
                            put you at risk without you even realising it.
                        </p>
                        <p data-aos="fade-up" data-aos-delay="600">
                            That is why we established Sehunane Attorneys Inc — to provide clear, practical, 
                            and dependable legal solutions to both individuals and businesses.
                        </p>
                        <p data-aos="fade-up" data-aos-delay="800">
                            We offer structured legal support across a variety of services, including consultation, 
                            document drafting, legal representation, and ongoing advisory support. If you are looking
                             for trusted legal guidance in Kempton Park and surrounding areas, we are here to help you
                             navigate your legal challenges with confidence.
                        </p>
                        
                    </div>

                </div>
            </div>
        </section>
        <section class="py-20 bg-white">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto text-center">

                    <h2 class="text-3xl md:text-4xl font-bold text-black mb-12">
                        Our Latest Google Reviews
                    </h2>

                    <div class="grid md:grid-cols-3 gap-8">

                        <!-- Review Card -->
                        <div class="bg-gray-50 p-6 rounded-xl shadow-md text-left">
                            <div class="text-yellow-500 text-lg mb-2">★★★★★</div>
                            <p class="text-gray-700 mb-4">
                                Professional, responsive and highly knowledgeable. I highly recommend their services.
                            </p>
                            <p class="font-semibold text-gray-900">– John M.</p>
                        </div>

                        <div class="bg-gray-50 p-6 rounded-xl shadow-md text-left">
                            <div class="text-yellow-500 text-lg mb-2">★★★★★</div>
                            <p class="text-gray-700 mb-4">
                                Excellent representation and clear communication throughout my case.
                            </p>
                            <p class="font-semibold text-gray-900">– Sarah K.</p>
                        </div>

                        <div class="bg-gray-50 p-6 rounded-xl shadow-md text-left">
                            <div class="text-yellow-500 text-lg mb-2">★★★★★</div>
                            <p class="text-gray-700 mb-4">
                                Very professional legal team. They handled everything with care and efficiency.
                            </p>
                            <p class="font-semibold text-gray-900">– Thabo L.</p>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <section class="py-20 bg-[#36251e]">
            <div class="container mx-auto px-4">
                <div class="max-w-3xl mx-auto text-center" data-aos="zoom-in" data-aos-duration="800">
                    <h2 class="text-3xl md:text-4xl font-bold text-[var(--primary-foreground)] mb-6">Schedule a consultation with our experienced team in Kempton Park today.</h2>
                    <p class="text-lg text-[var(--primary-foreground)]/90 mb-8">
                        Schedule a consultation with our experienced legal team today. We’re here to listen, advise, and fight for you.
                    </p>
                    <a href="{{ url('/contact') }}" class="bg-[#bb942f] hover:bg-[#bb942f]/90 text-[var(--accent-foreground)] font-semibold py-3 px-6 rounded-md">Get Started Today</a>
                </div>
                
            </div>
        </section>
    </div>
@endsection
@push('scripts')
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
@endpush