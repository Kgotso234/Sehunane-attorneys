@extends('layouts.app')

@section('title', 'Expert Third Party Claims Services | Sehunane Attorneys Inc') 
@section('meta_description', 'Specialized third party claims representation in Kempton Park. We handle insurance claims, motor vehicle accidents, and liability disputes with professional excellence.')

@section('content')
    <div class="min-h-screen">
        {{-- Hero Section --}}
        <section class="relative h-[250px] flex items-center">
            <div class="absolute inset-0 overflow-hidden">
                <img src="{{ asset('images/law-firm-1.jpg') }}" alt="about-img" class="w-full h-full object-cover transition-transform duration-[5000ms] hover:scale-110" >
                <div class="absolute inset-0 bg-[var(--gradient-hero)] opacity-70"></div>
            </div>
            <div class="container mx-auto px-4 relative z-10">
                
                <ul class="flex items-center justify-center space-x-4 mt-4">
                    <li class="text-[#bb942f] uppercase font-bold text-sm cursor-pointer">
                        Home
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-[#bb942f] w-2 -rotate-90" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M11.99997 18.1669a2.38 2.38 0 0 1-1.68266-.69733l-9.52-9.52a2.38 2.38 0 1 1 3.36532-3.36532l7.83734 7.83734 7.83734-7.83734a2.38 2.38 0 1 1 3.36532 3.36532l-9.52 9.52a2.38 2.38 0 0 1-1.68266.69734z" clip-rule="evenodd"></path>
                        </svg>
                    </li>
                    <li class="text-[#bb942f] uppercase  text-sm">
                        Services
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-[#bb942f] w-2 -rotate-90" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M11.99997 18.1669a2.38 2.38 0 0 1-1.68266-.69733l-9.52-9.52a2.38 2.38 0 1 1 3.36532-3.36532l7.83734 7.83734 7.83734-7.83734a2.38 2.38 0 1 1 3.36532 3.36532l-9.52 9.52a2.38 2.38 0 0 1-1.68266.69734z" clip-rule="evenodd"></path>
                        </svg>
                    </li>
                    <li class="text-[#bb942f] uppercase  text-sm">
                        Third Party Claims 
                    </li>

                </ul>
                <h1 class="text-center text-2xl md:text-3xl  font-bold text-white mb-6" data-aos="fade-up" data-aos-duration="1000">
                    Third Party Claims 
                </h1>
                
            </div>
        </section>
        {{-- Main Content --}}
        <div class="flex flex-col-reverse lg:flex-row min-h-screen ">
             <aside class="lg:w-96 bg-white  flex-shrink-0 lg:flex flex-col ">
                 <div class="p-6 flex items-center gap-2">
                    <h2 class="text-md  text-black whitespace-nowrap">
                        Practice Areas
                    </h2>
                    
                    <div class="h-[1px] flex-grow bg-black"></div>
                </div>
                <nav class="flex-1  py-4 flex flex-col items-center">
                    @php
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
                    @endphp

                
                    <ul class="space-y-2 w-full px-4">
                        @php
                            $activeClass = 'bg-[var(--primary)] text-white';
                            $inactiveClass = 'bg-[var(--accent)] text-black';
                        @endphp
                        <ul class="space-y-2 w-full px-4 ">
                            @foreach ($services as $service)
                                <li >
                                    <a href="{{ route($service['route']) }}"
                                       class="flex items-center px-6 rounded-lx py-3 font-semibold transition-all duration-300 rounded-xl
                                       {{ request()->routeIs($service['route']) ? $activeClass : $inactiveClass }}">
                        
                                        {{ $service['label'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        
                        {{-- Contact Information Card --}}
                        <div class="mt-6 px-6 mb-10" data-aos="fade-up" data-aos-delay="500">
                            <div class="bg-[#2D241E] p-8 text-white text-center  shadow-lg border border-white/5">
                                <p class="text-xs uppercase tracking-widest mb-2 opacity-80">Are you looking for</p>
                                <h3 class="text-2xl font-serif font-bold mb-1">Experienced</h3>
                                <h3 class="text-2xl font-serif font-bold mb-4">Attorneys?</h3>
                                <p class="text-sm mb-8 opacity-90 leading-tight">Reach out to us for consultation right now.</p>
                        
                                <div class="space-y-4 text-left inline-block mx-auto">
                                    {{-- Phone --}}
                                    <div class="flex items-center gap-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                        </svg>
                                        <span class="text-sm">072 062 1529</span>
                                    </div>
                        
                                    {{-- WhatsApp with Original Color --}}
                                    <div class="flex items-center gap-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-[#25D366]" viewBox="0 0 24 24">
                                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.335-1.662c1.72.937 3.659 1.43 5.63 1.43h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                                        </svg>
                                        <span class="text-sm">072 062 1529</span>
                                    </div>
                        
                                    {{-- Email --}}
                                    <div class="flex items-center gap-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                        <span class="text-sm">info@sehunaneattorneys.co.za</span>
                                    </div>
                        
                                    {{-- Hours --}}
                                    <div class="flex items-center gap-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                        <span class="text-sm">Mon - Fri 8h00am - 4h30pm</span>
                                    </div>
                                </div>
                        
                                {{-- Schedule Button with Rounded Corners --}}
                                <a href="#consultation" class="mt-8 block w-full bg-[#E9E49B] text-black py-3 rounded-xl font-bold hover:bg-white transition-all duration-300 uppercase text-xs tracking-widest">
                                    schedule consultation
                                </a>
                            </div>
                        </div>
                </nav>
             </aside>
             <main class="flex-1 flex flex-col overflow-hidden p-8 lg:p-16">
                <div class="max-w-4xl" data-aos="fade-up" data-aos-duration="1000">
                    <h2 class="text-3xl md:text-4xl font-bold text-black mb-8">Third Party Claims</h2>
                    <div class="space-y-6 text-gray-700 leading-relaxed text-base">
                        <p>
                            Third party claims arise when a person suffers injury or loss due to the negligence or wrongdoing of another party.
                            These claims may involve motor vehicle accidents, personal injury, or other damages.
                        </p>
                        <p>
                            At Sehunane Attorneys Inc, we understand that injuries and unexpected losses can place financial and emotional 
                            strain on you and your family. Seeking compensation is not only about recovering losses but also about securing stability for the future.
                        </p>
                        <p>
                            We assist clients in pursuing fair compensation through careful case preparation, negotiation, and, where necessary, litigation.
                        </p>
                    </div>
                    <div class="mt-12" data-aos="fade-up" data-aos-delay="200">
                        <div class="flex items-center gap-4 mb-8">
                            <h3 class="text-lg font-bold text-base whitespace-nowrap">Our Third Party Claims Services Include</h3>
                            <div class="h-[1px] flex-grow bg-gray-200"></div>
                        </div>
                        <ul class="grid grid-cols-1 md:grid-cols-2 gap-y-6 gap-x-8">
                            @php
                                $Services = [
                                    'Road Accident Fund (RAF) claims',
                                    'Personal injury claims',
                                    'Loss of income claims',
                                    'General damages claims',
                                    'Settlement negotiations and litigation'
                                ];
                            @endphp
                            @foreach($Services as $service)
                                <li class="flex items-start gap-4 text-gray-700 group">
                                    {{-- Shaded Yellow Circle with Primary Color Tick --}}
                                    <div class="flex-shrink-0 w-6 h-6 rounded-full bg-[var(--accent)] flex items-center justify-center mt-1 shadow-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 stroke-[var(--primary)]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <span class="text-base leading-tight">{{ $service }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    
                    <div class="mt-12 max-w-4xl" data-aos="fade-up" data-aos-delay="400">
                        <p class="text-gray-700 leading-relaxed text-base">
                            At <strong>Sehunane Attorneys Inc</strong>, we understand the financial and emotional strain that injuries and unexpected losses can cause. We are committed to pursuing fair compensation on your behalf while providing supportive and reliable legal representation throughout the process.
                        </p>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
@push('scripts')
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
@endpush