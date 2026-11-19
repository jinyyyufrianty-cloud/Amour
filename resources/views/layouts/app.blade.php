<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Personal Archive')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;1,400&family=Plus+Jakarta+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        .font-serif-editorial { font-family: 'Cormorant Garamond', serif; }
        .font-sans-clean { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-[#FAF8F5] text-[#2C2A29] font-sans-clean antialiased flex flex-col min-h-screen selection:bg-[#E6DFD5]">

    <nav class="border-b border-[#E8E2D9] bg-[#FAF8F5]/80 backdrop-blur-md sticky top-0 z-50">
        <div class="max-w-4xl mx-auto px-6 py-5 flex justify-between items-center">
            <!-- Ganti inisial A & B dengan inisial nama kalian -->
            <a href="{{ route('home') }}" class="font-serif-editorial text-2xl tracking-widest uppercase">A &amp; B</a>
            
            <div class="space-x-6 text-xs uppercase tracking-widest text-[#6E6A66]">
                <a href="{{ route('home') }}" class="hover:text-[#2C2A29] transition {{ request()->routeIs('home') ? 'text-[#2C2A29] font-medium border-b border-[#2C2A29] pb-1' : '' }}">Home</a>
                <a href="{{ route('story') }}" class="hover:text-[#2C2A29] transition {{ request()->routeIs('story') ? 'text-[#2C2A29] font-medium border-b border-[#2C2A29] pb-1' : '' }}">Story</a>
                <a href="{{ route('album') }}" class="hover:text-[#2C2A29] transition {{ request()->routeIs('album') ? 'text-[#2C2A29] font-medium border-b border-[#2C2A29] pb-1' : '' }}">Album</a>
                <a href="{{ route('letter') }}" class="hover:text-[#2C2A29] transition {{ request()->routeIs('letter') ? 'text-[#2C2A29] font-medium border-b border-[#2C2A29] pb-1' : '' }}">Note</a>
            </div>
        </div>
    </nav>

    <main class="flex-grow max-w-4xl mx-auto px-6 py-14 w-full">
        @yield('content')
    </main>

    <footer class="py-8 text-center text-xs tracking-widest uppercase text-[#9A948E]">
        Personal Archive &mdash; {{ date('Y') }}
    </footer>

</body>
</html>