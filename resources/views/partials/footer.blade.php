
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
                    Based in Kempton Park, Sehunane Attorneys Inc is a 100% Black-Owned firm dedicated to delivering high-caliber legal solutions. 
                    From complex litigation and corporate advisory to specialized family and criminal law,
                    our multi-disciplinary team provides the comprehensive expertise needed to protect your interests across every field of law.
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
                    <li><a href="{{ route('services.constitutional') }}" class="hover:text-[var(--primary-foreground)] transition-colors">Constitutional Litigation</a></li>
                    <li><a href="{{ route('services.commercial') }}" class="hover:text-[var(--primary-foreground)] transition-colors">Commercial Law</a></li>
                    <li><a href="{{ route('services.litigation') }}" class="hover:text-[var(--primary-foreground)] transition-colors">Civil Litigation</a></li>
                    <li><a href="{{ route('services.criminal') }}" class="hover:text-[var(--primary-foreground)] transition-colors">Criminal Law</a></li>
                    <li><a href="{{ route('services.labour') }}" class="hover:text-[var(--primary-foreground)] transition-colors">Labour Law</a></li>
                    <li><a href="{{ route('services.family-law') }}" class="hover:text-[var(--primary-foreground)] transition-colors">Family Law</a></li>
                    <li><a href="{{ route('services.divorce-law') }}" class="hover:text-[var(--primary-foreground)] transition-colors">Divorce Law</a></li>
                    <li><a href="{{ route('services.decease-estate') }}" class="hover:text-[var(--primary-foreground)] transition-colors">Deceased &amp; Estate Planning</a></li>
                    <li><a href="{{ route('services.property') }}" class="hover:text-[var(--primary-foreground)] transition-colors">Property &amp; Conveyancing</a></li>
                    <li><a href="{{ route('services.third-party') }}" class="hover:text-[var(--primary-foreground)] transition-colors">Third Party Claims</a></li>
                </ul>
            </div>

            <div>
                <h3 class="font-semibold mb-4">Contact Us</h3>
                <ul class="space-y-3 text-sm">
                    <li class="flex items-start gap-3">
                        <i data-lucide="map-pin" class="h-4 w-4 mt-0.5 flex-shrink-0"></i>
                        <span class="text-[var(--primary-foreground)]/80">11 Monument Road, Closemore Building, Office 302A Second Floor, Kempton Park, Gauteng, 1619</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i data-lucide="phone" class="h-4 w-4 flex-shrink-0"></i>
                        <a href="tel:+27711968185" class="hover:text-[var(--accent)] transition-colors">071 196 8185</a>
                        <span class="opacity-40">/</span>
                        <a href="tel:+27762733139" class="hover:text-[var(--accent)] transition-colors">076 273 3139</a>
                    </li>
                    <li class="flex items-center gap-3">
                        <i data-lucide="mail" class="h-4 w-4 flex-shrink-0"></i>
                        <a href="mailto:info@sehunaneattorneys.co.za" class="hover:text-[var(--accent)] transition-colors">
                            info@sehunaneattorneys.co.za
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
