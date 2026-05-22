<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    
    <meta name="google-site-verification" content="pOnpcic50oFPhvEZE-xBxk4hh8NvkzIYj8LEI4Ex7UE" />

    <title><?php echo $__env->yieldContent('title', 'Sehunane Attorneys Inc | Full-Service Law Firm in Kempton Park'); ?></title>

    <meta name="description" content="<?php echo $__env->yieldContent('meta_description', 'Sehunane Attorneys Inc is a 100% Black-Owned law firm in Kempton Park. We provide comprehensive legal services in Labour, Criminal, Family, and Corporate Law to protect your future.'); ?>">

    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?php echo e(url()->current()); ?>">

    <meta property="og:title" content="<?php echo $__env->yieldContent('title', 'Sehunane Attorneys Inc | Legal Excellence'); ?>">
    <meta property="og:description" content="Comprehensive legal solutions in Kempton Park. 100% Black-Owned and committed to justice.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo e(url()->current()); ?>">
    <meta property="og:image" content="">
    
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $__env->yieldContent('title', 'Sehunane Attorneys Inc'); ?>">

    <link rel="icon" href="">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@400;700&family=Commissioner:wght@400;700&family=Cormorant+Upright:wght@500;700&family=Lora:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <?php echo $__env->yieldPushContent('styles'); ?>
    
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "LegalService",
          "name": "Sehunane Attorneys Inc",
          "description": "Full-service law firm in Kempton Park specializing in Labour, Criminal, Family, Divorce, and Corporate law.",
          "url": "<?php echo e(url('/')); ?>",
          "logo": "",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "11 Monument Road, 302A Closemore Building ",
            "addressLocality": "Kempton Park",
            "addressRegion": "Gauteng",
            "postalCode": "1620",
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
          "knowsAbout": ["Labour Law", "Criminal Law", "Civil Litigation", "Family Law", "Corporate Law"]
        }
    </script>    
    
<body>
    <div class="flex flex-col min-h-screen">
        <?php echo $__env->make('partials.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <main>
            <?php echo $__env->yieldContent('content'); ?>
            
        </main>
        <?php echo $__env->make('modals.contact', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php echo $__env->make('partials.whatsapp-button', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>
    
    

    

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <?php echo $__env->yieldPushContent('scripts'); ?>
    <script>
        
        AOS.init({
            duration: 1000, // Speed of animation (1 second)
            once: true,     // Animation only happens once (stays visible)
            offset: 100     // Triggers when element is 100px into view
          });
        lucide.createIcons();
        const openBtn = document.getElementById('openConsultationModal');
        const closeBtn = document.getElementById('closeConsultationModal');
        const modal = document.getElementById('consultationModal');
    
        openBtn?.addEventListener('click', () => {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        });
    
        closeBtn?.addEventListener('click', () => {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        });
    
        modal?.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }
        });


    </script>
</body>
</html>


<?php /**PATH C:\xampp\htdocs\sehunane Att\resources\views/layouts/app.blade.php ENDPATH**/ ?>