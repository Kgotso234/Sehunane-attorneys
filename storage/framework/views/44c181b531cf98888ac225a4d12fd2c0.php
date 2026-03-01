

<?php $__env->startSection('title', 'Contact Us | Sehunane Attorneys Inc Kempton Park Office'); ?>
<?php $__env->startSection('meta_description', 'Need legal advice? Contact Sehunane Attorneys Inc today. Visit our Kempton Park office or schedule a consultation online for expert legal assistance.'); ?>

<?php $__env->startSection('content'); ?>
    <?php if(session('success')): ?>
        <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>
    <div class="min-h-screen">
        
        <section class="relative h-[250px] flex items-center">
            <div class="absolute inset-0 overflow-hidden">
                <img src="<?php echo e(asset('images/law-firm-1.jpg')); ?>" alt="about-img" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-[var(--gradient-hero)] opacity-70"></div>
            </div>
            <div class="container mx-auto px-4 relative z-10">
                <ul class="flex items-center justify-center space-x-4 mt-4">
                  <li class="text-[var(--primary-foreground)] font-bold text-[16px] cursor-pointer">
                    Home
                  </li>
                  <li>
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-slate-500 w-3 -rotate-90" viewBox="0 0 24 24">
                      <path fill-rule="evenodd"
                        d="M11.99997 18.1669a2.38 2.38 0 0 1-1.68266-.69733l-9.52-9.52a2.38 2.38 0 1 1 3.36532-3.36532l7.83734 7.83734 7.83734-7.83734a2.38 2.38 0 1 1 3.36532 3.36532l-9.52 9.52a2.38 2.38 0 0 1-1.68266.69734z"
                        clip-rule="evenodd" data-original="#000000"></path>
                    </svg>
                  </li>
                  <li class="text-[var(--primary-foreground)] font-bold text-[16px]">
                    Case Studies
                  </li>
                </ul>
                
                <h1 class=" text-center text-2xl md:text-5xl font-bold text-[var(--primary-foreground)] mb-6" data-aos="fade-down" data-aos-duration="1000">
                    Case Studies
                </h1>
            </div>
        </section>
        
        <section class="py-20 overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12">
                
                <div data-aos="fade-right">
                    <div class="bg-[var(--primary-foreground)] rounded-2xl shadow-medium p-8 border">
                        <h2 class="text-2xl font-bold text-[var(--primary)] mb-6">Send Us a Message</h2>
                        <form id="contactForm" class="space-y-6">
                            <?php echo csrf_field(); ?>
                            <div>
                                <label for="name" class="font-medium">Full Name *</label>
                                <input type="text" id="name" name="name" required placeholder="John Doe"
                                    class="w-full mt-2 border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[var(--accent)]" />
                            </div>
    
                            <div>
                                <label for="email" class="font-medium">Email Address *</label>
                                <input type="email" id="email" name="email" required placeholder="john@example.com"
                                    class="w-full mt-2 border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[var(--accent)]" />
                            </div>
                            <div>
                                <label for="phone" class="font-medium">Phone Number</label>
                                <input type="tel" id="phone" name="phone" placeholder="+27 12 345 6789"
                                    class="w-full mt-2 border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[var(--accent)]" />
                            </div>
                            <div>
                                <label for="subject" class="font-medium">Subject *</label>
                                <input type="text" id="subject" name="subject" required
                                    placeholder="e.g., Unfair Dismissal Consultation"
                                    class="w-full mt-2 border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[var(--accent)]" />
                            </div>
                            <div>
                                <label for="message" class="font-medium">Your Message *</label>
                                <textarea id="message" name="message" required
                                    placeholder="Please provide details about your case..."
                                    class="w-full mt-2 border rounded-lg px-4 py-2 min-h-[100px] focus:outline-none focus:ring-2 focus:ring-[var(--accent)]"></textarea>
                            </div>
    
                            <div class="flex flex-col sm:flex-row gap-4 mt-8">
                                <button type="submit"
                                    class="flex-1 bg-[var(--accent)] text-white font-semibold py-3 rounded-lg hover:opacity-90 transition transform active:scale-95" id="submitBtn">
                                    Send via Email
                                </button>
                        
                                <button type="button" onclick="sendToWhatsApp()"
                                    class="flex-1 bg-[#25D366] text-white font-semibold py-3 rounded-lg hover:bg-[#20BA5A] transition flex items-center justify-center gap-2 transform active:scale-95">
                                    Send via WhatsApp
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
    
                
                <div class="space-y-6">
                    
                    <div class="bg-[var(--primary-foreground)] rounded-2xl shadow-medium p-8 border" data-aos="fade-left" data-aos-delay="200">
                        <h2 class="text-2xl font-bold text-[var(--primary)] mb-6">Our Office</h2>
                        <div class="space-y-6">
                            <div class="flex item-start gap-4">
                                <i data-lucide="map-pin" class="h-6 w-6 text-[var(--accent)] mt-1"></i>
                                <div>
                                    <h3 class="font-semibold text-[var(--primary)] mb-1">Address</h3>
                                    <p class="text-[var(--muted-foreground)]">
                                        11 Monument Road<br>
                                        302A Closemore Building<br>
                                        Kempton Park, Gauteng<br>
                                        1620
                                    </p>
                                    <a href="https://maps.app.goo.gl/cuubXDoE71fhpmxm9" target="_blank" class="text-md text-[var(--accent)] hover:underline text-sm mt-2 inline-block">
                                        Get Directions →
                                    </a>
                                </div>
                            </div>
                            <div class="flex item-start gap-4">
                                <i data-lucide="phone" class="h-6 w-6 text-[var(--accent)] mt-1"></i>
                                <div>
                                    <h3 class="font-semibold text-[var(--primary)] mb-1">Phone</h3>
                                    <a href="tel:+2712345678" 
                                        class="text-[var(--muted-foreground)] hover:text-[var(--accent)] transition-colors">
                                        +27 12 345 6789
                                    </a>
                                </div>
                            </div>
                            <div class="flex item-start gap-4">
                                <i data-lucide="mail" class="h-6 w-6 text-[var(--accent)] mb-1"></i>
                                <div>
                                    <h3 class="font-semibold text-[var(--primary)]">Email</h3>
                                    <a href="mailto:info@sehunaneattorneys.co.za"
                                        class="text-[var(--muted-foreground)] hover:text-[var(--accent)] transition-colors">
                                        info@sehunaneattorneys.co.za
                                    </a>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <i data-lucide="clock" class="h-6 w-6 text-[var(--accent)] mt-1"></i>
                                <div>
                                    <h3 class="font-semibold text-[var(--primary)] mb-1">Office Hours</h3>
                                    <div class="text-[var(--muted-foreground)] space-y-1">
                                        <p>Monday - Friday: 8:00 AM - 5:00 PM</p>
                                        <p>Saturday: 9:00 AM - 1:00 PM</p>
                                        <p>Sunday: Closed</p>
                                        <p class="text-sm text-[var(--accent)] mt-2 italic">Emergency consultations available by appointment</p>
                                    </div>
                                </div>
                            </div>
                            <!---->
                            <!--<div class="bg-[var(--muted)] rounded-2xl shadow-medium p-8 border" data-aos="fade-left" data-aos-delay="400">-->
                            <!--    <h3 class="text-xl font-bold text-primary mb-4">What to Expect</h3>-->
                            <!--    <ul class="space-y-3 text-[var(--muted-foreground)]">-->
                            <!--        <li class="flex items-start gap-2"><span class="text-[var(--accent)] font-bold">•</span>We'll respond within 24 hours</li>-->
                            <!--        <li class="flex items-start gap-2"><span class="text-[var(--accent)] font-bold">•</span>Consultations are confidential</li>-->
                            <!--        <li class="flex items-start gap-2"><span class="text-[var(--accent)] font-bold">•</span>Bring any relevant documents</li>-->
                            <!--        <li class="flex items-start gap-2"><span class="text-[var(--accent)] font-bold">•</span>We’ll assess your case honestly</li>-->
                            <!--        <li class="flex items-start gap-2"><span class="text-[var(--accent)] font-bold">•</span>No obligation after consultation</li>-->
                            <!--    </ul>-->
                            <!--</div>-->
                        </div>
                    </div> 
    
                    
                </div>
            </div>
        </div>
    </section>
    
    
    <section class="py-20 bg-[var(--muted)] overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto" data-aos="zoom-in-up">
                <h2 class="text-3xl font-bold text-[var(--primary)] mb-8 text-center">Find Us</h2>
                <div class="rounded-lg overflow-hidden shadow-medium h-[400px] bg-[var(--background)]">
                    <iframe src="https://www.google.com/maps/embed?pb=!4v1762641861187!6m8!1m7!1smGMT31tkEX559zWKVvlR6A!2m2!1d-26.10304098468086!2d28.23234625263074!3f321.5256585026408!4f-1.614283502728867!5f0.7820865974627469"
                            width="100%" 
                            height="100%" 
                            style="border:1;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"
                    ></iframe>
                </div>
            </div>
        </div>
    </section>
    </div>
        
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
        <script>
            // --- 1. WHATSAPP LOGIC ---
            function sendToWhatsApp() {
                const name = document.getElementById('name').value.trim();
                const subject = document.getElementById('subject').value.trim();
                const message = document.getElementById('message').value.trim();
                const phone = document.getElementById('phone').value.trim();
    
                if (!name || !subject || !message) {
                    Swal.fire({ icon: 'warning', title: 'Missing Info', text: 'Please fill in Name, Subject, and Message first!' });
                    return;
                }
    
                const whatsappNumber = "27720621529";
                const text = `*New Consultation Request*%0A` +
                             `*From:* ${encodeURIComponent(name)}%0A` +
                             `*Subject:* ${encodeURIComponent(subject)}%0A` +
                             `*Phone:* ${encodeURIComponent(phone)}%0A` +
                             `*Message:* ${encodeURIComponent(message)}`;
    
                window.open(`https://wa.me/${whatsappNumber}?text=${text}`, '_blank');
            }
    
            // --- 2. AJAX EMAIL LOGIC ---
            document.getElementById('contactForm').addEventListener('submit', function(e) {
                e.preventDefault();
                
                const form = this;
                const submitBtn = document.getElementById('submitBtn');
                const formData = new FormData(form);
    
                // Disable button and show loading
                submitBtn.disabled = true;
                submitBtn.innerText = 'Sending...';
    
                fetch("<?php echo e(route('contact.send')); ?>", {
                    method: "POST",
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                    }
                })
                .then(response => response.json())
                .then(data => {
                    submitBtn.disabled = false;
                    submitBtn.innerText = 'Send via Email';
    
                    if(data.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Message Sent!',
                            text: 'We will get back to you within 24 hours.',
                            timer: 4000,
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false
                        });
                        form.reset();
                    } else {
                        Swal.fire({ icon: 'error', title: 'Oops...', text: 'Something went wrong. Please try again.' });
                    }
                })
                .catch(error => {
                    submitBtn.disabled = false;
                    submitBtn.innerText = 'Send via Email';
                    console.error('Error:', error);
                    Swal.fire({ icon: 'error', title: 'Error', text: 'Connection failed. Check your internet.' });
                });
            });
        </script>
    <?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/sehunac9n8g7/public_html/resources/views/pages/contact.blade.php ENDPATH**/ ?>