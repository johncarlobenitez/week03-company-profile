<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <meta
        name="description"
        content="SOLARA Energy Solutions provides reliable and sustainable solar energy systems for homes, businesses, and organizations across the Philippines."
    >

    <title>SOLARA Energy Solutions</title>

    @vite(['resources/css/style.css', 'resources/js/app.js'])
</head>


<body class="m-0 bg-[#07140D] antialiased">

<main class="relative min-h-screen overflow-hidden bg-[#07140D] text-white">

    {{-- ==========================================================
        AMBIENT BACKGROUND
    ========================================================== --}}
    <div
        aria-hidden="true"
        class="pointer-events-none absolute inset-0"
    >

        <div class="absolute -right-40 -top-40 h-[620px] w-[620px] rounded-full bg-gold/[0.08] blur-[150px]"></div>

        <div class="absolute -bottom-72 left-[18%] h-[520px] w-[520px] rounded-full bg-[#1D563A]/20 blur-[160px]"></div>

        <div class="absolute bottom-0 left-0 h-px w-full bg-gradient-to-r from-transparent via-white/10 to-transparent"></div>

    </div>


    {{-- ==========================================================
        PAGE WRAPPER
    ========================================================== --}}
    <div class="relative z-10 mx-auto flex min-h-screen w-[90%] max-w-[1320px] flex-col">

        {{-- ======================================================
            HEADER
        ====================================================== --}}
        <header class="flex items-center justify-between border-b border-white/10 py-6">

            {{-- BRAND --}}
            <a
                href="{{ route('welcome') }}"
                class="group flex items-center gap-3"
                aria-label="SOLARA Energy Solutions"
            >

                <div
                    class="flex h-11 w-11 items-center justify-center rounded-xl bg-gold text-[#10271C]
                           shadow-[0_10px_30px_rgba(214,176,71,0.15)]
                           transition duration-300 group-hover:rotate-6"
                >

                    <svg
                        class="h-6 w-6"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.8"
                        aria-hidden="true"
                    >
                        <circle cx="12" cy="12" r="3"/>
                        <path d="M12 2v3"/>
                        <path d="M12 19v3"/>
                        <path d="M4.9 4.9 7 7"/>
                        <path d="M17 17l2.1 2.1"/>
                        <path d="M2 12h3"/>
                        <path d="M19 12h3"/>
                        <path d="M4.9 19.1 7 17"/>
                        <path d="M17 7l2.1-2.1"/>
                    </svg>

                </div>

                <div>
                    <span class="block text-lg font-bold tracking-[0.14em]">
                        SOLARA
                    </span>

                    <span class="block text-[8px] font-semibold uppercase tracking-[0.22em] text-white/35">
                        Energy Solutions
                    </span>
                </div>

            </a>


            {{-- ENTER SITE --}}
            <a
                href="{{ route('company') }}"
                class="group hidden items-center gap-4 text-[10px] font-bold uppercase tracking-[0.18em]
                       text-white/45 transition hover:text-white sm:flex"
            >
                Enter Website

                <span
                    class="flex h-9 w-9 items-center justify-center rounded-full border border-white/15
                           transition duration-300
                           group-hover:border-gold
                           group-hover:bg-gold
                           group-hover:text-[#10271C]"
                >

                    <svg
                        class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-0.5"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        aria-hidden="true"
                    >
                        <path d="M5 12h14"/>
                        <path d="M13 6l6 6-6 6"/>
                    </svg>

                </span>

            </a>

        </header>


        {{-- ======================================================
            HERO
        ====================================================== --}}
        <section
            class="grid flex-1 items-center gap-14 py-12
                   lg:grid-cols-[0.88fr_1.12fr]
                   lg:gap-20 lg:py-16"
        >

            {{-- ==================================================
                LEFT CONTENT
            =================================================== --}}
            <div>

                <div class="mb-7 flex items-center gap-4">

                    <span class="h-px w-10 bg-gold"></span>

                    <p class="text-[10px] font-bold uppercase tracking-[0.25em] text-white/40">
                        Renewable Energy • Philippines
                    </p>

                </div>


                <h1
                    class="max-w-3xl
                           text-[clamp(3.7rem,7vw,7.1rem)]
                           font-semibold
                           leading-[0.88]
                           tracking-[-0.06em]"
                >
                    Powering

                    <span class="block text-gold">
                        tomorrow.
                    </span>

                    <span class="block">
                        Today.
                    </span>
                </h1>


                <p class="mt-8 max-w-lg text-base leading-8 text-white/50 md:text-lg">
                    Reliable solar energy systems engineered for homes,
                    businesses, and organizations that want greater control
                    over how they use energy.
                </p>


                <div class="mt-10 flex flex-col gap-3 sm:flex-row">

                    <a
                        href="{{ route('company') }}"
                        class="group inline-flex items-center justify-center gap-3 rounded-xl bg-gold px-7 py-4
                               text-sm font-bold text-[#10271C]
                               transition duration-300
                               hover:-translate-y-1
                               hover:bg-[#E4C45F]
                               hover:shadow-[0_18px_45px_rgba(214,176,71,0.18)]"
                    >
                        Discover SOLARA

                        <svg
                            class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            aria-hidden="true"
                        >
                            <path d="M5 12h14"/>
                            <path d="M13 6l6 6-6 6"/>
                        </svg>
                    </a>


                    <a
                        href="{{ route('contact') }}"
                        class="inline-flex items-center justify-center rounded-xl border border-white/15
                               bg-white/[0.03] px-7 py-4 text-sm font-bold text-white
                               transition duration-300 hover:border-white/30 hover:bg-white/[0.07]"
                    >
                        Start a Project
                    </a>

                </div>


                {{-- MINI CAPABILITY STRIP --}}
                <div class="mt-14 grid max-w-xl grid-cols-3 border-t border-white/10 pt-7">

                    <div>
                        <p class="text-lg font-semibold">
                            Solar
                        </p>

                        <p class="mt-1 text-[8px] font-bold uppercase tracking-[0.18em] text-white/25">
                            Generation
                        </p>
                    </div>

                    <div class="border-l border-white/10 pl-5">
                        <p class="text-lg font-semibold">
                            Storage
                        </p>

                        <p class="mt-1 text-[8px] font-bold uppercase tracking-[0.18em] text-white/25">
                            Resilience
                        </p>
                    </div>

                    <div class="border-l border-white/10 pl-5">
                        <p class="text-lg font-semibold">
                            Support
                        </p>

                        <p class="mt-1 text-[8px] font-bold uppercase tracking-[0.18em] text-white/25">
                            Long-Term
                        </p>
                    </div>

                </div>

            </div>


            {{-- ==================================================
                RIGHT VISUAL
            =================================================== --}}
            <div class="relative">

                {{-- OFFSET FRAME --}}
                <div
                    aria-hidden="true"
                    class="absolute -right-3 -top-3 hidden h-full w-full rounded-[2rem]
                           border border-gold/25 lg:block"
                ></div>


                <div
                    class="group relative overflow-hidden rounded-[2rem]
                           shadow-[0_35px_100px_rgba(0,0,0,0.28)]"
                >

                    <img
                        src="{{ asset('images/home-page.png') }}"
                        alt="Solar panels overlooking the city at sunset"
                        class="h-[420px] w-full object-cover
                               transition duration-700 group-hover:scale-[1.02]
                               sm:h-[520px] lg:h-[620px]"
                        fetchpriority="high"
                    >


                    <div class="absolute inset-0 bg-gradient-to-t from-[#07140D]/85 via-[#07140D]/5 to-transparent"></div>


                    {{-- TOP STATUS --}}
                    <div class="absolute left-6 top-6">

                        <div
                            class="inline-flex items-center gap-2 rounded-full
                                   border border-white/15 bg-[#07140D]/50
                                   px-4 py-2 backdrop-blur-xl"
                        >

                            <span class="relative flex h-2 w-2">

                                <span
                                    class="absolute inline-flex h-full w-full animate-ping
                                           rounded-full bg-gold opacity-40"
                                ></span>

                                <span class="relative inline-flex h-2 w-2 rounded-full bg-gold"></span>

                            </span>

                            <span
                                class="text-[8px] font-bold uppercase
                                       tracking-[0.18em] text-white/65"
                            >
                                Clean Energy
                            </span>

                        </div>

                    </div>


                    {{-- BOTTOM CAPTION --}}
                    <div class="absolute bottom-0 left-0 right-0 p-7 sm:p-8">

                        <p class="text-[9px] font-bold uppercase tracking-[0.2em] text-gold">
                            SOLARA Energy Solutions
                        </p>

                        <div class="mt-3 flex items-end justify-between gap-8">

                            <h2
                                class="max-w-md text-2xl font-semibold leading-tight
                                       tracking-[-0.03em] sm:text-3xl"
                            >
                                Clean energy designed around real life.
                            </h2>

                            <a
                                href="{{ route('company') }}"
                                class="hidden h-11 w-11 shrink-0 items-center justify-center rounded-full
                                       border border-white/20 bg-white/[0.06]
                                       transition hover:border-gold hover:bg-gold hover:text-[#10271C]
                                       sm:flex"
                                aria-label="Enter SOLARA website"
                            >
                                <svg
                                    class="h-4 w-4"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    aria-hidden="true"
                                >
                                    <path d="M5 12h14"/>
                                    <path d="M13 6l6 6-6 6"/>
                                </svg>
                            </a>

                        </div>

                    </div>

                </div>


                {{-- SMALL SIDE DETAIL --}}
                <div class="mt-5 flex items-center justify-end gap-3">

                    <span class="h-px w-8 bg-white/15"></span>

                    <p class="text-[8px] font-bold uppercase tracking-[0.22em] text-white/25">
                        Cebu City • Philippines
                    </p>

                </div>

            </div>

        </section>


        {{-- ======================================================
            FOOTER
        ====================================================== --}}
        <footer
            class="flex flex-col gap-3 border-t border-white/10 py-5
                   text-[8px] font-bold uppercase tracking-[0.18em] text-white/25
                   sm:flex-row sm:items-center sm:justify-between"
        >

            <p>
                © {{ date('Y') }} SOLARA Energy Solutions
            </p>

            <div class="flex items-center gap-4">

                <span>Solar</span>

                <span class="h-1 w-1 rounded-full bg-gold/50"></span>

                <span>Storage</span>

                <span class="h-1 w-1 rounded-full bg-gold/50"></span>

                <span>Engineering</span>

            </div>

        </footer>

    </div>

</main>

</body>
</html>