<div class="animate-pulse min-h-screen bg-[#fcfcfc]">
    
    <!-- HERO SKELETON (Matches 350px height and dark layout colors) -->
    <section class="relative h-[350px] flex items-center overflow-hidden">
        <div class="container mx-auto px-4 relative z-10 space-y-4">
            <!-- Breadcrumbs -->
            <div class="flex items-center space-x-2">
                <div class="bg-white/10 h-4 w-12 rounded"></div>
                <div class="bg-white/10 h-3 w-3 rounded-full"></div>
                <div class="bg-white/10 h-4 w-16 rounded"></div>
                <div class="bg-white/10 h-3 w-3 rounded-full"></div>
                <div class="bg-white/20 h-4 w-28 rounded"></div>
            </div>
            <!-- Title Lines -->
            <div class="space-y-2">
                <div class="bg-white/20 h-10 w-3/4 md:w-1/2 rounded-lg"></div>
                <div class="bg-white/20 h-10 w-1/2 md:w-1/3 rounded-lg"></div>
            </div>
        </div>
    </section>

    <!-- CONTENT WRAPPER -->
    <div class="container mx-auto px-4 py-16 lg:py-24">
        <div class="flex flex-col lg:flex-row gap-16">
            
            <!-- LEFT SIDEBAR SKELETON (lg:w-1/3) -->
            <aside class="lg:w-1/3 space-y-8">
                
                <!-- Practice Areas Menu Skeleton -->
                <div class="bg-white rounded-2xl border border-slate-100 overflow-hidden shadow-sm">
                    <!-- Menu Header -->
                    <div class="p-6 bg-slate-200 h-16 flex items-center">
                        <div class="bg-slate-300 h-6 w-40 rounded"></div>
                    </div>
                    <!-- Menu Items -->
                    <div class="p-4 space-y-3">
                        @for ($i = 0; $i < 8; $i++)
                            <div class="h-12 bg-slate-100 rounded-xl w-full"></div>
                        @endfor
                    </div>
                </div>

                <!-- Dynamic Contact Card Skeleton -->
                <div class="bg-[#241914] rounded-2xl p-8 space-y-6">
                    <div class="bg-white/10 h-7 w-3/4 rounded"></div>
                    <div class="space-y-2">
                        <div class="bg-white/5 h-4 w-full rounded"></div>
                        <div class="bg-white/5 h-4 w-5/6 rounded"></div>
                    </div>
                    <div class="bg-slate-300/20 h-12 w-full rounded-xl"></div>
                </div>

            </aside>

            <!-- RIGHT MAIN CONTENT SKELETON (lg:w-2/3) -->
            <main class="lg:w-2/3 space-y-12">
                
                <!-- Overview Content Block -->
                <div class="space-y-4">
                    <div class="bg-slate-200 h-4 w-20 rounded"></div>
                    <div class="bg-slate-200 h-8 w-5/6 rounded-md mb-6"></div>
                    
                    <!-- Paragraph lines block 1 -->
                    <div class="space-y-3 pt-2">
                        <div class="bg-slate-100 h-4 w-full rounded"></div>
                        <div class="bg-slate-100 h-4 w-full rounded"></div>
                        <div class="bg-slate-100 h-4 w-11/12 rounded"></div>
                        <div class="bg-slate-100 h-4 w-3/4 rounded"></div>
                    </div>

                    <!-- Paragraph lines block 2 -->
                    <div class="space-y-3 pt-4">
                        <div class="bg-slate-100 h-4 w-full rounded"></div>
                        <div class="bg-slate-100 h-4 w-5/6 rounded"></div>
                    </div>
                </div>

                <!-- Specialized Services Grid Skeleton -->
                <div class="bg-white p-8 md:p-12 rounded-3xl border border-slate-100 space-y-8">
                    <!-- Section header ribbon -->
                    <div class="flex items-center gap-4">
                        <div class="bg-slate-200 h-6 w-36 rounded"></div>
                        <div class="h-px flex-grow bg-slate-100"></div>
                    </div>

                    <!-- Offerings Grid Layout (2 columns) -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        @for ($i = 0; $i < 4; $i++)
                            <div class="flex gap-4">
                                <!-- Circle Check Icon Placeholder -->
                                <div class="w-12 h-12 flex-shrink-0 bg-slate-100 rounded-xl"></div>
                                <!-- Text content placeholders -->
                                <div class="flex-grow space-y-2.5 pt-1">
                                    <div class="bg-slate-200 h-5 w-1/2 rounded"></div>
                                    <div class="space-y-1.5">
                                        <div class="bg-slate-100 h-3.5 w-full rounded"></div>
                                        <div class="bg-slate-100 h-3.5 w-5/6 rounded"></div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>

                <!-- Bottom Features Grid (2 columns layout) -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 border-t border-slate-100 pt-12">
                    <div class="space-y-3">
                        <div class="bg-slate-200 h-5 w-2/3 rounded"></div>
                        <div class="bg-slate-100 h-3.5 w-full rounded"></div>
                        <div class="bg-slate-100 h-3.5 w-4/5 rounded"></div>
                    </div>
                    <div class="space-y-3">
                        <div class="bg-slate-200 h-5 w-1/2 rounded"></div>
                        <div class="bg-slate-100 h-3.5 w-full rounded"></div>
                        <div class="bg-slate-100 h-3.5 w-11/12 rounded"></div>
                    </div>
                </div>

                <!-- Bottom Testimonial Block Callout -->
                <div class="p-8 rounded-3xl bg-slate-50 border-l-4 border-slate-300 space-y-3">
                    <div class="bg-slate-200/60 h-4 w-full rounded"></div>
                    <div class="bg-slate-200/60 h-4 w-5/6 rounded"></div>
                </div>

            </main>

        </div>
    </div>
</div>