@extends('layouts.app')


@section('title', 'Conveyancing Attorneys Kempton Park | Sehunane Attorneys Inc')
@section('meta_description', 'Professional property transfers and conveyancing services in Kempton Park. We handle residential sales, commercial leases, and lawful evictions with precision.')

@section('content')
    <div id="page-skeleton">
        @include('skeletons.services')
    </div>
    <div id="page-content" class="hidden">
        <div class="min-h-screen bg-[#fcfcfc]">
            <section class="relative h-[350px] flex items-center overflow-hidden">
                <div class="absolute inset-0 z-0">
                    <img src="{{ asset('images/law-firm-1.jpg') }}" alt="Commercial Law" 
                        class="w-full h-full object-cover bg-zoom-slow">
                    <div class="absolute inset-0 bg-gradient-to-r from-[#36251e] to-[#36251e]/60 opacity-90"></div>
                </div>

                <div class="container mx-auto px-4 relative z-10">
                    <nav class="flex items-center space-x-2 text-sm text-[#bb942f] mb-4 font-semibold uppercase tracking-widest" data-aos="fade-down">
                        <a href="/" class="hover:text-white transition-colors">Home</a>
                        <i data-lucide="chevron-right" class="w-4 h-4"></i>
                        <span class="text-white/60">Services</span>
                        <i data-lucide="chevron-right" class="w-4 h-4"></i>
                        <span class="text-white">Property and conveyancing </span>
                    </nav>
                    <h1 class="text-3xl md:text-5xl font-bold text-white leading-tight" data-aos="fade-right">
                        Property and conveyancing <span class="text-[#bb942f]">Law</span>
                    </h1>
                </div>
            </section>
            <div class="container mx-auto px-4 py-16 lg:py-24">
                <div class="flex flex-col lg:flex-row gap-16">
                    {{-- Left Sidebar: Sticky & Modern --}}
                    <aside class="lg:w-1/3">
                        <div class="sticky top-24 space-y-8">
                            
                            {{-- Practice Areas Menu --}}
                            <div class="bg-white rounded-2xl shadow-xl shadow-slate-200/50 overflow-hidden border border-slate-100">
                                <div class="p-6 bg-[#36251e] text-white">
                                    <h2 class="text-lg font-bold flex items-center gap-3">
                                        <i data-lucide="briefcase" class="w-5 h-5 text-[#bb942f]"></i>
                                        Practice Areas
                                    </h2>
                                </div>
                                <nav class="p-2">
                                    @php
                                        $services = [   
                                            ['route' => 'services.litigation', 'label' => 'Civil Litigation'],
                                            ['route' => 'services.commercial', 'label' => 'Commercial Law'],
                                            ['route' => 'services.constitutional', 'label' => 'Constitutional Litigation'],
                                            ['route' => 'services.criminal', 'label' => 'Criminal Law'],
                                            ['route' => 'services.labour', 'label' => 'Labour Law'],
                                            ['route' => 'services.property', 'label' => 'Property & Conveyancing'],
                                            ['route' => 'services.third-party', 'label' => 'Third Party Claims'],
                                            ['route' => 'services.family-law', 'label' => 'Family Law'],
                                            ['route' => 'services.divorce-law', 'label' => 'Divorce Law'],
                                            ['route' => 'services.decease-estate', 'label' => 'Decease & Estate Planning'],
                                        ];
                                    @endphp

                                    @foreach ($services as $service)
                                        <a href="{{ route($service['route']) }}"
                                        class="group flex items-center justify-between px-4 py-4 rounded-xl transition-all duration-300 mb-1
                                        {{ request()->routeIs($service['route']) 
                                            ? 'bg-[#bb942f] text-white shadow-lg shadow-[#bb942f]/20' 
                                            : 'hover:bg-slate-50 text-slate-600 hover:text-black' }}">
                                            <span class="font-bold text-sm">{{ $service['label'] }}</span>
                                            <i data-lucide="arrow-right" class="w-4 h-4 opacity-0 group-hover:opacity-100 {{ request()->routeIs($service['route']) ? 'opacity-100' : '' }} transition-all"></i>
                                        </a>
                                    @endforeach
                                </nav>
                            </div>

                            {{-- Dynamic Contact Card --}}
                            <div class="bg-gradient-to-br from-[#36251e] to-[#241914] rounded-2xl p-8 text-white relative overflow-hidden group shadow-2xl">
                                <i data-lucide="home" class="absolute -right-4 -top-4 w-32 h-32 text-white/5 rotate-12 transition-transform group-hover:scale-110"></i>
                                <h3 class="text-2xl font-bold mb-4 leading-tight relative z-10">Secure Your <span class="text-[#bb942f]">Property Assets</span></h3>
                                <p class="text-white/70 text-sm mb-8 relative z-10 leading-relaxed">
                                    Professional conveyancing and property law expertise for smooth transfers, lease agreements, and real estate litigation.
                                </p>
                                <a href="tel:+27711968185" class="flex items-center gap-4 bg-[#bb942f] text-black font-bold py-3 px-6 rounded-xl hover:bg-white transition-all duration-300 relative z-10">
                                    <i data-lucide="key" class="w-5 h-5"></i>
                                    Talk to our Team
                                </a>
                            </div>
                        </div>
                    </aside>

                    <main class="lg:w-2/3">
                        <div class="prose prose-slate max-w-none">
                            <div class="mb-12" data-aos="fade-up">
                                <span class="text-[#bb942f] font-bold uppercase tracking-widest text-xs">Overview</span>
                                <h2 class="text-3xl md:text-4xl font-bold text-black mt-2 mb-6">Securing Your Real Estate Assets</h2>
                                <div class="space-y-6 text-slate-600 text-lg leading-relaxed">
                                    <p>
                                        Property is often an individual’s or a business’s most significant investment. At <strong>Sehunane Attorneys Inc</strong>, we provide specialized property law services designed to ensure that every transaction—whether a residential transfer or a complex commercial development—is handled with legal security and precision.
                                    </p>
                                    <p>
                                        Our team facilitates the registration process at the <strong>Johannesburg and Pretoria Deeds Offices</strong>, focusing on eliminating administrative delays. We also provide expert counsel on the <strong>Prevention of Illegal Eviction (PIE) Act</strong>, ensuring that landlords and property owners manage their assets within the full extent of the law.
                                    </p>
                                </div>
                            </div>

                            {{-- Specialized Services Grid --}}
                            <div class="mt-16 bg-white p-8 md:p-12 rounded-3xl border border-slate-100 shadow-sm" data-aos="fade-up">
                                <div class="flex items-center gap-4 mb-10">
                                    <h3 class="text-2xl font-bold text-black">Our Expertise</h3>
                                    <div class="h-px flex-grow bg-slate-100"></div>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                    @php
                                        $offerings = [
                                            [
                                                'title' => 'Conveyancing & Transfers', 
                                                'desc' => 'End-to-end management of property ownership transfers and registration of title deeds.'
                                            ],
                                            [
                                                'title' => 'Deed of Sale Agreements', 
                                                'desc' => 'Drafting and vetting of purchase agreements to ensure all suspensive conditions protect our clients.'
                                            ],
                                            [
                                                'title' => 'Commercial & Residential Leases', 
                                                'desc' => 'Securing your rental income with airtight lease agreements that comply with the Rental Housing Act.'
                                            ],
                                            [
                                                'title' => 'Lawful Eviction Procedures', 
                                                'desc' => 'Assisting property owners with the legal requirements to regain possession of their property fairly.'
                                            ],
                                        ];
                                    @endphp

                                    @foreach($offerings as $item)
                                        <div class="flex gap-4 group">
                                            <div class="w-12 h-12 flex-shrink-0 bg-slate-50 rounded-xl flex items-center justify-center group-hover:bg-[#bb942f]/10 transition-colors">
                                                <i data-lucide="check-circle-2" class="w-6 h-6 text-[#bb942f]"></i>
                                            </div>
                                            <div>
                                                <h4 class="font-bold text-black mb-1">{{ $item['title'] }}</h4>
                                                <p class="text-sm text-slate-500">{{ $item['desc'] }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="mt-12 p-8 md:p-10 rounded-3xl bg-white border border-slate-100 shadow-sm">
                                <h4 class="text-xl font-bold text-black mb-10">The Transfer Journey</h4>
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-12 md:gap-8">
                                    
                                    {{-- Step 01 --}}
                                    <div class="relative pl-4">
                                        <span class="absolute -top-6 -left-2 text-5xl font-black text-[#bb942f]/10 select-none">01</span>
                                        <div class="relative z-10">
                                            <p class="text-sm font-bold text-black uppercase tracking-wider mb-1">Contract Vetting</p>
                                            <p class="text-xs leading-relaxed text-slate-500">Reviewing the legalities of the Offer to Purchase (OTP).</p>
                                        </div>
                                    </div>
                            
                                    {{-- Step 02 --}}
                                    <div class="relative pl-4 border-l md:border-l-0 md:border-t md:pt-6 border-slate-50">
                                        <span class="absolute -top-6 -left-2 md:-top-10 text-5xl font-black text-[#bb942f]/10 select-none">02</span>
                                        <div class="relative z-10">
                                            <p class="text-sm font-bold text-black uppercase tracking-wider mb-1">Compliance</p>
                                            <p class="text-xs leading-relaxed text-slate-500">FICA, Rates Clearances, and Transfer Duty requirements.</p>
                                        </div>
                                    </div>
                            
                                    {{-- Step 03 --}}
                                    <div class="relative pl-4 border-l md:border-l-0 md:border-t md:pt-6 border-slate-50">
                                        <span class="absolute -top-6 -left-2 md:-top-10 text-5xl font-black text-[#bb942f]/10 select-none">03</span>
                                        <div class="relative z-10">
                                            <p class="text-sm font-bold text-black uppercase tracking-wider mb-1">Registration</p>
                                            <p class="text-xs leading-relaxed text-slate-500">Final lodgment and execution at the Deeds Office.</p>
                                        </div>
                                    </div>
                            
                                </div>
                            </div>                        {{-- Bottom Callout --}}
                            <div class="mt-16 p-8 rounded-3xl bg-slate-50 border-l-4 border-[#bb942f]" data-aos="fade-up">
                                <p class="text-slate-700 italic text-lg leading-relaxed">
                                    "At Sehunane Attorneys Inc, we ensure your property journey is seamless, legally sound, and focused on protecting your long-term wealth."
                                </p>
                            </div>        
                        </div>
                    </main>
                    
                    
                </div>
            </div>
        </div>
    </div>
    <script>
        window.addEventListener('load', () => {

            setTimeout(() => {

                document.getElementById('page-skeleton')
                    .classList.add('hidden');

                document.getElementById('page-content')
                    .classList.remove('hidden');

            }, 700);

        });
    </script>
@endsection
