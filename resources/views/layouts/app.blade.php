<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SOLARA Energy Solutions')</title>
    @vite('resources/css/style.css')
</head>

<body class="bg-off-white text-[#17211b] min-h-screen font-sans">

    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    @include('components.footer')

</body>
</html>
