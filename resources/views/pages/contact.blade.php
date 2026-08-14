@extends('layouts.app')

@section('title', 'Contact | SOLARA Energy Solutions')
@section('meta_description', 'Get in touch with SOLARA Energy Solutions. Reach our Cebu City team by phone, email, or the inquiry form.')

@section('content')

{{-- ==========================================================
    HERO
========================================================== --}}
<section class="relative overflow-hidden bg-[#0B1B13] text-white">

    <div class="pointer-events-none absolute inset-0">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_75%_30%,rgba(214,176,71,0.12),transparent_35%)]"></div>
    </div>

    <div class="relative mx-auto w-[90%] max-w-[1280px] py-24 lg:py-32">

        <div class="max-w-4xl">

            <div class="mb-7 inline-flex items-center gap-3 rounded-full border border-white/10 bg-white/[0.04] px-4 py-2">
                <span class="h-2 w-2 rounded-full bg-gold"></span>

                <span class="text-[11px] font-bold uppercase tracking-[0.22em] text-white/60">
                    Contact SOLARA
                </span>
            </div>

            <h1 class="text-5xl font-semibold leading-[0.98] tracking-[-0.05em] sm:text-6xl lg:text-7xl">
                Let's build a smarter
                <span class="text-gold">energy future.</span>
            </h1>

        </div>

    </div>

</section>


{{-- ==========================================================
    CONTACT
========================================================== --}}
<section class="bg-[#F7F8F4] py-20 lg:py-28">

    <div class="mx-auto w-[90%] max-w-[1280px]">

        @if(session('status'))
            <div class="mb-10 rounded-2xl border border-green/20 bg-white p-5 text-green">
                {{ session('status') }}
            </div>
        @endif


        <div class="grid items-start gap-12 lg:grid-cols-[0.78fr_1.22fr] lg:gap-20">

            {{-- LEFT --}}
            <div class="lg:sticky lg:top-28">

                <div class="relative mb-9 overflow-hidden rounded-[1.75rem]">

                    <img
                        src="{{ asset('images/contact-page.png') }}"
                        alt="SOLARA Energy Solutions office"
                        class="h-[300px] w-full object-cover sm:h-[340px]"
                        loading="lazy"
                    >

                    <div class="absolute inset-0 bg-gradient-to-t from-[#08150E]/70 via-transparent to-transparent"></div>

                </div>


                <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#A27E25]">
                    Start a conversation
                </p>

                <h2 class="mt-5 text-4xl font-semibold text-[#132D21]">
                    Tell us what you want to achieve.
                </h2>


                <address class="mt-10 not-italic">

                    <div class="divide-y divide-[#DDE2DD] border-y border-[#DDE2DD]">

                        {{-- OFFICE --}}
                        <div class="flex gap-4 py-6">

                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-[#173C2B] text-gold">
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                    <path d="M20 10c0 5-8 11-8 11S4 15 4 10a8 8 0 1 1 16 0Z"/>
                                    <circle cx="12" cy="10" r="2.5"/>
                                </svg>
                            </div>

                            <div>
                                <p class="text-xs font-bold uppercase tracking-[0.16em] text-[#929B95]">
                                    Office
                                </p>

                                <p class="mt-2 font-semibold text-[#173C2B]">
                                    Cebu City, Philippines
                                </p>
                            </div>

                        </div>


                        {{-- EMAIL --}}
                        <div class="flex gap-4 py-6">

                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-[#173C2B] text-gold">
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                    <rect x="3" y="5" width="18" height="14" rx="2"/>
                                    <path d="m3 7 9 6 9-6"/>
                                </svg>
                            </div>

                            <div>
                                <p class="text-xs font-bold uppercase tracking-[0.16em] text-[#929B95]">
                                    Email
                                </p>

                                <a href="mailto:hello@solaraenergy.ph"
                                   class="mt-2 inline-block font-semibold text-[#173C2B]">
                                    hello@solaraenergy.ph
                                </a>
                            </div>

                        </div>


                        {{-- PHONE --}}
                        <div class="flex gap-4 py-6">

                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-[#173C2B] text-gold">
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.8 19.8 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.8 19.8 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72"/>
                                </svg>
                            </div>

                            <div>
                                <p class="text-xs font-bold uppercase tracking-[0.16em] text-[#929B95]">
                                    Phone
                                </p>

                                <a href="tel:+639178452160"
                                   class="mt-2 inline-block font-semibold text-[#173C2B]">
                                    +63 917 845 2160
                                </a>
                            </div>

                        </div>


                        {{-- HOURS --}}
                        <div class="flex gap-4 py-6">

                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-[#173C2B] text-gold">
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                    <circle cx="12" cy="12" r="9"/>
                                    <path d="M12 7v5l3 2"/>
                                </svg>
                            </div>

                            <div>
                                <p class="text-xs font-bold uppercase tracking-[0.16em] text-[#929B95]">
                                    Business Hours
                                </p>

                                <p class="mt-2 font-semibold text-[#173C2B]">
                                    Monday – Friday
                                </p>

                                <p class="mt-1 text-sm text-[#69736D]">
                                    8:00 AM – 5:00 PM
                                </p>
                            </div>

                        </div>

                    </div>

                </address>

            </div>


            {{-- FORM --}}
            <div class="rounded-[2rem] border border-[#E1E5DF] bg-white p-6 shadow-[0_24px_80px_rgba(13,36,24,0.08)] sm:p-8 lg:p-10">

                <div class="flex items-start justify-between border-b border-[#E8EBE7] pb-7">

                    <div>
                        <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#A27E25]">
                            Project Inquiry
                        </p>

                        <h2 class="mt-3 text-3xl font-semibold text-[#132D21]">
                            How can we help?
                        </h2>
                    </div>

                    <div class="hidden h-12 w-12 items-center justify-center rounded-xl bg-[#173C2B] text-gold sm:flex">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                            <path d="M22 2 11 13"/>
                            <path d="m22 2-7 20-4-9-9-4 20-7Z"/>
                        </svg>
                    </div>

                </div>


                <form method="POST"
                      action="{{ route('contact.store') }}"
                      class="mt-8 space-y-6"
                      novalidate>

                    @csrf

                    <div>

                        <label for="name"
                               class="mb-2 block text-sm font-bold text-[#25382E]">
                            Full Name
                        </label>

                        <input
                            type="text"
                            id="name"
                            name="name"
                            value="{{ old('name') }}"
                            placeholder="Juan Dela Cruz"
                            required
                            autocomplete="name"
                            class="h-[52px] w-full rounded-xl border bg-[#FAFBF9] px-4 outline-none transition focus:border-[#173C2B] focus:ring-4 focus:ring-[#173C2B]/5
                                @error('name') border-red-400 @else border-[#D9DED9] @enderror"
                        >

                        @error('name')
                            <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                        @enderror

                    </div>


                    <div>

                        <label for="email"
                               class="mb-2 block text-sm font-bold text-[#25382E]">
                            Email Address
                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="you@example.com"
                            required
                            autocomplete="email"
                            class="h-[52px] w-full rounded-xl border bg-[#FAFBF9] px-4 outline-none transition focus:border-[#173C2B] focus:ring-4 focus:ring-[#173C2B]/5
                                @error('email') border-red-400 @else border-[#D9DED9] @enderror"
                        >

                        @error('email')
                            <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                        @enderror

                    </div>


                    <div>

                        <label for="message"
                               class="mb-2 block text-sm font-bold text-[#25382E]">
                            Project Details
                        </label>

                        <textarea
                            id="message"
                            name="message"
                            rows="7"
                            placeholder="Tell us about your energy needs or project..."
                            required
                            class="w-full rounded-xl border bg-[#FAFBF9] px-4 py-3.5 outline-none transition focus:border-[#173C2B] focus:ring-4 focus:ring-[#173C2B]/5
                                @error('message') border-red-400 @else border-[#D9DED9] @enderror"
                        >{{ old('message') }}</textarea>

                        @error('message')
                            <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                        @enderror

                    </div>


                    <div class="hidden" aria-hidden="true">
                        <label for="website">Website</label>
                        <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
                    </div>


                    <button
                        type="submit"
                        class="group inline-flex w-full items-center justify-center gap-3 rounded-xl bg-[#173C2B] px-7 py-4 text-sm font-bold text-white transition hover:-translate-y-0.5 hover:bg-[#214B38] sm:w-auto"
                    >
                        Send Inquiry

                        <svg
                            class="h-4 w-4 transition-transform group-hover:translate-x-1"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path d="M5 12h14M13 6l6 6-6 6"/>
                        </svg>
                    </button>

                </form>

            </div>

        </div>

    </div>

</section>

@endsection