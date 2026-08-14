@extends('layouts.app')

@section('title', 'Services | SOLARA Energy Solutions')
@section('meta_description', 'Explore SOLARA Energy Solutions\' full range of services — residential and commercial solar, battery storage, maintenance, off-grid systems, and net metering consultation.')

@section('content')

{{-- ==========================================================
    HERO
========================================================== --}}
<section class="relative overflow-hidden bg-[#0B1B13] text-white">

    <div class="pointer-events-none absolute inset-0">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_78%_25%,rgba(214,176,71,0.12),transparent_35%)]"></div>
        <div class="absolute -right-40 -top-40 h-[500px] w-[500px] rounded-full bg-gold/10 blur-[120px]"></div>
    </div>

    <div class="relative mx-auto w-[90%] max-w-[1280px] py-24 lg:py-32">

        <div class="grid gap-12 lg:grid-cols-[0.8fr_1.2fr] lg:items-end">

            <div>
                <div class="inline-flex items-center gap-3 rounded-full border border-white/10 bg-white/[0.04] px-4 py-2">
                    <span class="h-2 w-2 rounded-full bg-gold"></span>
                    <span class="text-[11px] font-bold uppercase tracking-[0.22em] text-white/60">
                        Solar Energy Services
                    </span>
                </div>
            </div>

            <div>

                <h1 class="text-5xl font-semibold leading-[0.98] tracking-[-0.05em] sm:text-6xl lg:text-7xl">
                    Energy solutions built for
                    <span class="text-gold">real-world needs.</span>
                </h1>

                <p class="mt-7 max-w-2xl leading-8 text-white/55 md:text-lg">
                    Residential, commercial, storage, maintenance, and off-grid solutions
                    designed around the way you use energy.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- ==========================================================
    SERVICE IMAGE
========================================================== --}}
<section class="bg-[#F7F8F4] py-20 lg:py-24">

    <div class="mx-auto w-[90%] max-w-[1280px]">

        <div class="relative overflow-hidden rounded-[2rem]">

            <img
                src="{{ asset('images/service-page.png') }}"
                alt="SOLARA technicians providing solar services"
                class="h-[420px] w-full object-cover lg:h-[560px]"
                loading="lazy"
            >

            <div class="absolute inset-0 bg-gradient-to-r from-[#07150E]/85 via-[#07150E]/40 to-transparent"></div>

            <div class="absolute inset-0 flex items-end p-8 lg:items-center lg:p-14">

                <div class="max-w-xl">

                    <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-xl border border-white/15 bg-white/10 text-gold backdrop-blur">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                            <path d="M14.7 6.3a4 4 0 0 0-5-5L7.5 3.5l3 3L8 9 5 6 2.8 8.2a4 4 0 0 0 5 5L17 22l5-5-8.7-8.7"/>
                        </svg>
                    </div>

                    <h2 class="text-3xl font-semibold text-white sm:text-4xl lg:text-5xl">
                        From planning to installation and beyond.
                    </h2>

                    <p class="mt-5 leading-7 text-white/60">
                        Professional design, installation, maintenance, and technical support.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- ==========================================================
    CORE SERVICES
========================================================== --}}
<section class="bg-white py-24 lg:py-32">

    <div class="mx-auto w-[90%] max-w-[1280px]">

        <div class="mb-14">

            <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#A27E25]">
                Core Solutions
            </p>

            <h2 class="mt-5 text-4xl font-semibold tracking-[-0.04em] text-[#132D21] md:text-5xl">
                Designed around how you use energy.
            </h2>

        </div>


        <div class="grid gap-5 lg:grid-cols-3">

            @foreach ([
                ['title' => 'Residential Solar', 'icon' => 'home', 'route' => 'services.residential', 'body' => 'Solar systems designed for homes and residential properties.'],
                ['title' => 'Commercial Solar', 'icon' => 'building', 'route' => 'services.commercial', 'body' => 'Scalable solar systems engineered for commercial facilities.'],
                ['title' => 'Battery Storage', 'icon' => 'battery', 'route' => 'services.battery', 'body' => 'Energy storage and backup solutions for greater reliability.'],
            ] as $service)

                <article class="group flex min-h-[420px] flex-col rounded-[2rem] border border-[#E1E5DF] bg-[#F8F9F6] p-8 transition hover:-translate-y-1 hover:shadow-xl">

                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#173C2B] text-gold">

                        @if($service['icon'] === 'home')
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <path d="M3 11l9-7 9 7"/>
                                <path d="M5 10v10h14V10"/>
                            </svg>
                        @elseif($service['icon'] === 'building')
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <path d="M4 21V7l8-4v18"/>
                                <path d="M12 9h8v12"/>
                            </svg>
                        @else
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <rect x="3" y="6" width="16" height="12" rx="2"/>
                                <path d="M21 10v4M8 12h6M11 9v6"/>
                            </svg>
                        @endif

                    </div>

                    <div class="mt-auto">

                        <h3 class="text-3xl font-semibold text-[#173C2B]">
                            {{ $service['title'] }}
                        </h3>

                        <p class="mt-4 leading-7 text-[#69736D]">
                            {{ $service['body'] }}
                        </p>

                        @if(Route::has($service['route']))
                            <a href="{{ route($service['route']) }}"
                               class="mt-7 inline-flex items-center gap-2 text-sm font-bold text-[#173C2B]">
                                Learn more →
                            </a>
                        @endif

                    </div>

                </article>

            @endforeach

        </div>

    </div>

</section>


{{-- ==========================================================
    SUPPORTING SERVICES
========================================================== --}}
<section class="bg-[#F7F8F4] py-24 lg:py-32">

    <div class="mx-auto w-[90%] max-w-[1280px]">

        <div class="grid gap-14 lg:grid-cols-[0.7fr_1.3fr] lg:gap-24">

            <div>

                <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#A27E25]">
                    Supporting Services
                </p>

                <h2 class="mt-5 text-4xl font-semibold text-[#132D21] md:text-5xl">
                    Support beyond installation.
                </h2>

            </div>


            <div class="space-y-3">

                @foreach ([
                    ['title' => 'Solar Maintenance', 'icon' => 'wrench', 'body' => 'Cleaning, inspection, performance testing, and electrical checks.'],
                    ['title' => 'Off-Grid & Hybrid Systems', 'icon' => 'signal', 'body' => 'Independent and hybrid power solutions for remote locations.'],
                    ['title' => 'Net Metering & Consultation', 'icon' => 'clipboard', 'body' => 'Planning, permitting, ROI analysis, and net metering support.'],
                ] as $service)

                    <article class="grid gap-5 border-b border-[#DDE2DD] py-7 sm:grid-cols-[55px_1fr]">

                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-[#173C2B] text-gold">

                            @if($service['icon'] === 'wrench')
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                    <path d="M14.7 6.3a4 4 0 0 0-5-5L7.5 3.5l3 3L8 9 5 6 2.8 8.2a4 4 0 0 0 5 5L17 22l5-5-8.7-8.7"/>
                                </svg>
                            @elseif($service['icon'] === 'signal')
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                    <path d="M5 18h14"/>
                                    <path d="M8 14a6 6 0 0 1 8 0"/>
                                    <path d="M5 10a10 10 0 0 1 14 0"/>
                                    <circle cx="12" cy="18" r="1"/>
                                </svg>
                            @else
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                    <rect x="5" y="4" width="14" height="17" rx="2"/>
                                    <path d="M9 4V2h6v2"/>
                                    <path d="M8 9h8M8 13h8M8 17h5"/>
                                </svg>
                            @endif

                        </div>

                        <div>

                            <h3 class="text-2xl font-semibold text-[#173C2B]">
                                {{ $service['title'] }}
                            </h3>

                            <p class="mt-3 leading-7 text-[#69736D]">
                                {{ $service['body'] }}
                            </p>

                        </div>

                    </article>

                @endforeach

            </div>

        </div>

    </div>

</section>


{{-- ==========================================================
    CTA
========================================================== --}}
<section class="bg-white py-20 lg:py-28">

    <div class="mx-auto w-[90%] max-w-[1280px]">

        <div class="rounded-[2rem] bg-gold px-7 py-14 sm:px-12 lg:px-16">

            <div class="flex flex-col justify-between gap-10 lg:flex-row lg:items-end">

                <div>

                    <div class="mb-5 flex h-11 w-11 items-center justify-center rounded-xl bg-[#10271C] text-gold">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path d="M12 3 4 6v5c0 5 3 8.8 8 10 5-1.2 8-5 8-10V6l-8-3Z"/>
                        </svg>
                    </div>

                    <h2 class="max-w-3xl text-4xl font-semibold text-[#10271C] md:text-5xl">
                        Not sure which solar solution fits your property?
                    </h2>

                </div>

                <a href="{{ route('contact') }}"
                   class="rounded-xl bg-[#10271C] px-7 py-4 text-sm font-bold text-white">
                    Talk to SOLARA →
                </a>

            </div>

        </div>

    </div>

</section>

@endsection