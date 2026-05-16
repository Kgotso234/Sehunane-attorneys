@extends('layouts.app')

@section('title', 'Criminal Defense Attorney Kempton Park | Sehunane Attorneys Inc')
@section('meta_description', 'Arrested in Kempton Park? Get expert criminal defense for bail applications, trial representation, and expungements. 24/7 emergency legal assistance in Gauteng.')

@section('content')
    <div class="min-h-screen bg-[#fcfcfc]">
        <section class="relative h-[350px] flex items-center overflow-hidden">
            <div class="absolute inset-0 z-0">
                <img src="{{ asset('images/law-firm-1.jpg') }}" alt="Criminal Defense Lawyer Kempton Park" 
                    class="w-full h-full object-cover bg-zoom-slow">
                <div class="absolute inset-0 bg-gradient-to-r from-[#36251e] to-[#36251e]/60 opacity-90"></div>
            </div>

            <div class="container mx-auto px-4 relative z-10">
                <nav class="flex items-center space-x-2 text-sm text-[#bb942f] mb-4 font-semibold uppercase tracking-widest" data-aos="fade-down">
                    <a href="/" class="hover:text-white transition-colors">Home</a>
                    <i data-lucide="chevron-right" class="w-4 h-4"></i>
                    <span class="text-white/60">Services</span>
                    <i data-lucide="chevron-right" class="w-4 h-4"></i>
                    <span class="text-white">Criminal Law</span>
                </nav>
                <h1 class="text-3xl md:text-5xl font-bold text-white leading-tight" data-aos="fade-right">
                    Criminal <span class="text-[#bb942f]">Law</span>
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
                        <div class="bg-gradient-to-br from-[#36251e] to-[#241914] rounded-2xl p-8 text-white relative overflow-hidden group shadow-2xl border-l-4 border-red-800/30">
                            <i data-lucide="shield-alert" class="absolute -right-4 -top-4 w-32 h-32 text-white/5 rotate-12 transition-transform group-hover:scale-110"></i>
                            <h3 class="text-2xl font-bold mb-4 leading-tight relative z-10">Aggressive <span class="text-[#bb942f]">Legal Defense</span></h3>
                            <p class="text-white/70 text-sm mb-8 relative z-10 leading-relaxed">
                                Facing criminal charges? Don't wait. Our team provides immediate, discreet, and expert representation to protect your freedom.
                            </p>
                            <a href="tel:0603561780" class="flex items-center gap-4 bg-[#bb942f] text-black font-bold py-3 px-6 rounded-xl hover:bg-white transition-all duration-300 relative z-10">
                                <i data-lucide="phone-forwarded" class="w-5 h-5"></i>
                                Emergency Assistance
                            </a>
                        </div>
                    </div>
                </aside>

                <main class="lg:w-2/3">
                    <div class="prose prose-slate max-w-none">
                        <div class="mb-12" data-aos="fade-up">
                            <span class="text-[#bb942f] font-bold uppercase tracking-widest text-xs">Overview</span>
                            <h2 class="text-3xl md:text-4xl font-bold text-black mt-2 mb-6">Expert Defense to Protect Your Freedom</h2>
                            <div class="space-y-6 text-slate-600 text-lg leading-relaxed">
                                <p>
                                    Facing criminal charges is one of the most stressful experiences an individual can encounter. At <strong>Sehunane Attorneys Inc</strong>, we provide high-stakes criminal defense with a focus on protecting your constitutional rights and ensuring a fair trial.
                                </p>
                                <p>
                                    Our legal team offers immediate assistance and strategic counsel from the moment of arrest through to trial. We represent clients at the <strong>Kempton Park Police Station</strong> and provide expert litigation in the </strong>Kempton Park Magistrates’ Court</strong> and <strong>Regional Courts</strong>, ensuring a discreet, aggressive defense tailored to your case.
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
                                            'title' => 'Urgent Bail Applications', 
                                            'desc' => '7-day and after-hours bail applications to ensure you or your loved ones are released promptly.'
                                        ],
                                        [
                                            'title' => 'DUI & Drunken Driving', 
                                            'desc' => 'Strategic defense for Road Traffic Act violations and driving under the influence charges.'
                                        ],
                                        [
                                            'title' => 'Commercial & White Collar Crime', 
                                            'desc' => 'Representing professionals and businesses facing fraud, theft, and embezzlement allegations.'
                                        ],
                                        [
                                            'title' => 'Expungement of Records', 
                                            'desc' => 'Clearing your name by removing old criminal records from the SAPS database (CRC).'
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
                        <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-6 border-t border-slate-100 pt-12">
                            <div>
                                <h4 class="font-bold text-black mb-2">24/7 Emergency Support</h4>
                                <p class="text-sm text-slate-500">Criminal matters don't stick to office hours. We are available for emergency consultations and police station visits across Gauteng.</p>
                            </div>
                            <div>
                                <h4 class="font-bold text-black mb-2">Rights Protection</h4>
                                <p class="text-sm text-slate-500">We ensure that your Section 35 Constitutional rights are respected from the moment of arrest through to the final verdict.</p>
                            </div>
                        </div>
                        {{-- Bottom Callout --}}
                        <div class="mt-16 p-8 rounded-3xl bg-slate-50 border-l-4 border-[#bb942f]" data-aos="fade-up">
                            <p class="text-slate-700 italic text-lg leading-relaxed">
                                "At Sehunane Attorneys Inc, we believe every individual is entitled to a robust defense. We stand by you with the expertise needed to navigate the criminal justice system."
                            </p>
                        </div>
                    </div>
                </main>

            
            </div>
        </div>
       
    </div>

    
@endsection

       