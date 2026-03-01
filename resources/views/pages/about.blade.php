@extends('layouts.app')
@section('title', 'About Sehunane Attorneys Inc | Leading Law Firm in Kempton Park')
@section('meta_description', 'Learn about Sehunane Attorneys Inc, a multi-disciplinary law firm in Kempton Park. Led by Rueben Masilo Sehunane, we provide expert legal advocacy in diverse fields.')

@section('content')

    <div class="min-h-screen">
        {{-- header --}}
        <section class="relative h-[200px] flex items-center">
            <div class="absolute inset-0 overflow-hidden">
                <img src="{{ asset('images/law-firm-1.jpg') }}" alt="about-img" class="w-full h-full object-cover transition-transform duration-[5000ms] hover:scale-110" >
                <div class="absolute inset-0 bg-[#36251e] opacity-70"></div>
            </div>
            <div class="container mx-auto px-4 relative z-10">
                <h1 class="text-center mt-12 text-3xl md:text-4xl font-bold text-[var(--primary-foreground)] mb-6" data-aos="fade-down" data-aos-duration="1000">
                    About Us
                </h1>
                <ul class="flex items-center justify-center space-x-4 mt-4">
                    <li class="text-[var(--primary-foreground)] font-bold text-[16px] cursor-pointer">
                        Home
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-white w-3 -rotate-90" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M11.99997 18.1669a2.38 2.38 0 0 1-1.68266-.69733l-9.52-9.52a2.38 2.38 0 1 1 3.36532-3.36532l7.83734 7.83734 7.83734-7.83734a2.38 2.38 0 1 1 3.36532 3.36532l-9.52 9.52a2.38 2.38 0 0 1-1.68266.69734z" clip-rule="evenodd"></path>
                        </svg>
                    </li>
                    <li class="text-[var(--primary-foreground)] font-bold text-[16px]">
                        About Us
                    </li>
                </ul>
            </div>
        </section>
        {{-- Our Story --}}
        <section class="py-20 overflow-hidden">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">
                    
                    <h2 class="text-2xl md:text-4xl font-bold mb-12 text-center text-[var(--primary)]" 
                        data-aos="fade-down">
                        Our Story
                    </h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

                        {{-- Image on the left --}}
                        <div class="relative" data-aos="fade-right" data-aos-duration="1000">
                            <div class="relative z-10 bg-gray-200 shadow-2xl rounded-lg max-w-[400px] mx-auto md:mx-0">
                                <img class="w-full h-96 object-cover transition-all duration-500 rounded-lg"
                                    src="{{ asset('images/download.jpg') }}" 
                                    alt="office image">
                            </div>
                        </div>

                        {{-- Text on the right --}}
                        <div class="space-y-6 text-base text-[var(--muted-foreground)] leading-relaxed" data-aos="fade-left">
                            <p data-aos="fade-right" data-aos-delay="200">
                                Founded in 2012, Sehunane Attorneys Inc has grown from a small practice into a reputable law firm known for its commitment to excellence and client satisfaction. Our founders envisioned a firm that not only provides top-notch legal services but also fosters strong relationships with clients based on trust and integrity.
                            </p>
                            <p data-aos="fade-left" data-aos-delay="400">
                                Over the years, we have expanded our expertise to cover a wide range of legal areas, including corporate law, family law, criminal defense, real estate law, and more. Our attorneys bring diverse backgrounds and experiences, allowing us to approach each case with a unique perspective and tailored strategies.
                            </p>
                            <p data-aos="fade-up" data-aos-delay="600">
                                At Sehunane Attorneys Inc, we believe that every client deserves personalized attention and dedicated representation. We take the time to understand our clients' needs and goals, ensuring that we provide solutions that align with their best interests.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        
        {{-- Mission, Value and Vision --}}
        <section class="relative py-20 bg-cover bg-center"
                style="background-image: url('{{ asset('images/office picture.jpg') }}');">

            <!-- Dark Overlay -->
            <div class="absolute inset-0 bg-black/40"></div>

            <div class="relative z-10 container mx-auto px-4">
                <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-12">

                    {{-- Mission Card --}}
                    <div class="shadow-lg rounded-lg border border-[var(--border)] bg-white/30 backdrop-blur-sm transform transition-transform hover:-translate-y-2 duration-300"
                        data-aos="zoom-in-right" data-aos-delay="200">
                        <div class="p-8">
                            <h2 class="text-base font-bold text-black/90 mb-4">Mission</h2>
                            <p class="text-xs text-black/90 leading-relaxed">
                                Our mission at Sehunane Attorneys Inc is to provide exceptional legal services with integrity, professionalism, and a client-centered approach. We are dedicated to achieving the best possible outcomes for our clients while upholding the highest ethical standards.
                            </p>
                        </div>
                    </div>

                    {{-- Vision Card --}}
                    <div class="shadow-lg rounded-lg border border-[var(--border)] bg-white/30 backdrop-blur-sm transform transition-transform hover:-translate-y-2 duration-300"
                        data-aos="zoom-in-left" data-aos-delay="400">
                        <div class="p-8">
                            <h2 class="text-base font-bold text-black/90 mb-4">Our Vision</h2>
                            <p class="text-xs text-black/90 leading-relaxed">
                                Our vision is to be recognized as a leading law firm known for excellence in legal services, innovation, and client satisfaction. We strive to build lasting relationships with our clients and the community, making a positive impact through our work.
                            </p>
                        </div>
                    </div>
                    {{-- Our Core Value --}}
                    <div class="shadow-lg rounded-lg border border-[var(--border)] bg-white/30 backdrop-blur-sm transform transition-transform hover:-translate-y-2 duration-300"
                        data-aos="zoom-in-left" data-aos-delay="400">
                        <div class="p-8">
                            <h2 class="text-base font-bold text-black/90 mb-4">Our Value</h2>
                            <p class="text-xs text-black/90 leading-relaxed">
                                At Sehunane Attorneys Inc, we are guided by integrity, accountability, and professionalism. We prioritise our clients’ needs with personalised attention, uphold the highest ethical standards, and pursue excellence in every matter to achieve meaningful, results-driven outcomes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="py-20 bg-[var(--muted)]">
            <div class="max-w-5xl mx-auto px-6">

                <!-- Heading -->
                <div class="text-center max-w-3xl mx-auto">
                    <h2 class="text-3xl md:text-5xl font-bold text-slate-900">
                        Meet Our Team
                    </h2>
                    <p class="text-lg text-slate-600 mt-4 leading-relaxed">
                        Meet our team of professionals dedicated to serving your legal needs.
                    </p>
                </div>

                <!-- Team Grid -->
                <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">

                    <!-- Card -->
                    <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                        <div class="w-full h-[480px] bg-gray-100">
                            <img src="{{ asset('images/profile.jpg') }}"
                                alt="Kgotsofatso Pholotho"
                                class="w-full h-full object-cover object-top">
                        </div>
                        <div class="p-6 text-center">
                            <h4 class="text-xl font-semibold text-slate-900">
                                Kgotsofatso Pholotho
                            </h4>
                            <p class="text-base text-slate-600 mt-2">
                                Director & Attorney
                            </p>
                        </div>
                    </div>

                    <!-- Card -->
                    <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                        <div class="w-full h-[480px] bg-gray-100">
                            <img src="{{ asset('images/profile.jpg') }}"
                                alt="Team Member"
                                class="w-full h-full object-cover object-top">
                        </div>
                        <div class="p-6 text-center">
                            <h4 class="text-xl font-semibold text-slate-900">
                                Kgotsofatso Pholotho
                            </h4>
                            <p class="text-base text-slate-600 mt-2">
                                Paralegal
                            </p>
                        </div>
                    </div>

                    <!-- Card -->
                    <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                        <div class="w-full h-[480px] bg-gray-100">
                            <img src="{{ asset('images/profile.jpg') }}"
                                alt="Team Member"
                                class="w-full h-full object-cover object-top">
                        </div>
                        <div class="p-6 text-center">
                            <h4 class="text-xl font-semibold text-slate-900">
                                Kgotsofatso Pholotho
                            </h4>
                            <p class="text-base text-slate-600 mt-2">
                                Office Manager
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        {{-- <section class="py-20 bg-white relative overflow-hidden">
            <div class="container mx-auto px-4 relative z-10">
                <div class="max-w-4xl mx-auto  text-center">
                    <h2 class="text-3xl md:text-4xl font-bold text-black mb-12" 
                        data-aos="fade-up">
                        Meet Our Team
                    </h2>
                    {{-- <p class="text-lg text-black opacity-80" data-aos="fade-up" data-aos-delay="200">
                        Our team of experienced attorneys is dedicated to providing personalized legal solutions tailored to your unique needs. With a diverse range of expertise, we are equipped to handle various legal matters with professionalism and care.
                    </p> --}}
                {{-- </div>
            </div>
            <div class="p-4">
                <div class="lg:max-w-2xl md:max-w-5xl max-w-xl mx-auto">

                </div>
            </div>

        </section> --}} 
        {{-- Why Choose Us (With Counters) --}}
        <section class="py-20 bg-white relative overflow-hidden">
            <div class="container mx-auto px-4 relative z-10">
                <div class="max-w-4xl mx-auto  text-center">
                    <h2 class="text-3xl md:text-4xl font-bold text-black mb-12" 
                        data-aos="fade-up">
                        Why Choose Sehunane Attorneys Inc?
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-black">
                        
                        <div data-aos="fade-up" data-aos-delay="200">
                            <div class="text-5xl font-bold text-black mb-2">
                                <span class="counter" data-target="14">0</span>+
                            </div>
                            <p class="text-lg text-black opacity-80">Years of Experience</p>
                        </div>
        
                        <div data-aos="fade-up" data-aos-delay="400">
                            <div class="text-5xl font-bold text-black mb-2">
                                <span class="counter" data-target="300">0</span>+
                            </div>
                            <p class="text-lg text-black opacity-80">Successful Cases</p>
                        </div>
        
                        <div data-aos="fade-up" data-aos-delay="600">
                            <div class="text-5xl font-bold text-black mb-2">
                                <span class="counter" data-target="96">0</span>%
                            </div>
                            <p class="text-lg text-black opacity-80">Client Satisfaction</p>
                        </div>
        
                    </div>
                </div>
            </div>
        </section>
    </div> 
@endsection

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const counters = document.querySelectorAll('.counter');
        
        const startCounters = (entries, observer) => {
            entries.forEach(entry => {
                // Trigger when even 10% of the section is visible
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    const target = +counter.getAttribute('data-target');
                    const duration = 2000; // Total time for animation (2 seconds)
                    const frameRate = 1000 / 60; // 60 frames per second
                    const totalFrames = Math.round(duration / frameRate);
                    let currentFrame = 0;

                    const animate = () => {
                        currentFrame++;
                        const progress = currentFrame / totalFrames;
                        // Use an "easeOut" formula so it slows down at the end
                        const easedProgress = 1 - Math.pow(1 - progress, 3);
                        const currentValue = Math.ceil(easedProgress * target);

                        if (currentFrame <= totalFrames) {
                            counter.innerText = currentValue;
                            requestAnimationFrame(animate);
                        } else {
                            counter.innerText = target;
                        }
                    };

                    animate();
                    observer.unobserve(counter);
                }
            });
        };

        const observer = new IntersectionObserver(startCounters, {
            threshold: 0.1 // Trigger earlier!
        });

        counters.forEach(counter => observer.observe(counter));
    });
</script>