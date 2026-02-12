<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Admin Panel' }} - VeritasDev</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Plus Jakarta Sans', sans-serif; }</style>
</head>
<body class="min-h-screen bg-slate-100 text-slate-800">
    <div id="admin-overlay" class="fixed inset-0 z-40 hidden bg-slate-900/40 lg:hidden"></div>

    <aside id="admin-sidebar" class="fixed inset-y-0 left-0 z-50 w-72 -translate-x-full border-r border-slate-200 bg-white p-5 transition-transform duration-200 lg:translate-x-0">
        <div class="mb-7 flex items-center gap-3">
            <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-600 text-sm font-bold text-white">
                &lt;/&gt;
            </span>
            <div>
                <p class="text-xs font-semibold uppercase tracking-wide text-blue-600">VeritasDev</p>
                <p class="font-semibold text-slate-900">VeritasDev</p>
            </div>
        </div>

        <p class="mb-2 text-xs font-semibold uppercase tracking-wide text-slate-400">Main Menu</p>
        <nav class="space-y-1 text-sm">
            <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-2 rounded-xl px-3 py-2.5 font-medium transition {{ request()->routeIs('admin.dashboard') ? 'bg-blue-50 text-blue-700' : 'text-slate-700 hover:bg-slate-100' }}">
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 13h8V3H3v10Zm10 8h8V11h-8v10ZM3 21h8v-6H3v6Zm10-12h8V3h-8v6Z"/>
                </svg>
                Dashboard
            </a>
            <a href="{{ route('admin.biodata') }}" class="flex items-center gap-2 rounded-xl px-3 py-2.5 font-medium transition {{ request()->routeIs('admin.biodata') ? 'bg-blue-50 text-blue-700' : 'text-slate-700 hover:bg-slate-100' }}">
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M20 21a8 8 0 1 0-16 0m8-10a4 4 0 1 0 0-8 4 4 0 0 0 0 8Z"/>
                </svg>
                Biodata
            </a>
            <a href="{{ route('admin.pendidikan') }}" class="flex items-center gap-2 rounded-xl px-3 py-2.5 font-medium transition {{ request()->routeIs('admin.pendidikan') ? 'bg-blue-50 text-blue-700' : 'text-slate-700 hover:bg-slate-100' }}">
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m2 7 10-4 10 4-10 4L2 7Zm4 3v5m12-5v5M6 19h12"/>
                </svg>
                Pendidikan
            </a>
            <a href="{{ route('admin.prestasi') }}" class="flex items-center gap-2 rounded-xl px-3 py-2.5 font-medium transition {{ request()->routeIs('admin.prestasi') ? 'bg-blue-50 text-blue-700' : 'text-slate-700 hover:bg-slate-100' }}">
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 21h8m-4-4v4M7 3h10v2a5 5 0 0 1-10 0V3Zm10 4h2a2 2 0 0 1-2 2m-10-2H5a2 2 0 0 0 2 2"/>
                </svg>
                Prestasi
            </a>
        </nav>

        <div class="mt-8 border-t border-slate-200 pt-4">
            <a href="{{ route('menu1') }}" class="block rounded-lg border border-slate-300 px-3 py-2 text-center text-sm font-semibold text-slate-700 transition hover:bg-slate-100">Lihat Website</a>
        </div>
    </aside>

    <div class="lg:pl-72">
        <header class="sticky top-0 z-30 border-b border-slate-200 bg-white/95 backdrop-blur">
            <div class="mx-auto flex h-16 max-w-[1400px] items-center justify-between px-4 sm:px-6">
                <div class="flex items-center gap-3">
                    <button id="admin-menu-btn" type="button" class="inline-flex items-center justify-center rounded-lg border border-slate-300 p-2 text-slate-700 lg:hidden" aria-label="Buka sidebar">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" /></svg>
                    </button>
                    <div class="hidden items-center gap-2 rounded-lg border border-slate-200 bg-slate-50 px-3 py-2 sm:flex sm:w-[320px]">
                        <svg class="h-4 w-4 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-4.35-4.35m1.35-5.65a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                        </svg>
                        <input type="text" placeholder="Cari data..." class="w-full bg-transparent text-sm text-slate-700 outline-none placeholder:text-slate-400">
                    </div>
                    <div class="sm:hidden">
                        <h1 class="text-base font-semibold text-slate-900">{{ $adminTitle ?? 'Dashboard' }}</h1>
                    </div>
                </div>

                <div class="flex items-center gap-2">
                    @yield('topbar-actions')
                </div>
            </div>
        </header>

        <main class="mx-auto max-w-[1400px] p-4 sm:p-6">
            @yield('content')
        </main>
    </div>

    <script>
        (() => {
            const menuBtn = document.getElementById('admin-menu-btn');
            const sidebar = document.getElementById('admin-sidebar');
            const overlay = document.getElementById('admin-overlay');
            if (!menuBtn || !sidebar || !overlay) return;

            const openSidebar = () => {
                sidebar.classList.remove('-translate-x-full');
                overlay.classList.remove('hidden');
                document.body.classList.add('overflow-hidden');
            };

            const closeSidebar = () => {
                sidebar.classList.add('-translate-x-full');
                overlay.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            };

            menuBtn.addEventListener('click', openSidebar);
            overlay.addEventListener('click', closeSidebar);
        })();
    </script>
</body>
</html>
