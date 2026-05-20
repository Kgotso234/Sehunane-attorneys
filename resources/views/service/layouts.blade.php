@extends('layouts.app')

@section('title', $title)
@section('meta_description', $meta_description)

@section('content')
<div class="min-h-screen bg-[#fcfcfc]">

    {{-- HERO --}}
    <section class="relative h-[350px] flex items-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset($hero_image) }}" class="w-full h-full object-cover bg-zoom-slow">
            <div class="absolute inset-0 bg-gradient-to-r from-[#36251e] to-[#36251e]/60 opacity-90"></div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <nav class="flex items-center space-x-2 text-sm text-[#bb942f] mb-4 font-semibold uppercase tracking-widest">
                <a href="/">Home</a>
                <i data-lucide="chevron-right" class="w-4 h-4"></i>
                <span>Services</span>
                <i data-lucide="chevron-right" class="w-4 h-4"></i>
                <span class="text-white/60">{{ $service_name }}</span>
            </nav>

            <h1 class="text-3xl md:text-5xl font-bold text-white leading-tight">
                {!! $hero_title !!}
            </h1>
        </div>
    </section>

    {{-- BODY --}}
    <div class="container mx-auto px-4 py-16 lg:py-24">
        <div class="flex flex-col lg:flex-row gap-16">

            {{-- SIDEBAR --}}
            <aside class="lg:w-1/3">
                <div class="sticky top-24 space-y-8">

                    {{-- MENU --}}
                    <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-slate-100">
                        <div class="p-6 bg-[#36251e] text-white">
                            <h2 class="text-lg font-bold flex items-center gap-3">
                                <i data-lucide="briefcase" class="w-5 h-5 text-[#bb942f]"></i>
                                Practice Areas
                            </h2>
                        </div>

                        <nav class="p-2">
                            @foreach ($services as $service)
                                <a href="{{ route($service['route']) }}"
                                   class="flex justify-between px-4 py-4 rounded-xl mb-1
                                   {{ request()->routeIs($service['route']) ? 'bg-[#bb942f] text-white' : 'hover:bg-slate-50 text-slate-600' }}">
                                    <span class="font-bold text-sm">{{ $service['label'] }}</span>
                                    <i data-lucide="arrow-right" class="w-4 h-4"></i>
                                </a>
                            @endforeach
                        </nav>
                    </div>

                    {{-- CONTACT --}}
                    <div class="bg-gradient-to-br from-[#36251e] to-[#241914] rounded-2xl p-8 text-white">
                        <h3 class="text-2xl font-bold mb-4">
                            {{ $contact_title }}
                        </h3>

                        <p class="text-white/70 text-sm mb-6">
                            {{ $contact_text }}
                        </p>

                        <a href="tel:0720621529"
                           class="bg-[#bb942f] text-black font-bold py-3 px-6 rounded-xl inline-flex items-center gap-3">
                            <i data-lucide="phone-call"></i>
                            Call Now
                        </a>
                    </div>

                </div>
            </aside>

            {{-- MAIN --}}
            <main class="lg:w-2/3">

                {{-- OVERVIEW --}}
                <div class="mb-12">
                    <span class="text-[#bb942f] font-bold uppercase text-xs">
                        Overview
                    </span>

                    <h2 class="text-3xl font-bold mt-2 mb-6">
                        {{ $overview_title }}
                    </h2>

                    <div class="space-y-6 text-slate-600 text-lg">
                        {!! $overview !!}
                    </div>
                </div>

                {{-- EXPERTISE --}}
                <div class="bg-white p-8 md:p-12 rounded-3xl border border-slate-100">
                    <h3 class="text-2xl font-bold mb-10">Our Expertise</h3>

                    <div class="grid md:grid-cols-2 gap-8">
                        @foreach ($offerings as $item)
                            <div class="flex gap-4">
                                <i data-lucide="check-circle-2" class="text-[#bb942f] w-6 h-6"></i>
                                <div>
                                    <h4 class="font-bold">{{ $item['title'] }}</h4>
                                    <p class="text-sm text-slate-500">{{ $item['desc'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- FOOT NOTES --}}
                <div class="mt-12 grid md:grid-cols-2 gap-6 border-t pt-12">
                    @foreach ($footnotes as $note)
                        <div>
                            <h4 class="font-bold mb-2">{{ $note['title'] }}</h4>
                            <p class="text-sm text-slate-500">{{ $note['desc'] }}</p>
                        </div>
                    @endforeach
                </div>

            </main>

        </div>
    </div>
</div>
@endsection