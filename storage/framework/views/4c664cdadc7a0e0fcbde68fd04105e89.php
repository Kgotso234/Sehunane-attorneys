<div class="animate-pulse">

    <!-- HERO HEADER -->
    <section class="relative h-[200px] overflow-hidden">
        <div class="absolute inset-0 skeleton"></div>

        <div class="container mx-auto px-4 relative z-10 h-full flex items-center justify-center">
            <div class="skeleton h-10 w-40 rounded-md"></div>
        </div>
    </section>

    <!-- OUR STORY -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 max-w-6xl mx-auto">

            <div class="text-center mb-16">
                <div class="skeleton h-10 w-64 mx-auto mb-4"></div>
                <div class="skeleton h-1 w-32 mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                <!-- IMAGE -->
                <div class="relative">
                    <div class="skeleton h-[500px] w-full rounded-2xl"></div>
                </div>

                <!-- TEXT -->
                <div class="space-y-6">

                    <div class="skeleton h-6 w-24 rounded-full"></div>

                    <div class="space-y-3">
                        <div class="skeleton h-4 w-full"></div>
                        <div class="skeleton h-4 w-11/12"></div>
                        <div class="skeleton h-4 w-5/6"></div>
                        <div class="skeleton h-4 w-4/5"></div>
                    </div>

                    <div class="flex items-center gap-4 pt-6">
                        <div class="skeleton w-12 h-12 rounded-full"></div>
                        <div class="space-y-2">
                            <div class="skeleton h-4 w-40"></div>
                            <div class="skeleton h-3 w-56"></div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- MISSION / VISION / VALUES -->
    <section class="py-24 bg-gray-900">
        <div class="container mx-auto px-4">

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <?php for($i = 0; $i < 3; $i++): ?>
                    <div class="p-8 rounded-2xl border border-white/10 space-y-4">

                        <div class="skeleton w-14 h-14 rounded-lg"></div>

                        <div class="skeleton h-6 w-32"></div>

                        <div class="space-y-3">
                            <div class="skeleton h-4 w-full"></div>
                            <div class="skeleton h-4 w-11/12"></div>
                            <div class="skeleton h-4 w-4/5"></div>
                        </div>

                    </div>
                <?php endfor; ?>

            </div>

        </div>
    </section>

    <!-- LEADERSHIP -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 max-w-6xl mx-auto">

            <div class="text-center mb-12">
                <div class="skeleton h-10 w-72 mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

                <!-- IMAGE -->
                <div class="lg:col-span-5">
                    <div class="skeleton h-[550px] w-full rounded-2xl"></div>
                </div>

                <!-- TEXT -->
                <div class="lg:col-span-7 space-y-6">

                    <div class="space-y-3">
                        <div class="skeleton h-6 w-48"></div>
                        <div class="skeleton h-4 w-32"></div>
                    </div>

                    <div class="space-y-3">
                        <div class="skeleton h-4 w-full"></div>
                        <div class="skeleton h-4 w-11/12"></div>
                        <div class="skeleton h-4 w-5/6"></div>
                    </div>

                    <div class="grid grid-cols-2 gap-4 pt-6">
                        <?php for($i = 0; $i < 4; $i++): ?>
                            <div class="skeleton h-5 w-full"></div>
                        <?php endfor; ?>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- STATS -->
    <section class="py-20 bg-gray-900">
        <div class="container mx-auto px-4 text-center">

            <div class="skeleton h-10 w-64 mx-auto mb-12"></div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">

                <?php for($i = 0; $i < 3; $i++): ?>
                    <div class="flex flex-col items-center space-y-4">

                        <div class="skeleton w-40 h-40 rounded-full"></div>

                        <div class="skeleton h-6 w-32"></div>

                    </div>
                <?php endfor; ?>

            </div>

        </div>
    </section>

</div><?php /**PATH C:\xampp\htdocs\sehunane Att\resources\views/skeletons/about.blade.php ENDPATH**/ ?>