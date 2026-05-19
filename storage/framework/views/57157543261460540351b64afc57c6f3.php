<?php if (isset($component)) { $__componentOriginalaa758e6a82983efcbf593f765e026bd9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaa758e6a82983efcbf593f765e026bd9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => $__env->getContainer()->make(Illuminate\View\Factory::class)->make('mail::message'),'data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('mail::message'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
# Thank you for reaching out to Sehunane Attorneys Inc.

Dear <?php echo new \Illuminate\Support\EncodedHtmlString($name); ?>,

This email serves as an automated confirmation that we have securely received your legal inquiry regarding **"RE: <?php echo new \Illuminate\Support\EncodedHtmlString($subject); ?>"**.

### Your Submission Summary:
Our consulting staff has queued your message details for legal evaluation. One of our legal professionals or administration specialists will review your submission and follow up with you shortly during standard operational business hours.

If your legal matter requires immediate attention or urgent intervention, please do not hesitate to contact our Kempton Park headquarters directly via our active lines at +27 60 356 1780.

Kind Regards,  
**Sehunane Attorneys Inc Team**  
*Kempton Park Office*
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaa758e6a82983efcbf593f765e026bd9)): ?>
<?php $attributes = $__attributesOriginalaa758e6a82983efcbf593f765e026bd9; ?>
<?php unset($__attributesOriginalaa758e6a82983efcbf593f765e026bd9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaa758e6a82983efcbf593f765e026bd9)): ?>
<?php $component = $__componentOriginalaa758e6a82983efcbf593f765e026bd9; ?>
<?php unset($__componentOriginalaa758e6a82983efcbf593f765e026bd9); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\sehunane Att\resources\views/emails/contact-auto-reply.blade.php ENDPATH**/ ?>