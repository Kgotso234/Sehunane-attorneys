@extends('layouts.app')

@section('title', 'Civil Litigation Attorneys Kempton Park | Sehunane Attorneys Inc')
@section('meta_description', 'Professional civil litigation in Kempton Park. From High Court representation to debt recovery and breach of contract, we protect your rights in Gauteng.')

@section('content')
    <div id="page-skeleton">
        @include('skeletons.services')
    </div>
    <div id="page-content" class="hidden">
        <div class="min-h-screen bg-[#fcfcfc]">
            <section class="relative h-[350px] flex items-center overflow-hidden">
                <div class="absolute inset-0 z-0">
                    <img src="{{ asset('images/law-firm-1.jpg') }}" alt="Civil Litigation Services Kempton Park" 
                        class="w-full h-full object-cover bg-zoom-slow">
                    <div class="absolute inset-0 bg-gradient-to-r from-[#36251e] to-[#36251e]/60 opacity-90"></div>
                </div>

                <div class="container mx-auto px-4 relative z-10">
                    <nav class="flex items-center space-x-2 text-sm text-[#bb942f] mb-4 font-semibold uppercase tracking-widest" data-aos="fade-down">
                        <a href="/" class="hover:text-white transition-colors">Home</a>
                        <i data-lucide="chevron-right" class="w-4 h-4"></i>
                        <span class="text-white/60">Services</span>
                        <i data-lucide="chevron-right" class="w-4 h-4"></i>
                        <span class="text-white">Civil Litigation</span>
                    </nav>
                    <h1 class="text-3xl md:text-5xl font-bold text-white leading-tight" data-aos="fade-right">
                        Civil <span class="text-[#bb942f]">Litigation</span>
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
                                <i data-lucide="gavel" class="absolute -right-4 -top-4 w-32 h-32 text-white/5 rotate-12 transition-transform group-hover:scale-110"></i>
                                <h3 class="text-2xl font-bold mb-4 leading-tight relative z-10">Strategic <span class="text-[#bb942f]">Dispute Resolution</span></h3>
                                <p class="text-white/70 text-sm mb-8 relative z-10 leading-relaxed">
                                    From High Court matters to complex claims, we provide the strategic litigation needed to protect your interests and resolve disputes.
                                </p>
                                <a href="tel:0603561780" class="flex items-center gap-4 bg-[#bb942f] text-black font-bold py-3 px-6 rounded-xl hover:bg-white transition-all duration-300 relative z-10">
                                    <i data-lucide="balance-scale" class="w-5 h-5"></i>
                                    Discuss Your Case
                                </a>
                            </div>
                        </div>
                    </aside>
                    <main class="lg:w-2/3">
                        <div class="prose prose-slate max-w-none">
                            <div class="mb-12" data-aos="fade-up">
                                <span class="text-[#bb942f] font-bold uppercase tracking-widest text-xs">Overview</span>
                                <h2 class="text-3xl md:text-4xl font-bold text-black mt-2 mb-6">Expert Advocacy for Complex Civil Disputes</h2>
                                <div class="space-y-6 text-slate-600 text-lg leading-relaxed">
                                    <p>
                                        Civil litigation involves legal disputes between individuals or entities seeking compensation or the enforcement of specific rights. At <strong>Sehunane Attorneys Inc</strong>, we recognize that prolonged conflict can be costly and emotionally taxing.
                                    </p>
                                    <p>
                                        Our approach focuses on resolving disputes efficiently through clear legal advice and meticulous case preparation. We provide expert representation in the **Kempton Park Magistrates’ Court**, as well as the **High Court of South Africa (Johannesburg and Pretoria)**, safeguarding your legal and financial interests with unwavering dedication.
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
                                                'title' => 'Contractual Disputes', 
                                                'desc' => 'Resolving breach of contract, specific performance claims, and contested agreements.'
                                            ],
                                            [
                                                'title' => 'Debt Recovery', 
                                                'desc' => 'Issuing Letters of Demand and Summons to recover outstanding commercial and personal debts.'
                                            ],
                                            [
                                                'title' => 'Property Disputes', 
                                                'desc' => 'Expert legal assistance with evictions, rental disputes, and property-related litigation.'
                                            ],
                                            [
                                                'title' => 'General Litigation', 
                                                'desc' => 'Advocacy in both the Magistrates’ and High Courts for motion and action proceedings.'
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
                                    <h4 class="font-bold text-black mb-2">Gauteng Court Representation</h4>
                                    <p class="text-sm text-slate-500">We appear regularly in the Johannesburg and Pretoria High Courts, providing Kempton Park residents with top-tier litigation without the commute.</p>
                                </div>
                                <div>
                                    <h4 class="font-bold text-black mb-2">Cost-Effective Resolution</h4>
                                    <p class="text-sm text-slate-500">Our team prioritizes mediation and strategic settlement to save you the time and expense of prolonged court battles.</p>
                                </div>
                            </div>
                            {{-- Bottom Callout --}}
                            <div class="mt-16 p-8 rounded-3xl bg-slate-50 border-l-4 border-[#bb942f]" data-aos="fade-up">
                                <p class="text-slate-700 italic text-lg leading-relaxed">
                                    "At Sehunane Attorneys Inc, we provide the dependable representation and practical advice needed to achieve fair and effective outcomes for our clients."
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
