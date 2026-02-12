<?php

use Illuminate\Support\Facades\Route;

$teamMembers = [
    [
        'id' => 1,
        'nama' => 'Jaya Kusuma',
        'role' => 'Web Developer',
        'avatar' => 'https://avatars.githubusercontent.com/u/76036337?v=4',
        'domisili' => 'Probolinggo',
        'email' => 'jaya@gmail.com',
        'no_hp' => '+62 858-9400-250',
        'bio' => 'Fokus membangun API Laravel yang rapi, aman, dan mudah dikembangkan.',
        'skills' => ['Laravel', 'MySQL', 'REST API'],
        'pendidikan' => [
            [
                'tahun' => '2022 - Sekarang',
                'instansi' => 'Politeknik Negeri Jember',
                'jurusan' => 'Teknik Informatika',
                'catatan' => 'Mendalami rekayasa perangkat lunak dan arsitektur backend.',
            ],
            [
                'tahun' => '2019 - 2022',
                'instansi' => 'SMK Negeri 1 Kraksaan',
                'jurusan' => 'Rekayasa Perangkat Lunak',
                'catatan' => 'Membangun project web CRUD dan sistem manajemen sederhana.',
            ],
        ],
        'prestasi' => [
            [
                'tahun' => '2022',
                'judul' => 'Juara 1 Lomba Web Development',
                'keterangan' => 'Mengerjakan arsitektur backend dan integrasi autentikasi.',
            ],
            [
                'tahun' => '2022',
                'judul' => 'Juara 2 Lomba Web Design',
                'keterangan' => 'Menangani modul layanan pengguna dan endpoint utama.',
            ],
        ],
    ],
    [
        'id' => 2,
        'nama' => 'Argeswara P.K',
        'role' => 'Frontend Developer',
        'avatar' => 'https://i.pravatar.cc/160?img=5',
        'domisili' => 'Surabaya',
        'email' => 'nadia.rahma@email.com',
        'no_hp' => '+62 812-4456-7788',
        'bio' => 'Mendesain antarmuka yang bersih, konsisten, dan mudah digunakan.',
        'skills' => ['Blade', 'Tailwind CSS', 'UI Design'],
        'pendidikan' => [
            [
                'tahun' => '2021 - Sekarang',
                'instansi' => 'Institut Teknologi Y',
                'jurusan' => 'Sistem Informasi',
                'catatan' => 'Fokus pada desain antarmuka dan pengalaman pengguna.',
            ],
            [
                'tahun' => '2018 - 2021',
                'instansi' => 'SMA Y',
                'jurusan' => 'MIPA',
                'catatan' => 'Aktif di tim multimedia sekolah.',
            ],
        ],
        'prestasi' => [
            [
                'tahun' => '2025',
                'judul' => 'Best UI Prototype Competition',
                'keterangan' => 'Merancang dashboard operasional dengan fokus keterbacaan.',
            ],
            [
                'tahun' => '2023',
                'judul' => 'Top 10 National Design Sprint',
                'keterangan' => 'Membuat flow pengguna untuk aplikasi layanan publik.',
            ],
        ],
    ],
    [
        'id' => 3,
        'nama' => 'Rafi Maulana',
        'role' => 'Fullstack Developer',
        'avatar' => 'https://i.pravatar.cc/160?img=15',
        'domisili' => 'Gresik',
        'email' => 'rafi.maulana@email.com',
        'no_hp' => '+62 813-7788-1122',
        'bio' => 'Menghubungkan sisi frontend dan backend agar fitur berjalan stabil.',
        'skills' => ['PHP', 'JavaScript', 'Integration'],
        'pendidikan' => [
            [
                'tahun' => '2020 - Sekarang',
                'instansi' => 'Politeknik Z',
                'jurusan' => 'Teknik Informatika',
                'catatan' => 'Mengerjakan berbagai proyek sistem informasi berbasis web.',
            ],
            [
                'tahun' => '2017 - 2020',
                'instansi' => 'SMK Z',
                'jurusan' => 'Teknik Komputer dan Jaringan',
                'catatan' => 'Belajar deployment dasar dan manajemen server.',
            ],
        ],
        'prestasi' => [
            [
                'tahun' => '2024',
                'judul' => 'Juara 1 Lomba Aplikasi Internal',
                'keterangan' => 'Membangun fitur monitoring dan laporan real-time.',
            ],
            [
                'tahun' => '2023',
                'judul' => 'Best Team Project Kampus',
                'keterangan' => 'Mengintegrasikan modul transaksi dan notifikasi.',
            ],
        ],
    ],
    [
        'id' => 4,
        'nama' => 'Salsa Dwi Anjani',
        'role' => 'QA and Project Coordinator',
        'avatar' => 'https://i.pravatar.cc/160?img=45',
        'domisili' => 'Malang',
        'email' => 'salsa.anjani@email.com',
        'no_hp' => '+62 857-3344-5566',
        'bio' => 'Menjaga kualitas fitur, testing, dan koordinasi milestone proyek.',
        'skills' => ['Manual Testing', 'Test Case', 'Project Planning'],
        'pendidikan' => [
            [
                'tahun' => '2021 - Sekarang',
                'instansi' => 'Universitas A',
                'jurusan' => 'Sistem Informasi',
                'catatan' => 'Mendalami quality assurance dan manajemen proyek digital.',
            ],
            [
                'tahun' => '2018 - 2021',
                'instansi' => 'SMA A',
                'jurusan' => 'IPS',
                'catatan' => 'Aktif sebagai ketua tim kegiatan teknologi sekolah.',
            ],
        ],
        'prestasi' => [
            [
                'tahun' => '2025',
                'judul' => 'Best QA Documentation',
                'keterangan' => 'Menyusun standar uji yang meningkatkan stabilitas rilis.',
            ],
            [
                'tahun' => '2024',
                'judul' => 'Top Coordinator Student Project',
                'keterangan' => 'Mengelola timeline dan kolaborasi tim lintas divisi.',
            ],
        ],
    ],
];

$teamProjects = [
    [
        'nama' => 'Sistem Manajemen Inventaris',
        'stack' => 'Laravel, MySQL, Tailwind',
        'ringkasan' => 'Aplikasi internal untuk stok barang, mutasi, dan laporan bulanan.',
        'anggota' => ['Argeswara', 'Nadia', 'Rafi', 'Salsa'],
    ],
    [
        'nama' => 'Website Company Profile UMKM',
        'stack' => 'Blade, Tailwind CSS, SEO Basic',
        'ringkasan' => 'Landing page brand UMKM dengan fokus kecepatan dan konversi.',
        'anggota' => ['Nadia', 'Rafi', 'Salsa'],
    ],
    [
        'nama' => 'Dashboard Monitoring Layanan',
        'stack' => 'Laravel, Chart.js, API Integration',
        'ringkasan' => 'Monitoring performa layanan dengan metrik harian dan notifikasi status.',
        'anggota' => ['Argeswara', 'Rafi', 'Salsa'],
    ],
];

Route::get('/', function () use ($teamMembers, $teamProjects) {
    return view('menu1', [
        'title' => 'Home',
        'teamName' => 'VeritasDev',
        'teamTagline' => 'Tim berisi 4 member yang berfokus pada pengembangan web dari desain hingga deployment.',
        'members' => $teamMembers,
        'projects' => $teamProjects,
    ]);
})->name('menu1');

Route::get('/biodata', function () use ($teamMembers) {
    return view('menu2', [
        'title' => 'Biodata Tim',
        'members' => $teamMembers,
    ]);
})->name('menu2');

Route::get('/pendidikan', function () use ($teamMembers) {
    return view('menu3', [
        'title' => 'Pendidikan Tim',
        'members' => $teamMembers,
    ]);
})->name('menu3');

Route::get('/prestasi', function () use ($teamMembers, $teamProjects) {
    return view('menu4', [
        'title' => 'Prestasi Tim',
        'members' => $teamMembers,
        'projects' => $teamProjects,
    ]);
})->name('menu4');

Route::get('/admin', function () use ($teamMembers, $teamProjects) {
    $pendidikanCount = collect($teamMembers)->sum(fn ($m) => count($m['pendidikan']));
    $prestasiCount = collect($teamMembers)->sum(fn ($m) => count($m['prestasi']));

    return view('admin.dashboard', [
        'title' => 'Admin Dashboard',
        'adminTitle' => 'Dashboard',
        'members' => $teamMembers,
        'projects' => $teamProjects,
        'pendidikanCount' => $pendidikanCount,
        'prestasiCount' => $prestasiCount,
    ]);
})->name('admin.dashboard');

Route::get('/admin/biodata', function () use ($teamMembers) {
    return view('admin.biodata', [
        'title' => 'Admin Biodata',
        'adminTitle' => 'Biodata',
        'members' => $teamMembers,
    ]);
})->name('admin.biodata');

Route::get('/admin/pendidikan', function () use ($teamMembers) {
    $pendidikanRows = collect($teamMembers)->flatMap(function ($member) {
        return collect($member['pendidikan'])->map(function ($item) use ($member) {
            return [
                'member' => $member['nama'],
                'role' => $member['role'],
                'tahun' => $item['tahun'],
                'instansi' => $item['instansi'],
                'jurusan' => $item['jurusan'],
                'catatan' => $item['catatan'],
            ];
        });
    })->values();

    return view('admin.pendidikan', [
        'title' => 'Admin Pendidikan',
        'adminTitle' => 'Pendidikan',
        'rows' => $pendidikanRows,
    ]);
})->name('admin.pendidikan');

Route::get('/admin/prestasi', function () use ($teamMembers, $teamProjects) {
    $prestasiRows = collect($teamMembers)->flatMap(function ($member) {
        return collect($member['prestasi'])->map(function ($item) use ($member) {
            return [
                'member' => $member['nama'],
                'role' => $member['role'],
                'tahun' => $item['tahun'],
                'judul' => $item['judul'],
                'keterangan' => $item['keterangan'],
            ];
        });
    })->values();

    return view('admin.prestasi', [
        'title' => 'Admin Prestasi',
        'adminTitle' => 'Prestasi',
        'rows' => $prestasiRows,
        'projects' => $teamProjects,
    ]);
})->name('admin.prestasi');
