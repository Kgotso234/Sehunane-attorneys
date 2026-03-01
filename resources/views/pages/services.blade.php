@extends('layouts.app')
@section('title', 'Legal Services Kempton Park | Criminal, Civil, Family & Labour Law')
@section('meta_description', 'Comprehensive legal solutions including Corporate Law, Criminal Defense, Property Transfers, and Divorce Law in Kempton Park and surrounding areas.')

@section('content')
    <div class="min-h-screen">
        {{-- header --}}
        <section class="relative h-[250px] flex items-center">
            <div class="absolute inset-0 overflow-hidden">
                <img src="{{ asset('images/law-firm-1.jpg') }}" alt="about-img" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-[var(--gradient-hero)] opacity-70"></div>
            </div>
            <div class="container mx-auto px-4 relative z-10">
                <div class="max-w-3xl mx-auto text-center">
                    <h1 class="text-4xl md:text-5xl font-bold text-[var(--primary-foreground)] mb-6">
                        Our Area Of Expertise
                    </h1>
                    <p class="text-xl text-[var(--primary-foreground)]/90">
                        Empowering you with expert legal solutions that protect your rights.
                    </p>
                </div>
            </div>
        </section>
    </div>
@endsection