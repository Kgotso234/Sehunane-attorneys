<!DOCTYPE html>
<html lang="en">
<head>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="google-site-verification" content="pOnpcic50oFPhvEZE-xBxk4hh8NvkzIYj8LEI4Ex7UE" />
    
    <title><?php echo $__env->yieldContent('title', 'Sehunane Attorneys Inc. | Corporate, Criminal & Family Law Kempton Park'); ?></title>

    <meta name="description" content="<?php echo $__env->yieldContent('meta_description', 'Expert legal services in Kempton Park. Sehunane Attorneys Inc specializes in Labour, Criminal, Civil, Corporate, Family, and Property law. Book a consultation today.'); ?>">
    <meta name="keywords" content="Attorneys Kempton Park, Labour Law, Criminal Defense, Family Law, Divorce Lawyer, Property Law, Civil Litigation South Africa">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@0,100;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,700;1,800;1,900&family=Commissioner:wght@100..900&family=Cormorant+Upright:wght@300;400;500;600;700&family=Lora:ital,wght@0,400..700;1,400..700&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css']); ?>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>
    
    
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


<?php /**PATH /home/sehunac9n8g7/public_html/public_html/resources/views/layouts/app.blade.php ENDPATH**/ ?>