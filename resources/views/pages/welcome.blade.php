<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SOLARA Energy Solutions</title>

    <meta
        name="description"
        content="SOLARA Energy Solutions provides reliable and sustainable solar energy systems for homes, businesses, and organizations across the Philippines."
    >

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#07140D] antialiased">

    <main class="relative min-h-screen overflow-hidden text-white">

        {{-- ==================================================
            BACKGROUND IMAGE
        =================================================== --}}
        <div class="absolute inset-0">

            <img
                src="{{ asset('images/home-page.png') }}"
                alt="Solar panels overlooking the city at sunset"
                class="h-full w-full object-cover"
            >

            {{-- dark treatment --}}
            <div class="absolute inset-0 bg-[#07140D]/55"></div>

            <div class="absolute inset-0 bg-gradient-to-r from-[#07140D]/95 via-[#07140D]/70 to-[#07140D]/25"></div>

            <div class="absolute inset-0 bg-gradient-to-t from-[#07140D]/85 via-transparent to-[#07140D]/25"></div>

        </div>


        {{-- ==================================================
            DECORATIVE LIGHT
        =================================================== --}}
        <div
            aria-hidden="true"
            class="pointer-events-none absolute -right-48 -top-48 h-[650px] w-[650px] rounded-full bg-gold/10 blur-[150px]"
        ></div>


        {{-- ==================================================
            TOP BAR
        =================================================== --}}
        <div class="relative z-10 mx-auto flex w-[90%] max-w-[1320px] items-center justify-between py-7">

            {{-- BRAND --}}
            <div class="flex items-center gap-3">

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-gold text-[#10271C]">

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
                    <span class="block text-lg font-bold tracking-[0.12em]">
                        SOLARA
                    </span>

                    <span class="block text-[9px] font-semibold uppercase tracking-[0.2em] text-white/45">
                        Energy Solutions
                    </span>
                </div>

            </div>


            {{-- SMALL LINK --}}
            <a
                href="{{ route('company') }}"
                class="hidden items-center gap-2 text-xs font-bold uppercase tracking-[0.16em] text-white/55 transition hover:text-gold sm:inline-flex"
            >
                Enter Site
                <span>→</span>
            </a>

        </div>


        {{-- ==================================================
            MAIN CONTENT
        =================================================== --}}
        <div class="relative z-10 mx-auto flex min-h-[calc(100vh-100px)] w-[90%] max-w-[1320px] items-center py-16">

            <div class="max-w-5xl">

                {{-- eyebrow --}}
                <div class="mb-8 flex items-center gap-4">

                    <span class="h-px w-10 bg-gold"></span>

                    <p class="text-[10px] font-bold uppercase tracking-[0.26em] text-white/55">
                        Renewable Energy • Philippines
                    </p>

                </div>


                {{-- heading --}}
                <h1 class="max-w-5xl text-[clamp(3.6rem,8vw,8rem)] font-semibold leading-[0.86] tracking-[-0.065em]">

                    Powering

                    <span class="block text-gold">
                        tomorrow.
                    </span>

                    <span class="block text-white">
                        Today.
                    </span>

                </h1>


                {{-- description --}}
                <p class="mt-9 max-w-xl text-base leading-8 text-white/55 md:text-lg">
                    Smart solar energy systems designed to help homes and
                    businesses reduce costs, improve energy resilience,
                    and move toward a cleaner future.
                </p>


                {{-- CTA --}}
                <div class="mt-10 flex flex-col gap-3 sm:flex-row">

                    <a
                        href="{{ route('company') }}"
                        class="group inline-flex items-center justify-center gap-3 rounded-xl bg-gold px-7 py-4 text-sm font-bold text-[#10271C] transition duration-300 hover:-translate-y-1 hover:bg-[#E4C45F] hover:shadow-[0_18px_45px_rgba(214,176,71,0.20)]"
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
                            <path d="M5 12h14M13 6l6 6-6 6"/>
                        </svg>

                    </a>


                    <a
                        href="{{ route('contact') }}"
                        class="inline-flex items-center justify-center rounded-xl border border-white/15 bg-white/[0.04] px-7 py-4 text-sm font-bold text-white backdrop-blur-md transition hover:border-white/30 hover:bg-white/[0.08]"
                    >
                        Start a Project
                    </a>

                </div>

            </div>

        </div>


        {{-- ==================================================
            BOTTOM DETAILS
        =================================================== --}}
        <div class="absolute bottom-0 left-0 right-0 z-10">

            <div class="mx-auto flex w-[90%] max-w-[1320px] flex-col gap-5 border-t border-white/10 py-6 text-[9px] font-bold uppercase tracking-[0.18em] text-white/30 sm:flex-row sm:items-center sm:justify-between">

                <div class="flex flex-wrap items-center gap-5">

                    <span>Cebu City</span>

                    <span class="h-1 w-1 rounded-full bg-gold/50"></span>

                    <span>Philippines</span>

                </div>

                <div class="flex items-center gap-3">

                    <span class="relative flex h-2 w-2">
                        <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-gold opacity-40"></span>
                        <span class="relative inline-flex h-2 w-2 rounded-full bg-gold"></span>
                    </span>

                    Renewable energy solutions

                </div>

            </div>

        </div>

    </main>

</body>
</html>