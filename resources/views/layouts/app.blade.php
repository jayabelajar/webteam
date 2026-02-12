<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'VeritasDev' }} - Team Portfolio</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>

<body class="min-h-screen bg-white text-slate-800">
    <header class="sticky top-0 z-50 border-b border-slate-200 bg-white">
        <div class="mx-auto flex max-w-6xl items-center justify-between gap-3 px-4 py-3">
            <a href="{{ route('menu1') }}" class="flex items-center gap-2 font-semibold text-slate-900">
                <span class="flex h-8 w-8 items-center justify-center rounded-md bg-blue-600 text-xs font-bold text-white">
                    &lt;/&gt;
                </span>
                <span class="tracking-tight">VeritasDev</span>
            </a>

            <button
                id="mobile-menu-btn"
                type="button"
                class="inline-flex items-center justify-center rounded-md border border-slate-300 p-2 text-slate-700 sm:hidden"
                aria-label="Buka menu"
                aria-expanded="false"
                aria-controls="mobile-sidebar"
            >
                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <nav class="hidden items-center gap-1 text-sm sm:flex sm:justify-end">
                <a href="{{ route('menu1') }}"
                   class="rounded-md px-3 py-2 font-medium transition {{ request()->routeIs('menu1') ? 'bg-blue-600 text-white' : 'text-slate-600 hover:bg-blue-50 hover:text-blue-700' }}">
                    Home
                </a>
                <a href="{{ route('menu2') }}"
                   class="rounded-md px-3 py-2 font-medium transition {{ request()->routeIs('menu2') ? 'bg-blue-600 text-white' : 'text-slate-600 hover:bg-blue-50 hover:text-blue-700' }}">
                    Biodata
                </a>
                <a href="{{ route('menu3') }}"
                   class="rounded-md px-3 py-2 font-medium transition {{ request()->routeIs('menu3') ? 'bg-blue-600 text-white' : 'text-slate-600 hover:bg-blue-50 hover:text-blue-700' }}">
                    Pendidikan
                </a>
                <a href="{{ route('menu4') }}"
                   class="rounded-md px-3 py-2 font-medium transition {{ request()->routeIs('menu4') ? 'bg-blue-600 text-white' : 'text-slate-600 hover:bg-blue-50 hover:text-blue-700' }}">
                    Prestasi
                </a>
            </nav>
        </div>
    </header>

    <div id="mobile-menu-overlay" class="fixed inset-0 z-40 hidden bg-blue-600/40 sm:hidden"></div>
    <aside
        id="mobile-sidebar"
        class="fixed right-0 top-0 z-50 h-full w-72 translate-x-full border-l border-slate-200 bg-white p-5 transition-transform duration-200 sm:hidden"
        aria-hidden="true"
    >
        <div class="mb-6 flex items-center justify-between">
            <span class="font-semibold text-slate-900">Menu</span>
            <button
                id="mobile-menu-close"
                type="button"
                class="inline-flex items-center justify-center rounded-md border border-slate-300 p-2 text-slate-700"
                aria-label="Tutup menu"
            >
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 6l12 12M18 6L6 18" />
                </svg>
            </button>
        </div>

        <nav class="flex flex-col gap-2 text-sm">
            <a href="{{ route('menu1') }}"
               class="rounded-md px-3 py-2 font-medium transition {{ request()->routeIs('menu1') ? 'bg-blue-600 text-white' : 'text-slate-700 hover:bg-blue-50' }}">
                Home
            </a>
            <a href="{{ route('menu2') }}"
               class="rounded-md px-3 py-2 font-medium transition {{ request()->routeIs('menu2') ? 'bg-blue-600 text-white' : 'text-slate-700 hover:bg-blue-50' }}">
                Biodata
            </a>
            <a href="{{ route('menu3') }}"
               class="rounded-md px-3 py-2 font-medium transition {{ request()->routeIs('menu3') ? 'bg-blue-600 text-white' : 'text-slate-700 hover:bg-blue-50' }}">
                Pendidikan
            </a>
            <a href="{{ route('menu4') }}"
               class="rounded-md px-3 py-2 font-medium transition {{ request()->routeIs('menu4') ? 'bg-blue-600 text-white' : 'text-slate-700 hover:bg-blue-50' }}">
                Prestasi
            </a>
        </nav>
    </aside>

    <main class="mx-auto max-w-6xl px-4 py-6 sm:py-10">
        @yield('content')
    </main>

    <footer class="border-t border-slate-200 bg-white">
        <div class="mx-auto flex max-w-6xl flex-col items-center justify-between gap-2 px-4 py-6 text-sm text-slate-500 sm:flex-row">
            <span>Copyright {{ date('Y') }} VeritasDev</span>
            <span>4 Member - Built with Laravel 12</span>
        </div>
    </footer>

    <script>
        (() => {
            const menuBtn = document.getElementById('mobile-menu-btn');
            const closeBtn = document.getElementById('mobile-menu-close');
            const sidebar = document.getElementById('mobile-sidebar');
            const overlay = document.getElementById('mobile-menu-overlay');
            if (!menuBtn || !closeBtn || !sidebar || !overlay) return;

            const openMenu = () => {
                overlay.classList.remove('hidden');
                sidebar.classList.remove('translate-x-full');
                menuBtn.setAttribute('aria-expanded', 'true');
                sidebar.setAttribute('aria-hidden', 'false');
                document.body.classList.add('overflow-hidden');
            };

            const closeMenu = () => {
                overlay.classList.add('hidden');
                sidebar.classList.add('translate-x-full');
                menuBtn.setAttribute('aria-expanded', 'false');
                sidebar.setAttribute('aria-hidden', 'true');
                document.body.classList.remove('overflow-hidden');
            };

            menuBtn.addEventListener('click', openMenu);
            closeBtn.addEventListener('click', closeMenu);
            overlay.addEventListener('click', closeMenu);
        })();
    </script>
</body>
</html>
