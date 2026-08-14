@extends('layouts.app')

@section('title', 'Services | SOLARA Energy Solutions')
@section('meta_description', 'Explore SOLARA Energy Solutions\' full range of services — residential and commercial solar, battery storage, maintenance, off-grid systems, and net metering consultation.')

@section('content')

{{-- ==========================================================
    HERO
========================================================== --}}
<section class="relative overflow-hidden bg-[#07140D] text-white">

    <div class="pointer-events-none absolute inset-0">
        <div class="absolute -right-48 -top-48 h-[620px] w-[620px] rounded-full bg-gold/10 blur-[150px]"></div>
        <div class="absolute bottom-0 left-0 h-px w-full bg-gradient-to-r from-transparent via-white/10 to-transparent"></div>
    </div>

    <div class="relative mx-auto grid min-h-[620px] w-[90%] max-w-[1320px] items-end gap-16 py-24 lg:grid-cols-[0.62fr_1.38fr] lg:py-32">

        <div class="pb-2">

            <div class="flex items-center gap-4">
                <span class="h-px w-10 bg-gold"></span>

                <p class="text-[10px] font-bold uppercase tracking-[0.26em] text-white/45">
                    Solar Energy Services
                </p>
            </div>

        </div>


        <div>

            <h1 class="max-w-5xl text-5xl font-semibold leading-[0.92] tracking-[-0.06em] sm:text-6xl lg:text-7xl">
                One energy partner.
                <span class="text-gold">
                    Every stage.
                </span>
            </h1>

            <div class="mt-8 grid gap-8 border-t border-white/10 pt-8 md:grid-cols-[1fr_auto] md:items-end">

                <p class="max-w-2xl text-base leading-8 text-white/50 md:text-lg">
                    From assessment and system design to installation, battery storage,
                    maintenance, and consultation, SOLARA supports the entire solar journey.
                </p>

                <div class="flex items-center gap-3 text-white/30">

                    <svg
                        class="h-5 w-5 text-gold"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.7"
                        aria-hidden="true"
                    >
                        <path d="M14.7 6.3a4 4 0 0 0-5-5L7.5 3.5l3 3L8 9 5 6 2.8 8.2a4 4 0 0 0 5 5L17 22l5-5-8.7-8.7"/>
                    </svg>

                    <span class="text-[10px] font-bold uppercase tracking-[0.18em]">
                        End-to-End Delivery
                    </span>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- ==========================================================
    IMAGE FEATURE
========================================================== --}}
<section class="bg-[#F5F6F1] py-20 lg:py-28">

    <div class="mx-auto w-[90%] max-w-[1320px]">

        <div class="relative min-h-[620px]">

            <div class="h-[580px] w-full overflow-hidden rounded-[2.25rem]">

                <img
                    src="{{ asset('images/service-page.png') }}"
                    alt="SOLARA technicians providing professional solar energy services"
                    class="h-full w-full object-cover"
                    loading="lazy"
                >

                <div class="absolute inset-0 rounded-[2.25rem] bg-gradient-to-r from-[#07140D]/85 via-[#07140D]/35 to-transparent"></div>

            </div>


            <div class="absolute bottom-10 left-8 max-w-xl sm:left-12">

                <div class="flex h-12 w-12 items-center justify-center rounded-xl border border-white/10 bg-white/10 text-gold backdrop-blur-xl">

                    <svg
                        class="h-6 w-6"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.7"
                        aria-hidden="true"
                    >
                        <path d="M3 17 8 12l4 4 8-9"/>
                        <path d="M15 7h5v5"/>
                    </svg>

                </div>

                <p class="mt-6 text-[10px] font-bold uppercase tracking-[0.22em] text-gold">
                    From Planning to Performance
                </p>

                <h2 class="mt-4 max-w-2xl text-4xl font-semibold leading-[1] tracking-[-0.045em] text-white md:text-5xl">
                    Solar services designed around the full life of your system.
                </h2>

                <p class="mt-5 max-w-lg leading-7 text-white/50">
                    One team handles design, installation, commissioning, storage,
                    monitoring, and long-term support.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- ==========================================================
    CORE SOLUTIONS
========================================================== --}}
<section class="bg-white py-28 lg:py-36">

    <div class="mx-auto w-[90%] max-w-[1320px]">

        <div class="grid gap-16 lg:grid-cols-[0.62fr_1.38fr]">

            {{-- LEFT --}}
            <div class="lg:sticky lg:top-28 lg:self-start">

                <div class="flex items-center gap-4">
                    <span class="h-px w-10 bg-gold"></span>

                    <p class="text-[10px] font-bold uppercase tracking-[0.24em] text-[#A27E25]">
                        Core Solutions
                    </p>
                </div>

                <h2 class="mt-5 max-w-md text-4xl font-semibold leading-[1] tracking-[-0.05em] text-[#142D21] md:text-5xl">
                    Built around how you actually use energy.
                </h2>

                <p class="mt-6 max-w-sm leading-7 text-[#69736D]">
                    The right system depends on your property, consumption profile,
                    budget, reliability needs, and long-term goals.
                </p>

            </div>


            {{-- RIGHT --}}
            <div class="space-y-6">

                {{-- RESIDENTIAL --}}
                <article class="group relative overflow-hidden rounded-[2rem] bg-[#10271C] p-8 text-white sm:p-10 lg:mr-10">

                    <div class="absolute right-0 top-0 h-72 w-72 rounded-full bg-gold/[0.06] blur-[90px]"></div>

                    <div class="relative grid gap-12 sm:grid-cols-[1fr_auto]">

                        <div>

                            <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-gold">
                                01 / Residential
                            </p>

                            <h3 class="mt-5 text-4xl font-semibold tracking-[-0.045em]">
                                Residential Solar
                            </h3>

                            <p class="mt-4 max-w-xl leading-7 text-white/45">
                                Rooftop solar systems designed around household electricity
                                use, available roof area, budget, and long-term savings.
                            </p>

                            <div class="mt-7 flex flex-wrap gap-2">

                                @foreach ([
                                    'Site Assessment',
                                    'System Design',
                                    'Installation',
                                    'Monitoring',
                                ] as $feature)

                                    <span class="rounded-full border border-white/10 bg-white/[0.05] px-3 py-1.5 text-xs text-white/60">
                                        {{ $feature }}
                                    </span>

                                @endforeach

                            </div>

                            @if(Route::has('services.residential'))
                                <a
                                    href="{{ route('services.residential') }}"
                                    class="mt-8 inline-flex items-center gap-2 text-sm font-bold"
                                >
                                    Explore residential
                                    <span class="transition-transform group-hover:translate-x-1">→</span>
                                </a>
                            @endif

                        </div>

                        <div class="flex h-16 w-16 items-center justify-center rounded-2xl border border-white/10 bg-white/[0.05] text-gold">

                            <svg
                                class="h-7 w-7"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.7"
                                aria-hidden="true"
                            >
                                <path d="M3 11l9-7 9 7"/>
                                <path d="M5 10v10h14V10"/>
                                <path d="M9 20v-6h6v6"/>
                            </svg>

                        </div>

                    </div>

                </article>


                {{-- COMMERCIAL --}}
                <article class="group rounded-[2rem] bg-[#EEE3C3] p-8 text-[#173C2B] sm:p-10 lg:ml-12">

                    <div class="grid gap-12 sm:grid-cols-[1fr_auto]">

                        <div>

                            <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-[#927321]">
                                02 / Commercial
                            </p>

                            <h3 class="mt-5 text-4xl font-semibold tracking-[-0.045em]">
                                Commercial Solar
                            </h3>

                            <p class="mt-4 max-w-xl leading-7 text-[#657068]">
                                Scalable solar solutions for offices, warehouses,
                                facilities, and other energy-intensive operations.
                            </p>

                            <div class="mt-7 flex flex-wrap gap-2">

                                @foreach ([
                                    'Energy Analysis',
                                    'Roof Assessment',
                                    'System Engineering',
                                    'Installation',
                                ] as $feature)

                                    <span class="rounded-full border border-[#173C2B]/10 bg-white/40 px-3 py-1.5 text-xs text-[#5D695F]">
                                        {{ $feature }}
                                    </span>

                                @endforeach

                            </div>

                            @if(Route::has('services.commercial'))
                                <a
                                    href="{{ route('services.commercial') }}"
                                    class="mt-8 inline-flex items-center gap-2 text-sm font-bold"
                                >
                                    Explore commercial
                                    <span class="transition-transform group-hover:translate-x-1">→</span>
                                </a>
                            @endif

                        </div>

                        <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-[#173C2B]/10">

                            <svg
                                class="h-7 w-7"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.7"
                                aria-hidden="true"
                            >
                                <path d="M4 21V7l8-4v18"/>
                                <path d="M12 9h8v12"/>
                                <path d="M8 9v.01M8 13v.01M8 17v.01"/>
                            </svg>

                        </div>

                    </div>

                </article>


                {{-- BATTERY --}}
                <article class="group rounded-[2rem] border border-[#DFE4DF] bg-[#F8F9F6] p-8 text-[#173C2B] sm:p-10 lg:mr-16">

                    <div class="grid gap-12 sm:grid-cols-[1fr_auto]">

                        <div>

                            <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-[#927321]">
                                03 / Storage
                            </p>

                            <h3 class="mt-5 text-4xl font-semibold tracking-[-0.045em]">
                                Battery Storage
                            </h3>

                            <p class="mt-4 max-w-xl leading-7 text-[#657068]">
                                Store excess solar generation, improve energy resilience,
                                and keep critical loads powered when needed.
                            </p>

                            <div class="mt-7 flex flex-wrap gap-2">

                                @foreach ([
                                    'Backup Power',
                                    'Load Shifting',
                                    'Battery Monitoring',
                                    'Hybrid Integration',
                                ] as $feature)

                                    <span class="rounded-full border border-[#D9DED9] bg-white px-3 py-1.5 text-xs text-[#657068]">
                                        {{ $feature }}
                                    </span>

                                @endforeach

                            </div>

                            @if(Route::has('services.battery'))
                                <a
                                    href="{{ route('services.battery') }}"
                                    class="mt-8 inline-flex items-center gap-2 text-sm font-bold"
                                >
                                    Explore battery storage
                                    <span class="transition-transform group-hover:translate-x-1">→</span>
                                </a>
                            @endif

                        </div>

                        <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-[#173C2B]/10">

                            <svg
                                class="h-7 w-7"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.7"
                                aria-hidden="true"
                            >
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
    SUPPORTING SERVICES
========================================================== --}}
<section class="bg-[#F5F6F1] py-28 lg:py-36">

    <div class="mx-auto w-[90%] max-w-[1320px]">

        <div class="mb-16 grid gap-8 lg:grid-cols-[0.62fr_1.38fr]">

            <div>

                <div class="flex items-center gap-4">
                    <span class="h-px w-10 bg-gold"></span>

                    <p class="text-[10px] font-bold uppercase tracking-[0.24em] text-[#A27E25]">
                        Supporting Services
                    </p>
                </div>

            </div>

            <h2 class="max-w-5xl text-4xl font-semibold leading-[1] tracking-[-0.05em] text-[#142D21] md:text-6xl">
                Solar systems need more than
                <span class="text-[#929A94]">
                    installation.
                </span>
            </h2>

        </div>


        <div class="grid gap-5 lg:grid-cols-3">

            {{-- MAINTENANCE --}}
            <article class="group flex min-h-[360px] flex-col border-t border-[#D8DDD8] pt-8">

                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#173C2B] text-gold">

                    <svg
                        class="h-6 w-6"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.7"
                        aria-hidden="true"
                    >
                        <path d="M14.7 6.3a4 4 0 0 0-5-5L7.5 3.5l3 3L8 9 5 6 2.8 8.2a4 4 0 0 0 5 5L17 22l5-5-8.7-8.7"/>
                    </svg>

                </div>

                <div class="mt-auto">

                    <p class="text-[10px] font-bold uppercase tracking-[0.18em] text-[#A27E25]">
                        04
                    </p>

                    <h3 class="mt-3 text-3xl font-semibold tracking-[-0.04em] text-[#173C2B]">
                        Solar Maintenance
                    </h3>

                    <p class="mt-4 leading-7 text-[#69736D]">
                        Preventive maintenance, panel cleaning, electrical inspections,
                        and performance testing for long-term reliability.
                    </p>

                    @if(Route::has('services.maintenance'))
                        <a
                            href="{{ route('services.maintenance') }}"
                            class="mt-7 inline-flex items-center gap-2 text-sm font-bold text-[#173C2B]"
                        >
                            Learn more →
                        </a>
                    @endif

                </div>

            </article>


            {{-- OFF GRID --}}
            <article class="group flex min-h-[360px] flex-col border-t border-[#D8DDD8] pt-8">

                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#173C2B] text-gold">

                    <svg
                        class="h-6 w-6"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.7"
                        aria-hidden="true"
                    >
                        <path d="M5 18h14"/>
                        <path d="M8 14a6 6 0 0 1 8 0"/>
                        <path d="M5 10a10 10 0 0 1 14 0"/>
                        <circle cx="12" cy="18" r="1"/>
                    </svg>

                </div>

                <div class="mt-auto">

                    <p class="text-[10px] font-bold uppercase tracking-[0.18em] text-[#A27E25]">
                        05
                    </p>

                    <h3 class="mt-3 text-3xl font-semibold tracking-[-0.04em] text-[#173C2B]">
                        Off-Grid & Hybrid
                    </h3>

                    <p class="mt-4 leading-7 text-[#69736D]">
                        Independent and hybrid energy systems for properties with
                        limited, unstable, or unavailable grid access.
                    </p>

                    @if(Route::has('services.off-grid'))
                        <a
                            href="{{ route('services.off-grid') }}"
                            class="mt-7 inline-flex items-center gap-2 text-sm font-bold text-[#173C2B]"
                        >
                            Learn more →
                        </a>
                    @endif

                </div>

            </article>


            {{-- CONSULTING --}}
            <article class="group flex min-h-[360px] flex-col border-t border-[#D8DDD8] pt-8">

                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#173C2B] text-gold">

                    <svg
                        class="h-6 w-6"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.7"
                        aria-hidden="true"
                    >
                        <rect x="5" y="4" width="14" height="17" rx="2"/>
                        <path d="M9 4V2h6v2"/>
                        <path d="M8 9h8M8 13h8M8 17h5"/>
                    </svg>

                </div>

                <div class="mt-auto">

                    <p class="text-[10px] font-bold uppercase tracking-[0.18em] text-[#A27E25]">
                        06
                    </p>

                    <h3 class="mt-3 text-3xl font-semibold tracking-[-0.04em] text-[#173C2B]">
                        Net Metering & Advisory
                    </h3>

                    <p class="mt-4 leading-7 text-[#69736D]">
                        Guidance for site planning, permitting, net metering,
                        system economics, and expected return.
                    </p>

                    @if(Route::has('services.consultation'))
                        <a
                            href="{{ route('services.consultation') }}"
                            class="mt-7 inline-flex items-center gap-2 text-sm font-bold text-[#173C2B]"
                        >
                            Learn more →
                        </a>
                    @endif

                </div>

            </article>

        </div>

    </div>

</section>


{{-- ==========================================================
    OUR PROCESS
========================================================== --}}
<section class="relative overflow-hidden bg-[#0D2016] py-28 text-white lg:py-36">

    <div class="pointer-events-none absolute -right-40 top-0 h-[450px] w-[450px] rounded-full bg-gold/[0.05] blur-[120px]"></div>

    <div class="relative mx-auto grid w-[90%] max-w-[1320px] gap-16 lg:grid-cols-[0.62fr_1.38fr] lg:gap-28">

        <div>

            <p class="text-[10px] font-bold uppercase tracking-[0.24em] text-gold">
                Project Delivery
            </p>

            <h2 class="mt-5 max-w-md text-4xl font-semibold leading-[1] tracking-[-0.05em] md:text-5xl">
                Clear from first assessment to final commissioning.
            </h2>

            <p class="mt-6 max-w-sm leading-7 text-white/40">
                A structured process keeps each project focused, transparent,
                and technically sound.
            </p>

        </div>


        <div class="border-t border-white/10">

            @foreach ([
                [
                    'number' => '01',
                    'title' => 'Assess',
                    'body' => 'We review energy usage, property conditions, available space, electrical setup, and project goals.'
                ],
                [
                    'number' => '02',
                    'title' => 'Engineer',
                    'body' => 'System sizing, equipment, layout, storage, and projected performance are designed around your needs.'
                ],
                [
                    'number' => '03',
                    'title' => 'Install',
                    'body' => 'Our technical team installs, integrates, tests, and commissions the system.'
                ],
                [
                    'number' => '04',
                    'title' => 'Support',
                    'body' => 'Monitoring, maintenance, and technical support help keep your system performing over time.'
                ],
            ] as $step)

                <div class="group grid gap-5 border-b border-white/10 py-8 sm:grid-cols-[65px_.65fr_1fr]">

                    <span class="text-sm font-semibold text-gold">
                        {{ $step['number'] }}
                    </span>

                    <h3 class="text-xl font-semibold transition group-hover:text-gold">
                        {{ $step['title'] }}
                    </h3>

                    <p class="leading-7 text-white/40">
                        {{ $step['body'] }}
                    </p>

                </div>

            @endforeach

        </div>

    </div>

</section>


{{-- ==========================================================
    CTA
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
                        Find the Right Solution
                    </p>

                    <h2 class="mt-5 text-4xl font-semibold leading-[0.98] tracking-[-0.055em] text-[#10271C] md:text-6xl">
                        Start with your energy needs, not a package.
                    </h2>

                    <p class="mt-5 max-w-xl leading-7 text-[#48554C]">
                        Tell us about your property, electricity usage, and goals.
                        We'll help you understand which solution makes sense.
                    </p>

                </div>

                <a
                    href="{{ route('contact') }}"
                    class="group inline-flex shrink-0 items-center justify-center gap-3 rounded-xl bg-[#10271C] px-7 py-4 text-sm font-bold text-white transition duration-300 hover:-translate-y-1 hover:bg-[#173A29] hover:shadow-xl"
                >
                    Talk to SOLARA

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

            </div>

        </div>

    </div>

</section>

@endsection