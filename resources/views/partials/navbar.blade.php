<header class="sticky top-0 z-50 shadow-md">
    <div class="bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-14 pt-4 pb-6 flex items-center justify-between">
            
            <!-- Logo (LEFT) -->
            <div class="flex-shrink-0">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('images/company_logo-removebg-preview (1).png') }}" 
                         alt="Logo" 
                         class="h-16 w-auto">
                </a>
            </div>

            <!-- Right Side -->
            <div class="hidden lg:flex items-center gap-10 text-[var(--primary-text)]">
                <div class="flex items-center gap-3">
                    <i data-lucide="phone" class="w-5 h-5"></i>
                    <span class="font-bold text-lg">0603561780</span>
                </div>

                <div class="h-6 w-px bg-[var(--primary-text)] opacity-40"></div>

                <div class="flex items-center gap-3">
                    <i data-lucide="mail" class="w-5 h-5"></i>
                    <span class="font-bold text-lg">info@sehunaneattorneys.co.za</span>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div class="lg:hidden">
                <button id="toggleOpen" class="p-3">
                    <i data-lucide="menu" class="w-8 h-8 text-[var(--primary-text)]"></i>
                </button>
            </div>

        </div>
    </div>
    <nav class="lg:absolute  lg:left-1/2 lg:-translate-x-1/2 lg:-bottom-17 z-50 w-full max-w-6xl">
        <div id="collapseMenu" class="max-lg:hidden lg:!block max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-50 max-lg:before:inset-0 max-lg:before:z-50">
            
            <button id="toggleClose" class="lg:hidden fixed top-4 right-4 z-[100] rounded-full bg-white w-10 h-10 flex items-center justify-center">
                <i data-lucide="x" class="w-6 h-6 text-black"></i>
            </button>

            <ul class="min-h-[90px] bg-[#212529] lg:flex lg:items-stretch lg:w-full
                max-lg:fixed max-lg:bg-white max-lg:w-2/3 max-lg:top-0 max-lg:left-[-10px] max-lg:p-6 max-lg:h-full max-lg:shadow-md z-50">

                @php
                    $navLinks = [
                        ['name' => 'Home', 'path' => '/'],
                        ['name' => 'About', 'path' => '/about'],
                        ['name' => 'Our Team', 'path' => '/team'],
                        ['name' => 'Services', 'path' => '#', 'is_dropdown' => true],
                        ['name' => 'Case Studies', 'path' => '/case-studies'],
                        // ['name' => 'Legal Insights', 'path' => '/insights'],
                        ['name' => 'Contact Us', 'path' => '/contact'],
                    ];
                    $currentUrl = rtrim(url()->current(), '/');
                @endphp

                @foreach ($navLinks as $item)
                    @php
                        $itemUrl = rtrim(url($item['path']), '/');
                        $isActive = ($currentUrl === $itemUrl);
                    @endphp

                    <li class="lg:flex-1 text-center lg:border-r lg:border-white/20 last:border-r-0 flex group relative">

                        @if(isset($item['is_dropdown']) && $item['is_dropdown'])

                            <button type="button" 
                                class=" service-toggle relative w-full px-8 py-5 flex items-center justify-center text-[15px] font-medium transition-all duration-500 overflow-hidden text-white max-lg:text-[#3d251e]
                                before:absolute before:left-0 before:top-0 before:z-0 before:h-full before:w-0 before:bg-[#212529] before:transition-all before:duration-500 
                                hover:text-white hover:before:w-full">

                                <span class="relative z-10 flex items-center">
                                    {{ $item['name'] }}
                                    <i data-lucide="chevron-down" class="ml-2 w-4 h-4 transition-transform lg:group-hover:rotate-180"></i>
                                </span>

                            </button>

                            <ul class="service-dropdown absolute left-0 top-full hidden lg:group-hover:block bg-[#212529] min-w-[240px] shadow-2xl border-t-2 border-[#b38b2d] z-50">

                                @foreach ([
                                    ['route' => 'services.litigation', 'label' => 'Civil Litigation'],
                                    ['route' => 'services.commercial', 'label' => 'Commercial Law'],
                                    ['route' => 'services.constitutional', 'label' => 'Constitutional Litigation'],
                                    ['route' => 'services.criminal', 'label' => 'Criminal Law'],
                                    ['route' => 'services.labour', 'label' => 'Labour Law'],
                                    ['route' => 'services.property', 'label' => 'Property & Conveyancing'],
                                    ['route' => 'services.third-party', 'label' => 'Third Party Claims'],
                                    ['route' => 'services.family-law', 'label' => 'Family Law'],
                                    ['route' => 'services.divorce-law', 'label' => 'Divorce Law'],
                                    ['route' => 'services.decease-estate', 'label' => 'Decease & Estate Planning'],
                                ] as $service)

                                    @php 
                                        $subActive = (rtrim(url()->current(), '/') === rtrim(route($service['route']), '/'));
                                    @endphp

                                    <li>
                                        <a href="{{ route($service['route']) }}" 
                                        class="text-white block px-6 py-3 border-b border-white/5 hover:bg-[#BB942F] text-sm transition-colors {{ $subActive ? 'bg-[#BB942F]' : '' }}">
                                            {{ $service['label'] }}
                                        </a>
                                    </li>

                                @endforeach

                            </ul>

                        @else

                            <a href="{{ url($item['path']) }}"
                            class="relative w-full px-8 py-5 flex items-center justify-center text-[15px] font-medium transition-all duration-500 overflow-hidden
                            {{ $isActive 
                                ? 'bg-[#b38b2d] text-white' 
                                : 'text-white max-lg:text-[#3d251e] before:absolute before:left-0 before:top-0 before:z-0 before:h-full before:w-0 before:bg-[#BB942F] before:transition-all before:duration-500 hover:text-white hover:before:w-full' }}">

                                <span class="relative z-10">{{ $item['name'] }}</span>

                            </a>

                        @endif

                    </li>

                @endforeach

            </ul>
        </div>
    </nav>
    
</header>
<script>
const toggleOpen = document.getElementById('toggleOpen');
const toggleClose = document.getElementById('toggleClose');
const collapseMenu = document.getElementById('collapseMenu');

function toggleMenu() {
    collapseMenu.classList.toggle('max-lg:hidden');
}


if (toggleOpen) toggleOpen.addEventListener('click', toggleMenu);
if (toggleClose) toggleClose.addEventListener('click', toggleMenu);


document.querySelectorAll('.service-toggle').forEach(button => {
    button.addEventListener('click', () => {
        if (window.innerWidth < 1024) {
            const dropdown = button.parentElement.querySelector('.service-dropdown');

            if (!dropdown) return;

            dropdown.classList.toggle('hidden');
        }
    });
});
</script>