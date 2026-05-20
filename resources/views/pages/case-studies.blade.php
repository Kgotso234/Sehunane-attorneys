@extends('layouts.app')
@section('title', 'Success Stories & Case Studies | Sehunane Attorneys Inc')
@section('meta_description', 'Explore our track record of success. From landmark labour disputes to complex civil litigation wins in Kempton Park.')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endpush
@section('content')

    <div id="page-skeleton">
        @include('skeletons.cases')
    </div>

    <div id="page-content" class="hidden">
   
        <div class="min-h-screen">
            {{-- header --}}
            <section class="bg-[var(--gradient-hero)] py-20">
                <div class="container mx-auto px-4">
                    <div class="container mx-auto px-4 relative z-10">
                        
                        
                        <h1 class="heading text-center text-2xl md:text-5xl font-bold text-[var(--primary-foreground)] mb-6" data-aos="fade-down" data-aos-duration="1000">
                            Case Studies
                        </h1>
                    </div>
                </div>
            </section>
            
            
        {{-- Success Stories Intro Heading --}}
            <section class="pt-12 pb-6">
                <div class="container mx-auto px-4 text-center">
                    <div data-aos="fade-up">
                        <h2 class="text-sm uppercase tracking-[0.3em] text-[var(--accent)] font-bold mb-3">Proven Results</h2>
                        <h2 class="heading text-xl md:text-3xl font-extrabold text-black mb-6 tracking-tight">
                            Our <span class="text-black ">Legal Milestones</span>
                        </h2>
                        <div class="heading-line"></div>
                        
                    </div>
                </div>
            </section>
            {{-- Case studies Grid --}}
            <section class="py-20 relative overflow-hidden ">
                <div class="container mx-auto px-4 relative z-10">
                    <div class="grid grid-cols-1 md:grid-cols-12 gap-4 lg:gap-6">
                        
                        <div class="md:col-span-7 group relative overflow-hidden rounded-2xl bg-slate-900 min-h-[450px]" data-aos="fade-up">
                            <div class="absolute inset-0 bg-cover bg-center grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-1000 opacity-30" 
                                style="background-image: url('https://images.unsplash.com/photo-1505664194779-8beaceb93744?auto=format&fit=crop&w=1200&q=80');">
                            </div>
                            
                            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/80 to-transparent"></div>
                            
                            <div class="relative h-full p-8 flex flex-col justify-end">
                                <span class="px-3 py-1 mb-4 text-[10px] font-bold tracking-widest uppercase bg-blue-600 text-white rounded-full w-fit">Labour Court Victory</span>
                                
                                <h3 class="text-2xl md:text-3xl font-bold text-white mb-4">Upholding Finality in Litigation</h3>
                                
                                <p class="text-slate-200  text-sm leading-relaxed mb-6">
                                    Successfully defended an employee against a <span class="text-[var(--accent)] font-bold">27-month delayed</span> rescission application[cite: 67]. We convinced the Labour Court that "excessive" delays without valid explanations frustrate the ends of justice[cite: 95, 126]. The court dismissed the employer's attempt to stall, ordering the matter to proceed to trial immediately[cite: 134].
                                </p>
                                
                                <div class="flex items-center gap-6 opacity-0 group-hover:opacity-100 transition-all duration-500 translate-y-4 group-hover:translate-y-0">
                                    <span class="text-xs bg-white/10 px-3 py-1 rounded border border-white/20 text-white font-mono">Case: PR 28/13</span>
                                    
                                    <a href="https://www.saflii.org/za/cases/ZALCPE/2017/74.html" target="_blank" class="flex items-center gap-2 text-[var(--accent)] hover:text-white transition-colors text-sm font-bold">
                                        Read Full Judgment 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                        {{-- case study 2 --}}
                        <div class="md:col-span-5 group relative overflow-hidden rounded-2xl bg-slate-900" data-aos="fade-up">
                            <div class="absolute inset-0 bg-cover bg-center grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-1000 opacity-30" 
                                style="background-image: url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=1200&q=80');">
                            </div>
                            
                            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/80 to-transparent"></div>
                            
                            <div class="relative h-full p-8 flex flex-col justify-end">
                                <span class="px-3 py-1 mb-4 text-[10px] font-bold tracking-widest uppercase bg-amber-600 text-white rounded-full w-fit">Employment Law Victory</span>
                                
                                <h3 class="text-2xl md:text-3xl font-bold text-white mb-4">Defending Procedural Rights</h3>
                                
                                <p class="text-slate-200  text-sm leading-relaxed mb-6">
                                    In a landmark case against <span class="text-[var(--accent)] font-bold">Umso Construction</span>, we successfully argued that economic necessity does not excuse a failure to follow fair retrenchment procedures[cite: 482, 484, 529]. We secured <span class="text-[var(--accent)] font-bold">R122,000</span> in compensation and full legal costs for our client after proving a lack of meaningful consultation.
                                </p>
                                
                                <div class="flex items-center gap-6 opacity-0 group-hover:opacity-100 transition-all duration-500 translate-y-4 group-hover:translate-y-0">
                                    <span class="text-xs bg-white/10 px-3 py-1 rounded border border-white/20 text-white font-mono">Case: PS 29/2014</span>
                                    
                                    <a href="https://www.saflii.org/za/cases/ZALCPE/2018/76.html" target="_blank" class="flex items-center gap-2 text-[var(--accent)] hover:text-white transition-colors text-sm font-bold">
                                        Read Full Judgment 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        {{-- case study 3 --}}
                        <div class="md:col-span-4 group relative overflow-hidden rounded-2xl bg-slate-900 min-h-[450px]" data-aos="fade-up">
                            <div class="absolute inset-0 bg-cover bg-center grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-1000 opacity-30" 
                                style="background-image: url('https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&w=1200&q=80');">
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/80 to-transparent"></div>
                            <div class="relative h-full p-8 flex flex-col justify-end">
                                <span class="px-3 py-1 mb-4 text-[10px] font-bold tracking-widest uppercase bg-green-600 text-white rounded-full w-fit">Property & Land Rights</span>
                                <h3 class="text-2xl md:text-3xl font-bold text-white mb-4">Protecting Communal Heritage</h3>
                                <p class="text-slate-200 text-sm leading-relaxed mb-6">
                                    Successfully defended a farming enterprise's right to utilize communal land against an interdict. We established that historical land use for grazing and subsistence farming constitutes valid legal occupation.
                                </p>
                                <div class="flex items-center gap-4 opacity-0 group-hover:opacity-100 transition-all duration-500 translate-y-4 group-hover:translate-y-0">
                                    <span class="text-[10px] bg-white/10 px-2 py-1 rounded border border-white/20 text-white font-mono">Case: 1633/2015</span>
                                    <a href="https://www.saflii.org/za/cases/ZALMPPHC/2017/14.html" target="_blank" class="text-[var(--accent)] hover:text-white transition-colors text-xs font-bold flex items-center gap-1">
                                        Full Story <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        {{-- case study 4 --}}
                        <div class="md:col-span-4 group relative overflow-hidden rounded-2xl bg-slate-900 min-h-[450px]" data-aos="fade-up">
                            <div class="absolute inset-0 bg-cover bg-center grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-1000 opacity-30" 
                                style="background-image: url('https://images.unsplash.com/photo-1508962942661-f62d47b66235?auto=format&fit=crop&w=1200&q=80');">
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/80 to-transparent"></div>
                            <div class="relative h-full p-8 flex flex-col justify-end">
                                <span class="px-3 py-1 mb-4 text-[10px] font-bold tracking-widest uppercase bg-emerald-600 text-white rounded-full w-fit">Employment Litigation</span>
                                <h3 class="text-2xl md:text-3xl font-bold text-white mb-4">R546k Arrear Salary Recovery</h3>
                                <p class="text-slate-200 text-sm leading-relaxed mb-6">
                                    In a 6-year battle, we defeated an employer's strategy of financial exhaustion. The court ordered the immediate payment of over <span class="text-[var(--accent)] font-bold">half a million Rand</span> in back-pay for our client.
                                </p>
                                <div class="flex items-center gap-4 opacity-0 group-hover:opacity-100 transition-all duration-500 translate-y-4 group-hover:translate-y-0">
                                    <span class="text-[10px] bg-white/10 px-2 py-1 rounded border border-white/20 text-white font-mono">Case: JR 3506/09</span>
                                    <a href="https://www.saflii.org/za/cases/ZALCJHB/2016/299.html" target="_blank" class="text-[var(--accent)] hover:text-white transition-colors text-xs font-bold flex items-center gap-1">
                                        Full Story <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        {{-- case study 5 --}}
                        <div class="md:col-span-4 group relative overflow-hidden rounded-2xl bg-slate-900 min-h-[450px]" data-aos="fade-up">
                            <div class="absolute inset-0 bg-cover bg-center grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-1000 opacity-30" 
                                style="background-image: url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=1200&q=80');">
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/80 to-transparent"></div>
                            <div class="relative h-full p-8 flex flex-col justify-end">
                                <span class="px-3 py-1 mb-4 text-[10px] font-bold tracking-widest uppercase bg-indigo-600 text-white rounded-full w-fit">High Court Victory</span>
                                <h3 class="text-2xl md:text-3xl font-bold text-white mb-4">Securing Real Estate Assets</h3>
                                <p class="text-slate-200 text-sm leading-relaxed mb-6">
                                    Representing the First Respondent, we successfully upheld a valid sale agreement in the High Court. By dismantling grounds for appeal, we secured our client's undisputed ownership of high-value Gauteng property.
                                </p>
                                <div class="flex items-center gap-6 opacity-0 group-hover:opacity-100 transition-all duration-500 translate-y-4 group-hover:translate-y-0">
                                    <span class="text-xs bg-white/10 px-3 py-1 rounded border border-white/20 text-white font-mono">Case: 2022/059691</span>
                                    <a href="https://www.saflii.org/za/cases/ZAGPJHC/2024/923.html" target="_blank" class="text-[var(--accent)] hover:text-white transition-colors text-sm font-bold flex items-center gap-2">
                                        View Judgment <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        {{-- case study 6 --}}
                        <div class="md:col-span-5 group relative overflow-hidden rounded-2xl bg-slate-900 min-h-[450px]" data-aos="fade-up">
                            <div class="absolute inset-0 bg-cover bg-center grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-1000 opacity-30" 
                                style="background-image: url('https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=1200&q=80');">
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/80 to-transparent"></div>
                            <div class="relative h-full p-8 flex flex-col justify-end">
                                <span class="px-3 py-1 mb-4 text-[10px] font-bold tracking-widest uppercase bg-red-600 text-white rounded-full w-fit">Corporate Accountability</span>
                                <h3 class="text-2xl md:text-3xl font-bold text-white mb-4">Upholding Substantive Fairness</h3>
                                <p class="text-slate-200 text-sm leading-relaxed mb-6">
                                    In a complex review against a logistics giant, we proved the client's dismissal was substantively unfair, securing the maximum allowed compensation of <span class="text-[var(--accent)] font-bold">12 months' salary</span>.
                                </p>
                                <div class="flex items-center gap-4 opacity-0 group-hover:opacity-100 transition-all duration-500 translate-y-4 group-hover:translate-y-0">
                                    <span class="text-[10px] bg-white/10 px-2 py-1 rounded border border-white/20 text-white font-mono">Case: JR 2425/22</span>
                                    <a href="https://www.saflii.org/za/cases/ZALCJHB/2025/71.html" target="_blank" class="text-[var(--accent)] hover:text-white transition-colors text-xs font-bold flex items-center gap-1">
                                        Full Story <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        {{-- case study 7 --}}
                    <div class="md:col-span-7 group relative overflow-hidden rounded-2xl bg-slate-900 min-h-[450px]" data-aos="fade-up">
                            <div class="absolute inset-0 bg-cover bg-center grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-1000 opacity-30" 
                                style="background-image: url('https://images.unsplash.com/photo-1589829545856-d10d557cf95f?auto=format&fit=crop&w=1200&q=80');">
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/80 to-transparent"></div>
                            <div class="relative h-full p-8 flex flex-col justify-end">
                                <span class="px-3 py-1 mb-4 text-[10px] font-bold tracking-widest uppercase bg-orange-600 text-white rounded-full w-fit">Award Enforcement</span>
                                <h3 class="text-2xl md:text-3xl font-bold text-white mb-4">Mandating Judicial Security</h3>
                                <p class="text-slate-200 text-sm leading-relaxed mb-6">
                                    We successfully forced an employer to pay <span class="text-[var(--accent)] font-bold">R244,800.00 in security</span> as a condition for staying an arbitration award, ensuring our client's financial interests were protected during review.
                                </p>
                                <div class="flex items-center gap-4 opacity-0 group-hover:opacity-100 transition-all duration-500 translate-y-4 group-hover:translate-y-0">
                                    <span class="text-[10px] bg-white/10 px-2 py-1 rounded border border-white/20 text-white font-mono">Case: J2560/16</span>
                                    <a href="https://www.saflii.org/za/cases/ZALCJHB/2017/294.html" target="_blank" class="text-[var(--accent)] hover:text-white transition-colors text-xs font-bold flex items-center gap-1">
                                        Full Story <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            
            {{-- CTA Section  --}}
            <section class="relative py-18 overflow-hidden bg-[#36251e]">
                <div class="absolute inset-0 z-0">
                    <img src="{{ asset('images/Lawyer Office Designs_ Elevate.jpg') }}" 
                        class="w-full h-full object-cover opacity-10 grayscale bg-zoom-slow" 
                        alt="Legal Consultation Background">
                    <div class="absolute inset-0 bg-radial-gradient from-transparent to-[#36251e]/90"></div>
                </div>

                <div class="container mx-auto px-4 relative z-10">
                    <div class="max-w-4xl mx-auto text-center" data-aos="zoom-in" data-aos-duration="1000">
                        
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-[#bb942f]/10 rounded-full mb-8 border border-[#bb942f]/30">
                            <i data-lucide="award" class="h-8 w-8 text-[#bb942f]"></i>
                        </div>

                        <h2 class="heading text-2xl md:text-4xl font-bold text-white mb-6 leading-tight">
                            Could Your Case Be Our Next <span class="text-[#bb942f]">Success Story?</span>
                        </h2>
                        
                        <p class="text-lg md:text-xl text-slate-300 mb-10 max-w-2xl mx-auto leading-relaxed">
                            Every case is unique. We approach each with the same dedication and expertise demonstrated in our history of results. Let us evaluate your situation and fight for your rights.
                        </p>

                        <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                            <a href="{{ url('/contact') }}" 
                            class="group relative inline-flex items-center gap-3 bg-[#bb942f] text-black font-bold py-4 px-10 rounded-full transition-all duration-300 hover:bg-white hover:scale-105 shadow-xl shadow-gold/20">
                                Get Your Case Evaluated
                                <i data-lucide="arrow-right" class="w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
                            </a>
                            
                            <a href="tel:0603561780" class="text-white hover:text-[#bb942f] transition-colors font-medium flex items-center gap-2 group">
                                <div class="w-10 h-10 rounded-full border border-white/20 flex items-center justify-center group-hover:border-[#bb942f] transition-colors">
                                    <i data-lucide="phone" class="w-4 h-4"></i>
                                </div>
                                <span>Call Us: 060 356 1780</span>
                            </a>
                        </div>

                    </div>
                </div>
            </section>
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