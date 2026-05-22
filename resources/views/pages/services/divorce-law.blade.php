   
@extends('layouts.app')

@section('title', 'Divorce Lawyers & Matrimonial Restructuring in Kempton Park | Sehunane Attorneys Inc')
@section('meta_description', 'Professional handling of contested and uncontested divorces, asset splits, and Rule 43 interim financial support applications in Kempton Park.')

@section('content')
    <div id="page-skeleton">
        @include('skeletons.services')
    </div>
    <div id="page-content" class="hidden">
        <div class="min-h-screen bg-[#fcfcfc]">
            
            <section class="relative h-[350px] flex items-center overflow-hidden">
                <div class="absolute inset-0 z-0">
                    <img src="{{ asset('images/law-firm-1.jpg') }}" alt="Divorce Law" 
                        class="w-full h-full object-cover bg-zoom-slow">
                    <div class="absolute inset-0 bg-gradient-to-r from-[#36251e] to-[#36251e]/60 opacity-90"></div>
                </div>
                
                <div class="container mx-auto px-4 relative z-10">
                    <nav class="flex items-center space-x-2 text-sm text-[#bb942f] mb-4 font-semibold uppercase tracking-widest" data-aos="fade-down">
                        <a href="/" class="hover:text-white transition-colors">Home</a>
                        <i data-lucide="chevron-right" class="w-4 h-4"></i>
                        <span class="text-white/60">Services</span>
                        <i data-lucide="chevron-right" class="w-4 h-4"></i>
                        <span class="text-white">Divorce Law</span>
                    </nav>
                    <h1 class="text-3xl md:text-5xl font-bold text-white leading-tight">
                        Divorce & <span class="text-[#bb942f]">Matrimonial Law</span> Kempton Park
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
                                <i data-lucide="help-circle" class="absolute -right-4 -top-4 w-32 h-32 text-white/5 rotate-12 transition-transform group-hover:scale-110"></i>
                                <h3 class="text-2xl font-bold mb-4 leading-tight relative z-10">Facing Matrimonial Structural Shifts?</h3>
                                <p class="text-white/70 text-sm mb-8 relative z-10 leading-relaxed">
                                    Protect your financial independence and personal assets during a divorce. Contact our specialists for a confidential consultation.
                                </p>
                                <a href="tel:0603561780" class="flex items-center gap-4 bg-[#bb942f] text-black font-bold py-3 px-6 rounded-xl hover:bg-white transition-all duration-300">
                                    <i data-lucide="phone-call" class="w-5 h-5"></i>
                                    Call 060 356 1780
                                </a>
                            </div>
                        </div>
                    </aside>

                    {{-- Right Main Content --}}
                    <main class="lg:w-2/3">
                        <div class="prose prose-slate max-w-none">
                            <div class="mb-12" data-aos="fade-up">
                                <span class="text-[#bb942f] font-bold uppercase tracking-widest text-xs">Overview</span>
                                <h2 class="text-3xl md:text-4xl font-bold text-black mt-2 mb-6">Objective Counsel for Complex Marital Dissolutions</h2>
                                <div class="space-y-6 text-slate-600 text-lg leading-relaxed">
                                    <p>
                                        Dissolving a marriage requires objective, high-tier legal representation to safeguard your future financial standing. Whether your separation is an amicable transition or a high-conflict dispute, our practice ensures your marital estate division aligns with the regulations of the <strong>Divorce Act 70 of 1979</strong>.
                                    </p>
                                    <p>
                                        At <strong>Sehunane Attorneys Inc</strong>, we evaluate the unique financial parameters of your marriage regime—whether married In Community of Property or Out of Community of Property with or without accrual. We manage your asset protection, retirement fund claims, and parental splits with absolute precision.
                                    </p>
                                </div>
                            </div>

                            {{-- Specialized Services Grid --}}
                            <div class="mt-16 bg-white p-8 md:p-12 rounded-3xl border border-slate-100 shadow-sm" data-aos="fade-up">
                                <div class="flex items-center gap-4 mb-10">
                                    <h3 class="text-2xl font-bold text-black">Our Divorce Services</h3>
                                    <div class="h-px flex-grow bg-slate-100"></div>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                    @php
                                        $offerings = [
                                            [
                                                'title' => 'Uncontested Divorces', 
                                                'desc' => 'Fast-tracking amicable separations through mutually drafted settlement agreements. A cost-effective approach to asset distribution and child maintenance.'
                                            ],
                                            [
                                                'title' => 'Contested Divorce Litigation', 
                                                'desc' => 'Providing aggressive courtroom representation in high-dispute divorces involving concealed assets, complex corporate shares, or custody battles.'
                                            ],
                                            [
                                                'title' => 'Rule 43 Interim Relief', 
                                                'desc' => 'Filing fast-track applications for urgent, temporary maintenance orders, ongoing medical aid contributions, and legal fee subsidies while a divorce is pending.'
                                            ],
                                            [
                                                'title' => 'Spousal Maintenance Claims', 
                                                'desc' => 'Assessing or defending claims for rehabilitative or permanent spousal support based on duration of marriage, age, and future earning capacity.'
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
                                    <h4 class="font-bold text-black mb-2">Asset & Pension Protection</h4>
                                    <p class="text-sm text-slate-500">We specialize in securing endorsements against pension and provident funds, ensuring your legal entitlement to marital assets is technically secure and paid out correctly.</p>
                                </div>
                                <div>
                                    <h4 class="font-bold text-black mb-2">Strategic High Court Advocacy</h4>
                                    <p class="text-sm text-slate-500">From local regional jurisdictions to the High Courts of Johannesburg and Pretoria, our multi-disciplinary litigation team manages complex asset splitting effectively.</p>
                                </div>
                            </div>

                            {{-- Bottom Callout --}}
                            <div class="mt-16 p-8 rounded-3xl bg-slate-50 border-l-4 border-[#bb942f]" data-aos="fade-up">
                                <p class="text-slate-700 italic text-lg leading-relaxed">
                                    "A successful divorce settlement does not mean winning an emotional battle; it means building a solid legal foundation that protects your independence and assets for the future."
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