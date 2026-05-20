<div class="animate-pulse">

    <!-- HERO -->
    <section class="py-20 bg-gray-300">
        <div class="container mx-auto px-4 text-center">
            <div class="skeleton h-12 w-72 mx-auto"></div>
        </div>
    </section>

    <!-- INTRO -->
    <section class="pt-12 pb-6">
        <div class="container mx-auto px-4 text-center space-y-4">

            <div class="skeleton h-4 w-40 mx-auto"></div>

            <div class="skeleton h-8 w-80 mx-auto"></div>

            <div class="skeleton h-1 w-32 mx-auto"></div>

        </div>
    </section>

    <!-- GRID -->
    <section class="py-20">
        <div class="container mx-auto px-4">

            <div class="grid grid-cols-1 md:grid-cols-12 gap-6">

                <!-- Large card -->
                <div class="md:col-span-7 h-[450px] skeleton rounded-2xl"></div>

                <!-- Medium card -->
                <div class="md:col-span-5 h-[450px] skeleton rounded-2xl"></div>

                <!-- Small cards -->
                @for ($i = 0; $i < 5; $i++)
                    <div class="md:col-span-4 h-[420px] skeleton rounded-2xl"></div>
                @endfor

                <!-- Another large -->
                <div class="md:col-span-7 h-[450px] skeleton rounded-2xl"></div>

            </div>

        </div>
    </section>

    <!-- CTA -->
    <section class="py-18 bg-gray-400">
        <div class="container mx-auto px-4 text-center max-w-3xl space-y-5">

            <div class="skeleton w-16 h-16 rounded-full mx-auto"></div>

            <div class="skeleton h-10 w-3/4 mx-auto"></div>

            <div class="space-y-3">
                <div class="skeleton h-4 w-full"></div>
                <div class="skeleton h-4 w-11/12 mx-auto"></div>
                <div class="skeleton h-4 w-4/5 mx-auto"></div>
            </div>

            <div class="flex justify-center gap-4 mt-6">
                <div class="skeleton h-12 w-52 rounded-full"></div>
                <div class="skeleton h-12 w-40 rounded-full"></div>
            </div>

        </div>
    </section>

</div>