@extends('layouts.app')

@section('title', 'About Us | SOLARA Energy Solutions')
@section('meta_description', 'Learn about SOLARA Energy Solutions — a Philippine renewable-energy company dedicated to making clean, reliable solar power accessible to Filipino homes and businesses.')

@section('content')

{{-- ==========================================================
    HERO
========================================================== --}}
<section class="relative overflow-hidden bg-[#0B1B13] text-white">

    <div class="pointer-events-none absolute inset-0">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_75%_25%,rgba(214,176,71,0.12),transparent_35%)]"></div>
        <div class="absolute -right-40 -top-40 h-[500px] w-[500px] rounded-full bg-gold/10 blur-[120px]"></div>
    </div>

    <div class="relative mx-auto w-[90%] max-w-[1280px] py-24 lg:py-32">

        <div class="grid gap-14 lg:grid-cols-[0.8fr_1.2fr] lg:items-end lg:gap-24">

            <div>

                <div class="inline-flex items-center gap-3 rounded-full border border-white/10 bg-white/[0.04] px-4 py-2">
                    <span class="h-2 w-2 rounded-full bg-gold"></span>

                    <span class="text-[11px] font-bold uppercase tracking-[0.22em] text-white/60">
                        About SOLARA
                    </span>
                </div>

            </div>

            <div>

                <h1 class="max-w-4xl text-5xl font-semibold leading-[0.98] tracking-[-0.05em] sm:text-6xl lg:text-7xl">
                    Building a cleaner
                    <span class="text-gold">energy future.</span>
                </h1>

                <p class="mt-7 max-w-2xl text-base leading-8 text-white/55 md:text-lg">
                    We help Filipino homes and businesses adopt reliable solar energy
                    systems designed around real-world needs and long-term performance.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- ==========================================================
    OUR STORY
========================================================== --}}
<section class="bg-[#F7F8F4] py-24 lg:py-32">

    <div class="mx-auto grid w-[90%] max-w-[1280px] gap-14 lg:grid-cols-[0.8fr_1.2fr] lg:gap-24">

        <div>

            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#173C2B] text-gold">
                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                    <circle cx="12" cy="12" r="9"/>
                    <path d="M12 8v4"/>
                    <path d="M12 16h.01"/>
                </svg>
            </div>

            <p class="mt-6 text-xs font-bold uppercase tracking-[0.22em] text-[#A27E25]">
                Who We Are
            </p>

            <h2 class="mt-5 max-w-sm text-4xl font-semibold leading-[1.08] tracking-[-0.04em] text-[#132D21]">
                Solar made practical, reliable, and accessible.
            </h2>

        </div>

        <div class="space-y-7">

            <p class="text-xl leading-9 text-[#34463C] md:text-2xl md:leading-10">
                SOLARA Energy Solutions is a Philippine renewable-energy company
                helping homes, businesses, and organizations transition to smarter
                and more sustainable power.
            </p>

            <p class="max-w-3xl leading-8 text-[#69736D]">
                We design, install, and maintain solar systems based on each client's
                actual energy requirements. Every project focuses on performance,
                practicality, and long-term value.
            </p>

        </div>

    </div>

</section>


{{-- ==========================================================
    IMAGE
========================================================== --}}
<section class="bg-[#F7F8F4] pb-24 lg:pb-32">

    <div class="mx-auto w-[90%] max-w-[1280px]">

        <div class="group relative overflow-hidden rounded-[2rem]">

            <img
                src="{{ asset('images/about-page.png') }}"
                alt="SOLARA technicians installing solar panels"
                class="h-[420px] w-full object-cover transition duration-700 group-hover:scale-[1.02] sm:h-[520px] lg:h-[620px]"
                loading="lazy"
            >

            <div class="absolute inset-0 bg-gradient-to-t from-[#07150E]/90 via-[#07150E]/10 to-transparent"></div>

            <div class="absolute bottom-0 left-0 p-7 sm:p-10 lg:p-12">

                <p class="text-xs font-bold uppercase tracking-[0.2em] text-gold">
                    Powering Progress
                </p>

                <h2 class="mt-4 max-w-2xl text-3xl font-semibold text-white sm:text-4xl lg:text-5xl">
                    Local expertise. Built for Philippine energy needs.
                </h2>

            </div>

        </div>

    </div>

</section>


{{-- ==========================================================
    MISSION / VISION
========================================================== --}}
<section class="bg-white py-24 lg:py-32">

    <div class="mx-auto w-[90%] max-w-[1280px]">

        <div class="mb-14">
            <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#A27E25]">
                What Guides Us
            </p>

            <h2 class="mt-5 max-w-3xl text-4xl font-semibold tracking-[-0.04em] text-[#132D21] md:text-5xl">
                A clear purpose behind every project.
            </h2>
        </div>

        <div class="grid gap-5 lg:grid-cols-2">

            <article class="flex min-h-[420px] flex-col rounded-[2rem] bg-[#173C2B] p-8 text-white sm:p-10">

                <div class="flex h-12 w-12 items-center justify-center rounded-xl border border-white/10 bg-white/[0.06] text-gold">
                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                        <circle cx="12" cy="12" r="9"/>
                        <circle cx="12" cy="12" r="4"/>
                        <path d="M12 3v3M12 18v3M3 12h3M18 12h3"/>
                    </svg>
                </div>

                <div class="mt-auto">

                    <p class="text-xs font-bold uppercase tracking-[0.2em] text-gold">
                        Our Mission
                    </p>

                    <h3 class="mt-4 text-3xl font-semibold">
                        Make solar energy practical and accessible.
                    </h3>

                    <p class="mt-5 leading-7 text-white/55">
                        To provide reliable solar energy solutions that help Filipino
                        homes and businesses reduce costs while contributing to a cleaner environment.
                    </p>

                </div>

            </article>


            <article class="flex min-h-[420px] flex-col rounded-[2rem] bg-[#F0E9D4] p-8 text-[#173C2B] sm:p-10">

                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#173C2B]/10">
                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                        <path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"/>
                        <circle cx="12" cy="12" r="2.5"/>
                    </svg>
                </div>

                <div class="mt-auto">

                    <p class="text-xs font-bold uppercase tracking-[0.2em] text-[#8E6D1C]">
                        Our Vision
                    </p>

                    <h3 class="mt-4 text-3xl font-semibold">
                        Clean energy as a normal part of everyday life.
                    </h3>

                    <p class="mt-5 leading-7 text-[#59665E]">
                        To help build a future where renewable energy becomes a dependable
                        standard source of power across the Philippines.
                    </p>

                </div>

            </article>

        </div>

    </div>

</section>


{{-- ==========================================================
    VALUES
========================================================== --}}
<section class="bg-[#10271C] py-24 text-white lg:py-32">

    <div class="mx-auto w-[90%] max-w-[1280px]">

        <div class="grid gap-14 lg:grid-cols-[0.7fr_1.3fr] lg:gap-24">

            <div>

                <p class="text-xs font-bold uppercase tracking-[0.22em] text-gold">
                    Our Values
                </p>

                <h2 class="mt-5 text-4xl font-semibold tracking-[-0.04em] md:text-5xl">
                    Principles that shape how we work.
                </h2>

            </div>


            <div class="space-y-3">

                @foreach ([
                    ['title' => 'Sustainability', 'icon' => 'leaf', 'body' => 'Long-term environmental and economic value.'],
                    ['title' => 'Reliability', 'icon' => 'shield', 'body' => 'Systems and service designed for dependable performance.'],
                    ['title' => 'Transparency', 'icon' => 'eye', 'body' => 'Clear communication that supports informed decisions.'],
                    ['title' => 'Innovation', 'icon' => 'bulb', 'body' => 'Continuous improvement in design and delivery.'],
                    ['title' => 'Community', 'icon' => 'users', 'body' => 'Better energy access for stronger communities.'],
                ] as $value)

                    <div class="grid gap-5 border-b border-white/10 py-6 sm:grid-cols-[55px_1fr]">

                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-white/[0.06] text-gold">

                            @switch($value['icon'])
                                @case('leaf')
                                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                        <path d="M20 4C12 4 6 8 5 16c5 1 10-1 13-5 2-3 2-7 2-7Z"/>
                                        <path d="M5 20c2-5 6-8 11-11"/>
                                    </svg>
                                    @break

                                @case('shield')
                                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                        <path d="M12 3 4 6v5c0 5 3 8.8 8 10 5-1.2 8-5 8-10V6l-8-3Z"/>
                                        <path d="m9 12 2 2 4-4"/>
                                    </svg>
                                    @break

                                @case('eye')
                                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                        <path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"/>
                                        <circle cx="12" cy="12" r="2.5"/>
                                    </svg>
                                    @break

                                @case('bulb')
                                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                        <path d="M9 18h6"/>
                                        <path d="M10 22h4"/>
                                        <path d="M8 14a7 7 0 1 1 8 0c-1 .8-1 2-1 2H9s0-1.2-1-2Z"/>
                                    </svg>
                                    @break

                                @case('users')
                                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                        <circle cx="9" cy="8" r="3"/>
                                        <circle cx="17" cy="9" r="2"/>
                                        <path d="M3 20c0-4 2.5-6 6-6s6 2 6 6"/>
                                        <path d="M15 15c3 0 5 1.5 5 5"/>
                                    </svg>
                                    @break
                            @endswitch

                        </div>

                        <div>

                            <h3 class="text-lg font-semibold">
                                {{ $value['title'] }}
                            </h3>

                            <p class="mt-2 leading-7 text-white/45">
                                {{ $value['body'] }}
                            </p>

                        </div>

                    </div>

                @endforeach

            </div>

        </div>

    </div>

</section>


{{-- ==========================================================
    CTA
========================================================== --}}
<section class="bg-[#F7F8F4] py-20 lg:py-28">

    <div class="mx-auto w-[90%] max-w-[1280px]">

        <div class="rounded-[2rem] bg-gold px-7 py-14 sm:px-12 lg:px-16">

            <div class="flex flex-col justify-between gap-10 lg:flex-row lg:items-end">

                <div>

                    <div class="mb-5 flex h-11 w-11 items-center justify-center rounded-xl bg-[#10271C] text-gold">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path d="M13 2 4 14h7l-1 8 9-12h-7l1-8Z"/>
                        </svg>
                    </div>

                    <h2 class="max-w-3xl text-4xl font-semibold text-[#10271C] md:text-5xl">
                        Ready to explore what solar can do for you?
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