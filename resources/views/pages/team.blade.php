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
        <!--<div class="container mx-auto px-4 relative z-10">-->
        <!--    <div class="max-w-4xl mx-auto text-center">-->
        <!--        <h1 class="text-4xl md:text-5xl font-bold mb-6 text-[var(--primary-foreground)] " data-aos="fade-down" data-aos-duration="1000">Meet Our Team</h1>-->
        <!--        <p class="text-xl text-[var(--primary-foreground)]/90" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">-->
        <!--            At Sehunane Attorneys Inc, our team is our greatest asset. Committed to excellence and driven by passion, our professionals work collaboratively to provide top-tier legal services tailored to your needs.-->
        <!--        </p>-->
        <!--    </div>-->
        <!--</div>-->
        <div class="container mx-auto px-4 relative z-10">
                <!--<div class="max-w-3xl mx-auto text-center">-->
                <!--    <h1 class="text-3xl md:text-5xl font-bold text-[var(--primary-foreground)] mb-6" data-aos="fade-down" data-aos-duration="1000">-->
                <!--        About Sehunane Attorneys Inc-->
                <!--    </h1>-->
                <!--    <p class="text-xl text-[var(--primary-foreground)]/90" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">-->
                <!--        Sehunane Attorneys Inc is a leading law firm dedicated to providing exceptional legal services to our clients. With a team of experienced attorneys, we specialize in various areas of law, ensuring comprehensive support for individuals and businesses alike.-->
                <!--    </p>-->
                <!--</div>-->
                <ul class="flex items-center justify-center space-x-4 mt-4">
                  <li class="text-[var(--primary-foreground)] font-bold text-[16px] cursor-pointer">
                    Home
                  </li>
                  <li>
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-slate-500 w-3 -rotate-90" viewBox="0 0 24 24">
                      <path fill-rule="evenodd"
                        d="M11.99997 18.1669a2.38 2.38 0 0 1-1.68266-.69733l-9.52-9.52a2.38 2.38 0 1 1 3.36532-3.36532l7.83734 7.83734 7.83734-7.83734a2.38 2.38 0 1 1 3.36532 3.36532l-9.52 9.52a2.38 2.38 0 0 1-1.68266.69734z"
                        clip-rule="evenodd" data-original="#000000"></path>
                    </svg>
                  </li>
                  <li class="text-[var(--primary-foreground)] font-bold text-[16px]">
                    Our Team
                  </li>
                </ul>
                
                <h1 class=" text-center text-2xl md:text-5xl font-bold text-[var(--primary-foreground)] mb-6" data-aos="fade-down" data-aos-duration="1000">
                    Meet Our Team
                </h1>
            </div>
    </section>
    {{-- Team introduction --}}
    <section class="py-20 overflow-hidden">
        <div class="container mx-auto px-4">
            {{-- intro text --}}
            <div class="max-w-3xl mx-auto mb-16 text-center" data-aos="fade-up">
                <p class="text-lg text-[var(--muted-foreground)] leading-relaxed">
                    Our experienced team brings decades of expertise to every case. We are committed to providing personalized, compassionate legal representation and standing by your side.
                </p>
            </div>
    
            {{-- founder section --}}
            <div class="max-w-5xl mx-auto mb-20" data-aos="fade-up">
                <div class="shadow-strong overflow-hidden rounded-2xl bg-[var(--primary-foreground)] group">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
                        {{-- Director Image with subtle zoom on hover --}}
                        <div class="relative h-[400px] md:h-auto overflow-hidden">
                            <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" 
                                 src="{{ asset('images/image_icon.svg')}}" alt="founder">
                        </div>
                        
                        <div class="p-8 md:p-12 flex flex-col justify-center" data-aos="fade-left" data-aos-delay="200">
                            <div class="inline-block px-4 py-1 bg-[var(--accent)]/10 rounded-full text-sm text-[var(--accent)] font-semibold mb-4 w-fit">
                                Director
                            </div>
                            <h2 class="text-3xl font-bold text-[var(--primary)]">Rueben Masilo Sehunane</h2>
                            <p class="text-lg text-[var(--accent)] mb-4">Director</p>
                            <p class="text-[var(--muted-foreground)] leading-relaxed mb-6">
                                Masilo Rueben Sehunane, Director of Sehunane Attorneys Inc, brings over a decade of legal expertise and a strong commitment to justice, leading the firm with excellence and dedication to client advocacy.
                            </p>
                            
                            <!--<a href="mailto:reubenmasilo@sehunaneattorneysinc.co.za" class="flex items-center gap-2 text-accent hover:text-accent/80 transition-colors font-medium">-->
                            <!--    <i data-lucide="mail" class="h-4 w-4"></i>-->
                            <!--    reubenmasilo@sehunaneattorneys.co.za-->
                            <!--</a>        -->
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl font-bold mb-12 text-center text-[var(--primary)]" data-aos="fade-down">Our Associates</h2>
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    {{-- associate 1 --}}
                    <div class="shadow-medium hover:shadow-strong transition-all duration-300 overflow-hidden rounded-2xl bg-[var(--primary-foreground)] group" 
                         data-aos="fade-right" data-aos-delay="100">
                        <div class="relative h-[500px] overflow-hidden">
                            <img src="{{ asset('images/image_icon.svg') }}" alt="Mohale Ernest Seunane" 
                                 class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        </div>
                        <div class="p-8">
                            <h3 class="text-2xl font-bold text-primary mb-2">Mohale Ernest Seunane</h3>
                            <p class="text-lg text-accent mb-4">Paralegal</p>
                            <p class="text-muted-foreground mb-4 leading-relaxed">
                                Mohale Ernest Seunane is a dedicated Paralegal at Sehunane Attorneys Inc, providing key support in case preparation and legal research with a strong focus on client service.
                            </p>
                            <!--<a href="mailto:mohaleernest@sehunaneattorneysinc.co.za" class="flex items-center gap-2 text-accent hover:text-accent/80 transition-colors font-medium text-sm">-->
                            <!--    <i data-lucide="mail" class="h-4 w-4"></i>-->
                            <!--    mohaleernest@sehunaneattorneys.co.za-->
                            <!--</a>-->
                        </div>
                    </div>
    
                    {{-- associate 2 --}}
                    <div class="shadow-medium hover:shadow-strong transition-all duration-300 overflow-hidden rounded-2xl bg-[var(--primary-foreground)] group" 
                         data-aos="fade-left" data-aos-delay="300">
                        <div class="relative h-[500px] overflow-hidden">
                            <img src="{{ asset('images/image_icon.svg') }}" alt="Rakhidi Seunane" 
                                 class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        </div>
                        <div class="p-8">
                            <h3 class="text-2xl font-bold text-primary mb-2">Rakhidi Lucky Seunane</h3>
                            <p class="text-lg text-accent mb-4">Office Manager</p>
                            <p class="text-muted-foreground mb-4 leading-relaxed">
                                Rakhidi Lucky Seunane is the Office Manager at Sehunane Attorneys Inc, ensuring smooth daily operations and providing essential administrative support to enhance firm efficiency.
                            </p>
                            <!--<a href="mailto:rakhidilucky@sehunaneattorneysinc.co.za" class="flex items-center gap-2 text-accent hover:text-accent/80 transition-colors font-medium text-sm">-->
                            <!--    <i data-lucide="mail" class="h-4 w-4"></i>-->
                            <!--    rakhidilucky@sehunaneattorneys.co.za-->
                            <!--</a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    {{-- CTA Section --}}
    <section class="py-20 bg-[var(--muted)]">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center" data-aos="zoom-in">
                <h2 class="text-3xl font-bold text-[var(--primary)] mb-6">
                    Ready to Work With Our Team?
                </h2>
                <p class="text-lg text-[var(--muted-foreground)] mb-8">
                    Our team at Sehunane Attorneys Inc is here to provide the expert legal support you need. Reach out now to schedule a consultation and take the first step towards resolving your legal matters.
                </p>
                <a href="{{ url('/contact') }}"
                    class="inline-block px-8 py-3 bg-[var(--primary)] text-[var(--primary-foreground)] rounded-lg hover:bg-[var(--primary)]/90 transition-all hover:scale-105 font-semibold shadow-lg">
                    Schedule a Consultation
                </a>
            </div>
        </div>
    </section>
</div>
@endsection