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
    <div id="page-skeleton">
        @include('skeletons.contact')
    </div>

    <div id="page-content" class="hidden">
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
                                    <form id="contactForm" action="{{ route('contact.send') }}" method="POST" class="space-y-4">
                                        @csrf

                                        {{-- SUBJECT --}}
                                        <div>
                                            <label class="text-slate-900 text-sm font-medium mb-2 block">Subject *</label>

                                            <select id="subjectSelect"
                                                    name="subject"
                                                    onchange="toggleCustomSubject()"
                                                    required
                                                    class="w-full px-4 py-3 rounded-lg bg-white border border-gray-300 text-sm text-slate-900 focus:border-indigo-500 outline-0">

                                                <option value="">Select a service</option>
                                                <option value="Constitutional Litigation">Constitutional Litigation</option>
                                                <option value="Commercial Law">Commercial Law</option>
                                                <option value="Civil Litigation">Civil Litigation</option>
                                                <option value="Criminal Law">Criminal Law</option>
                                                <option value="Labour Law">Labour Law</option>
                                                <option value="Property & Conveyancing">Property & Conveyancing</option>
                                                <option value="Family Law">Family Law</option>
                                                <option value="Divorce Law">Divorce Law</option>
                                                <option value="Deceased & Estate Planning">Deceased & Estate Planning</option>
                                                <option value="Third Party Claims">Third Party Claims</option>
                                                <option value="Other">Other (Specify)</option>
                                                
                    
                    
                                            </select>
                                        </div>

                                        {{-- CUSTOM SUBJECT --}}
                                        <div id="customSubjectBox" class="hidden">
                                            <label class="text-slate-900 text-sm font-medium mb-2 block">Specify Subject *</label>

                                            <input type="text"
                                                id="custom_subject"
                                                class="w-full px-4 py-3 rounded-lg bg-white border border-gray-300 text-sm text-slate-900 focus:border-indigo-500 outline-0"
                                                placeholder="Type your enquiry service..." />
                                        </div>

                                        {{-- NAME --}}
                                        <div>
                                            <label class="text-slate-900 text-sm font-medium mb-2 block">Name *</label>
                                            <input type="text"
                                                id="name"
                                                name="name"
                                                required
                                                placeholder="Name"
                                                class="w-full px-4 py-3 rounded-lg bg-white border border-gray-300 text-sm text-slate-900 focus:border-indigo-500 outline-0" />
                                        </div>

                                        {{-- PHONE --}}
                                        <div>
                                            <label class="text-slate-900 text-sm font-medium mb-2 block">Phone *</label>
                                            <input type="text"
                                                id="phone"
                                                name="phone"
                                                required
                                                placeholder="Phone Number"
                                                class="w-full px-4 py-3 rounded-lg bg-white border border-gray-300 text-sm text-slate-900 focus:border-indigo-500 outline-0" />
                                        </div>

                                        {{-- EMAIL --}}
                                        <div>
                                            <label class="text-slate-900 text-sm font-medium mb-2 block">Email *</label>
                                            <input type="email"
                                                id="email"
                                                name="email"
                                                required
                                                placeholder="E-mail"
                                                class="w-full px-4 py-3 rounded-lg bg-white border border-gray-300 text-sm text-slate-900 focus:border-indigo-500 outline-0" />
                                        </div>

                                        {{-- MESSAGE --}}
                                        <div>
                                            <label class="text-slate-900 text-sm font-medium mb-2 block">Message *</label>
                                            <textarea id="message"
                                                    name="message"
                                                    required
                                                    rows="4"
                                                    placeholder="Message"
                                                    class="w-full px-4 py-3 rounded-lg bg-white border border-gray-300 text-sm text-slate-900 focus:border-indigo-500 outline-0"></textarea>
                                        </div>

                                        {{-- BUTTONS --}}
                                        <div class="grid grid-cols-2 sm:grid-cols-2 gap-4 pt-2">
                                            <button type="button"
                                                    onclick="sendToWhatsApp()"
                                                    class="w-full flex items-center justify-center gap-2 text-sm bg-[#25D366] hover:bg-emerald-600 text-white font-medium py-3 px-4 rounded-lg transition-colors">
                                                Send via WhatsApp
                                            </button>

                                            <button type="button"
                                                    id="emailSubmitBtn"
                                                    onclick="sendToEmail()"
                                                    class="w-full flex items-center justify-center gap-2 text-sm bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors">
                                                <span id="btnText">Send via Email</span>
                                            </button>
                                        </div>

                                        {{-- hidden subject for backend --}}
                                        <input type="hidden" name="subject" id="subject">
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
                                                <p class="text-slate-600 text-[13px] mt-0.5">Closemore Building, Office 302A Second Floor</p>
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
                                                <a href="tel:+27603561780" class="text-slate-600 text-[13px]">
                                                    +27 (603) 561-780
                                                </a>
                                            </div>
                                        </div>
                                        <div class="flex items-start space-x-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-black" viewBox="0 0 512 512">
                                                <path d="M298.789 313.693c-12.738 8.492-27.534 12.981-42.789 12.981-15.254 0-30.05-4.489-42.788-12.981L3.409 173.82A76.269 76.269 0 0 1 0 171.403V400.6c0 26.278 21.325 47.133 47.133 47.133h417.733c26.278 0 47.133-21.325 47.133-47.133V171.402a75.21 75.21 0 0 1-3.416 2.422z" data-original="#000000" />
                                                <path d="m20.05 148.858 209.803 139.874c7.942 5.295 17.044 7.942 26.146 7.942 9.103 0 18.206-2.648 26.148-7.942L491.95 148.858c12.555-8.365 20.05-22.365 20.05-37.475 0-25.981-21.137-47.117-47.117-47.117H47.117C21.137 64.267 0 85.403 0 111.408a44.912 44.912 0 0 0 20.05 37.45z" data-original="#000000" />
                                            </svg>
                                            <div>
                                                <h4 class="font-semibold text-black text-sm mb-2">Email Address</h4>
                                                <a href="mailto:info@sehunaneattorneys.co.za" class="text-slate-600 text-[13px]">
                                                    info@sehunaneattorneys.co.za
                                                </a>
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
            {{-- FAQ Section --}}
            <section class="py-20 bg-gray-50">
                <div class="max-w-screen-xl mx-auto p-4">
                    <div class="mb-12 max-w-4xl">
                        <h2 class="text-2xl font-bold text-slate-900">Frequently Asked Questions</h2>
                        <p class="text-[15px] text-slate-600 leading-relaxed mt-6">
                            Explore our comprehensive guide to common legal questions, categorized to help you find the answers you need quickly.
                        </p>
                    </div>

                    <div class="grid lg:grid-cols-2 gap-6">
                        {{-- Left Column --}}
                        <div class="space-y-6">
                            <h3 class="text-lg font-bold text-[#bb942f] border-b pb-2">General Services & Consultations</h3>
                            
                            <div class="accordion bg-white [box-shadow:0_2px_10px_-3px_rgba(14,14,14,0.3)] rounded-lg">
                                <button type="button" class="toggle-button cursor-pointer p-6 w-full text-base font-medium text-left text-slate-900 flex items-center">
                                    <span class="mr-4">1. What services does your law firm offer?</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-[14px] h-[14px] fill-current ml-auto shrink-0"><path d="M40.421 215.579H471.579C493.868 215.579 512 233.711 512 256s-18.132 40.421-40.421 40.421H40.421C18.132 296.421 0 278.289 0 256s18.132-40.421 40.421-40.421z"/><path class="plus" d="M215.579 40.421C215.579 18.132 233.711 0 256 0s40.421 18.132 40.421 40.421v431.158C296.421 493.868 278.289 512 256 512s-40.421-18.132-40.421-40.421V40.421z"/></svg>
                                </button>
                                <div class="content invisible max-h-0 px-6 overflow-hidden transition-all duration-300">
                                    <p class="text-[15px] text-slate-600">Our law firm provides legal services in areas such as civil litigation, family law, labour law, debt collection, contract drafting, deceased estates, property disputes, and legal advice.</p>
                                </div>
                            </div>

                            <div class="accordion bg-white [box-shadow:0_2px_10px_-3px_rgba(14,14,14,0.3)] rounded-lg">
                                <button type="button" class="toggle-button cursor-pointer p-6 w-full text-base font-medium text-left text-slate-900 flex items-center">
                                    <span class="mr-4">2. Do you offer online legal consultations?</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-[14px] h-[14px] fill-current ml-auto shrink-0"><path d="M40.421 215.579H471.579C493.868 215.579 512 233.711 512 256s-18.132 40.421-40.421 40.421H40.421C18.132 296.421 0 278.289 0 256s18.132-40.421 40.421-40.421z"/><path class="plus" d="M215.579 40.421C215.579 18.132 233.711 0 256 0s40.421 18.132 40.421 40.421v431.158C296.421 493.868 278.289 512 256 512s-40.421-18.132-40.421-40.421V40.421z"/></svg>
                                </button>
                                <div class="content invisible max-h-0 px-6 overflow-hidden transition-all duration-300">
                                    <p class="text-[15px] text-slate-600">Yes. We offer consultations via telephone, email, and video conferencing, allowing clients across South Africa to receive legal advice without visiting our offices.</p>
                                </div>
                            </div>

                            <div class="accordion bg-white [box-shadow:0_2px_10px_-3px_rgba(14,14,14,0.3)] rounded-lg">
                                <button type="button" class="toggle-button cursor-pointer p-6 w-full text-base font-medium text-left text-slate-900 flex items-center">
                                    <span class="mr-4">3. How do I book a consultation?</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-[14px] h-[14px] fill-current ml-auto shrink-0"><path d="M40.421 215.579H471.579C493.868 215.579 512 233.711 512 256s-18.132 40.421-40.421 40.421H40.421C18.132 296.421 0 278.289 0 256s18.132-40.421 40.421-40.421z"/><path class="plus" d="M215.579 40.421C215.579 18.132 233.711 0 256 0s40.421 18.132 40.421 40.421v431.158C296.421 493.868 278.289 512 256 512s-40.421-18.132-40.421-40.421V40.421z"/></svg>
                                </button>
                                <div class="content invisible max-h-0 px-6 overflow-hidden transition-all duration-300">
                                    <p class="text-[15px] text-slate-600">You can book by completing the contact form on our website, sending us an email, or calling our office to schedule an appointment.</p>
                                </div>
                            </div>

                            <div class="accordion bg-white [box-shadow:0_2px_10px_-3px_rgba(14,14,14,0.3)] rounded-lg">
                                <button type="button" class="toggle-button cursor-pointer p-6 w-full text-base font-medium text-left text-slate-900 flex items-center">
                                    <span class="mr-4">4. What is the cost and what documents are needed?</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-[14px] h-[14px] fill-current ml-auto shrink-0"><path d="M40.421 215.579H471.579C493.868 215.579 512 233.711 512 256s-18.132 40.421-40.421 40.421H40.421C18.132 296.421 0 278.289 0 256s18.132-40.421 40.421-40.421z"/><path class="plus" d="M215.579 40.421C215.579 18.132 233.711 0 256 0s40.421 18.132 40.421 40.421v431.158C296.421 493.868 278.289 512 256 512s-40.421-18.132-40.421-40.421V40.421z"/></svg>
                                </button>
                                <div class="content invisible max-h-0 px-6 overflow-hidden transition-all duration-300">
                                    <p class="text-[15px] text-slate-600">Fees vary by complexity. For the meeting, please bring your ID, any contracts, court documents, correspondence related to the dispute, and supporting evidence.</p>
                                </div>
                            </div>

                            <h3 class="text-lg font-bold text-[#bb942f] border-b pb-2 mt-8">Litigation & Court Matters</h3>

                            <div class="accordion bg-white [box-shadow:0_2px_10px_-3px_rgba(14,14,14,0.3)] rounded-lg">
                                <button type="button" class="toggle-button cursor-pointer p-6 w-full text-base font-medium text-left text-slate-900 flex items-center">
                                    <span class="mr-4">6. How long does a case take and can it be settled out of court?</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-[14px] h-[14px] fill-current ml-auto shrink-0"><path d="M40.421 215.579H471.579C493.868 215.579 512 233.711 512 256s-18.132 40.421-40.421 40.421H40.421C18.132 296.421 0 278.289 0 256s18.132-40.421 40.421-40.421z"/><path class="plus" d="M215.579 40.421C215.579 18.132 233.711 0 256 0s40.421 18.132 40.421 40.421v431.158C296.421 493.868 278.289 512 256 512s-40.421-18.132-40.421-40.421V40.421z"/></svg>
                                </button>
                                <div class="content invisible max-h-0 px-6 overflow-hidden transition-all duration-300">
                                    <p class="text-[15px] text-slate-600">Cases can take a few months to over a year. Yes, many are resolved through negotiation or mediation, which saves time and costs.</p>
                                </div>
                            </div>

                            <div class="accordion bg-white [box-shadow:0_2px_10px_-3px_rgba(14,14,14,0.3)] rounded-lg">
                                <button type="button" class="toggle-button cursor-pointer p-6 w-full text-base font-medium text-left text-slate-900 flex items-center">
                                    <span class="mr-4">8. What is a Letter of Demand and a Summons?</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-[14px] h-[14px] fill-current ml-auto shrink-0"><path d="M40.421 215.579H471.579C493.868 215.579 512 233.711 512 256s-18.132 40.421-40.421 40.421H40.421C18.132 296.421 0 278.289 0 256s18.132-40.421 40.421-40.421z"/><path class="plus" d="M215.579 40.421C215.579 18.132 233.711 0 256 0s40.421 18.132 40.421 40.421v431.158C296.421 493.868 278.289 512 256 512s-40.421-18.132-40.421-40.421V40.421z"/></svg>
                                </button>
                                <div class="content invisible max-h-0 px-6 overflow-hidden transition-all duration-300">
                                    <p class="text-[15px] text-slate-600">A Letter of Demand is a formal warning to settle a claim. A Summons is an official document that starts a lawsuit in court.</p>
                                </div>
                            </div>

                            <h3 class="text-lg font-bold text-[#bb942f] border-b pb-2 mt-8">Family Law</h3>

                            <div class="accordion bg-white [box-shadow:0_2px_10px_-3px_rgba(14,14,14,0.3)] rounded-lg">
                                <button type="button" class="toggle-button cursor-pointer p-6 w-full text-base font-medium text-left text-slate-900 flex items-center">
                                    <span class="mr-4">10. Divorce: Uncontested vs Contested</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-[14px] h-[14px] fill-current ml-auto shrink-0"><path d="M40.421 215.579H471.579C493.868 215.579 512 233.711 512 256s-18.132 40.421-40.421 40.421H40.421C18.132 296.421 0 278.289 0 256s18.132-40.421 40.421-40.421z"/><path class="plus" d="M215.579 40.421C215.579 18.132 233.711 0 256 0s40.421 18.132 40.421 40.421v431.158C296.421 493.868 278.289 512 256 512s-40.421-18.132-40.421-40.421V40.421z"/></svg>
                                </button>
                                <div class="content invisible max-h-0 px-6 overflow-hidden transition-all duration-300">
                                    <p class="text-[15px] text-slate-600">Uncontested divorces (2-3 months) happen when both parties agree. Contested divorces can take years. Maintenance can be applied for at the Maintenance Court if a parent fails to support a child.</p>
                                </div>
                            </div>

                            <h3 class="text-lg font-bold text-[#bb942f] border-b pb-2 mt-8">Labour Law</h3>

                            <div class="accordion bg-white [box-shadow:0_2px_10px_-3px_rgba(14,14_14,0.3)] rounded-lg">
                                <button type="button" class="toggle-button cursor-pointer p-6 w-full text-base font-medium text-left text-slate-900 flex items-center">
                                    <span class="mr-4">13. Unfair Dismissal & CCMA</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-[14px] h-[14px] fill-current ml-auto shrink-0"><path d="M40.421 215.579H471.579C493.868 215.579 512 233.711 512 256s-18.132 40.421-40.421 40.421H40.421C18.132 296.421 0 278.289 0 256s18.132-40.421 40.421-40.421z"/><path class="plus" d="M215.579 40.421C215.579 18.132 233.711 0 256 0s40.421 18.132 40.421 40.421v431.158C296.421 493.868 278.289 512 256 512s-40.421-18.132-40.421-40.421V40.421z"/></svg>
                                </button>
                                <div class="content invisible max-h-0 px-6 overflow-hidden transition-all duration-300">
                                    <p class="text-[15px] text-slate-600">You must refer unfair dismissal to the CCMA within 30 days. We represent both employers and employees in disciplinary hearings and CCMA/Labour Court cases.</p>
                                </div>
                            </div>
                        </div>

                        {{-- Right Column --}}
                        <div class="space-y-6">
                            <h3 class="text-lg font-bold text-[#bb942f] border-b pb-2">Debt Collection & Property</h3>
                            
                            <div class="accordion bg-white [box-shadow:0_2px_10px_-3px_rgba(14,14,14,0.3)] rounded-lg">
                                <button type="button" class="toggle-button cursor-pointer p-6 w-full text-base font-medium text-left text-slate-900 flex items-center">
                                    <span class="mr-4">16. Debts and Evictions</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-[14px] h-[14px] fill-current ml-auto shrink-0"><path d="M40.421 215.579H471.579C493.868 215.579 512 233.711 512 256s-18.132 40.421-40.421 40.421H40.421C18.132 296.421 0 278.289 0 256s18.132-40.421 40.421-40.421z"/><path class="plus" d="M215.579 40.421C215.579 18.132 233.711 0 256 0s40.421 18.132 40.421 40.421v431.158C296.421 493.868 278.289 512 256 512s-40.421-18.132-40.421-40.421V40.421z"/></svg>
                                </button>
                                <div class="content invisible max-h-0 px-6 overflow-hidden transition-all duration-300">
                                    <p class="text-[15px] text-slate-600">We assist in recovering unpaid debts. For property, landlords cannot self-evict; they must follow the PIE Act which requires a court order.</p>
                                </div>
                            </div>

                            <h3 class="text-lg font-bold text-[#bb942f] border-b pb-2 mt-8">Wills & Deceased Estates</h3>

                            <div class="accordion bg-white [box-shadow:0_2px_10px_-3px_rgba(14,14,14,0.3)] rounded-lg">
                                <button type="button" class="toggle-button cursor-pointer p-6 w-full text-base font-medium text-left text-slate-900 flex items-center">
                                    <span class="mr-4">19. Wills, Estates and Executors</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-[14px] h-[14px] fill-current ml-auto shrink-0"><path d="M40.421 215.579H471.579C493.868 215.579 512 233.711 512 256s-18.132 40.421-40.421 40.421H40.421C18.132 296.421 0 278.289 0 256s18.132-40.421 40.421-40.421z"/><path class="plus" d="M215.579 40.421C215.579 18.132 233.711 0 256 0s40.421 18.132 40.421 40.421v431.158C296.421 493.868 278.289 512 256 512s-40.421-18.132-40.421-40.421V40.421z"/></svg>
                                </button>
                                <div class="content invisible max-h-0 px-6 overflow-hidden transition-all duration-300">
                                    <p class="text-[15px] text-slate-600">Without a Will, your estate is divided by the Intestate Succession Act. Estates take 6 months to 2 years to finalise. The executor identifies assets, pays debts, and distributes inheritance.</p>
                                </div>
                            </div>

                            <h3 class="text-lg font-bold text-[#bb942f] border-b pb-2 mt-8">Fees & Payments</h3>

                            <div class="accordion bg-white [box-shadow:0_2px_10px_-3px_rgba(14,14,14,0.3)] rounded-lg">
                                <button type="button" class="toggle-button cursor-pointer p-6 w-full text-base font-medium text-left text-slate-900 flex items-center">
                                    <span class="mr-4">23. How do you charge and are there payment plans?</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-[14px] h-[14px] fill-current ml-auto shrink-0"><path d="M40.421 215.579H471.579C493.868 215.579 512 233.711 512 256s-18.132 40.421-40.421 40.421H40.421C18.132 296.421 0 278.289 0 256s18.132-40.421 40.421-40.421z"/><path class="plus" d="M215.579 40.421C215.579 18.132 233.711 0 256 0s40.421 18.132 40.421 40.421v431.158C296.421 493.868 278.289 512 256 512s-40.421-18.132-40.421-40.421V40.421z"/></svg>
                                </button>
                                <div class="content invisible max-h-0 px-6 overflow-hidden transition-all duration-300">
                                    <p class="text-[15px] text-slate-600">We use hourly rates, fixed fees, or contingency fees. Payment plans can be arranged depending on the nature of the matter.</p>
                                </div>
                            </div>

                            <h3 class="text-lg font-bold text-[#bb942f] border-b pb-2 mt-8">Confidentiality & Legitimacy</h3>

                            <div class="accordion bg-white [box-shadow:0_2px_10px_-3px_rgba(14,14,14,0.3)] rounded-lg">
                                <button type="button" class="toggle-button cursor-pointer p-6 w-full text-base font-medium text-left text-slate-900 flex items-center">
                                    <span class="mr-4">26. Is my information safe and is the firm legitimate?</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-[14px] h-[14px] fill-current ml-auto shrink-0"><path d="M40.421 215.579H471.579C493.868 215.579 512 233.711 512 256s-18.132 40.421-40.421 40.421H40.421C18.132 296.421 0 278.289 0 256s18.132-40.421 40.421-40.421z"/><path class="plus" d="M215.579 40.421C215.579 18.132 233.711 0 256 0s40.421 18.132 40.421 40.421v431.158C296.421 493.868 278.289 512 256 512s-40.421-18.132-40.421-40.421V40.421z"/></svg>
                                </button>
                                <div class="content invisible max-h-0 px-6 overflow-hidden transition-all duration-300">
                                    <p class="text-[15px] text-slate-600">Yes. All info is protected by attorney-client privilege. Our attorneys are registered with the Legal Practice Council (LPC) of South Africa.</p>
                                </div>
                            </div>

                            <h3 class="text-lg font-bold text-[#bb942f] border-b pb-2 mt-8">Starting Your Case</h3>

                            <div class="accordion bg-white [box-shadow:0_2px_10px_-3px_rgba(14,14,14,0.3)] rounded-lg">
                                <button type="button" class="toggle-button cursor-pointer p-6 w-full text-base font-medium text-left text-slate-900 flex items-center">
                                    <span class="mr-4">28. How do I start and when will I get feedback?</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-[14px] h-[14px] fill-current ml-auto shrink-0"><path d="M40.421 215.579H471.579C493.868 215.579 512 233.711 512 256s-18.132 40.421-40.421 40.421H40.421C18.132 296.421 0 278.289 0 256s18.132-40.421 40.421-40.421z"/><path class="plus" d="M215.579 40.421C215.579 18.132 233.711 0 256 0s40.421 18.132 40.421 40.421v431.158C296.421 493.868 278.289 512 256 512s-40.421-18.132-40.421-40.421V40.421z"/></svg>
                                </button>
                                <div class="content invisible max-h-0 px-6 overflow-hidden transition-all duration-300">
                                    <p class="text-[15px] text-slate-600">Contact us for a consultation to assess your options. Most inquiries receive feedback within 24 to 48 hours.</p>
                                </div>
                            </div>
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

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        /* ----------------------------
        TOAST CONFIG
        -----------------------------*/
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 4000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer);
                toast.addEventListener('mouseleave', Swal.resumeTimer);
            }
        });

        /* ----------------------------
        SUBJECT HANDLER
        -----------------------------*/
        function toggleCustomSubject() {
            const select = document.getElementById('subjectSelect');
            const customBox = document.getElementById('customSubjectBox');
            const customInput = document.getElementById('custom_subject');

            if (select.value === 'Other') {
                customBox.classList.remove('hidden');
                customInput.setAttribute('required', true);
            } else {
                customBox.classList.add('hidden');
                customInput.removeAttribute('required');
                customInput.value = '';
            }
        }

        /* ----------------------------
        WHATSAPP SEND
        -----------------------------*/
        function sendToWhatsApp() {
            const name = document.getElementById('name').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const email = document.getElementById('email').value.trim();
            const message = document.getElementById('message').value.trim();

            const subjectSelect = document.getElementById('subjectSelect').value;
            const customSubject = document.getElementById('custom_subject')?.value?.trim();

            let subject = subjectSelect === 'Other' ? customSubject : subjectSelect;

            if (!name || !phone || !email || !message || !subject) {
                Toast.fire({
                    icon: 'warning',
                    title: 'Please complete all required fields'
                });
                return;
            }

            const formattedMessage =
                `Hello Sehunane Attorneys,%0A%0A` +
                `*Name:* ${encodeURIComponent(name)}%0A` +
                `*Phone:* ${encodeURIComponent(phone)}%0A` +
                `*Email:* ${encodeURIComponent(email)}%0A` +
                `*Subject:* ${encodeURIComponent(subject)}%0A` +
                `*Message:* ${encodeURIComponent(message)}`;

            const whatsappNumber = "27603561780";

            window.open(
                `https://wa.me/${whatsappNumber}?text=${formattedMessage}`,
                '_blank'
            );
        }

        /* ----------------------------
        EMAIL SEND (FIXED)
        -----------------------------*/
        function sendToEmail() {
            const form = document.getElementById('contactForm');
            const btn = document.getElementById('emailSubmitBtn');
            const btnText = document.getElementById('btnText');

            if (!form.checkValidity()) {
                form.reportValidity();
                return;
            }

            const subjectSelect = document.getElementById('subjectSelect').value;
            const customSubject = document.getElementById('custom_subject')?.value?.trim();

            let finalSubject = subjectSelect === 'Other'
                ? customSubject
                : subjectSelect;

            if (!finalSubject) {
                Toast.fire({
                    icon: 'warning',
                    title: 'Please select a subject'
                });
                return;
            }

            // Inject subject into hidden field for Laravel
            const subjectField = document.getElementById('subject');

        if (!subjectField) {
            console.error('Hidden subject field is missing in the DOM');
            return;
        }

        subjectField.value = finalSubject;

            // UI loading state
            btn.disabled = true;
            btnText.innerText = 'Sending...';

            const formData = new FormData(form);

            fetch(form.action, {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json'
                },
                body: formData
            })
            .then(async (response) => {
                const data = await response.json().catch(() => null);

                if (response.ok && data?.success) {
                    Toast.fire({
                        icon: 'success',
                        title: data.message || 'Message sent successfully'
                    });

                    form.reset();
                    toggleCustomSubject(); // reset UI state
                } else {
                    throw new Error(data?.message || 'Request failed');
                }
            })
            .catch((error) => {
                console.error(error);

                Toast.fire({
                    icon: 'error',
                    title: 'Failed to send message. Please try again.'
                });
            })
            .finally(() => {
                btn.disabled = false;
                btnText.innerText = 'Send via Email';
            });
        }

        //FAQ Accordion logic
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.accordion').forEach(elm => {
                const button = elm.querySelector('.toggle-button');
                const content = elm.querySelector('.content');
                const plusIcon = button.querySelector('.plus');

                button.addEventListener('click', () => {
                    const isHidden = content.classList.toggle('invisible');
                    content.style.maxHeight = isHidden ? '0px' : `${content.scrollHeight + 100}px`;
                    button.classList.toggle('font-semibold', !isHidden);
                    button.classList.toggle('font-medium', isHidden);
                    content.classList.toggle('pb-6', !isHidden);
                    plusIcon.classList.toggle('hidden', !isHidden);
                    plusIcon.classList.toggle('block', isHidden);
                });
            });
        });
    </script>
@endpush