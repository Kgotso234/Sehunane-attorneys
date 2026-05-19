@extends('layouts.app')

@section('title', 'Contact Us | Sehunane Attorneys Inc Kempton Park Office')
@section('meta_description', 'Need legal advice? Contact Sehunane Attorneys Inc today. Visit our Kempton Park office or schedule a consultation online for expert legal assistance.')

@section('content')
    {{-- Success alert container for AJAX submissions --}}
    <div id="flash-message" class="hidden mb-4 p-4 bg-green-100 text-green-800 rounded container mx-auto px-4 mt-4"></div>

    @if (session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-800 rounded container mx-auto px-4 mt-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="min-h-screen">
        {{-- header --}}
        <section class="relative h-[250px] flex items-center">
            <div class="absolute inset-0 overflow-hidden">
                <img src="{{ asset('images/law-firm-1.jpg') }}" alt="about-img" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-[#212529] opacity-70"></div>
            </div>
            <div class="container mx-auto px-4 relative z-10">
                <h1 class="heading text-center text-2xl md:text-3xl font-[var(--font-cormorant)] font-bold text-white mb-6" data-aos="fade-up" data-aos-duration="1000">
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
                                <form id="contactForm" action="{{ route('contact.send') }}" method="POST">
                                    @csrf
                                    {{-- Hidden field to satisfy validation for standard email subject --}}
                                    <input type="hidden" name="subject" id="subject" value="Website Legal Inquiry">

                                    <div class="mb-4">
                                        <label class="text-slate-900 text-sm font-medium mb-2 block">Name *</label>
                                        <input
                                            type="text" 
                                            placeholder="Name" required id="name" name="name"
                                            class="w-full px-4 py-3 rounded-lg bg-white border border-gray-300 text-sm text-slate-900 focus:border-indigo-500 outline-0"
                                        />
                                    </div>
                                    <div class="mb-4">
                                        <label class="text-slate-900 text-sm font-medium mb-2 block">Phone *</label>
                                        <input
                                            type="text"
                                            placeholder="Phone Number" id="phone" name="phone" required
                                            class="w-full px-4 py-3 rounded-lg bg-white border border-gray-300 text-sm text-slate-900 focus:border-indigo-500 outline-0"
                                        />
                                    </div>
                                    <div class="mb-4">
                                        <label class="text-slate-900 text-sm font-medium mb-2 block">Email *</label>
                                        <input
                                            type="email"
                                            placeholder="E-mail" id="email" name="email" required
                                            class="w-full px-4 py-3 rounded-lg bg-white border border-gray-300 text-sm text-slate-900 focus:border-indigo-500 outline-0"
                                        />
                                    </div>
                                    <div class="mb-6">
                                        <label class="text-slate-900 text-sm font-medium mb-2 block">Message *</label>
                                        <textarea
                                            placeholder="Message"
                                            rows="4" id="message" name="message" required
                                            class="w-full px-4 py-3 rounded-lg bg-white border border-gray-300 text-sm text-slate-900 focus:border-indigo-500 outline-0"
                                        ></textarea>
                                    </div>
                                    
                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                        <button
                                            type="button" onclick="sendToWhatsApp()"
                                            class="w-full flex items-center justify-center gap-2 text-sm bg-[#25D366] hover:bg-emerald-600 text-white font-medium py-3 px-4 rounded-lg transition-colors border-0 cursor-pointer"
                                        >
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                                                <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                                            </svg>
                                            Send via WhatsApp
                                        </button>
                                        <button
                                            type="button" id="emailSubmitBtn" onclick="sendToEmail()"
                                            class="w-full flex items-center justify-center gap-2 text-sm bg-slate-800 hover:bg-slate-900 text-white font-medium py-3 px-4 rounded-lg transition-colors border-0 cursor-pointer"
                                        >
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741zM1 11.105l4.708-2.897L1 5.383z"/>
                                            </svg>
                                            <span id="btnText">Send via Email</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                        {{-- (Rest of the information column and map sections remain the same) --}}
                        <div class="space-y-8">
                            {{-- ... --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <script>
        function sendToWhatsApp() {
            const name = document.getElementById('name').value;
            const phone = document.getElementById('phone').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;

            if(!name || !phone || !email || !message) {
                alert('Please fill out all required fields.');
                return;
            }

            const formattedMessage = `Hello Sehunane Attorneys,%0A%0A` +
                                     `*Name:* ${encodeURIComponent(name)}%0A` +
                                     `*Phone:* ${encodeURIComponent(phone)}%0A` +
                                     `*Email:* ${encodeURIComponent(email)}%0A` +
                                     `*Message:* ${encodeURIComponent(message)}`;
            
            const whatsappNumber = "27603561780";
            window.open(`https://wa.me/${whatsappNumber}?text=${formattedMessage}`, '_blank');
        }

        // Updated to process dynamic AJAX delivery via your Controller
        function sendToEmail() {
            const form = document.getElementById('contactForm');
            const btn = document.getElementById('emailSubmitBtn');
            const btnText = document.getElementById('btnText');
            
            // Basic HTML5 Validity trigger
            if (!form.checkValidity()) {
                form.reportValidity();
                return;
            }

            // Visual loading feedback
            btn.disabled = true;
            btnText.innerText = 'Sending...';

            const formData = new FormData(form);

            fetch(form.action, {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: formData
            })
            .then(response => {
                if (response.ok) {
                    const flash = document.getElementById('flash-message');
                    flash.innerText = "Your message has been sent successfully!";
                    flash.classList.remove('hidden');
                    form.reset();
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                } else {
                    alert('Something went wrong. Please check your credentials and try again.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred while dispatching the message.');
            })
            .finally(() => {
                btn.disabled = false;
                btnText.innerText = 'Send via Email';
            });
        }
    </script>
@endsection