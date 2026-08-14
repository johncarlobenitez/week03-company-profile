<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CompanyController extends Controller
{
    /**
     * Welcome / Landing Page
     */
    public function welcome(): View
    {
        return view('pages.welcome');
    }

    /**
     * Main Company Homepage
     */
    public function home(): View
    {
        return view('pages.home');
    }

    /**
     * About Page
     */
    public function about(): View
    {
        return view('pages.about');
    }

    /**
     * Services Page
     */
    public function services(): View
    {
        return view('pages.services');
    }

    /**
     * Contact Page
     */
    public function contact(): View
    {
        return view('pages.contact');
    }

    /**
     * Handle Contact Form Submission
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name'    => ['required', 'string', 'max:255'],
            'email'   => ['required', 'email', 'max:255'],
            'message' => ['required', 'string', 'min:10'],
        ]);

        return redirect()
            ->route('contact')
            ->with('status', 'Thank you! We\'ll be in touch soon.');
    }
}