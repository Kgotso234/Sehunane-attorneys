@extends('layouts.app')

@section('title', 'Meet Our Legal Team | Expert Attorneys in Kempton Park')
@section('meta_description', 'Meet the dedicated legal professionals at Sehunane Attorneys Inc. Our team brings decades of combined experience to solve your legal challenges.')


@section('content')
<div class="min-h-screen">
    {{-- header --}}
    <section class="relative h-[250px] flex items-center">
        <div class="absolute inset-0 overflow-hidden">
            <img src="{{ asset('images/law-firm-1.jpg') }}" alt="about-img" class="w-full h-full object-cover transition-transform duration-[5000ms] hover:scale-110" data-aos="zoom-out" data-aos-duration="2000">
            <div class="absolute inset-0 bg-[var(--gradient-hero)] opacity-70"></div>
        </div>
       
        <div class="container mx-auto px-4 relative z-10">
            <h1 class="heading text-center text-2xl md:text-3xl font-bold text-[var(--primary-foreground)] mb-6">
                Meet Our Team
            </h1>
        </div>
    </section>
    {{-- Team introduction --}}
    <section class="py-16 bg-white overflow-hidden">
        <div class="container mx-auto px-2">
            
            <div class="max-w-3xl mx-auto mb-10 text-center" data-aos="fade-up">
                <h1 class="heading text-3xl md:text-5xl font-bold text-[#36251e] mb-5">Our Legal Team</h1>
                <div class="heading-line mx-auto"></div>
                <p class="text-xl text-slate-500 mt-4 leading-relaxed italic">
                    "United by a commitment to justice, driven by excellence in Kempton Park."
                </p>
            </div>

            <div class="max-w-5xl mx-auto mb-32">
                <div class="relative group" data-aos="fade-up">
                    <div class="absolute -inset-1 bg-gradient-to-r from-[#bb942f] to-[#36251e] rounded-3xl blur opacity-10 group-hover:opacity-25 transition duration-1000"></div>
                    
                    <div class="relative bg-white rounded-3xl overflow-hidden shadow-2xl border border-gray-100">
                        <div class="grid grid-cols-1 lg:grid-cols-2">
                            <div class="h-[450px] overflow-hidden">
                                <img src="{{ asset('images/images.png') }}" 
                                    class="w-full h-full object-cover object-top transition-transform duration-700 group-hover:scale-105" 
                                    alt="Reuben Masilo Sehunane">
                            </div>
                            <div class="p-10 md:p-16 flex flex-col justify-center bg-slate-50">
                                <span class="text-[#bb942f] font-bold uppercase tracking-[0.3em] text-sm mb-4">Director & Founder</span>
                                <h2 class="text-3xl md:text-4xl font-bold text-black mb-6">Reuben Masilo Sehunane</h2>
                                <p class="text-slate-600 leading-relaxed mb-8">
                                    With over a decade of specialized expertise, Reuben leads Sehunane Attorneys Inc with a vision of accessible, high-caliber legal defense. His leadership ensures every client receives meticulous advocacy.
                                </p>
                                <div class="flex items-center gap-4 pt-6 border-t border-gray-200">
                                    <div class="w-12 h-12 bg-[#36251e] rounded-full flex items-center justify-center">
                                        <i data-lucide="scale" class="text-[#bb942f] w-5 h-5"></i>
                                    </div>
                                    <p class="font-bold text-sm uppercase text-black tracking-wider">Expertise: High Court Litigation</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-w-6xl mx-auto">
                <div class="flex items-center gap-4 mb-12">
                    <h3 class="text-2xl font-bold text-[#36251e] whitespace-nowrap">Professional Associates</h3>
                    <div class="h-px bg-slate-200 w-full"></div>
                </div>
            
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 justify-center">
                    
                    {{-- Associate 1: Mohale Ernest Seunane --}}
                    <div class="group relative bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 flex flex-col" data-aos="fade-up" data-aos-delay="100">
                        <div class="h-64 overflow-hidden">
                            <img src="{{ asset('images/images.png') }}" 
                                 class="w-full h-full object-cover group-hover:scale-110 transition-all duration-700" 
                                 alt="Mohale Ernest Seunane">
                        </div>
                        <div class="p-8 flex flex-col justify-center text-center">
                            <h4 class="text-xl font-bold text-black mb-1">Mohale Ernest Seunane</h4>
                            <p class="text-[#bb942f] font-semibold text-sm uppercase tracking-widest mb-4">Paralegal</p>
                            <p class="text-slate-500 text-sm leading-relaxed">
                                Dedicated to rigorous legal research and strategic case preparation.
                            </p>
                        </div>
                    </div>
            
                    {{-- Associate 2: Rakhidi Lucky Seunane --}}
                    <div class="group relative bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 flex flex-col" data-aos="fade-up" data-aos-delay="200">
                        <div class="h-64 overflow-hidden">
                            <img src="{{ asset('images/images.png') }}" 
                                 class="w-full h-full object-cover group-hover:scale-110 transition-all duration-700" 
                                 alt="Rakhidi Lucky Seunane">
                        </div>
                        <div class="p-8 flex flex-col justify-center text-center">
                            <h4 class="text-xl font-bold text-black mb-1">Rakhidi Lucky Seunane</h4>
                            <p class="text-[#bb942f] font-semibold text-sm uppercase tracking-widest mb-4">Office Manager</p>
                            <p class="text-slate-500 text-sm leading-relaxed">
                                Driving operational efficiency and administrative excellence across the firm.
                            </p>
                        </div>
                    </div>
            
                    {{-- Associate 3: New Associate --}}
                    <div class="group relative bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 flex flex-col md:col-span-2 lg:col-span-1 md:max-w-md md:mx-auto lg:max-w-none" data-aos="fade-up" data-aos-delay="300">
                        <div class="h-64 overflow-hidden">
                            <img src="{{ asset('images/images.png') }}" 
                                 class="w-full h-full object-cover group-hover:scale-110 transition-all duration-700" 
                                 alt="Associate Name">
                        </div>
                        <div class="p-8 flex flex-col justify-center text-center">
                            <h4 class="text-xl font-bold text-black mb-1">[Insert Name]</h4>
                            <p class="text-[#bb942f] font-semibold text-sm uppercase tracking-widest mb-4">Legal Associate</p>
                            <p class="text-slate-500 text-sm leading-relaxed">
                                Providing expert legal counsel with a focus on client-centered solutions and justice.
                            </p>
                        </div>
                    </div>
            
                </div>
            </div>
            

        </div>
    </section>
    
    {{-- CTA Section --}}
     <section class="relative py-15 overflow-hidden bg-[#36251e]">
            <div class="absolute inset-0 z-0">
                <img src="{{ asset('images/Lawyer Office Designs_ Elevate.jpg') }}" 
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
                        <a href="{{ url('/contact') }}" 
                        class="group relative inline-flex items-center gap-3 bg-[#bb942f] text-black font-bold py-4 px-10 rounded-full transition-all duration-300 hover:bg-white hover:scale-105 shadow-xl shadow-gold/20">
                            Schedule Your Consultation
                            <i data-lucide="arrow-right" class="w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
                        </a>
                        
                        <a href="tel:0603561780" class="text-white hover:text-[#bb942f] transition-colors font-medium flex items-center gap-2">
                            <i data-lucide="phone" class="w-4 h-4"></i>
                            Or Call Us: 0603561780
                        </a>
                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection