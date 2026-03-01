@extends('layouts.app')

@section('title', 'Contact Us | Sehunane Attorneys Inc Kempton Park Office')
@section('meta_description', 'Need legal advice? Contact Sehunane Attorneys Inc today. Visit our Kempton Park office or schedule a consultation online for expert legal assistance.')

@section('content')
    @if (session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
            {{ session('success') }}
        </div>
    @endif
    <div class="min-h-screen">
        {{-- header --}}
        <section class="relative h-[250px] flex items-center">
            <div class="absolute inset-0 overflow-hidden">
                <img src="{{ asset('images/law-firm-1.jpg') }}" alt="about-img" class="w-full h-full object-cover">
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
                       contact us
                    </li>
                    

                </ul>
                <h1 class="text-center text-2xl md:text-3xl font-[var(--font-cormorant)]  font-bold text-white mb-6" data-aos="fade-up" data-aos-duration="1000">
                    Contact Us
                </h1>
            </div>
        </section>
        {{-- main content --}}
        <section class="py-20 overflow-hidden">
            <div class="container mx-auto px-4">
                <div class="max-w-7xl max-lg:max-w-3xl mx-auto p-4 md:p-8">
                    <div class="grid lg:grid-cols-2 gap-8 items-start">
                        <div class="bg-gray-50 rounded-lg p-8 border border-gray-200">
                            <h2 class="text-2xl font-bold text-slate-900 mb-4">Get in touch</h2>
                            <p class="text-slate-600 text-[15px] mb-8 leading-relaxed">Feel free to contact us and we will get back to you as soon as possible</p>
                            <div class="space-y-6">
                                <form id="contactForm">
                                    @csrf
                                    <div>
                                        <label class="text-slate-900 text-sm font-medium mb-2 block">Name *</label>
                                        <input
                                            type="text" 
                                            placeholder="Name" required id="name" name="name"
                                            class="w-full px-4 py-3 rounded-lg bg-white border border-gray-300 mt-2 text-sm text-slate-900 focus:border-indigo-500 outline-0"
                                        />
                                    </div>
                                    <div>
                                        <label class="text-slate-900 text-sm font-medium mb-2 block">Phone *</label>
                                        <input
                                            type="tel"
                                            placeholder="Phone Number" id="phone" name="phone" required
                                            class="w-full px-4 py-3 mb-2 rounded-lg bg-white border border-gray-300 mb-2 text-sm text-slate-900 focus:border-indigo-500 outline-0"
                                        />
                                    </div>
                                    <div>
                                        <label class="text-slate-900 text-sm font-medium mb-2 block">Email *</label>
                                        <input
                                            type="email"
                                            placeholder="E-mail" id="email" name="email" required
                                            class="w-full px-4 py-3 rounded-lg bg-white border border-gray-300 mb-2 text-sm text-slate-900 focus:border-indigo-500 outline-0"
                                        />
                                    </div>
                                    <div>
                                        <label class="text-slate-900 text-sm font-medium mb-2 block">Message *</label>
                                        <textarea
                                            placeholder="Message"
                                            rows="4"  id="message" name="message" required
                                            class="w-full px-4 py-3 rounded-lg bg-white border border-gray-300 mb-2 text-sm text-slate-900 focus:border-indigo-500 outline-0"
                                        ></textarea>
                                    </div>
                                    <button
                                        type="button" onclick="sendToWhatsApp()"
                                        class="w-full text-sm bg-[#25D366] hover:bg-slate-900 text-white font-medium py-3 px-6 rounded-lg transition-colors border-0 cursor-pointer"
                                        >
                                        Send via WhatsApp
                                    </button>
                                </form>
                            </div>
                            
                        </div>
                        <div class="space-y-8">
                            <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-200">
                                <h3 class="text-xl font-semibold text-slate-900 mb-8">Contact Information</h3> 
                                <div class="space-y-6">
                                    <div class="flex items-start space-x-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-black" viewBox="0 0 64 64">
                                        <path d="M32 0A24.032 24.032 0 0 0 8 24c0 17.23 22.36 38.81 23.31 39.72a.99.99 0 0 0 1.38 0C33.64 62.81 56 41.23 56 24A24.032 24.032 0 0 0 32 0zm0 35a11 11 0 1 1 11-11 11.007 11.007 0 0 1-11 11z" data-original="#000000" />
                                        </svg>
                                        <div>
                                            <h4 class="font-semibold text-black text-sm mb-2">Our Location</h4>
                                            <p class="text-slate-600 text-sm">11 Monument Road</p>
                                            <p class="text-slate-600 text-[13px] mt-0.5">302A Closemore Building</p>
                                            <p class="text-slate-600 text-[13px] mt-0.5">Kempton Park, Gauteng</p>
                                            <p class="text-slate-600 text-[13px] mt-0.5">1620</p>
                                            {{-- <a href="https://maps.app.goo.gl/cuubXDoE71fhpmxm9" target="_blank" class="text-md text-[var(--accent)] hover:underline text-sm mt-2 inline-block">
                                                Get Directions →
                                            </a> --}}
                                        </div>
                                        
                                    </div>
                                    <div class="flex items-start space-x-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-black" viewBox="0 0 513.64 513.64">
                                            <path d="m499.66 376.96-71.68-71.68c-25.6-25.6-69.12-15.359-79.36 17.92-7.68 23.041-33.28 35.841-56.32 30.72-51.2-12.8-120.32-79.36-133.12-133.12-7.68-23.041 7.68-48.641 30.72-56.32 33.28-10.24 43.52-53.76 17.92-79.36l-71.68-71.68c-20.48-17.92-51.2-17.92-69.12 0L18.38 62.08c-48.64 51.2 5.12 186.88 125.44 307.2s256 176.641 307.2 125.44l48.64-48.64c17.921-20.48 17.921-51.2 0-69.12z" data-original="#000000" />
                                        </svg>
                                        <div>
                                            <h4 class="font-semibold text-black text-sm mb-2">Phone Number</h4>
                                            <p class="text-slate-600 text-[13px]">+27 (555) 123-4567</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start space-x-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-black" viewBox="0 0 512 512">
                                            <path d="M298.789 313.693c-12.738 8.492-27.534 12.981-42.789 12.981-15.254 0-30.05-4.489-42.788-12.981L3.409 173.82A76.269 76.269 0 0 1 0 171.403V400.6c0 26.278 21.325 47.133 47.133 47.133h417.733c26.278 0 47.133-21.325 47.133-47.133V171.402a75.21 75.21 0 0 1-3.416 2.422z" data-original="#000000" />
                                            <path d="m20.05 148.858 209.803 139.874c7.942 5.295 17.044 7.942 26.146 7.942 9.103 0 18.206-2.648 26.148-7.942L491.95 148.858c12.555-8.365 20.05-22.365 20.05-37.475 0-25.981-21.137-47.117-47.117-47.117H47.117C21.137 64.267 0 85.403 0 111.408a44.912 44.912 0 0 0 20.05 37.45z" data-original="#000000" />
                                        </svg>
                                        <div>
                                            <h4 class="font-semibold text-black text-sm mb-2">Email Address</h4>
                                            <p class="text-slate-600 text-[13px]">info@sehunaneattorneys.co.za</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-200">
                                <h3 class="text-xl font-semibold text-slate-900 mb-8">Hours of Operation</h3>
                                <div class="space-y-4">
                                    <div class="flex justify-between gap-4 flex-wrap">
                                        <span class="text-slate-600 text-sm">Monday - Friday</span>
                                        <span class="text-slate-900 text-sm">8:00 AM - 4:00 PM</span>
                                    </div>
                                    <div class="flex justify-between gap-4 flex-wrap">
                                        <span class="text-slate-600 text-sm">Saturday</span>
                                        <span class="text-slate-900 text-sm">Closed</span>
                                    </div>
                                    <div class="flex justify-between gap-4 flex-wrap">
                                        <span class="text-slate-600 text-sm">Sunday</span>
                                        <span class="text-slate-900 text-sm">Closed</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        {{-- map section --}}
        <section class="w-full h-[500px]">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!4v1762641861187!6m8!1m7!1smGMT31tkEX559zWKVvlR6A!2m2!1d-26.10304098468086!2d28.23234625263074!3f321.5256585026408!4f-1.614283502728867!5f0.7820865974627469"
                class="w-full h-full"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </section>
    </div>
        
@endsection

@push('scripts')
        <script>
            // --- 1. WHATSAPP LOGIC ---
            function sendToWhatsApp() {
                const name = document.getElementById('name').value.trim();
                const subject = document.getElementById('subject').value.trim();
                const message = document.getElementById('message').value.trim();
                const phone = document.getElementById('phone').value.trim();
    
                if (!name || !subject || !message) {
                    Swal.fire({ icon: 'warning', title: 'Missing Info', text: 'Please fill in Name, Subject, and Message first!' });
                    return;
                }
    
                const whatsappNumber = "27720621529";
                const text = `*New Consultation Request*%0A` +
                             `*From:* ${encodeURIComponent(name)}%0A` +
                             `*Subject:* ${encodeURIComponent(subject)}%0A` +
                             `*Phone:* ${encodeURIComponent(phone)}%0A` +
                             `*Message:* ${encodeURIComponent(message)}`;
    
                window.open(`https://wa.me/${whatsappNumber}?text=${text}`, '_blank');
            }
    
            // --- 2. AJAX EMAIL LOGIC ---
            document.getElementById('contactForm').addEventListener('submit', function(e) {
                e.preventDefault();
                
                const form = this;
                const submitBtn = document.getElementById('submitBtn');
                const formData = new FormData(form);
    
                // Disable button and show loading
                submitBtn.disabled = true;
                submitBtn.innerText = 'Sending...';
    
                fetch("{{ route('contact.send') }}", {
                    method: "POST",
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                    }
                })
                .then(response => response.json())
                .then(data => {
                    submitBtn.disabled = false;
                    submitBtn.innerText = 'Send via Email';
    
                    if(data.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Message Sent!',
                            text: 'We will get back to you within 24 hours.',
                            timer: 4000,
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false
                        });
                        form.reset();
                    } else {
                        Swal.fire({ icon: 'error', title: 'Oops...', text: 'Something went wrong. Please try again.' });
                    }
                })
                .catch(error => {
                    submitBtn.disabled = false;
                    submitBtn.innerText = 'Send via Email';
                    console.error('Error:', error);
                    Swal.fire({ icon: 'error', title: 'Error', text: 'Connection failed. Check your internet.' });
                });
            });
        </script>
    @endpush
