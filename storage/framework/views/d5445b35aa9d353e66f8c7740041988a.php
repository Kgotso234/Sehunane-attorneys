<div
    id="consultationModal"
    class="fixed inset-0 z-50 hidden bg-black/60 backdrop-blur-sm"
>
    <!-- Center wrapper -->
    <div class="flex h-full w-full items-center justify-center p-4">

        <!-- Modal box -->
        <div
            class="relative w-full max-w-4xl bg-[var(--muted)] rounded-2xl shadow-xl"
        >

            <!-- Header -->
            <div class="flex items-center justify-between px-6 py-4 border-b">
                <h2 class="text-xl font-semibold text-[var(--primary)]">
                    Schedule a Consultation
                </h2>

                <button
                    type="button"
                    id="closeConsultationModal"
                    class="text-gray-400 hover:text-gray-600 text-2xl leading-none"
                >
                    &times;
                </button>
            </div>

            <!-- Body (scrolls if needed) -->
            <div class="max-h-[75vh] overflow-y-auto p-6">
                <div class="max-w-3xl mx-auto">

                    <form
                        id="contactForm"
                        class="space-y-5"
                        onsubmit="handleSubmit(event)"
                    >
                        <?php echo csrf_field(); ?>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="font-medium">Full Name *</label>
                                <input type="text" name="name" required
                                    class="w-full mt-1 border rounded-lg px-4 py-2 focus:ring-2 focus:ring-[var(--accent)]">
                            </div>

                            <div>
                                <label class="font-medium">Email Address *</label>
                                <input type="email" name="email" required
                                    class="w-full mt-1 border rounded-lg px-4 py-2 focus:ring-2 focus:ring-[var(--accent)]">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="font-medium">Phone Number</label>
                                <input type="tel" name="phone"
                                    class="w-full mt-1 border rounded-lg px-4 py-2 focus:ring-2 focus:ring-[var(--accent)]">
                            </div>

                            <div>
                                <label class="font-medium">Subject *</label>
                                <input type="text" name="subject" required
                                    class="w-full mt-1 border rounded-lg px-4 py-2 focus:ring-2 focus:ring-[var(--accent)]">
                            </div>
                        </div>

                        <div>
                            <label class="font-medium">Your Message *</label>
                            <textarea name="message" required
                                class="w-full mt-1 border rounded-lg px-4 py-2 min-h-[120px] focus:ring-2 focus:ring-[var(--accent)]"></textarea>
                        </div>

                        <button
                            type="submit"
                            class="w-full bg-[var(--accent)] text-white font-semibold py-3 rounded-lg hover:opacity-90 transition"
                        >
                            Send Message
                        </button>

                    </form>

                </div>
            </div>

        </div>

    </div>
</div>
<?php /**PATH C:\xampp\htdocs\sehunane Att\resources\views/modals/contact.blade.php ENDPATH**/ ?>