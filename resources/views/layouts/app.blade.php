<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <meta name="google-site-verification" content="pOnpcic50oFPhvEZE-xBxk4hh8NvkzIYj8LEI4Ex7UE" />
    
        <title>@yield('title', 'Sehunane Attorneys Inc | Full-Service Law Firm in Kempton Park')</title>
    
        <meta name="description" content="@yield('meta_description', 'Sehunane Attorneys Inc is a 100% Black-Owned law firm in Kempton Park. We provide comprehensive legal services in Labour, Criminal, Family, and Corporate Law to protect your future.')">
    
        <meta name="robots" content="index, follow">
        <link rel="canonical" href="{{ url()->current() }}">
        <meta property="og:title" content="@yield('title', 'Sehunane Attorneys Inc | Legal Excellence')">
        <meta property="og:description" content="Comprehensive legal solutions in Kempton Park. 100% Black-Owned and committed to justice.">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image" content="">
        
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="@yield('title', 'Sehunane Attorneys Inc')">
    
        <link rel="icon" type="image/png" href="/favicon.png">
    
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@400;700&family=Commissioner:wght@400;700&family=Cormorant+Upright:wght@500;700&family=Lora:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        @stack('styles')
        
        <script type="application/ld+json">
            {
              "@context": "https://schema.org",
              "@type": "LegalService",
              "name": "Sehunane Attorneys Inc",
              "description": "Full-service law firm in Kempton Park specializing in Labour, Criminal, Family, Divorce, and Corporate law.",
              "url": "{{ url('/') }}",
              "logo": "{{ asset('/favicon.png') }}",
              "address": {
                "@type": "PostalAddress",
                "streetAddress": "11 Monument Road, 302A Closemore Building, Office 302A Second Floor ",
                "addressLocality": "Kempton Park",
                "addressRegion": "Gauteng",
                "postalCode": "1619",
                "addressCountry": "South Africa"
              },
              "geo": {
                "@type": "GeoCoordinates",
                "latitude": "-26.10023",
                "longitude": "28.23137"
              },
              "telephone": "+27603561780",
              "email": "info@sehunaneattorneys.co.za",
              "priceRange": "$$",
              "areaServed": "Kempton Park, Gauteng",
              "knowsAbout": [ 
                "Labour Law", 
                "Decease and Estate Planning", 
                "Divorce Law",
                "Civil Litigation", 
                "Criminal Law", 
                "Family Law", 
                "Corporate Law" 
            ]
    }
        </script> 
    </head>
        
    <body>
        <div class="flex flex-col min-h-screen">
            @include('partials.navbar')
    
            <main>
                @yield('content')
                
            </main>
            @include('modals.contact')
            @include('partials.footer')
            @include('partials.whatsapp-button')
        </div>
        
        
    
        
    
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://unpkg.com/lucide@latest"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        
        @stack('scripts')
        <script>
            window.addEventListener('load', function () {
            
                const skeleton = document.getElementById('page-skeleton');
                const content = document.getElementById('page-content');
            
                setTimeout(() => {
            
                    // 1. Show real content FIRST
                    skeleton?.classList.add('hidden');
                    content?.classList.remove('hidden');
            
                    // 2. Wait for browser to paint layout
                    requestAnimationFrame(() => {
            
                        // 3. NOW initialize AOS (after content is visible)
                        if (window.AOS) {
                            AOS.init({
                                duration: 1000,
                                once: true,
                                offset: 100
                            });
            
                            AOS.refreshHard();
                        }
            
                        // 4. Icons
                        if (window.lucide) {
                            lucide.createIcons();
                        }
            
                    });
            
                }, 700);
            
                // Modal logic (safe to run immediately)
                const openBtn = document.getElementById('openConsultationModal');
                const closeBtn = document.getElementById('closeConsultationModal');
                const modal = document.getElementById('consultationModal');
            
                openBtn?.addEventListener('click', () => {
                    modal?.classList.remove('hidden');
                    modal?.classList.add('flex');
                });
            
                closeBtn?.addEventListener('click', () => {
                    modal?.classList.add('hidden');
                    modal?.classList.remove('flex');
                });
            
                modal?.addEventListener('click', (e) => {
                    if (e.target === modal) {
                        modal.classList.add('hidden');
                        modal.classList.remove('flex');
                    }
                });
            
            });
            </script>
    </body>
</html>


