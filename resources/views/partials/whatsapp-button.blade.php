
<div id="contactWidget" class="fixed bottom-6 right-6 flex flex-col items-center gap-4 z-50">
    
    <div id="menuOptions" class="flex flex-col gap-3 transition-all duration-300 opacity-0 translate-y-10 pointer-events-none">
        
        <a href="tel:+27603561780" class="w-14 h-14 bg-[#14e287] rounded-full shadow-lg flex items-center justify-center hover:scale-110 transition-transform duration-200">
            <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                <path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
            </svg>
        </a>

        <a href="https://wa.me/27603561780" class="w-14 h-14 bg-[#55eb7c] rounded-full shadow-lg flex items-center justify-center hover:scale-110 transition-transform duration-200">
            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.335-1.662c1.72.937 3.658 1.43 5.632 1.43h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
            </svg>
        </a>
    </div>

    <button id="toggleBtn" class="w-16 h-16 bg-[#8dd396] rounded-full shadow-2xl flex items-center justify-center transition-all duration-300 active:scale-90 animate-subtle-float">
        <div id="chatIcon" class="absolute transition-all duration-300 scale-100 opacity-100">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-square-more-icon lucide-message-square-more"><path d="M22 17a2 2 0 0 1-2 2H6.828a2 2 0 0 0-1.414.586l-2.202 2.202A.71.71 0 0 1 2 21.286V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2z"/><path d="M12 11h.01"/><path d="M16 11h.01"/><path d="M8 11h.01"/></svg>
        </div>
        
        <div id="closeIcon" class="absolute transition-all duration-300 scale-0 opacity-0 rotate-[-90deg]">
            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </div>
    </button>
</div>

<style>
    /* Subtle Floating Animation for the Main Button Background */
    @keyframes subtle-float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-8px); }
    }
    .animate-subtle-float {
        animation: subtle-float 3s ease-in-out infinite;
    }

    /* Helper Classes for State */
    .menu-open {
        opacity: 1 !important;
        translate: 0 0 !important;
        pointer-events: auto !important;
    }
    .icon-hidden {
        opacity: 0 !important;
        scale: 0 !important;
    }
    .icon-visible {
        opacity: 1 !important;
        scale: 1 !important;
        rotate: 0deg !important;
    }
</style>

<script>
    const toggleBtn = document.getElementById('toggleBtn');
    const menuOptions = document.getElementById('menuOptions');
    const chatIcon = document.getElementById('chatIcon');
    const closeIcon = document.getElementById('closeIcon');

    toggleBtn.addEventListener('click', () => {
        // Toggle the popup menu
        menuOptions.classList.toggle('menu-open');
        
        // Switch between Chat and Close icons
        chatIcon.classList.toggle('icon-hidden');
        closeIcon.classList.toggle('icon-visible');

        // Stop the floating animation when open so it's easier to click
        toggleBtn.classList.toggle('animate-subtle-float');
    });

    // Optional: Close if user clicks anywhere else on the page
    document.addEventListener('click', (event) => {
        if (!document.getElementById('contactWidget').contains(event.target)) {
            menuOptions.classList.remove('menu-open');
            chatIcon.classList.remove('icon-hidden');
            closeIcon.classList.remove('icon-visible');
            toggleBtn.classList.add('animate-subtle-float');
        }
    });
</script>