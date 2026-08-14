@extends('layouts.app')

@section('title', 'SOLARA Energy Solutions | Powering Tomorrow')
@section('meta_description', 'SOLARA Energy Solutions delivers reliable, affordable solar power systems for homes, businesses, and organizations across the Philippines.')

@section('content')

{{-- ==========================================================
    HERO
========================================================== --}}
<section class="relative isolate overflow-hidden bg-[#07130D] text-white">

    {{-- atmosphere --}}
    <div class="pointer-events-none absolute inset-0 -z-10">
        <div class="absolute -right-52 -top-52 h-[650px] w-[650px] rounded-full bg-[#D9B451]/10 blur-[150px]"></div>
        <div class="absolute bottom-0 left-0 h-px w-full bg-gradient-to-r from-transparent via-white/10 to-transparent"></div>
    </div>

    <div class="mx-auto grid min-h-[820px] w-[90%] max-w-[1320px] items-center gap-16 py-20 lg:grid-cols-[0.88fr_1.12fr] lg:py-24">

        {{-- LEFT --}}
        <div class="relative z-10">

            <div class="mb-8 flex items-center gap-4">
                <span class="h-px w-10 bg-gold"></span>

                <span class="text-[10px] font-bold uppercase tracking-[0.26em] text-white/45">
                    Renewable Energy • Philippines
                </span>
            </div>

            <h1 class="max-w-[760px] text-[clamp(3.8rem,7vw,7rem)] font-semibold leading-[0.87] tracking-[-0.065em]">
                Own your
                <span class="text-gold">
                    energy
                </span>
                future.
            </h1>

            <p class="mt-9 max-w-xl text-base leading-8 text-white/50 md:text-lg">
                SOLARA designs intelligent solar energy systems for homes,
                businesses, and organizations that want lower operating costs,
                stronger energy resilience, and long-term performance.
            </p>

            <div class="mt-10 flex flex-col gap-3 sm:flex-row">

                <a
                    href="{{ route('contact') }}"
                    class="group inline-flex items-center justify-center gap-3 rounded-xl bg-gold px-7 py-4 text-sm font-bold text-[#112219] transition duration-300 hover:-translate-y-1 hover:shadow-[0_18px_45px_rgba(214,176,71,0.20)]"
                >
                    Start Your Solar Project

                    <svg
                        class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        aria-hidden="true"
                    >
                        <path d="M5 12h14M13 6l6 6-6 6"/>
                    </svg>
                </a>

                <a
                    href="{{ route('services') }}"
                    class="inline-flex items-center justify-center rounded-xl border border-white/15 bg-white/[0.03] px-7 py-4 text-sm font-bold text-white transition hover:border-white/30 hover:bg-white/[0.06]"
                >
                    Explore Solutions
                </a>

            </div>


            {{-- mini credibility --}}
            <div class="mt-14 grid max-w-xl grid-cols-3 border-t border-white/10 pt-8">

                <div>
                    <p class="text-2xl font-semibold tracking-tight">
                        500+
                    </p>
                    <p class="mt-1 text-[9px] font-bold uppercase tracking-[0.18em] text-white/30">
                        Installations
                    </p>
                </div>

                <div class="border-l border-white/10 pl-6">
                    <p class="text-2xl font-semibold tracking-tight">
                        25 MW
                    </p>
                    <p class="mt-1 text-[9px] font-bold uppercase tracking-[0.18em] text-white/30">
                        Deployed
                    </p>
                </div>

                <div class="border-l border-white/10 pl-6">
                    <p class="text-2xl font-semibold tracking-tight">
                        15+
                    </p>
                    <p class="mt-1 text-[9px] font-bold uppercase tracking-[0.18em] text-white/30">
                        Years Experience
                    </p>
                </div>

            </div>

        </div>


        {{-- RIGHT IMAGE COMPOSITION --}}
        <div class="relative hidden min-h-[650px] lg:block">

            <div class="absolute right-0 top-0 h-[630px] w-[91%] overflow-hidden rounded-[2rem]">

                <img
                    src="{{ asset('images/home-page.png') }}"
                    alt="Solar panel installation overlooking the city"
                    class="h-full w-full object-cover"
                    fetchpriority="high"
                >

                <div class="absolute inset-0 bg-gradient-to-t from-[#07130D]/75 via-transparent to-transparent"></div>

                {{-- top project badge --}}
                <div class="absolute right-6 top-6 rounded-full border border-white/15 bg-[#07130D]/45 px-4 py-2 backdrop-blur-xl">

                    <div class="flex items-center gap-2">

                        <span class="relative flex h-2 w-2">
                            <span class="absolute h-full w-full animate-ping rounded-full bg-gold opacity-40"></span>
                            <span class="relative h-2 w-2 rounded-full bg-gold"></span>
                        </span>

                        <span class="text-[9px] font-bold uppercase tracking-[0.2em] text-white/70">
                            Solar Generation Active
                        </span>

                    </div>

                </div>

            </div>


            {{-- floating analytics card --}}
            <div class="absolute bottom-3 left-0 w-[330px] rounded-[1.5rem] border border-white/10 bg-[#0F251A]/90 p-6 shadow-2xl backdrop-blur-2xl">

                <div class="flex items-start justify-between">

                    <div>
                        <p class="text-[9px] font-bold uppercase tracking-[0.2em] text-white/35">
                            Energy Capacity
                        </p>

                        <div class="mt-3 flex items-end gap-2">
                            <span class="text-5xl font-semibold tracking-[-0.06em]">
                                25
                            </span>
                            <span class="pb-1 text-lg font-semibold text-gold">
                                MW
                            </span>
                        </div>
                    </div>

                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-gold/10 text-gold">

                        <svg
                            class="h-5 w-5"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.7"
                        >
                            <path d="M13 2 4 14h7l-1 8 9-12h-7l1-8Z"/>
                        </svg>

                    </div>

                </div>

                <div class="mt-7 flex h-12 items-end gap-1.5">

                    @foreach ([28, 35, 31, 42, 48, 43, 55, 60, 57, 72, 68, 84] as $bar)

                        <div
                            class="flex-1 rounded-sm bg-gold/60"
                            style="height: {{ $bar / 1.7 }}px"
                        ></div>

                    @endforeach

                </div>

                <div class="mt-4 flex items-center justify-between">

                    <span class="text-xs text-white/35">
                        Portfolio output
                    </span>

                    <span class="text-xs font-bold text-gold">
                        +18.4%
                    </span>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- ==========================================================
    CAPABILITIES STRIP
========================================================== --}}
<section class="bg-white">

    <div class="mx-auto w-[90%] max-w-[1320px]">

        <div class="grid border-x border-b border-[#E3E7E3] sm:grid-cols-2 lg:grid-cols-4">

            @foreach ([
                [
                    'title' => 'Site Analysis',
                    'body' => 'Consumption, roof and system assessment',
                    'icon' => 'search'
                ],
                [
                    'title' => 'System Engineering',
                    'body' => 'Designed around actual energy demand',
                    'icon' => 'grid'
                ],
                [
                    'title' => 'Installation',
                    'body' => 'Professional project execution',
                    'icon' => 'tool'
                ],
                [
                    'title' => 'Lifetime Support',
                    'body' => 'Monitoring, maintenance and assistance',
                    'icon' => 'support'
                ],
            ] as $item)

                <div class="group border-b border-[#E3E7E3] p-7 transition hover:bg-[#F8F9F6] lg:border-b-0 lg:border-r last:border-r-0">

                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-[#173C2B]/8 text-[#173C2B]">

                        @if($item['icon'] === 'search')

                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <circle cx="11" cy="11" r="6"/>
                                <path d="m16 16 4 4"/>
                            </svg>

                        @elseif($item['icon'] === 'grid')

                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <rect x="3" y="3" width="7" height="7"/>
                                <rect x="14" y="3" width="7" height="7"/>
                                <rect x="3" y="14" width="7" height="7"/>
                                <rect x="14" y="14" width="7" height="7"/>
                            </svg>

                        @elseif($item['icon'] === 'tool')

                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <path d="M14.7 6.3a4 4 0 0 0-5-5L7.5 3.5l3 3L8 9 5 6 2.8 8.2a4 4 0 0 0 5 5L17 22l5-5-8.7-8.7"/>
                            </svg>

                        @else

                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <path d="M4 13v-1a8 8 0 0 1 16 0v1"/>
                                <path d="M4 13h3v6H5a1 1 0 0 1-1-1v-5Z"/>
                                <path d="M20 13h-3v6h2a1 1 0 0 0 1-1v-5Z"/>
                            </svg>

                        @endif

                    </div>

                    <h3 class="mt-5 text-sm font-bold text-[#173C2B]">
                        {{ $item['title'] }}
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-[#7A847E]">
                        {{ $item['body'] }}
                    </p>

                </div>

            @endforeach

        </div>

    </div>

</section>


{{-- ==========================================================
    POSITIONING
========================================================== --}}
<section class="bg-[#F5F6F1] py-28 lg:py-36">

    <div class="mx-auto grid w-[90%] max-w-[1320px] gap-14 lg:grid-cols-[0.65fr_1.35fr] lg:gap-28">

        <div>

            <div class="flex items-center gap-4">
                <span class="h-px w-10 bg-gold"></span>

                <span class="text-[10px] font-bold uppercase tracking-[0.24em] text-[#A27E25]">
                    Our Approach
                </span>
            </div>

        </div>

        <div>

            <h2 class="max-w-5xl text-4xl font-semibold leading-[1.03] tracking-[-0.05em] text-[#142D21] md:text-6xl">
                Good solar isn't about installing
                <span class="text-[#929A94]">
                    more panels.
                </span>
                It's about designing the right system.
            </h2>

            <div class="mt-12 grid gap-10 border-t border-[#D9DED9] pt-9 md:grid-cols-2">

                <div>
                    <p class="text-[10px] font-bold uppercase tracking-[0.18em] text-[#A27E25]">
                        01 / Understand
                    </p>

                    <p class="mt-4 leading-8 text-[#667069]">
                        We analyze how, when, and where your property consumes
                        electricity before recommending equipment.
                    </p>
                </div>

                <div>
                    <p class="text-[10px] font-bold uppercase tracking-[0.18em] text-[#A27E25]">
                        02 / Optimize
                    </p>

                    <p class="mt-4 leading-8 text-[#667069]">
                        System size, orientation, storage, equipment, and
                        projected performance are designed around your goals.
                    </p>
                </div>

            </div>

        </div>

    </div>

</section>


{{-- ==========================================================
    SOLUTIONS
========================================================== --}}
<section class="bg-white py-28 lg:py-36">

    <div class="mx-auto w-[90%] max-w-[1320px]">

        <div class="grid gap-16 lg:grid-cols-[0.65fr_1.35fr]">

            {{-- left sticky --}}
            <div class="lg:sticky lg:top-28 lg:self-start">

                <p class="text-[10px] font-bold uppercase tracking-[0.24em] text-[#A27E25]">
                    What We Build
                </p>

                <h2 class="mt-5 max-w-md text-4xl font-semibold leading-[1] tracking-[-0.05em] text-[#142D21] md:text-5xl">
                    Solutions for different energy realities.
                </h2>

                <p class="mt-6 max-w-sm leading-7 text-[#69736D]">
                    Residential, commercial, and storage projects require
                    different engineering decisions.
                </p>

                <a
                    href="{{ route('services') }}"
                    class="group mt-8 inline-flex items-center gap-2 text-sm font-bold text-[#173C2B]"
                >
                    View all solutions

                    <span class="transition-transform group-hover:translate-x-1">
                        →
                    </span>
                </a>

            </div>


            {{-- services --}}
            <div class="space-y-6">

                {{-- Residential --}}
                <article class="group relative overflow-hidden rounded-[2rem] bg-[#10271C] p-8 text-white sm:p-10 lg:mr-10">

                    <div class="absolute right-0 top-0 h-72 w-72 rounded-full bg-gold/[0.06] blur-[90px]"></div>

                    <div class="relative grid gap-12 sm:grid-cols-[1fr_auto]">

                        <div>

                            <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-gold">
                                01
                            </p>

                            <h3 class="mt-5 text-4xl font-semibold tracking-[-0.045em]">
                                Residential Solar
                            </h3>

                            <p class="mt-4 max-w-xl leading-7 text-white/45">
                                High-performance rooftop systems engineered
                                around your household's consumption, roof,
                                budget, and future needs.
                            </p>

                            @if(Route::has('services.residential'))
                                <a
                                    href="{{ route('services.residential') }}"
                                    class="mt-8 inline-flex items-center gap-2 text-sm font-bold"
                                >
                                    Explore residential
                                    <span class="transition group-hover:translate-x-1">→</span>
                                </a>
                            @endif

                        </div>

                        <div class="flex h-16 w-16 items-center justify-center rounded-2xl border border-white/10 bg-white/[0.05] text-gold">
                            <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <path d="M3 11l9-7 9 7"/>
                                <path d="M5 10v10h14V10"/>
                                <path d="M9 20v-6h6v6"/>
                            </svg>
                        </div>

                    </div>

                </article>


                {{-- Commercial --}}
                <article class="group rounded-[2rem] bg-[#EEE3C3] p-8 text-[#173C2B] sm:p-10 lg:ml-12">

                    <div class="grid gap-12 sm:grid-cols-[1fr_auto]">

                        <div>

                            <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-[#927321]">
                                02
                            </p>

                            <h3 class="mt-5 text-4xl font-semibold tracking-[-0.045em]">
                                Commercial Solar
                            </h3>

                            <p class="mt-4 max-w-xl leading-7 text-[#657068]">
                                Scalable solar systems for offices, warehouses,
                                commercial facilities, and energy-intensive operations.
                            </p>

                            @if(Route::has('services.commercial'))
                                <a
                                    href="{{ route('services.commercial') }}"
                                    class="mt-8 inline-flex items-center gap-2 text-sm font-bold"
                                >
                                    Explore commercial
                                    <span class="transition group-hover:translate-x-1">→</span>
                                </a>
                            @endif

                        </div>

                        <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-[#173C2B]/10">
                            <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <path d="M4 21V7l8-4v18"/>
                                <path d="M12 9h8v12"/>
                                <path d="M8 9v.01M8 13v.01M8 17v.01"/>
                            </svg>
                        </div>

                    </div>

                </article>


                {{-- Battery --}}
                <article class="group rounded-[2rem] border border-[#DFE4DF] bg-[#F8F9F6] p-8 text-[#173C2B] sm:p-10 lg:mr-16">

                    <div class="grid gap-12 sm:grid-cols-[1fr_auto]">

                        <div>

                            <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-[#927321]">
                                03
                            </p>

                            <h3 class="mt-5 text-4xl font-semibold tracking-[-0.045em]">
                                Battery Storage
                            </h3>

                            <p class="mt-4 max-w-xl leading-7 text-[#657068]">
                                Store excess generation, protect critical loads,
                                and increase energy independence with intelligent storage.
                            </p>

                            @if(Route::has('services.battery'))
                                <a
                                    href="{{ route('services.battery') }}"
                                    class="mt-8 inline-flex items-center gap-2 text-sm font-bold"
                                >
                                    Explore storage
                                    <span class="transition group-hover:translate-x-1">→</span>
                                </a>
                            @endif

                        </div>

                        <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-[#173C2B]/10">
                            <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <rect x="3" y="6" width="16" height="12" rx="2"/>
                                <path d="M21 10v4"/>
                                <path d="M8 12h6M11 9v6"/>
                            </svg>
                        </div>

                    </div>

                </article>

            </div>

        </div>

    </div>

</section>


{{-- ==========================================================
    PROJECT / CASE STUDY
========================================================== --}}
<section class="bg-[#0C2015] py-28 text-white lg:py-36">

    <div class="mx-auto w-[90%] max-w-[1320px]">

        <div class="mb-14 flex flex-col justify-between gap-8 lg:flex-row lg:items-end">

            <div>

                <p class="text-[10px] font-bold uppercase tracking-[0.24em] text-gold">
                    Selected Project
                </p>

                <h2 class="mt-5 max-w-3xl text-4xl font-semibold leading-[1] tracking-[-0.05em] md:text-6xl">
                    Engineering translated into measurable energy.
                </h2>

            </div>

            <p class="max-w-sm leading-7 text-white/40">
                Every project starts with an energy problem and ends with
                a system designed to solve it.
            </p>

        </div>


        <div class="grid overflow-hidden rounded-[2rem] border border-white/10 lg:grid-cols-[1.1fr_.9fr]">

            {{-- reuse hero image for now --}}
            <div class="relative min-h-[480px]">

                <img
                    src="{{ asset('images/home-page.png') }}"
                    alt="Solar energy project"
                    class="absolute inset-0 h-full w-full object-cover"
                    loading="lazy"
                >

                <div class="absolute inset-0 bg-gradient-to-t from-[#07140D]/70 via-transparent to-transparent"></div>

                <span class="absolute left-7 top-7 rounded-full border border-white/15 bg-[#07140D]/50 px-4 py-2 text-[9px] font-bold uppercase tracking-[0.18em] text-white/70 backdrop-blur">
                    Residential Solar
                </span>

            </div>


            <div class="flex flex-col justify-between bg-[#10271C] p-8 sm:p-10 lg:p-12">

                <div>

                    <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-gold">
                        Cebu City • Philippines
                    </p>

                    <h3 class="mt-5 text-4xl font-semibold tracking-[-0.045em]">
                        Residential energy transformation.
                    </h3>

                    <p class="mt-5 leading-7 text-white/45">
                        A rooftop solar system designed around household
                        consumption, available roof area, and long-term
                        electricity savings.
                    </p>

                </div>


                <div class="mt-12 grid grid-cols-3 border-t border-white/10 pt-7">

                    <div>
                        <p class="text-2xl font-semibold">
                            8.4
                        </p>

                        <p class="mt-1 text-[9px] uppercase tracking-[0.15em] text-white/30">
                            kWp System
                        </p>
                    </div>

                    <div class="border-l border-white/10 pl-5">
                        <p class="text-2xl font-semibold">
                            18
                        </p>

                        <p class="mt-1 text-[9px] uppercase tracking-[0.15em] text-white/30">
                            Panels
                        </p>
                    </div>

                    <div class="border-l border-white/10 pl-5">
                        <p class="text-2xl font-semibold text-gold">
                            30%+
                        </p>

                        <p class="mt-1 text-[9px] uppercase tracking-[0.15em] text-white/30">
                            Est. Savings
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- ==========================================================
    PROCESS
========================================================== --}}
<section class="bg-[#F5F6F1] py-28 lg:py-36">

    <div class="mx-auto grid w-[90%] max-w-[1320px] gap-16 lg:grid-cols-[0.65fr_1.35fr]">

        <div>

            <p class="text-[10px] font-bold uppercase tracking-[0.24em] text-[#A27E25]">
                Project Journey
            </p>

            <h2 class="mt-5 max-w-md text-4xl font-semibold leading-[1] tracking-[-0.05em] text-[#142D21] md:text-5xl">
                Clear from first conversation to activation.
            </h2>

        </div>


        <div class="border-t border-[#D8DED8]">

            @foreach ([
                [
                    'number' => '01',
                    'title' => 'Understand',
                    'body' => 'We review your property, energy usage, goals, and existing electrical conditions.'
                ],
                [
                    'number' => '02',
                    'title' => 'Engineer',
                    'body' => 'Our team designs a system based on performance, equipment, layout, and long-term value.'
                ],
                [
                    'number' => '03',
                    'title' => 'Install',
                    'body' => 'The system is professionally installed, tested, commissioned, and documented.'
                ],
                [
                    'number' => '04',
                    'title' => 'Optimize',
                    'body' => 'Monitoring and ongoing technical support help keep your system performing.'
                ],
            ] as $step)

                <div class="group grid gap-5 border-b border-[#D8DED8] py-8 sm:grid-cols-[65px_.65fr_1fr]">

                    <span class="text-sm font-bold text-[#A27E25]">
                        {{ $step['number'] }}
                    </span>

                    <h3 class="text-xl font-semibold text-[#173C2B]">
                        {{ $step['title'] }}
                    </h3>

                    <p class="leading-7 text-[#69736D]">
                        {{ $step['body'] }}
                    </p>

                </div>

            @endforeach

        </div>

    </div>

</section>


{{-- ==========================================================
    FINAL CTA
========================================================== --}}
<section class="bg-white py-20 lg:py-28">

    <div class="mx-auto w-[90%] max-w-[1320px]">

        <div class="relative overflow-hidden rounded-[2.25rem] bg-gold px-8 py-14 sm:px-12 lg:px-16 lg:py-16">

            <div
                aria-hidden="true"
                class="absolute -right-24 -top-24 h-80 w-80 rounded-full border-[60px] border-white/10"
            ></div>

            <div class="relative grid gap-10 lg:grid-cols-[1fr_auto] lg:items-end">

                <div class="max-w-4xl">

                    <p class="text-[10px] font-bold uppercase tracking-[0.24em] text-[#665018]">
                        Start Your Project
                    </p>

                    <h2 class="mt-5 text-4xl font-semibold leading-[0.98] tracking-[-0.055em] text-[#10271C] md:text-6xl">
                        Your property could be producing its own energy.
                    </h2>

                    <p class="mt-5 max-w-xl leading-7 text-[#48554C]">
                        Tell us about your property and energy needs.
                        We'll help you understand the next step.
                    </p>

                </div>

                <a
                    href="{{ route('contact') }}"
                    class="group inline-flex shrink-0 items-center justify-center gap-3 rounded-xl bg-[#10271C] px-7 py-4 text-sm font-bold text-white transition duration-300 hover:-translate-y-1 hover:shadow-xl"
                >
                    Request a Consultation

                    <span class="transition-transform group-hover:translate-x-1">
                        →
                    </span>
                </a>

            </div>

        </div>

    </div>

</section>

@endsection