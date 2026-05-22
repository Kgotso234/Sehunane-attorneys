@extends('layouts.app')

@section('title', 'Family Law & Domestic Relations Protection in Kempton Park | Sehunane Attorneys Inc')
@section('meta_description', 'Expert legal support for child maintenance, custody plans, parental rights, and cohabitation agreements in Kempton Park. Protecting the best interests of your children.')

@section('content')
    <div id="page-skeleton">
        @include('skeletons.services')
    </div>
    <div id="page-content" class="hidden">
        <div class="min-h-screen bg-[#fcfcfc]">
            
            <section class="relative h-[350px] flex items-center overflow-hidden">
                <div class="absolute inset-0 z-0">
                    <img src="{{ asset('images/law-firm-1.jpg') }}" alt="Family Law" 
                        class="w-full h-full object-cover bg-zoom-slow">
                    <div class="absolute inset-0 bg-gradient-to-r from-[#36251e] to-[#36251e]/60 opacity-90"></div>
                </div>
                
                <div class="container mx-auto px-4 relative z-10">
                    <nav class="flex items-center space-x-2 text-sm text-[#bb942f] mb-4 font-semibold uppercase tracking-widest" data-aos="fade-down">
                        <a href="/" class="hover:text-white transition-colors">Home</a>
                        <i data-lucide="chevron-right" class="w-4 h-4"></i>
                        <span class="text-white/60">Services</span>
                        <i data-lucide="chevron-right" class="w-4 h-4"></i>
                        <span class="text-white">Family Law</span>
                    </nav>
                    <h1 class="text-3xl md:text-5xl font-bold text-white leading-tight">
                        Family Law & <span class="text-[#bb942f]">Domestic Relations</span> Kempton Park
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
                                <h3 class="text-2xl font-bold mb-4 leading-tight relative z-10">Need Family Law Guidance?</h3>
                                <p class="text-white/70 text-sm mb-8 relative z-10 leading-relaxed">
                                    Protecting your rights and your child's well-being requires focused legal knowledge. Reach out to our Kempton Park team today.
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
                                <h2 class="text-3xl md:text-4xl font-bold text-black mt-2 mb-6">Securing Stability for Your Family's Legal Future</h2>
                                <div class="space-y-6 text-slate-600 text-lg leading-relaxed">
                                    <p>
                                        Family disputes require a sensitive legal touch balanced with an uncompromising protection of your foundational rights. We offer focused representation across all areas of <strong>South African family law</strong>, keeping the constitutional mandate of the <strong>"best interests of the child"</strong> at the center of every legal remedy we pursue under the <strong>Children's Act 38 of 2005</strong>.
                                    </p>
                                    <p>
                                        At <strong>Sehunane Attorneys Inc</strong>, we represent unmarried parents, guardians, and families navigate domestic transitions smoothly. Our legal counsel focuses on mitigating long-term emotional friction while building structurally sound financial and relational frameworks.
                                    </p>
                                </div>
                            </div>

                            {{-- Specialized Services Grid --}}
                            <div class="mt-16 bg-white p-8 md:p-12 rounded-3xl border border-slate-100 shadow-sm" data-aos="fade-up">
                                <div class="flex items-center gap-4 mb-10">
                                    <h3 class="text-2xl font-bold text-black">Our Areas of Expertise</h3>
                                    <div class="h-px flex-grow bg-slate-100"></div>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                    @php
                                        $offerings = [
                                            [
                                                'title' => 'Child Maintenance Claims', 
                                                'desc' => 'Enforcing or defending monthly financial support claims at the Maintenance Court. We assist with calculations, tracking arrears, and filing variation orders.'
                                            ],
                                            [
                                                'title' => 'Care & Contact Agreements', 
                                                'desc' => 'Drafting structured, legally enforceable Parenting Plans defining primary residence, physical access schedules, and primary guardianship parameters.'
                                            ],
                                            [
                                                'title' => 'Unmarried Parental Rights', 
                                                'desc' => 'Assisting biological fathers or extended family members to legally establish parental responsibilities and rights under Sections 21 and 22 of the Children’s Act.'
                                            ],
                                            [
                                                'title' => 'Domestic Protection Orders', 
                                                'desc' => 'Providing fast, urgent intervention for victims of domestic abuse by securing formal Protection Orders at the local Magistrate\'s Court.'
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
                                    <h4 class="font-bold text-black mb-2">Local Court Proficiency</h4>
                                    <p class="text-sm text-slate-500">We litigate directly within the Kempton Park Magistrate’s Court, ensuring your domestic applications are filed correctly and handled quickly by regional maintenance officers.</p>
                                </div>
                                <div>
                                    <h4 class="font-bold text-black mb-2">100% Black-Owned Integrity</h4>
                                    <p class="text-sm text-slate-500">Leverage our professional status and deep understanding of South African societal realities to settle family matters with dignity, respect, and complete legal clarity.</p>
                                </div>
                            </div>

                            {{-- Bottom Callout --}}
                            <div class="mt-16 p-8 rounded-3xl bg-slate-50 border-l-4 border-[#bb942f]" data-aos="fade-up">
                                <p class="text-slate-700 italic text-lg leading-relaxed">
                                    "Family law is not just about resolving immediate disputes; it is about protecting the safe spaces and long-term financial security where your children can grow."
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