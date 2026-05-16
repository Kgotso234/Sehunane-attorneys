@extends('layouts.app')

@section('title', 'Legal Insights & Analysis | Sehunane Attorneys Inc')
@section('meta_description', 'Stay informed with expert legal analysis and updates on South African law. Sehunane Attorneys Inc provides deep insights into Constitutional, Criminal, and Property law.')

@push('styles')
<style>
    @keyframes slowZoom {
        0% { transform: scale(1); }
        100% { transform: scale(1.1); }
    }
    .animate-slow-zoom {
        animation: slowZoom 20s infinite alternate ease-in-out;
    }
    /* Ensures smooth line-clamping for excerpt text */
    .line-clamp-3 {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;  
        overflow: hidden;
    }
</style>
@endpush

@section('content')
<main class="min-h-screen bg-white">
    <section class="relative h-[400px] flex items-center overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ asset('images/law-firm-1.jpg') }}" 
                 alt="Legal Insights" 
                 class="w-full h-full object-cover animate-slow-zoom">
            <div class="absolute inset-0 bg-gradient-to-r from-[#1a120f] via-[#36251e]/90 to-transparent"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-3xl" data-aos="fade-right">
                <div class="flex items-center gap-3 mb-4">
                    <span class="h-px w-8 bg-[#bb942f]"></span>
                    <span class="text-[#bb942f] font-bold uppercase tracking-[0.2em] text-xs">Knowledge Hub</span>
                </div>
                <h1 class="text-4xl md:text-6xl font-bold text-white leading-tight mb-6">
                    Legal <span class="text-[#bb942f]">Insights</span>
                </h1>
                <p class="text-white/70 text-lg max-w-xl leading-relaxed border-l-2 border-[#bb942f]/30 pl-6">
                    Expert analysis, critical updates on South African jurisprudence, and practical legal guidance for individuals and businesses.
                </p>
            </div>
        </div>
    </section>

    <section class="py-12 -mt-20 relative z-20">
        <div class="container mx-auto px-6">
            <div class="bg-white rounded-[2.5rem] shadow-2xl overflow-hidden flex flex-col lg:flex-row border border-slate-100">
                <div class="lg:w-1/2 h-[350px] lg:h-auto overflow-hidden">
                    <img src="{{ asset('images/labour-law.png') }}" class="w-full h-full object-cover hover:scale-105 transition-transform duration-700" alt="Featured Insight">
                </div>
                <div class="lg:w-1/2 p-10 lg:p-16 flex flex-col justify-center">
                    <div class="flex items-center gap-4 mb-6">
                        <span class="px-4 py-1 bg-[#bb942f]/10 text-[#bb942f] text-xs font-bold rounded-full uppercase tracking-widest">Editor's Choice</span>
                        <span class="text-slate-400 text-sm">March 2026</span>
                    </div>
                    <h2 class="text-3xl lg:text-4xl font-bold text-black mb-6 leading-tight">
                        The Evolution of <span class="text-[#bb942f]">Labour Law</span>: 2026 Outlook
                    </h2>
                    <p class="text-slate-600 text-lg mb-8 leading-relaxed">
                        With new amendments to the Labour Relations Act, South African businesses must adapt to shifting compliance standards. We explore the legal impact on the modern workforce.
                    </p>
                    <a href="#" class="inline-flex items-center gap-4 bg-[#36251e] text-white px-8 py-4 rounded-xl font-bold hover:bg-[#bb942f] hover:text-black transition-all shadow-lg w-fit">
                        Read Full Analysis <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-slate-50">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
                <div>
                    <h2 class="text-3xl font-bold text-black mb-4">Latest Legal Articles</h2>
                    <p class="text-slate-500 max-w-md">Stay ahead of legal developments with our specialized practice area updates.</p>
                </div>
                <div class="flex flex-wrap gap-3">
                    <button class="px-6 py-2 rounded-full bg-[#36251e] text-white text-xs font-bold uppercase tracking-widest">All</button>
                    <button class="px-6 py-2 rounded-full bg-white border border-slate-200 text-slate-600 text-xs font-bold uppercase tracking-widest hover:border-[#bb942f] transition-colors">Criminal</button>
                    <button class="px-6 py-2 rounded-full bg-white border border-slate-200 text-slate-600 text-xs font-bold uppercase tracking-widest hover:border-[#bb942f] transition-colors">Property</button>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <article class="bg-white rounded-3xl p-8 border border-slate-100 hover:shadow-2xl transition-all duration-500 group" data-aos="fade-up">
                    <div class="mb-8 flex items-center justify-between">
                        <div class="p-3 bg-slate-50 rounded-2xl group-hover:bg-[#bb942f]/10 transition-colors">
                            <i data-lucide="shield-alert" class="w-6 h-6 text-[#bb942f]"></i>
                        </div>
                        <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Constitutional Law</span>
                    </div>
                    <h3 class="text-2xl font-bold text-black mb-4 group-hover:text-[#bb942f] transition-colors">Your Rights During Police Detainment</h3>
                    <p class="text-slate-500 text-sm leading-relaxed mb-8 line-clamp-3">An in-depth look at Section 35 of the Constitution and your immediate legal safeguards during arrest.</p>
                    <a href="#" class="flex items-center gap-2 text-sm font-bold text-black border-b-2 border-transparent hover:border-[#bb942f] w-fit transition-all pb-1">
                        Read Guide <i data-lucide="chevron-right" class="w-4 h-4 text-[#bb942f]"></i>
                    </a>
                </article>

                <article class="bg-white rounded-3xl p-8 border border-slate-100 hover:shadow-2xl transition-all duration-500 group" data-aos="fade-up" data-aos-delay="100">
                    <div class="mb-8 flex items-center justify-between">
                        <div class="p-3 bg-slate-50 rounded-2xl group-hover:bg-[#bb942f]/10 transition-colors">
                            <i data-lucide="home" class="w-6 h-6 text-[#bb942f]"></i>
                        </div>
                        <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Conveyancing</span>
                    </div>
                    <h3 class="text-2xl font-bold text-black mb-4 group-hover:text-[#bb942f] transition-colors">Avoiding Property Transfer Delays</h3>
                    <p class="text-slate-500 text-sm leading-relaxed mb-8 line-clamp-3">Critical pitfalls that stall registrations at the Deeds Office and how our team ensures a seamless transfer.</p>
                    <a href="#" class="flex items-center gap-2 text-sm font-bold text-black border-b-2 border-transparent hover:border-[#bb942f] w-fit transition-all pb-1">
                        Read Guide <i data-lucide="chevron-right" class="w-4 h-4 text-[#bb942f]"></i>
                    </a>
                </article>

                <article class="bg-white rounded-3xl p-8 border border-slate-100 hover:shadow-2xl transition-all duration-500 group" data-aos="fade-up" data-aos-delay="200">
                    <div class="mb-8 flex items-center justify-between">
                        <div class="p-3 bg-slate-50 rounded-2xl group-hover:bg-[#bb942f]/10 transition-colors">
                            <i data-lucide="gavel" class="w-6 h-6 text-[#bb942f]"></i>
                        </div>
                        <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Civil Litigation</span>
                    </div>
                    <h3 class="text-2xl font-bold text-black mb-4 group-hover:text-[#bb942f] transition-colors">High Court vs Magistrate Court</h3>
                    <p class="text-slate-500 text-sm leading-relaxed mb-8 line-clamp-3">Understanding jurisdictional limits and the financial implications of selecting the correct litigation venue.</p>
                    <a href="#" class="flex items-center gap-2 text-sm font-bold text-black border-b-2 border-transparent hover:border-[#bb942f] w-fit transition-all pb-1">
                        Read Guide <i data-lucide="chevron-right" class="w-4 h-4 text-[#bb942f]"></i>
                    </a>
                </article>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="bg-[#36251e] rounded-[3rem] p-12 md:p-24 relative overflow-hidden text-center shadow-2xl">
                <i data-lucide="book-open" class="absolute -left-16 -bottom-16 w-80 h-80 text-white/5 -rotate-12"></i>
                
                <div class="relative z-10 max-w-2xl mx-auto">
                    <h2 class="text-4xl md:text-5xl font-bold text-white mb-6 leading-tight">Expert Insights <span class="text-[#bb942f]">to Your Inbox</span></h2>
                    <p class="text-white/60 text-lg mb-12">
                        Subscribe to receive monthly briefings on the South African legal landscape and critical practice updates.
                    </p>
                    
                    <form class="flex flex-col sm:flex-row gap-4">
                        <input type="email" placeholder="Email Address" class="flex-grow bg-white/5 border border-white/20 rounded-2xl px-8 py-5 text-white placeholder:text-white/30 focus:outline-none focus:ring-2 focus:ring-[#bb942f] transition-all">
                        <button type="submit" class="bg-[#bb942f] text-black font-extrabold px-12 py-5 rounded-2xl hover:bg-white transition-all shadow-xl">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection