
<footer class="text-[var(--primary-foreground)] mt-12 bg-[#212529]">
    <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="space-y-4">
                <div class="flex items-center gap-2">
                    <img src="{{asset('images/company_logo-removebg-preview (1).png')}}" alt="company logo"
                    class="h-17 w-auto max-w-none">
                    <!--<span class="text-lg font-commissioner font-bold">Sehunane Attorneys Inc</span>-->
                </div>
                <p class="text-sm text-primary-foreground/80">
                    Based in Kempton Park, Sehunane Attorneys Inc is a 100% Black-Owned firm. We combine our signature strength in Labour Law with a comprehensive range of legal services to protect your business, family, and future.
                </p>
            </div>

            <div>
                <h3 class="font-semibold mb-4">Quick Links</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ url('/home') }}"    class="hover:text-[var(--accent)] transition-color">Home</a></li>
                    <li><a href="{{ url('/about') }}"   class="hover:text-[var(--accent)] transition-color">About Us</a></li>
                    <li><a href="{{ url('/services') }}"class="hover:text-[var(--accent)] transition-color">Our Services</a></li>
                    <li><a href="{{ url('/team') }}"    class="hover:text-[var(--accent)] transition-color">Our Team</a></li>
                </ul>
            </div>

            <div>
                <h3 class="font-semibold mb-4">Services</h3>
                <ul class="space-y-2 text-sm text-[var(--primary-foreground)]/80">
                    <li>Constitutional Litigation</li>
                    <li>Commercial Law</li>
                    <li>Civil Litigation</li>
                    <li>Criminal Law</li>
                    <li>Labour Law</li>
                    <li>Property & Conveyancing</li>
                    <li>Third Party Claims</li>
                </ul>
            </div>

            <div>
                <h3 class="font-semibold mb-4">Contact Us</h3>
                <ul class="space-y-3 text-sm">
                    <li class="flex items-start gap-3">
                        <i data-lucide="map-pin" class="h-4 w-4 mt-0.5 flex-shrink-0"></i>
                        <span class="text-[var(--primary-foreground)]/80">11 Monument Road, 302A Closemore Building, Kempton Park, Gauteng, 1620</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i data-lucide="phone" class="h-4 w-4 flex-shrink-0"></i>
                        <a href="tel:+27114567890" class="hover:text-[var(--accent)] transition-colors">
                            +27 11 456 7890
                        </a>
                    </li>
                    <li class="flex items-center gap-3">
                        <i data-lucide="mail" class="h-4 w-4 flex-shrink-0"></i>
                        <a href="mailto:info@schunaneattorneys.co.za" class="hover:text-[var(--accent)] transition-colors">
                            info@schunaneattorneys.co.za
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="mt-2 pt-8 border-t border-[var(--primary-foreground)]/20 text-center text-sm text-[var(--primary-foreground)]/60">
            <p>&copy; {{ date('Y') }} Sehunane Attorneys Inc. All rights reserved.</p>
            <p> designed by Kgotsofatso Pholotho </p>
        </div>
    </div>
</footer>