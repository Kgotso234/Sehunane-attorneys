<div class="animate-pulse">

    <!-- HERO -->
    <section class="relative h-[650px] overflow-hidden">
        <div class="absolute inset-0 skeleton"></div>

        <div class="container mx-auto px-6 lg:px-12 relative z-10 h-full flex items-center">
            <div class="max-w-3xl pl-6 md:pl-10 border-l-4 border-gray-300">

                <div class="skeleton h-16 w-full max-w-2xl mb-4"></div>
                <div class="skeleton h-16 w-3/4 max-w-xl mb-8"></div>

                <div class="skeleton h-5 w-full mb-3"></div>
                <div class="skeleton h-5 w-11/12 mb-3"></div>
                <div class="skeleton h-5 w-4/5 mb-8"></div>

                <div class="skeleton h-14 w-64 rounded-md"></div>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section class="py-10 bg-white">
        <div class="container mx-auto px-4">

            <div class="text-center mb-10">
                <div class="skeleton h-10 w-72 mx-auto mb-4"></div>
                <div class="skeleton h-1 w-32 mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-12 gap-4 lg:gap-6">

                <!-- Large -->
                <div class="md:col-span-7 h-[400px] skeleton rounded-2xl"></div>

                <!-- Medium -->
                <div class="md:col-span-5 h-[400px] skeleton rounded-2xl"></div>

                <!-- Small Cards -->
                @for ($i = 0; $i < 3; $i++)
                    <div class="md:col-span-4 h-[400px] skeleton rounded-2xl"></div>
                @endfor

                <!-- Medium -->
                <div class="md:col-span-5 h-[400px] skeleton rounded-2xl"></div>

                <!-- Large -->
                <div class="md:col-span-7 h-[400px] skeleton rounded-2xl"></div>

            </div>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section class="py-24 bg-[#212529]">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">

                <div class="lg:col-span-7">
                    <div class="skeleton h-12 w-3/4 mb-6"></div>

                    <div class="space-y-4">
                        <div class="skeleton h-5 w-full"></div>
                        <div class="skeleton h-5 w-11/12"></div>
                        <div class="skeleton h-5 w-4/5"></div>
                    </div>
                </div>

                <div class="lg:col-span-5">
                    <div class="skeleton h-[320px] rounded-2xl"></div>
                </div>

            </div>
        </div>
    </section>

    <!-- PROCESS -->
    <section class="py-10 bg-white">
        <div class="container mx-auto px-4">

            <div class="text-center mb-16">
                <div class="skeleton h-12 w-64 mx-auto mb-4"></div>
                <div class="skeleton h-5 w-96 max-w-full mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">

                @for ($i = 0; $i < 3; $i++)
                    <div class="text-center">

                        <div class="skeleton w-20 h-20 rounded-full mx-auto mb-6"></div>

                        <div class="skeleton h-8 w-40 mx-auto mb-4"></div>

                        <div class="space-y-3">
                            <div class="skeleton h-4 w-full"></div>
                            <div class="skeleton h-4 w-5/6 mx-auto"></div>
                        </div>

                    </div>
                @endfor

            </div>

            <div class="mt-12 flex justify-center">
                <div class="skeleton h-14 w-72 rounded-full"></div>
            </div>

        </div>
    </section>

    <!-- CTA -->
    <section class="py-16 bg-[#36251e]">
        <div class="container mx-auto px-4">

            <div class="max-w-4xl mx-auto text-center">

                <div class="skeleton w-16 h-16 rounded-full mx-auto mb-8"></div>

                <div class="skeleton h-12 w-3/4 mx-auto mb-6"></div>

                <div class="space-y-3 mb-10">
                    <div class="skeleton h-5 w-full"></div>
                    <div class="skeleton h-5 w-4/5 mx-auto"></div>
                </div>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <div class="skeleton h-14 w-72 rounded-full"></div>
                    <div class="skeleton h-6 w-48"></div>
                </div>

            </div>

        </div>
    </section>

</div>