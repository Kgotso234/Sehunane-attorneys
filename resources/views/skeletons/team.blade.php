<div class="animate-pulse space-y-12">

    {{-- HEADER --}}
    <div class="relative h-[250px] bg-slate-200"></div>

    {{-- INTRO --}}
    <div class="container mx-auto px-4 text-center space-y-4">
        <div class="h-8 w-64 bg-slate-300 mx-auto rounded"></div>
        <div class="h-4 w-96 bg-slate-300 mx-auto rounded"></div>
    </div>

    {{-- FEATURED TEAM MEMBER --}}
    <div class="container mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-6 bg-slate-100 rounded-2xl overflow-hidden">
            <div class="h-[450px] bg-slate-300"></div>

            <div class="p-10 space-y-6">
                <div class="h-4 w-40 bg-slate-300 rounded"></div>
                <div class="h-8 w-72 bg-slate-300 rounded"></div>
                <div class="space-y-3">
                    <div class="h-4 w-full bg-slate-300 rounded"></div>
                    <div class="h-4 w-5/6 bg-slate-300 rounded"></div>
                    <div class="h-4 w-4/6 bg-slate-300 rounded"></div>
                </div>
            </div>
        </div>
    </div>

    {{-- TEAM GRID --}}
    <div class="container mx-auto px-4 space-y-6">
        <div class="h-6 w-64 bg-slate-300 rounded"></div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @for ($i = 0; $i < 3; $i++)
                <div class="bg-slate-100 rounded-xl overflow-hidden">
                    <div class="h-56 bg-slate-300"></div>
                    <div class="p-6 space-y-3">
                        <div class="h-5 w-40 bg-slate-300 rounded"></div>
                        <div class="h-4 w-24 bg-slate-300 rounded"></div>
                        <div class="h-3 w-full bg-slate-300 rounded"></div>
                    </div>
                </div>
            @endfor
        </div>
    </div>

</div>