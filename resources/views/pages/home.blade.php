@extends('layouts.app')

@section('title', 'SOLARA Energy Solutions | Powering Tomorrow')
@section('meta_description', 'SOLARA Energy Solutions delivers reliable, affordable solar power systems for homes, businesses, and organizations across the Philippines.')

@section('content')

{{-- ==========================================================
    HERO
========================================================== --}}
<section class="relative isolate overflow-hidden bg-[#0B1B13] text-white">

    <div class="pointer-events-none absolute inset-0 -z-10">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_75%_30%,rgba(214,176,71,0.12),transparent_35%)]"></div>
        <div class="absolute -right-40 top-0 h-[500px] w-[500px] rounded-full bg-gold/10 blur-[120px]"></div>
    </div>

    <div class="mx-auto grid min-h-[760px] w-[90%] max-w-[1280px] items-center gap-16 py-20 lg:grid-cols-[1.05fr_.95fr] lg:py-24">

        {{-- LEFT --}}
        <div class="relative z-10">

            <div class="mb-7 inline-flex items-center gap-3 rounded-full border border-white/10 bg-white/[0.04] px-4 py-2 backdrop-blur">
                <span class="relative flex h-2 w-2">
                    <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-gold opacity-75"></span>
                    <span class="relative inline-flex h-2 w-2 rounded-full bg-gold"></span>
                </span>

                <span class="text-[11px] font-bold uppercase tracking-[0.22em] text-white/70">
                    Renewable Energy Solutions
                </span>
            </div>

            <h1 class="max-w-3xl text-[clamp(3.2rem,6vw,5.7rem)] font-semibold leading-[0.95] tracking-[-0.055em]">
                Powering a
                <span class="text-gold">brighter</span>
                tomorrow.
            </h1>

            <p class="mt-8 max-w-2xl text-base leading-8 text-white/60 md:text-lg">
                Smart, reliable solar energy systems engineered for homes,
                businesses, and organizations across the Philippines.
            </p>

            <div class="mt-10 flex flex-col gap-3 sm:flex-row">

                <a
                    href="{{ route('services') }}"
                    class="group inline-flex items-center justify-center gap-3 rounded-xl bg-gold px-6 py-3.5 text-sm font-bold text-[#142018] transition duration-300 hover:-translate-y-0.5 hover:bg-[#E4C45F] hover:shadow-[0_15px_40px_rgba(214,176,71,0.18)]"
                >
                    Explore Our Services

                    <svg
                        class="h-4 w-4 transition-transform group-hover:translate-x-1"
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
                    href="{{ route('contact') }}"
                    class="inline-flex items-center justify-center rounded-xl border border-white/15 bg-white/[0.03] px-6 py-3.5 text-sm font-bold text-white transition hover:border-white/30 hover:bg-white/[0.07]"
                >
                    Request a Consultation
                </a>

            </div>

            <div class="mt-12 flex flex-wrap gap-x-8 gap-y-4 border-t border-white/10 pt-7 text-sm text-white/50">

                @foreach ([
                    'Professional Installation',
                    'End-to-End Support',
                    'Tailored Energy Systems',
                ] as $item)

                    <div class="flex items-center gap-2">
                        <svg
                            class="h-4 w-4 text-gold"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            aria-hidden="true"
                        >
                            <path d="M20 6L9 17l-5-5"/>
                        </svg>

                        {{ $item }}
                    </div>

                @endforeach

            </div>

        </div>


        {{-- RIGHT IMAGE --}}
        <div class="relative hidden lg:block">

            <div class="relative ml-auto w-full max-w-[540px]">

                <div class="overflow-hidden rounded-[2rem] border border-white/10 bg-white/5 p-2 shadow-2xl">

                    <div class="relative h-[560px] overflow-hidden rounded-[1.6rem]">

                        <img
                            src="{{ asset('images/home-page.png') }}"
                            alt="Solar panels overlooking a city at sunset"
                            class="h-full w-full object-cover"
                            fetchpriority="high"
                        >

                        <div class="absolute inset-0 bg-gradient-to-t from-[#08130E] via-[#08130E]/10 to-transparent"></div>

                        <div class="absolute bottom-8 left-8 right-8">

                            <span class="inline-flex rounded-full border border-white/10 bg-[#10271C]/70 px-3 py-1.5 text-[10px] font-bold uppercase tracking-[0.18em] text-gold backdrop-blur">
                                Clean Energy
                            </span>

                            <p class="mt-4 max-w-sm text-2xl font-semibold leading-snug tracking-tight">
                                Engineered energy solutions built for long-term performance.
                            </p>

                        </div>

                    </div>

                </div>


                {{-- FLOATING POWER CARD --}}
                <div class="absolute -left-16 top-14 w-52 rounded-2xl border border-white/10 bg-[#102219]/90 p-5 shadow-2xl backdrop-blur-xl">

                    <div class="mb-4 flex h-10 w-10 items-center justify-center rounded-xl bg-gold/10 text-gold">
                        <svg
                            class="h-5 w-5"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            aria-hidden="true"
                        >
                            <path d="M13 2L4 14h7l-1 8 9-12h-7l1-8Z"/>
                        </svg>
                    </div>

                    <p class="text-3xl font-bold">
                        25<span class="text-gold">MW</span>
                    </p>

                    <p class="mt-1 text-xs leading-5 text-white/45">
                        Solar capacity deployed
                    </p>

                </div>


                {{-- STATUS CARD --}}
                <div class="absolute -bottom-8 -right-5 w-56 rounded-2xl border border-white/10 bg-[#102219]/90 p-5 shadow-2xl backdrop-blur-xl">

                    <div class="flex items-center justify-between">

                        <div>
                            <p class="text-[10px] font-bold uppercase tracking-[0.15em] text-white/40">
                                System Status
                            </p>

                            <p class="mt-1 text-sm font-semibold">
                                Generating Power
                            </p>
                        </div>

                        <span class="relative flex h-3 w-3">
                            <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-gold opacity-40"></span>
                            <span class="relative inline-flex h-3 w-3 rounded-full bg-gold"></span>
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- ==========================================================
    METRICS
========================================================== --}}
<section class="border-b border-[#E7E9E5] bg-white">

    <div class="mx-auto w-[90%] max-w-[1280px]">

        <div class="grid grid-cols-2 divide-x divide-y divide-[#E7E9E5] lg:grid-cols-4 lg:divide-y-0">

            @foreach ([
                ['value' => '500+', 'label' => 'Systems Installed', 'icon' => 'solar'],
                ['value' => '25 MW', 'label' => 'Capacity Deployed', 'icon' => 'bolt'],
                ['value' => '15+', 'label' => 'Years Experience', 'icon' => 'clock'],
                ['value' => '24/7', 'label' => 'Technical Support', 'icon' => 'support'],
            ] as $stat)

                <div class="px-5 py-9 text-center transition hover:bg-[#F8F8F4]">

                    <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-[#173C2B]/10 text-[#173C2B]">

                        @switch($stat['icon'])

                            @case('solar')
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                    <path d="M3 14h18"/>
                                    <path d="m5 14 2-7h10l2 7"/>
                                    <path d="M7 10h10M12 7v7"/>
                                    <circle cx="19" cy="5" r="2"/>
                                </svg>
                                @break

                            @case('bolt')
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                    <path d="M13 2 4 14h7l-1 8 9-12h-7l1-8Z"/>
                                </svg>
                                @break

                            @case('clock')
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                    <circle cx="12" cy="12" r="9"/>
                                    <path d="M12 7v5l3 2"/>
                                </svg>
                                @break

                            @case('support')
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                    <path d="M4 13v-1a8 8 0 0 1 16 0v1"/>
                                    <path d="M4 13h3v6H5a1 1 0 0 1-1-1v-5Z"/>
                                    <path d="M20 13h-3v6h2a1 1 0 0 0 1-1v-5Z"/>
                                </svg>
                                @break

                        @endswitch

                    </div>

                    <p class="text-3xl font-bold tracking-[-0.04em] text-[#153326] md:text-4xl">
                        {{ $stat['value'] }}
                    </p>

                    <p class="mt-2 text-[11px] font-semibold uppercase tracking-[0.16em] text-[#7A847E]">
                        {{ $stat['label'] }}
                    </p>

                </div>

            @endforeach

        </div>

    </div>

</section>


{{-- ==========================================================
    WHY SOLARA
========================================================== --}}
<section class="bg-[#F7F8F4] py-24 lg:py-32">

    <div class="mx-auto grid w-[90%] max-w-[1280px] gap-14 lg:grid-cols-[0.8fr_1.2fr] lg:gap-24">

        <div>

            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#173C2B] text-gold">
                <svg
                    class="h-6 w-6"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.7"
                >
                    <path d="M12 3 4 6v5c0 5.25 3.4 8.9 8 10 4.6-1.1 8-4.75 8-10V6l-8-3Z"/>
                    <path d="m9 12 2 2 4-4"/>
                </svg>
            </div>

            <p class="mt-6 text-xs font-bold uppercase tracking-[0.22em] text-[#A27E25]">
                Why SOLARA
            </p>

        </div>


        <div>

            <h2 class="max-w-4xl text-4xl font-semibold leading-[1.1] tracking-[-0.045em] text-[#132D21] md:text-5xl">
                Solar shouldn't feel complicated.
                <span class="text-[#8A948E]">
                    We make the transition simple, strategic, and built for the long term.
                </span>
            </h2>

            <div class="mt-10 grid gap-5 md:grid-cols-2">

                <div class="rounded-2xl border border-[#DEE3DE] bg-white p-6">

                    <div class="mb-5 flex h-10 w-10 items-center justify-center rounded-xl bg-[#173C2B]/10 text-[#173C2B]">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                            <path d="M4 20V10l8-6 8 6v10"/>
                            <path d="M8 20v-6h8v6"/>
                        </svg>
                    </div>

                    <h3 class="font-bold text-[#173C2B]">
                        Complete Project Support
                    </h3>

                    <p class="mt-3 leading-7 text-[#667069]">
                        From initial consultation and design to installation and after-sales support.
                    </p>

                </div>


                <div class="rounded-2xl border border-[#DEE3DE] bg-white p-6">

                    <div class="mb-5 flex h-10 w-10 items-center justify-center rounded-xl bg-[#173C2B]/10 text-[#173C2B]">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                            <path d="M3 17 8 12l4 4 8-9"/>
                            <path d="M15 7h5v5"/>
                        </svg>
                    </div>

                    <h3 class="font-bold text-[#173C2B]">
                        Performance Focused
                    </h3>

                    <p class="mt-3 leading-7 text-[#667069]">
                        Every system is designed around actual energy requirements and long-term value.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- ==========================================================
    SERVICES
========================================================== --}}
<section class="bg-white py-24 lg:py-32">

    <div class="mx-auto w-[90%] max-w-[1280px]">

        <div class="mb-14">
            <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#A27E25]">
                What We Do
            </p>

            <h2 class="mt-5 max-w-2xl text-4xl font-semibold tracking-[-0.045em] text-[#132D21] md:text-5xl">
                Energy solutions built around your needs.
            </h2>
        </div>


        <div class="grid gap-5 lg:grid-cols-3">

            @foreach ([
                [
                    'title' => 'Residential Solar',
                    'body' => 'High-performance solar systems designed for homes and residential properties.',
                    'route' => 'services.residential',
                    'icon' => 'home',
                ],
                [
                    'title' => 'Commercial Solar',
                    'body' => 'Scalable solar solutions engineered for businesses and commercial facilities.',
                    'route' => 'services.commercial',
                    'icon' => 'building',
                ],
                [
                    'title' => 'Battery Storage',
                    'body' => 'Store excess solar energy and keep dependable backup power available.',
                    'route' => 'services.battery',
                    'icon' => 'battery',
                ],
            ] as $service)

                <article class="group flex min-h-[400px] flex-col rounded-[1.75rem] border border-[#E1E5DF] bg-[#F8F9F6] p-8 transition duration-300 hover:-translate-y-1 hover:shadow-[0_18px_50px_rgba(18,45,33,0.08)]">

                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#173C2B] text-gold">

                        @if ($service['icon'] === 'home')
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <path d="M3 11l9-7 9 7"/>
                                <path d="M5 10v10h14V10"/>
                                <path d="M9 20v-6h6v6"/>
                            </svg>
                        @elseif ($service['icon'] === 'building')
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <path d="M4 21V7l8-4v18"/>
                                <path d="M12 9h8v12"/>
                                <path d="M8 9v.01M8 13v.01M8 17v.01"/>
                            </svg>
                        @else
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <rect x="3" y="6" width="16" height="12" rx="2"/>
                                <path d="M21 10v4"/>
                                <path d="M8 12h6M11 9v6"/>
                            </svg>
                        @endif

                    </div>

                    <div class="mt-auto">

                        <h3 class="text-3xl font-semibold tracking-[-0.03em] text-[#173C2B]">
                            {{ $service['title'] }}
                        </h3>

                        <p class="mt-4 leading-7 text-[#69736D]">
                            {{ $service['body'] }}
                        </p>

                        @if (Route::has($service['route']))
                            <a
                                href="{{ route($service['route']) }}"
                                class="mt-7 inline-flex items-center gap-2 text-sm font-bold text-[#173C2B]"
                            >
                                Learn more
                                <span class="transition-transform group-hover:translate-x-1">→</span>
                            </a>
                        @endif

                    </div>

                </article>

            @endforeach

        </div>

    </div>

</section>


{{-- ==========================================================
    CTA
========================================================== --}}
<section class="bg-[#F7F8F4] py-20 lg:py-28">

    <div class="mx-auto w-[90%] max-w-[1280px]">

        <div class="relative overflow-hidden rounded-[2rem] bg-gold px-7 py-14 sm:px-12 lg:px-16">

            <div class="flex flex-col justify-between gap-10 lg:flex-row lg:items-end">

                <div class="max-w-3xl">

                    <div class="mb-5 flex h-11 w-11 items-center justify-center rounded-xl bg-[#10271C] text-gold">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path d="M13 2 4 14h7l-1 8 9-12h-7l1-8Z"/>
                        </svg>
                    </div>

                    <h2 class="text-4xl font-semibold leading-[1.05] tracking-[-0.045em] text-[#10271C] md:text-5xl">
                        Ready to make energy work smarter for you?
                    </h2>

                </div>

                <a
                    href="{{ route('contact') }}"
                    class="inline-flex items-center justify-center rounded-xl bg-[#10271C] px-7 py-4 text-sm font-bold text-white transition hover:-translate-y-1"
                >
                    Talk to SOLARA →
                </a>

            </div>

        </div>

    </div>

</section>

@endsection