@extends('layouts.app')

@section('title', 'About Us | SOLARA Energy Solutions')
@section('meta_description', 'Learn about SOLARA Energy Solutions — a Philippine renewable-energy company dedicated to making clean, reliable solar power accessible to Filipino homes and businesses.')

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
                    About SOLARA
                </p>
            </div>

        </div>


        <div>

            <h1 class="max-w-5xl text-5xl font-semibold leading-[0.92] tracking-[-0.06em] sm:text-6xl lg:text-7xl">
                Energy independence
                <span class="text-gold">
                    should be practical.
                </span>
            </h1>

            <div class="mt-8 grid gap-8 border-t border-white/10 pt-8 md:grid-cols-[1fr_auto] md:items-end">

                <p class="max-w-2xl text-base leading-8 text-white/50 md:text-lg">
                    SOLARA Energy Solutions helps Filipino homes, businesses, and
                    organizations transition to renewable energy through thoughtful
                    engineering, practical design, and long-term technical support.
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
                        <path d="M12 3 4 6v5c0 5 3.2 8.7 8 10 4.8-1.3 8-5 8-10V6l-8-3Z"/>
                        <path d="m9 12 2 2 4-4"/>
                    </svg>

                    <span class="text-[10px] font-bold uppercase tracking-[0.18em]">
                        Engineered for the Philippines
                    </span>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- ==========================================================
    OUR STORY
========================================================== --}}
<section class="bg-[#F5F6F1] py-28 lg:py-36">

    <div class="mx-auto grid w-[90%] max-w-[1320px] gap-16 lg:grid-cols-[0.62fr_1.38fr] lg:gap-28">

        <div>

            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#173C2B] text-gold">

                <svg
                    class="h-6 w-6"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.7"
                    aria-hidden="true"
                >
                    <path d="M20 4C12 4 6 8 5 16c5 1 10-1 13-5 2-3 2-7 2-7Z"/>
                    <path d="M5 20c2-5 6-8 11-11"/>
                </svg>

            </div>

            <div class="mt-6 flex items-center gap-4">
                <span class="h-px w-8 bg-gold"></span>

                <p class="text-[10px] font-bold uppercase tracking-[0.24em] text-[#A27E25]">
                    Our Story
                </p>
            </div>

        </div>


        <div>

            <h2 class="max-w-5xl text-4xl font-semibold leading-[1.03] tracking-[-0.05em] text-[#142D21] md:text-6xl">
                We don't see solar as a product.
                <span class="text-[#929A94]">
                    We see it as infrastructure.
                </span>
            </h2>

            <div class="mt-12 grid gap-10 border-t border-[#D9DED9] pt-9 md:grid-cols-2">

                <div>

                    <p class="text-[10px] font-bold uppercase tracking-[0.18em] text-[#A27E25]">
                        Built Around Real Usage
                    </p>

                    <p class="mt-4 leading-8 text-[#667069]">
                        Every system begins with actual energy consumption,
                        site conditions, available space, and the customer's
                        long-term goals.
                    </p>

                </div>

                <div>

                    <p class="text-[10px] font-bold uppercase tracking-[0.18em] text-[#A27E25]">
                        Designed for Long-Term Value
                    </p>

                    <p class="mt-4 leading-8 text-[#667069]">
                        We focus on reliable system performance, practical
                        economics, and ongoing support instead of one-size-fits-all
                        packages.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- ==========================================================
    IMAGE FEATURE
========================================================== --}}
<section class="overflow-hidden bg-[#F5F6F1] pb-32">

    <div class="mx-auto w-[90%] max-w-[1320px]">

        <div class="relative min-h-[680px]">

            {{-- IMAGE --}}
            <div class="h-[620px] w-[86%] overflow-hidden rounded-[2.25rem]">

                <img
                    src="{{ asset('images/about-page.png') }}"
                    alt="SOLARA technicians working on a solar energy installation"
                    class="h-full w-full object-cover transition duration-700 hover:scale-[1.02]"
                    loading="lazy"
                >

            </div>


            {{-- FLOATING TECHNICAL PANEL --}}
            <div class="absolute bottom-0 right-0 max-w-[470px] rounded-[2rem] border border-white/10 bg-[#10271C] p-8 text-white shadow-[0_30px_90px_rgba(15,39,28,0.22)] sm:p-10">

                <div class="flex items-center justify-between">

                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-gold/10 text-gold">

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

                    <span class="text-[9px] font-bold uppercase tracking-[0.2em] text-white/25">
                        Engineering First
                    </span>

                </div>

                <p class="mt-8 text-[10px] font-bold uppercase tracking-[0.22em] text-gold">
                    Built for Local Conditions
                </p>

                <h2 class="mt-4 text-3xl font-semibold leading-[1.08] tracking-[-0.04em] sm:text-4xl">
                    Good solar design starts with understanding the environment.
                </h2>

                <p class="mt-5 leading-7 text-white/45">
                    Philippine climate, roof orientation, electrical demand,
                    grid conditions, and energy behavior all influence how a
                    solar system should be engineered.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- ==========================================================
    WHY WE EXIST
========================================================== --}}
<section class="bg-white py-28 lg:py-36">

    <div class="mx-auto grid w-[90%] max-w-[1320px] gap-16 lg:grid-cols-[0.62fr_1.38fr] lg:gap-28">

        <div>

            <div class="flex items-center gap-4">
                <span class="h-px w-10 bg-gold"></span>

                <p class="text-[10px] font-bold uppercase tracking-[0.24em] text-[#A27E25]">
                    Why We Exist
                </p>
            </div>

        </div>


        <div>

            <h2 class="max-w-5xl text-4xl font-semibold leading-[1.03] tracking-[-0.05em] text-[#142D21] md:text-6xl">
                Better energy should give customers
                <span class="text-[#929A94]">
                    more control, not more complexity.
                </span>
            </h2>


            <div class="mt-12 grid gap-5 md:grid-cols-2">

                {{-- COST --}}
                <article class="group border-t border-[#DDE2DD] pt-7">

                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-[#173C2B]/10 text-[#173C2B] transition duration-300 group-hover:bg-[#173C2B] group-hover:text-gold">

                        <svg
                            class="h-5 w-5"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.7"
                            aria-hidden="true"
                        >
                            <path d="M4 18V6"/>
                            <path d="m4 14 5-5 4 3 7-8"/>
                            <path d="M16 4h4v4"/>
                        </svg>

                    </div>

                    <h3 class="mt-6 text-2xl font-semibold tracking-[-0.03em] text-[#173C2B]">
                        Control Energy Costs
                    </h3>

                    <p class="mt-4 leading-7 text-[#69736D]">
                        Solar gives properties the ability to generate part of
                        their own electricity and reduce exposure to rising
                        utility costs.
                    </p>

                </article>


                {{-- RELIABILITY --}}
                <article class="group border-t border-[#DDE2DD] pt-7 md:pl-5">

                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-[#173C2B]/10 text-[#173C2B] transition duration-300 group-hover:bg-[#173C2B] group-hover:text-gold">

                        <svg
                            class="h-5 w-5"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.7"
                            aria-hidden="true"
                        >
                            <path d="M12 3 4 6v5c0 5 3.2 8.7 8 10 4.8-1.3 8-5 8-10V6l-8-3Z"/>
                            <path d="m9 12 2 2 4-4"/>
                        </svg>

                    </div>

                    <h3 class="mt-6 text-2xl font-semibold tracking-[-0.03em] text-[#173C2B]">
                        Improve Energy Resilience
                    </h3>

                    <p class="mt-4 leading-7 text-[#69736D]">
                        Solar and battery systems can provide greater independence
                        and help protect critical loads when grid reliability is limited.
                    </p>

                </article>

            </div>

        </div>

    </div>

</section>


{{-- ==========================================================
    OUR APPROACH
========================================================== --}}
<section class="relative overflow-hidden bg-[#0D2016] py-28 text-white lg:py-36">

    <div class="pointer-events-none absolute -right-40 top-0 h-[450px] w-[450px] rounded-full bg-gold/[0.05] blur-[120px]"></div>

    <div class="relative mx-auto grid w-[90%] max-w-[1320px] gap-16 lg:grid-cols-[0.62fr_1.38fr] lg:gap-28">

        <div>

            <p class="text-[10px] font-bold uppercase tracking-[0.24em] text-gold">
                Our Approach
            </p>

            <h2 class="mt-5 max-w-md text-4xl font-semibold leading-[1] tracking-[-0.05em] md:text-5xl">
                Engineering first.
                Products second.
            </h2>

            <p class="mt-6 max-w-sm leading-7 text-white/40">
                We focus on the energy problem before choosing the equipment.
            </p>

        </div>


        <div class="border-t border-white/10">

            @foreach ([
                [
                    'number' => '01',
                    'title' => 'Understand',
                    'body' => 'We study electricity consumption, site conditions, available space, and long-term goals.'
                ],
                [
                    'number' => '02',
                    'title' => 'Engineer',
                    'body' => 'System size, layout, equipment, storage, and projected performance are designed around your requirements.'
                ],
                [
                    'number' => '03',
                    'title' => 'Deliver',
                    'body' => 'Our team manages installation, electrical integration, testing, commissioning, and documentation.'
                ],
                [
                    'number' => '04',
                    'title' => 'Support',
                    'body' => 'Monitoring, preventive maintenance, and technical support help keep systems performing over time.'
                ],
            ] as $step)

                <div class="group grid gap-5 border-b border-white/10 py-8 sm:grid-cols-[65px_.65fr_1fr]">

                    <span class="text-sm font-semibold text-gold">
                        {{ $step['number'] }}
                    </span>

                    <h3 class="text-xl font-semibold transition duration-300 group-hover:text-gold">
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
    MISSION + VISION
========================================================== --}}
<section class="bg-white py-28 lg:py-36">

    <div class="mx-auto w-[90%] max-w-[1320px]">

        <div class="mb-16 grid gap-8 lg:grid-cols-[0.62fr_1.38fr]">

            <div>

                <div class="flex items-center gap-4">
                    <span class="h-px w-10 bg-gold"></span>

                    <p class="text-[10px] font-bold uppercase tracking-[0.24em] text-[#A27E25]">
                        Direction
                    </p>
                </div>

            </div>

            <h2 class="max-w-5xl text-4xl font-semibold leading-[1] tracking-[-0.05em] text-[#142D21] md:text-6xl">
                A clear purpose today.
                <span class="text-[#929A94]">
                    A bigger ambition for tomorrow.
                </span>
            </h2>

        </div>


        <div class="grid gap-6 lg:grid-cols-[1.18fr_.82fr]">

            {{-- MISSION --}}
            <article class="group relative min-h-[510px] overflow-hidden rounded-[2.25rem] bg-[#10271C] p-9 text-white sm:p-12">

                <div class="absolute -right-28 -top-28 h-80 w-80 rounded-full bg-gold/[0.07] blur-[90px]"></div>

                <div class="relative flex h-full flex-col">

                    <div class="flex items-center justify-between">

                        <div class="flex h-12 w-12 items-center justify-center rounded-xl border border-white/10 bg-white/[0.05] text-gold">

                            <svg
                                class="h-6 w-6"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.7"
                                aria-hidden="true"
                            >
                                <circle cx="12" cy="12" r="9"/>
                                <circle cx="12" cy="12" r="4"/>
                                <path d="M12 3v3M12 18v3M3 12h3M18 12h3"/>
                            </svg>

                        </div>

                        <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-gold">
                            01 / Mission
                        </span>

                    </div>

                    <div class="mt-auto">

                        <h3 class="max-w-xl text-4xl font-semibold leading-[1.05] tracking-[-0.045em]">
                            Make dependable renewable energy more accessible.
                        </h3>

                        <p class="mt-6 max-w-xl leading-8 text-white/45">
                            To provide reliable and practical solar solutions
                            that help Filipino homes and businesses reduce
                            energy costs while contributing to a cleaner future.
                        </p>

                    </div>

                </div>

            </article>


            {{-- VISION --}}
            <article class="flex min-h-[510px] flex-col rounded-[2.25rem] bg-[#EEE3C3] p-9 text-[#173C2B] sm:p-12">

                <div class="flex items-center justify-between">

                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#173C2B]/10">

                        <svg
                            class="h-6 w-6"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.7"
                            aria-hidden="true"
                        >
                            <path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"/>
                            <circle cx="12" cy="12" r="2.5"/>
                        </svg>

                    </div>

                    <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-[#927321]">
                        02 / Vision
                    </span>

                </div>

                <div class="mt-auto">

                    <h3 class="text-4xl font-semibold leading-[1.05] tracking-[-0.045em]">
                        Renewable energy as everyday infrastructure.
                    </h3>

                    <p class="mt-6 leading-8 text-[#5E6A61]">
                        A future where cleaner and more resilient energy becomes
                        a normal source of power for communities throughout
                        the Philippines.
                    </p>

                </div>

            </article>

        </div>

    </div>

</section>


{{-- ==========================================================
    VALUES
========================================================== --}}
<section class="bg-[#F5F6F1] py-28 lg:py-36">

    <div class="mx-auto grid w-[90%] max-w-[1320px] gap-16 lg:grid-cols-[0.62fr_1.38fr] lg:gap-28">

        <div class="lg:sticky lg:top-28 lg:self-start">

            <p class="text-[10px] font-bold uppercase tracking-[0.24em] text-[#A27E25]">
                Our Values
            </p>

            <h2 class="mt-5 max-w-md text-4xl font-semibold leading-[1] tracking-[-0.05em] text-[#142D21] md:text-5xl">
                The principles behind the work.
            </h2>

            <p class="mt-6 max-w-sm leading-7 text-[#69736D]">
                Good engineering matters. So does the way we communicate,
                support customers, and think about long-term impact.
            </p>

        </div>


        <div class="border-t border-[#D9DED9]">

            @foreach ([
                [
                    'number' => '01',
                    'title' => 'Sustainability',
                    'body' => 'We prioritize solutions that create long-term environmental and economic value.'
                ],
                [
                    'number' => '02',
                    'title' => 'Reliability',
                    'body' => 'Our systems, engineering decisions, and customer relationships are built to last.'
                ],
                [
                    'number' => '03',
                    'title' => 'Transparency',
                    'body' => 'We explain recommendations clearly so customers can make confident energy decisions.'
                ],
                [
                    'number' => '04',
                    'title' => 'Innovation',
                    'body' => 'We continuously improve technology, system design, and the way solar projects are delivered.'
                ],
                [
                    'number' => '05',
                    'title' => 'Community',
                    'body' => 'We believe better energy access contributes to stronger and more resilient communities.'
                ],
            ] as $value)

                <div class="group grid gap-5 border-b border-[#D9DED9] py-8 sm:grid-cols-[65px_.65fr_1fr]">

                    <span class="text-sm font-semibold text-[#A27E25]">
                        {{ $value['number'] }}
                    </span>

                    <h3 class="text-xl font-semibold text-[#173C2B] transition duration-300 group-hover:text-[#A27E25]">
                        {{ $value['title'] }}
                    </h3>

                    <p class="leading-7 text-[#69736D]">
                        {{ $value['body'] }}
                    </p>

                </div>

            @endforeach

        </div>

    </div>

</section>


{{-- ==========================================================
    CREDIBILITY
========================================================== --}}
<section class="bg-white py-20">

    <div class="mx-auto w-[90%] max-w-[1320px]">

        <div class="grid border-y border-[#DDE2DD] sm:grid-cols-2 lg:grid-cols-4">

            @foreach ([
                ['value' => '500+', 'label' => 'Systems Installed', 'icon' => 'solar'],
                ['value' => '25 MW', 'label' => 'Capacity Deployed', 'icon' => 'bolt'],
                ['value' => '15+', 'label' => 'Years Experience', 'icon' => 'clock'],
                ['value' => '24/7', 'label' => 'Technical Support', 'icon' => 'support'],
            ] as $stat)

                <div class="group border-b border-[#DDE2DD] px-6 py-9 text-center transition hover:bg-[#F8F9F6] lg:border-b-0 lg:border-r last:border-r-0">

                    <div class="mx-auto flex h-11 w-11 items-center justify-center rounded-xl bg-[#173C2B]/8 text-[#173C2B] transition duration-300 group-hover:bg-[#173C2B] group-hover:text-gold">

                        @if($stat['icon'] === 'solar')

                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <circle cx="18" cy="6" r="2"/>
                                <path d="M3 17h18"/>
                                <path d="m5 17 2-8h9l2 8"/>
                                <path d="M8 13h9M12 9v8"/>
                            </svg>

                        @elseif($stat['icon'] === 'bolt')

                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <path d="M13 2 4 14h7l-1 8 9-12h-7l1-8Z"/>
                            </svg>

                        @elseif($stat['icon'] === 'clock')

                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <circle cx="12" cy="12" r="9"/>
                                <path d="M12 7v5l3 2"/>
                            </svg>

                        @else

                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <path d="M4 13v-1a8 8 0 0 1 16 0v1"/>
                                <path d="M4 13h3v6H5a1 1 0 0 1-1-1v-5Z"/>
                                <path d="M20 13h-3v6h2a1 1 0 0 0 1-1v-5Z"/>
                            </svg>

                        @endif

                    </div>

                    <p class="mt-5 text-4xl font-semibold tracking-[-0.05em] text-[#173C2B]">
                        {{ $stat['value'] }}
                    </p>

                    <p class="mt-2 text-[10px] font-bold uppercase tracking-[0.18em] text-[#8A948E]">
                        {{ $stat['label'] }}
                    </p>

                </div>

            @endforeach

        </div>

    </div>

</section>


{{-- ==========================================================
    CTA
========================================================== --}}
<section class="bg-[#F5F6F1] py-20 lg:py-28">

    <div class="mx-auto w-[90%] max-w-[1320px]">

        <div class="relative overflow-hidden rounded-[2.25rem] bg-gold px-8 py-14 sm:px-12 lg:px-16 lg:py-16">

            <div
                aria-hidden="true"
                class="absolute -right-24 -top-24 h-80 w-80 rounded-full border-[60px] border-white/10"
            ></div>

            <div class="relative grid gap-10 lg:grid-cols-[1fr_auto] lg:items-end">

                <div class="max-w-4xl">

                    <p class="text-[10px] font-bold uppercase tracking-[0.24em] text-[#665018]">
                        Build Your Energy Future
                    </p>

                    <h2 class="mt-5 text-4xl font-semibold leading-[0.98] tracking-[-0.055em] text-[#10271C] md:text-6xl">
                        Better energy starts with understanding what you actually need.
                    </h2>

                    <p class="mt-5 max-w-xl leading-7 text-[#48554C]">
                        Talk to our team about your property, electricity usage,
                        and long-term goals.
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