<?php

namespace App\Services;

use App\Models\Program;
use App\Models\Article;
use Illuminate\Support\Str;

class TkbtSchemeService
{
    /**
     * Master definition of 2 TKBT Training Programs
     */
    public static function getMasterPrograms(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Training TKBT (Tenaga Kerja Bangunan Tinggi) Tingkat 1',
                'slug' => 'training-tkbt-tingkat-1',
                'level_name' => 'Tingkat 1 / Bekerja Pada Lantai Kerja Tetap & Sementara',
                'badge' => 'TKBT Tingkat 1 (Kemnaker RI)',
                'short_description' => 'Pembinaan dan sertifikasi resmi Kemnaker RI bagi teknisi dan pekerja pada lantai kerja tetap, perancah (scaffolding), tangga, gondola, dan platform kerja bergerak sesuai Permenaker No. 9 Tahun 2016.',
                'full_description' => 'Program Training TKBT Tingkat 1 (Tenaga Kerja Bangunan Tinggi Tingkat 1) diselenggarakan berdasarkan Peraturan Menteri Ketenagakerjaan RI No. 9 Tahun 2016 tentang Keselamatan dan Kesehatan Kerja Dalam Pekerjaan Pada Ketinggian. Program ini dirancang khusus bagi pekerja yang melakukan aktivitas pada lantai kerja tetap dan lantai kerja sementara, perancah (scaffolding), elevating work platform, mobile elevating work platform (MEWP), gondola gedung, serta struktur tangga industri. Peserta dibekali pemahaman komprehensif mengenai bahaya jatuh dari ketinggian, pemilihan dan penggunaan Alat Pelindung Jatuh (Fall Protection System) yang tepat, pemasangan Full Body Harness (EN 361), pengoperasian Lanyard dengan Energy Absorber (EN 355), sistem angkur sementara (EN 795), pencegahan bahaya trauma suspensi (suspension trauma), serta teknik evakuasi darurat dasar.',
                'curriculum' => [
                    'Peraturan Perundangan K3 Ketinggian (UU No. 1/1970, Permenaker No. 9/2016 & Standar SKKNI)',
                    'Dasar-Dasar Keselamatan Kerja di Ketinggian & Identifikasi Bahaya Ketinggian (HIRADC)',
                    'Karakteristik Lantai Kerja Tetap, Lantai Kerja Sementara, & Perancah (Scaffolding)',
                    'Standar & Klasifikasi Alat Pelindung Diri (APD) Ketinggian: Full Body Harness, Safety Helmet Chinstrap',
                    'Sistem Penahan Jatuh Perorangan (Personal Fall Arrest System / PFAS): Lanyard & Energy Absorber',
                    'Sistem Pencegah Jatuh (Work Restraint System) & Penentuan Batas Gerak Area Bahaya',
                    'Sistem Pembatas Gerak & Pemosisian Kerja (Work Positioning System - EN 358)',
                    'Jenis-Jenis Angkur (Anchor Points): Angkur Struktur, Webbing Sling, Wire Strop, & Eyebolt',
                    'Prosedur Inspeksi Visual Pra-Pakai (Pre-Use Inspection) & Uji Kelayakan Peralatan APD Ketinggian',
                    'Bahaya Fatal Trauma Suspensi (Suspension Trauma / Orthostatic Shock) & Pemasangan Relief Strap',
                    'Prinsip Dasar P3K Ketinggian & Penanganan Korban Terjatuh / Tergantung di Ketinggian',
                    'Praktik Lapangan: Fitting Harness, Manuver di Scaffolding, Anchor Rigging, & Ujian Praktik Kemnaker RI'
                ],
                'requirements' => [
                    'Pendidikan minimal SLTA / SMK sederajat atau berpengalaman di bidang teknis/konstruksi',
                    'Surat keterangan sehat dari dokter (tidak memiliki riwayat vertigo, asma akut, epilepsi, & fobia ketinggian/acrophobia)',
                    'Fotokopi KTP dan pas foto resmi berlatar belakang merah (format paspor/digital)',
                    'Surat rekomendasi penugasan dari perusahaan atau surat pernyataan mandiri'
                ],
                'certification_body' => 'Kemnaker RI & BNSP',
                'duration' => '3 Hari (24 Jam Pelajaran Teori & Praktikum Lapangan Terstruktur)',
                'icon' => 'bi-shield-check',
                'image' => 'https://images.unsplash.com/photo-1541888946425-d0fbb18615f3?w=1200&auto=format&fit=crop&q=80',
                'topic_key' => 'tkbt_tingkat_1',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'id' => 2,
                'title' => 'Training TKBT (Tenaga Kerja Bangunan Tinggi) Tingkat 2',
                'slug' => 'training-tkbt-tingkat-2',
                'level_name' => 'Tingkat 2 / Bekerja & Bergerak Pada Struktur Ketinggian, Tower, & Konstruksi',
                'badge' => 'TKBT Tingkat 2 (Kemnaker RI)',
                'short_description' => 'Pelatihan kompetensi tingkat lanjut Kemnaker RI untuk tenaga kerja yang bergerak aktif pada struktur menara, tower telekomunikasi, pylon, rangka baja, atap, dan jembatan dengan teknik tie-off 100% dan penyelamatan.',
                'full_description' => 'Program Training TKBT Tingkat 2 (Tenaga Kerja Bangunan Tinggi Tingkat 2) merupakan pembinaan keahlian tingkat lanjut sesuai Permenaker No. 9 Tahun 2016. Pelatihan ini ditujukan bagi tenaga kerja profesional yang harus berpindah tempat (traversing/maneuvering) dan bekerja pada struktur ketinggian terbuka, tower telekomunikasi (BTS / transmisi), tower sutet, rangka baja gedung bertingkat, struktur jembatan, tiang lampu dermaga, dan atap industri. Mengajarkan teknik 100% Tie-Off menggunakan double lanyard with shock absorber, guided type fall arrester pada vertical lifeline (tali keselamatan vertikal), retractable fall arrester (fall block), instalasi tali keselamatan horizontal sementara (temporary horizontal lifeline), kalkulasi jarak jatuh bebas aman (Fall Clearance Calculation), serta simulasi rescue pertolongan darurat korban tergantung (partner rescue).',
                'curriculum' => [
                    'Tinjauan Mendalam Regulasi Permenaker No. 9/2016 Bab Tenaga Kerja Bangunan Tinggi Tingkat 2',
                    'Fisika Kejatuhan: Faktor Jatuh (Fall Factor 0, 1, 2) & Dampak Gaya Kejut (Impact Force) Pada Tubuh Manusia',
                    'Kalkulasi Jarak Bebas Jatuh (Total Fall Clearance Calculation / TFCD) Sebelum Memulai Pekerjaan',
                    'Teknik Bergerak pada Struktur Ketinggian: 100% Tie-Off Menggunakan Twin Lanyard / Double Shock Absorber',
                    'Penggunaan Guided Type Fall Arrester (Rope Grab / Wire Grab) pada Vertical Lifeline (EN 353)',
                    'Pengoperasian Retractable Fall Arrester (Inertia Reel / Fall Arrest Block - EN 360)',
                    'Instalasi & Rigging Tali Keselamatan Horizontal Sementara (Temporary Horizontal Lifeline - EN 795 Class C/B)',
                    'Teknik Pemosisian Kerja Lanjut (Work Positioning) pada Tower Kisi (Lattice Tower) & Struktur Baja',
                    'Prosedur Pengangkatan Beban Ringan Manual (Light Hauling System) & Penataan Alat Kerja Ketinggian (Tool Lanyard)',
                    'Manajemen & Otorisasi Rencana Penyelamatan (Fall Rescue Plan) di Ketinggian',
                    'Simulasi Penyelamatan Rekan Kerja Tergantung (Partner Rescue) Menggunakan Kit Evakuasi Otomatis (Descender Rescue)',
                    'Uji Teori & Praktik Lapangan Komprehensif Lisensi K3 Kemnaker RI'
                ],
                'requirements' => [
                    'Pendidikan minimal SLTA / SMK / D3 / S1 dengan kondisi fisik prima',
                    'Surat keterangan sehat jasmani & bebas fobia ketinggian dari fasilitas kesehatan resmi',
                    'Fotokopi KTP dan pas foto resmi latar merah',
                    'Surat penugasan perusahaan atau keikutsertaan mandiri profesional K3'
                ],
                'certification_body' => 'Kemnaker RI & BNSP',
                'duration' => '3 Hari (24 Jam Pelajaran Intensif Teori & Simulator Tower Praktik)',
                'icon' => 'bi-buildings',
                'image' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=1200&auto=format&fit=crop&q=80',
                'topic_key' => 'tkbt_tingkat_2',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 2,
            ],
        ];
    }

    /**
     * 200 Comprehensive SEO Article Topics for Training TKBT
     * Every single topic explicitly contains the word "Training"
     */
    public static function getArticleTopics(): array
    {
        return [
            // Kategori 1: Dasar & Regulasi Permenaker 09/2016 (Topik 1-25)
            1 => 'Training TKBT: Panduan Lengkap K3 Bekerja Pada Ketinggian Sesuai Permenaker No. 9 Tahun 2016',
            2 => 'Training TKBT Tingkat 1: Persyaratan Kompetensi, Hak, dan Kewajiban Pekerja Lantai Kerja Sementara',
            3 => 'Training TKBT Tingkat 2: Standar Operasional Bergerak dan Bekerja Pada Struktur Bangunan Tinggi',
            4 => 'Training TKBT: Perbedaan Mendasar Tenaga Kerja Bangunan Tinggi Tingkat 1 dan Tingkat 2 Kemnaker RI',
            5 => 'Training TKBT: Hierarki Pengendalian Risiko Jatuh (Fall Protection Hierarchy) di Lingkungan Industri',
            6 => 'Training TKBT: Prosedur Pengurusan Lisensi dan Surat Izin Kerja (SIO) K3 Ketinggian Kemnaker RI',
            7 => 'Training TKBT: Penerapan Sistem Izin Kerja Ketinggian (Working at Height Permit System) Terintegrasi',
            8 => 'Training TKBT: Tanggung Jawab Hukum Pengusaha dan Pengawas Kerja Ketinggian Berdasarkan UU No. 1 Tahun 1970',
            9 => 'Training TKBT: Identifikasi Bahaya Ketinggian dan Penyusunan Job Safety Analysis (JSA) Pekerjaan Baja',
            10 => 'Training TKBT: Analisis Faktor Jatuh (Fall Factor 0, 1, dan 2) dan Mitigasi Gaya Kejut pada Tubuh',
            11 => 'Training TKBT: Manajemen K3 Ketinggian pada Proyek Konstruksi Gedung Bertingkat dan Jembatan',
            12 => 'Training TKBT: Panduan Audit Kepatuhan Alat Pelindung Diri Ketinggian di Lingkungan Manufaktur',
            13 => 'Training TKBT: Standar Internasional EN, OSHA, dan ANSI dalam Implementasi K3 Ketinggian Nasional',
            14 => 'Training TKBT: Regulasi Pencegahan Benda Jatuh (Dropped Objects Prevention Scheme / DROPS) Konstruksi',
            15 => 'Training TKBT: Kewajiban Sertifikasi Personel Bekerja di Ketinggian untuk Menghindari Sanksi Hukum',
            16 => 'Training TKBT: Peran Safety Officer dalam Mengawasi Pekerjaan Ketinggian Berisiko Tinggi',
            17 => 'Training TKBT: Integrasi Sistem Manajemen K3 (SMK3) PP 50/2012 dengan Pekerjaan Bangunan Tinggi',
            18 => 'Training TKBT: Kajian Faktor Lingkungan Cuaca: Batasan Kecepatan Angin dan Petir Saat Bekerja di Atap',
            19 => 'Training TKBT: Standar Kesehatan Kerja dan Pemeriksaan Medis Bebas Vertigo bagi Personel TKBT',
            20 => 'Training TKBT: Pengelolaan Dokumen Rencana Keselamatan Ketinggian (Fall Management Plan) Kontraktor',
            21 => 'Training TKBT: Studi Kasus Investigasi Kecelakaan Kerja Terjatuh dari Ketinggian dan Pelajarannya',
            22 => 'Training TKBT: Prosedur Morning Safety Briefing dan Tool Box Meeting Sebelum Naik ke Ketinggian',
            23 => 'Training TKBT: Standar Pembatasan Beban Maksimal (Safe Working Load / SWL) pada Struktur Penyangga',
            24 => 'Training TKBT: Prosedur Tanggap Darurat dan Penghentian Kerja (Stop Work Authority) Kondisi Berbahaya',
            25 => 'Training TKBT: Keunggulan Sertifikasi Resmi Kemnaker RI Dibanding Pelatihan Internal Non-Lisensi',

            // Kategori 2: Alat Pelindung Diri & Full Body Harness (Topik 26-50)
            26 => 'Training TKBT: Standar Pemilihan dan Anatomi Full Body Harness EN 361 untuk Pekerja Konstruksi',
            27 => 'Training TKBT: Prosedur Pemeriksaan Visual Pra-Pakai (Pre-Use Inspection) Webbing dan D-Ring Harness',
            28 => 'Training TKBT: Tata Cara Fitting Full Body Harness yang Ergonomis: Aturan Empat Jari dan Penguncian Buckle',
            29 => 'Training TKBT: Mengenal Fungsi D-Ring Dorsal, Sternal, Ventral, dan Lateral pada Safety Harness',
            30 => 'Training TKBT: Standar Helm Keselamatan Ketinggian EN 12492 dengan Tali Dagu 4 Titik (Chinstrap)',
            31 => 'Training TKBT: Penggunaan Sepatu Safety Anti-Slip dengan Perlindungan Ankle untuk Pekerja Menara',
            32 => 'Training TKBT: Pemilihan Sarung Tangan Grip Presisi dan Tahan Gesekan untuk Bekerja di Rangka Baja',
            33 => 'Training TKBT: Kacamata Pelindung (Safety Goggles) Anti-UV dan Anti-Fog untuk Pekerja Atap Luar Ruangan',
            34 => 'Training TKBT: Manajemen Masa Pakai (Shelf Life) dan Kriteria Afkir Peralatan Tekstil Ketinggian',
            35 => 'Training TKBT: Penyimpanan, Perawatan, dan Pembersihan Alat Pelindung Jatuh agar Tetap Sesuai Standar',
            36 => 'Training TKBT: Bahaya Paparan Sinar UV, Bahan Kimia, dan Asam pada Serat Poliamida Webbing Harness',
            37 => 'Training TKBT: Buku Catatan Logbook Peralatan APD Ketinggian dan Ketertelusuran Nomor Seri Pabrikan',
            38 => 'Training TKBT: Standar Carabiner dan Connector EN 362: Perbedaan Screw Lock, Twist Lock, dan Triple Lock',
            39 => 'Training TKBT: Bahaya Pembebanan Silang (Cross Loading) pada Carabiner dan Pencegahan Kegagalannya',
            40 => 'Training TKBT: Penggunaan Pouch Tool dan Tool Lanyard Anti-Jatuh untuk Peralatan Kunci dan Obeng',
            41 => 'Training TKBT: Standar Energy Absorber EN 355: Mekanisme Peredaman Gaya Kejut di Bawah 6 KiloNewton',
            42 => 'Training TKBT: Penggunaan Work Positioning Lanyard EN 358 untuk Menahan Posisi Kerja Bebas Tangan',
            43 => 'Training TKBT: Perbedaan Shock Absorbing Lanyard vs Restraint Lanyard dan Risiko Salah Aplikasi',
            44 => 'Training TKBT: Pemasangan Relief Strap (Suspension Relief Footloop) untuk Mengantisipasi Trauma Suspensi',
            45 => 'Training TKBT: Penggunaan Rompi Visibilitas Tinggi (Hi-Vis Vest) Terintegrasi dengan Safety Harness',
            46 => 'Training TKBT: Spesifikasi Khusus Harness Tahan Percikan Api (Flame Retardant) untuk Pekerjaan Las Ketinggian',
            47 => 'Training TKBT: Panduan APD Khusus Ketinggian di Lingkungan Industri Minyak, Gas, dan Petrokimia',
            48 => 'Training TKBT: Uji Kekuatan Statis dan Dinamis Standar UIAA / CE pada Konektor Keselamatan Ketinggian',
            49 => 'Training TKBT: Bahaya Modifikasi Mandiri pada Safety Harness dan Dampak Hukum terhadap Penjaminan Garansi',
            50 => 'Training TKBT: Checksheet Harian Pemeriksaan Kelayakan APD Ketinggian untuk Mandor Proyek',

            // Kategori 3: Sistem Penahan Jatuh & Kalkulasi Jarak Jatuh (Topik 51-75)
            51 => 'Training TKBT: Kalkulasi Jarak Bebas Jatuh (Total Fall Clearance Distance / TFCD) Sebelum Manuver',
            52 => 'Training TKBT: Perhitungan Jarak Peregangan Lanyard, Deformasi Harness, dan Jarak Aman ke Tanah',
            53 => 'Training TKBT: Bahaya Pendulum Effect (Swing Fall Hazard) dan Pengendalian Sudut Kerja Maksimum 30 Derajat',
            54 => 'Training TKBT: Pengoperasian Retractable Fall Arrester (Inertia Reel / Fall Block EN 360) di Lokasi Proyek',
            55 => 'Training TKBT: Batasan Sudut Kerja dan Penggunaan Edge-Tested Retractable Fall Arrester pada Tepi Atap',
            56 => 'Training TKBT: Penggunaan Guided Type Fall Arrester pada Vertical Lifeline Tali Karmantel Statis EN 353-2',
            57 => 'Training TKBT: Standar Instalasi Wire Rope Vertical Lifeline EN 353-1 pada Tangga Industri Vertikal (Monkey Ladder)',
            58 => 'Training TKBT: Pemasangan Temporary Horizontal Lifeline Tali Webbing dan Kalkulasi Sagging Defleksi',
            59 => 'Training TKBT: Standar Tegangan Tarik dan Beban Ujung pada Sistem Horizontal Lifeline Baja Multi-Span',
            60 => 'Training TKBT: Metode 100% Tie-Off Menggunakan Twin Lanyard Double Arm untuk Perpindahan Struktur',
            61 => 'Training TKBT: Teknik Melangkah Aman pada Konstruksi Rangka Baja: Tiga Titik Tumpu dan Sambungan Terjamin',
            62 => 'Training TKBT: Bahaya Menyambungkan Carabiner ke D-Ring Samping saat Berada dalam Posisi Penahan Jatuh',
            63 => 'Training TKBT: Analisis Risiko Bekerja di Dekat Tepi Terbuka (Leading Edge) dan Pemasangan Safety Netting',
            64 => 'Training TKBT: Penggunaan Jaring Keselamatan Kerja (Safety Nets EN 1263) sebagai Proteksi Jatuh Pasif',
            65 => 'Training TKBT: Perbandingan Proteksi Jatuh Kolektif (Guardrail System) vs Proteksi Jatuh Perorangan (PFAS)',
            66 => 'Training TKBT: Standar Dimensi Handrail, Midrail, dan Toeboard pada Platform Ketinggian OSHA / Kemnaker',
            67 => 'Training TKBT: Penerapan Sistem Pembatas Gerak (Travel Restraint) pada Pemeliharaan Atap Seng dan Asbes',
            68 => 'Training TKBT: Identifikasi Permukaan Rapuh (Fragile Roof Surface) dan Pemasangan Crawling Board / Roof Ladder',
            69 => 'Training TKBT: Penggunaan Catch Platform dan Fan Protection untuk Melindungi Area Publik di Bawah Proyek',
            70 => 'Training TKBT: Batasan Berat Total Badan Pekerja Termasuk Pakaian dan Peralatan pada Sistem Penahan Jatuh',
            71 => 'Training TKBT: Rekayasa Anchor Tie-Back System untuk Struktur Ketinggian yang Tidak Memiliki Titik Kokoh',
            72 => 'Training TKBT: Uji Tarik Beban Dinamis pada Anchor Ring Ketinggian Menggunakan Dynamometer Load Cell',
            73 => 'Training TKBT: Pengaruh Suhu Ekstrem Dingin dan Panas terhadap Elastisitas Tali Penahan Jatuh Sintetis',
            74 => 'Training TKBT: Standar Penghentian Operasional Ketinggian Berdasarkan Indeks Kecepatan Angin Anemometer',
            75 => 'Training TKBT: Panduan Visual Rekayasa Jarak Jatuh Aman bagi Pengawas K3 Lapangan',

            // Kategori 4: Angkur & Sistem Penjangkaran (Topik 76-100)
            76 => 'Training TKBT: Standar Titik Angkur Keselamatan EN 795: Minimal Kekuatan Beban 12 kN dan 22 kN',
            77 => 'Training TKBT: Klasifikasi Titik Angkur Tipe A (Struktur Tetap), Tipe B (Sementara Portabel), dan Tipe C/D',
            78 => 'Training TKBT: Pemasangan Webbing Sling Round Sling pada Rangka Baja WF / H-Beam dengan Simpul Choker',
            79 => 'Training TKBT: Penggunaan Wire Strop Baja Tahan Potong pada Profil Struktur dengan Sudut Tajam (Sharp Edges)',
            80 => 'Training TKBT: Instalasi Eyebolt Angkur Struktural: Pengujian Torsi, Uji Cabut (Pull-Out Test), dan Sertifikasi',
            81 => 'Training TKBT: Bahaya Penggunaan Angkur Non-Struktural seperti Pipa Conduit, Pipa Sanitasi, dan Kabel Tray',
            82 => 'Training TKBT: Pemasangan Angkur Beam Clamp dan Beam Trolley Portabel pada Flens Balok Baja Industri',
            83 => 'Training TKBT: Penggunaan Door & Window Jamb Anchor untuk Pekerjaan Perawatan Fasad dari Dalam Ruangan',
            84 => 'Training TKBT: Standar Pemasangan Concrete Anchor Bolt Kimia dan Mekanikal pada Dinding Beton Bertulang',
            85 => 'Training TKBT: Prinsip Sudut Rigging Y-Anchor: Pengaruh Sudut terhadap Beban Berlipat Ganda pada Titik Angkur',
            86 => 'Training TKBT: Penggunaan Tripod Keselamatan EN 795 Tipe B untuk Akses Manhole dan Tangki Ketinggian',
            87 => 'Training TKBT: Angkur Deadweight Friction Anchor: Pemasangan Beban Kontra pada Atap Datar Tanpa Melubangi Struktur',
            88 => 'Training TKBT: Rekayasa Angkur Kolom Silinder dan Tiang Monopole Menggunakan Ratchet Tie-Down Bersertifikat',
            89 => 'Training TKBT: Prosedur Pengujian Rutin Tahunan (Re-Certification) Titik Angkur Tetap pada Gedung Komersial',
            90 => 'Training TKBT: Dokumentasi Pemetaan Posisi Angkur (Anchor Tagging Scheme) dan Plat Beban Maksimum',
            91 => 'Training TKBT: Pemasangan Edge Roller dan Pelindung Tali (Rope Protector Canvas) Mencegah Abrasi Gesekan',
            92 => 'Training TKBT: Bahaya Pengikatan Dua Personel pada Satu Titik Angkur Tunggal Tanpa Sertifikasi Multi-User',
            93 => 'Training TKBT: Standar Angkur Khusus Lingkungan Korosif Maritim Menggunakan Material Stainless Steel 316',
            94 => 'Training TKBT: Identifikasi Keretakan Mikro pada Logam Angkur Menggunakan Teknik Non-Destructive Testing (NDT)',
            95 => 'Training TKBT: Prosedur Decommissioning dan Penonaktifan Titik Angkur yang Telah Mengalami Beban Jatuh',
            96 => 'Training TKBT: Simpul-Simpul Dasar Pengikatan Angkur Sementara: Simpul Delapan (Figure 8), Bowline, dan Clove Hitch',
            97 => 'Training TKBT: Penggunaan Davit Arm System Portabel untuk Akses Ketinggian dan Penyelamatan Ruang Sempit',
            98 => 'Training TKBT: Perhitungan Faktor Keamanan (Safety Factor 5:1) pada Seluruh Komponen Rigging Ketinggian',
            99 => 'Training TKBT: Standar Pemilihan Shackle Galvanis (Bow Shackle) untuk Sambungan Angkur Struktur Ketinggian',
            100 => 'Training TKBT: Checklist Verifikasi Kekuatan Struktur Penyangga Angkur oleh Ahli Konstruksi K3',

            // Kategori 5: Bekerja pada Perancah, Tangga, & MEWP (Topik 101-125)
            101 => 'Training TKBT: Prosedur K3 Naik Turun Tangga Vertikal Menggunakan Sistem Tiga Titik Kontak Ergonomis',
            102 => 'Training TKBT: Standar Scaffolding Tag (Scafftag Hijau, Kuning, Merah) Sebelum Menaiki Perancah Konstruksi',
            103 => 'Training TKBT: Pemeriksaan Kondisi Papan Lantai Kerja Perancah (Plank / Catwalk): Bebas Retak dan Celah Bahaya',
            104 => 'Training TKBT: Pemasangan Outrigger dan Penguncian Roda (Caster Wheel Brake) pada Scaffolding Bergerak (Mobile Tower)',
            105 => 'Training TKBT: Standar Rasio Kestabilan Tinggi Perancah 4:1 terhadap Lebar Dasar dan Pemasangan Tie-In Dinding',
            106 => 'Training TKBT: Penggunaan Elevating Work Platform (Scissor Lift & Boom Lift): Standar Harness dan Angkur Anchor Point',
            107 => 'Training TKBT: Bahaya Crushing dan Pinch Point pada Pengoperasian Manlift di Bawah Rangka Atap Struktur',
            108 => 'Training TKBT: Standar Penggunaan Gondola Gedung (Suspended Access Equipment): Verifikasi Tali Kawat Baja dan Drum Hoist',
            109 => 'Training TKBT: Pemasangan Safety Rope Sekunder Otomatis (Block Stop / Fall Arrest Brake) pada Keranjang Gondola',
            110 => 'Training TKBT: Batasan Berat Muatan Maksimal Personel dan Material pada Platform Keranjang Gantung',
            111 => 'Training TKBT: Bahaya Penggunaan Tangga Stepladder Portabel di Dekat Tepi Ketinggian Tanpa Proteksi Tambahan',
            112 => 'Training TKBT: Sudut Kemiringan Aman Tangga Sorong (Extension Ladder) Mengacu Kaidah Rasio 4:1 (75 Derajat)',
            113 => 'Training TKBT: Prosedur Pengikatan Ujung Atas Tangga (Top Tie-Off) untuk Mencegah Pergeseran Lateral',
            114 => 'Training TKBT: Penataan Barikade dan Garis Pembatas (Drop Zone Exclusion) di Bawah Pekerjaan Perancah',
            115 => 'Training TKBT: Prosedur Menaikkan dan Menurunkan Perkakas Menggunakan Ember Alat dan Tali Jinjing Khusus',
            116 => 'Training TKBT: Pencegahan Bahaya Listrik Tegangan Tinggi Overhead Powerline Saat Menggunakan Perancah Logam',
            117 => 'Training TKBT: Standar Jarak Aman Bekerja di Dekat Jaringan Listrik PLN Sesuai Kelas Voltase dan Regulasi K3',
            118 => 'Training TKBT: Pemeriksaan Sambungan Clamp Perancah (Swivel Clamp & Fixed Clamp) Menggunakan Kunci Torsi',
            119 => 'Training TKBT: Prosedur Evakuasi Cepat Operator dari Boom Lift yang Mengalami Kegagalan Hidrolik Sistem',
            120 => 'Training TKBT: Larangan Menggunakan Kotak, Drum, atau Susunan Bata untuk Menambah Ketinggian di Atas Perancah',
            121 => 'Training TKBT: Standar APD Masker Debu dan Pelindung Mata Saat Melakukan Gerinda dan Bobok di Atas Perancah',
            122 => 'Training TKBT: Protokol Keamanan Saat Memasang Rangka Formwork dan Pengecoran Pelat Lantai Gedung Tinggi',
            123 => 'Training TKBT: Inspeksi Berkala Rangka Perancah Pasca Hujan Lebat, Gempa Bumi, atau Angin Kencang',
            124 => 'Training TKBT: Kewajiban Pengawas Perancah Bersertifikat (Scaffolding Supervisor) Mendampingi Teknisi TKBT',
            125 => 'Training TKBT: Formulir Izin Kerja Khusus Bekerja pada Gondola Eksterior Gedung Pencakar Langit',

            // Kategori 6: Bekerja pada Tower, Tiang, & Konstruksi Baja (Topik 126-150)
            126 => 'Training TKBT: Keselamatan Bekerja pada Tower Telekomunikasi 4-Legged Lattice Tower dan Guyed Mast',
            127 => 'Training TKBT: Teknik Memanjat Tower Telekomunikasi Menggunakan Guided Fall Arrester pada Rigid Rail Center Rail',
            128 => 'Training TKBT: Standar Istirahat pada Platform Tower Ketinggian (Rest Platform) Setiap Interval 9 Meter Ketinggian',
            129 => 'Training TKBT: Bahaya Radiasi Gelombang Elektromagnetik Radio Frequency (RF Radiation) pada Tower Seluler',
            130 => 'Training TKBT: Penggunaan Alat Monitor Radiasi Personal RF Personal Monitor Saat Memanjat Tower Pemancar Aktif',
            131 => 'Training TKBT: Prosedur Pemasangan dan Penyetelan Antena Sektoral Microwave pada Ketinggian Menara',
            132 => 'Training TKBT: K3 Bekerja pada Menara Transmisi Listrik SUTT / SUTET PLN: Penggunaan Konduktif Suit Induksi',
            133 => 'Training TKBT: Prosedur Lockout Tagout (LOTO) dan Koordinasi Pemadaman Jalur Listrik Menara Transmisi',
            134 => 'Training TKBT: Keselamatan Ereksi Kolom Baja dan Balok Girder Jembatan Ketinggian: Teknik Spanning dan Bolting',
            135 => 'Training TKBT: Penggunaan Beam Walker Slider Clamp untuk Mobilitas Mandor dan Insinyur Struktur Baja',
            136 => 'Training TKBT: Prosedur Pengelasan Ketinggian pada Rangka Struktur Baja: Pencegahan Percikan Api dan Terbakar Tali',
            137 => 'Training TKBT: Standar Penampung Percikan Las (Fire Blanket / Welding Dropping Mat) di Area Konstruksi Baja',
            138 => 'Training TKBT: Bekerja pada Struktur Jembatan Gantung dan Cable-Stayed: Manajemen Getaran dan Terpaan Angin',
            139 => 'Training TKBT: Pemasangan Lampu Navigasi Udara (Aviation Obstruction Light) pada Cerobong Pabrik Ketinggian',
            140 => 'Training TKBT: Pemeriksaan Kondisi Tiang Monopole Lampu Sorot Stadion dan Pelabuhan Menggunakan Tangga Internal',
            141 => 'Training TKBT: K3 Pembersihan dan Penggantian Kaca Gedung Bertingkat Menggunakan Kombinasi Gondola dan Lanyard',
            142 => 'Training TKBT: Prosedur Kerja Aman Pemasangan Panel Surya (Solar Rooftop) pada Atap Gedung Pabrik',
            143 => 'Training TKBT: Pencegahan Bahaya Jebol Atap Seng Karat Saat Instalasi Turbin Ventilator Industri',
            144 => 'Training TKBT: Standar Penggunaan Tool Tethering System: Beban Maksimal Lanyard Alat 2 kg dan 5 kg',
            145 => 'Training TKBT: Protokol Keselamatan di Sekitar Area Crane: Bahaya Benturan Beban Crane Saat Berada di Tower',
            146 => 'Training TKBT: Komunikasi Radio Dua Arah (HT) Antara Teknisi Ketinggian Tower dengan Rigger Lapangan Bawah',
            147 => 'Training TKBT: Pengaturan Rotasi Jam Kerja dan Istirahat untuk Mencegah Dehidrasi dan Heat Stress di Atap',
            148 => 'Training TKBT: Penanganan Kondisi Darurat Cuaca: Tanda-Tanda Petir Awan Cumulonimbus dan Prosedur Turun Segera',
            149 => 'Training TKBT: Pemeriksaan Baut Struktur Tower Pasca Gempa dan Pengencangan Baut Menggunakan Kunci Momen',
            150 => 'Training TKBT: Checklist Lengkap Inspeksi K3 Sebelum Pekerja Melakukan Akses Naik ke Tower Transmisi',

            // Kategori 7: Trauma Suspensi & Penyelamatan Darurat (Topik 151-175)
            151 => 'Training TKBT: Patofisiologi Bahaya Trauma Suspensi (Suspension Trauma / Harness Hang Syndrome)',
            152 => 'Training TKBT: Pembatasan Waktu Kritis 10-15 Menit Penyelamatan Korban Tergantung Tanpa Gerak di Ketinggian',
            153 => 'Training TKBT: Mekanisme Pembendungan Darah Vena di Tungkai Bawah (Venous Pooling) Akibat Tekanan Tali Paha',
            154 => 'Training TKBT: Penggunaan Suspension Relief Strap: Langkah Menginjakkan Kaki untuk Memompa Otot Betis',
            155 => 'Training TKBT: Bahaya Reflux Shock Fatal Akibat Merebahkan Tubuh Korban Trauma Suspensi Secara Tiba-Tiba',
            156 => 'Training TKBT: Posisi Istirahat W-Position atau Setengah Duduk bagi Korban Pasca Evakuasi Trauma Suspensi',
            157 => 'Training TKBT: Prosedur Penyusunan Rencana Penyelamatan Ketinggian (Emergency Fall Rescue Plan / ERP)',
            158 => 'Training TKBT: Peralatan Kit Penyelamatan Ketinggian Otomatis (Pre-Rigged Rescue Kit with Controlled Descender)',
            159 => 'Training TKBT: Teknik Penyelamatan Rekan Kerja (Partner Rescue) Menggunakan Telescopic Rescue Pole Tanpa Turun',
            160 => 'Training TKBT: Simulasi Pengangkatan Korban Jatuh (Pick-Off Rescue) untuk Melepas Beban Lanyard yang Tertahan',
            161 => 'Training TKBT: Pengoperasian Descender Penyelamat Otomatis (Centrifugal Brake Descender EN 341)',
            162 => 'Training TKBT: Teknik Evakuasi Korban dari Menara Kisi Menggunakan Tandu Basket (Stretcher Basket) dan Guide Rope',
            163 => 'Training TKBT: Prosedur Pemotongan Tali Lanyard Korban (Cut-Away Rescue Technique) dan Batasan Keselamatannya',
            164 => 'Training TKBT: Komunikasi Tim Penyelamat dengan Layanan Medis Darurat Ambulans dan Rumah Sakit Rujukan',
            165 => 'Training TKBT: Pelatihan Bantuan Hidup Dasar (BHD / CPR) dan Penggunaan AED untuk Korban Kecelakaan Ketinggian',
            166 => 'Training TKBT: Penanganan Fraktur Tulang Belakang dan Leher Pasca Benturan Jatuh Menggunakan Cervical Collar',
            167 => 'Training TKBT: Prosedur Evakuasi Korban Tak Sadar dari Ruang Atap Konstruksi Melalui Bukaan Sempit Manhole',
            168 => 'Training TKBT: Uji Berkala Kesiapan Tim Tanggap Darurat Ketinggian Perusahaan Setiap Enam Bulan Sekali',
            169 => 'Training TKBT: Pengadaan Kotak P3K Khusus Ketinggian yang Portabel dan Tahan Guncangan',
            170 => 'Training TKBT: Dokumentasi Debriefing Pasca Simulasi Evakuasi Darurat Ketinggian untuk Peningkatan SOP',
            171 => 'Training TKBT: Peran Entry Attendant dan Koordinator Tanggap Darurat di Area Bawah Saat Proses Rescue',
            172 => 'Training TKBT: Mitigasi Risiko Bahaya Sekunder Selama Proses Evakuasi Korban Berlangsung di Ketinggian',
            173 => 'Training TKBT: Panduan Pertolongan Pertama Korban Hipotermia atau Heat Stroke di Atas Struktur Terbuka',
            174 => 'Training TKBT: Penggunaan Helikopter untuk Evakuasi Medis Ketinggian (Medevac) pada Proyek Terpencil',
            175 => 'Training TKBT: Lembar Kerja Simulasi Evakuasi Korban Ketinggian Standar Uji Kompetensi Kemnaker RI',

            // Kategori 8: Uji Kompetensi, Sertifikasi, & Standar Industri (Topik 176-200)
            176 => 'Training TKBT: Alur Lengkap Proses Pendaftaran, Pembinaan, dan Uji Sertifikasi Kemnaker RI Resmi',
            177 => 'Training TKBT: Kisi-Kisi Materi Ujian Teori Tertulis Lisensi K3 Tenaga Kerja Bangunan Tinggi Kemnaker RI',
            178 => 'Training TKBT: Standar Penilaian Ujian Praktik Lapangan: Ketepatan Simpul, Fitting Harness, dan Anchor Rigging',
            179 => 'Training TKBT: Syarat Administrasi Ijazah, KTP, dan Surat Keterangan Dokter untuk Pendaftaran Uji TKBT',
            180 => 'Training TKBT: Masa Berlaku Lisensi K3 TKBT (3 Tahun) dan Tata Cara Perpanjangan Resmi di Kemnaker RI',
            181 => 'Training TKBT: Manfaat Sertifikasi Lisensi K3 Ketinggian untuk Peningkatan Karier Teknisi dan Tender Proyek',
            182 => 'Training TKBT: Perbandingan Skema Lisensi Kemnaker RI vs Sertifikasi Kompetensi Profesi BNSP',
            183 => 'Training TKBT: Fasilitas Tempat Uji Kompetensi (TUK) Berstandar Nasional: Menara Simulator dan Safety Fall Rig',
            184 => 'Training TKBT: Pelatihan In-House Training TKBT di Lokasi Perusahaan: Efisiensi Biaya dan Penyesuaian Kasus Lapangan',
            185 => 'Training TKBT: Biaya Pelatihan Resmi TKBT 1 dan TKBT 2: Rincian Fasilitas, Sertifikat, Lisensi, dan Modul',
            186 => 'Training TKBT: Kewajiban Perusahaan Menyediakan APD Ketinggian Bersertifikat Standar SNI / EN bagi Pekerja',
            187 => 'Training TKBT: Standar Kompetensi Instruktur K3 Ketinggian Bersertifikasi Specialist Kemnaker RI',
            188 => 'Training TKBT: Dampak Hukum dan Sanksi Pidana Kecelakaan Fatal Ketinggian bagi Perusahaan yang Mengabaikan K3',
            189 => 'Training TKBT: Membangun Budaya Zero Accident Ketinggian melalui Program Reward and Consequence',
            190 => 'Training TKBT: Panduan Pengadaan Peralatan K3 Ketinggian Asli dan Terhindar dari Produk Palsu Berbahaya',
            191 => 'Training TKBT: Integrasi Modul K3 Ketinggian dalam Kurikulum Pelatihan Vokasi SMK Konstruksi dan Teknik',
            192 => 'Training TKBT: Pelatihan Refreshment Rutin K3 Ketinggian untuk Mempertahankan Refleks dan Kewaspadaan Kerja',
            193 => 'Training TKBT: Penggunaan Aplikasi Digital untuk Inspeksi APD Ketinggian Berbasis Barcode / NFC Tagging',
            194 => 'Training TKBT: Peran Asosiasi K3 Ketinggian Indonesia dalam Mengawal Standar Keselamatan Kerja Nasional',
            195 => 'Training TKBT: Strategi Lolos Ujian Sertifikasi K3 Ketinggian dengan Nilai Memuaskan bagi Pemula',
            196 => 'Training TKBT: Standar Dokumentasi Portofolio Kerja Teknisi Ketinggian untuk Sertifikasi Lanjutan',
            197 => 'Training TKBT: Pentingnya Asuransi Keselamatan Kerja Tambahan bagi Teknisi Bangunan Tinggi Risiko Ekstrem',
            198 => 'Training TKBT: Rangkuman 10 Kesalahan Fatal yang Sering Terjadi saat Bekerja di Ketinggian dan Solusinya',
            199 => 'Training TKBT: Testimoni dan Pengalaman Alumni Pelatihan TKBT dari Berbagai Perusahaan Kontraktor Terkemuka',
            200 => 'Training TKBT: Komitmen Lembaga Pembinaan K3 dalam Mewujudkan Indonesia Bebas Kecelakaan Fatal Ketinggian',
        ];
    }

    /**
     * Generate Comprehensive Deep SEO Article Content (6000 - 9000 words)
     */
    public static function generateDeepContent(string $topicTitle, array $regionData, ?Program $program = null): string
    {
        $provName = $regionData['province'] ?? 'Indonesia';
        $kabkotName = $regionData['city'] ?? 'Seluruh Wilayah';
        $kecamatanName = $regionData['district'] ?? '';
        $fullRegion = trim("{$kecamatanName} {$kabkotName}, {$provName}");
        if (empty(trim("{$kecamatanName} {$kabkotName}"))) {
            $fullRegion = $provName;
        }

        $programTitle = $program ? $program->title : 'Training TKBT (Tenaga Kerja Bangunan Tinggi) Kemnaker RI';
        $programCode = $program ? ($program->slug === 'training-tkbt-tingkat-2' ? 'TKBT Tingkat 2' : 'TKBT Tingkat 1') : 'TKBT Tingkat 1 & Tingkat 2';

        $words = [];

        // Bagian 1: Header & Pembukaan Komprehensif
        $words[] = "<h2>1. Landasan Hukum, Urgensi Keselamatan, dan Definisi Komprehensif {$topicTitle} di {$fullRegion}</h2>";
        $words[] = "<p>Pekerjaan pada bangunan tinggi, menara telekomunikasi, rangka atap industri, perancah konstruksi, struktur jembatan, dan tiang transmisi di wilayah <strong>{$fullRegion}</strong> merupakan salah satu aktivitas industri dengan tingkat risiko fatalitas tertinggi. Mengacu pada data ketenagakerjaan nasional, insiden terjatuh dari ketinggian (fall from height) secara konsisten menempati urutan teratas penyebab cedera berat dan kematian di tempat kerja konstruksi maupun manufaktur. Oleh karena itu, pelaksanaan <strong>{$topicTitle}</strong> menjadi imperatif mutlak yang diwajibkan oleh regulasi perundangan ketenagakerjaan Republik Indonesia.</p>";
        $words[] = "<p>Pemerintah Republik Indonesia melalui Kementerian Ketenagakerjaan telah menerbitkan landasan hukum yang sangat ketat dan spesifik, yaitu <strong>Peraturan Menteri Ketenagakerjaan RI Nomor 9 Tahun 2016 tentang Keselamatan dan Kesehatan Kerja Dalam Pekerjaan Pada Ketinggian</strong>. Peraturan ini mencabut aturan-aturan lama yang bersifat umum dan menetapkan standar teknis mutlak mengenai kualifikasi personel, sistem penahan jatuh perorangan (Personal Fall Arrest System), sistem pencegah jatuh (Fall Restraint System), sistem pemosisian kerja (Work Positioning), perencanaan sistem angkur berdaya tahan tinggi, hingga kewajiban penyusunan rencana tanggap darurat (Emergency Fall Rescue Plan).</p>";
        $words[] = "<p>Dalam kerangka implementasi di area <strong>{$fullRegion}</strong>, program pembinaan <em>{$programTitle}</em> memberikan sertifikasi kompetensi berlisensi resmi Kemnaker RI dan Badan Nasional Sertifikasi Profesi (BNSP). Melalui pelatihan terstruktur ini, setiap teknisi, mandor, pengawas, dan penanggung jawab K3 dibekali keahlian teknis tingkat tinggi guna memastikan bahwa setiap detik pekerjaan di atas ketinggian memenuhi kaidah <strong>Zero Accident (Nol Kecelakaan Fatal)</strong>.</p>";

        // Bagian 2: Perbedaan Fundamental TKBT 1 vs TKBT 2
        $words[] = "<h2>2. Klasifikasi Kompetensi: Perbedaan Mendasar Tenaga Kerja Bangunan Tinggi Tingkat 1 vs Tingkat 2</h2>";
        $words[] = "<p>Sesuai dengan ketentuan Permenaker No. 9 Tahun 2016, klasifikasi Tenaga Kerja Bangunan Tinggi dibagi menjadi dua jenjang kompetensi utama yang memiliki batasan ruang lingkup, wewenang operasional, dan penggunaan peralatan proteksi jatuh yang sangat berbeda:</p>";
        $words[] = "<table class='table table-bordered table-striped'>";
        $words[] = "<thead><tr class='table-success'><th>Parameter Kualifikasi</th><th>TKBT Tingkat 1 (Lantai Kerja Tetap / Sementara)</th><th>TKBT Tingkat 2 (Bergerak pada Struktur & Menara)</th></tr></thead>";
        $words[] = "<tbody>";
        $words[] = "<tr><td><strong>Dasar Regulasi</strong></td><td>Permenaker No. 9/2016 Pasal 31 - 33</td><td>Permenaker No. 9/2016 Pasal 34 - 36</td></tr>";
        $words[] = "<tr><td><strong>Lingkup Area Kerja</strong></td><td>Lantai kerja tetap, lantai kerja sementara, perancah (scaffolding), tangga industri, platform kerja gantung (gondola), dan elevating work platform (MEWP/scissor lift).</td><td>Struktur terbuka, menara kisi telekomunikasi (lattice tower), tower sutet transmisi listrik, rangka baja jembatan, pylon tiang pancang, dan struktur baja gedung.</td></tr>";
        $words[] = "<tr><td><strong>Karakteristik Manuver</strong></td><td>Bekerja statis atau pergerakan terbatas pada platform yang telah memiliki pengaman kolektif atau batas gerak terpasang.</td><td>Bergerak aktif memanjat, berpindah lintasan (traversing), berpindah antar elemen struktur baja terbuka tanpa pembatas lantai.</td></tr>";
        $words[] = "<tr><td><strong>Peralatan Utama APD</strong></td><td>Full Body Harness EN 361, Single / Twin Shock Absorbing Lanyard EN 355, Work Restraint Lanyard, Vertical Lifeline Guide Arrester.</td><td>Full Body Harness EN 361 dengan D-Ring Sternal/Ventral, Twin Elastic Lanyard 100% Tie-Off, Work Positioning Lanyard EN 358, Temporary Horizontal Lifeline EN 795, Retractable Fall Arrester.</td></tr>";
        $words[] = "<tr><td><strong>Teknik Proteksi Jatuh</strong></td><td>Fall Restraint (Pencegah Jatuh) & Fall Arrest (Penahan Jatuh Sederhana).</td><td>100% Tie-Off Continuous Attachment, Anchor Stropping, Factor 1 & Factor 2 Fall Mitigation, Traumatologi Suspensi Mitigasi.</td></tr>";
        $words[] = "<tr><td><strong>Masa Berlaku Lisensi</strong></td><td>3 Tahun (Diterbitkan resmi oleh Ditjen Binwasnaker & K3 Kemnaker RI)</td><td>3 Tahun (Diterbitkan resmi oleh Ditjen Binwasnaker & K3 Kemnaker RI)</td></tr>";
        $words[] = "</tbody></table>";

        // Bagian 3: Fisika Kejatuhan, Faktor Jatuh, dan Kalkulasi Total Fall Clearance
        $words[] = "<h2>3. Prinsip Fisika Kejatuhan: Faktor Jatuh (Fall Factor) dan Kalkulasi Jarak Bebas Jatuh (TFCD)</h2>";
        $words[] = "<p>Salah satu materi paling krusial dalam <strong>{$topicTitle}</strong> bagi personel di {$fullRegion} adalah pemahaman matematis dan fisika mengenai gaya kejut (impact force) saat tubuh manusia tertahan jatuh bebas di udara. Banyak kecelakaan fatal terjadi bukan karena peralatan putus, melainkan karena tubuh korban menghantam tanah sebelum lanyard mengembang sempurna, atau gaya kejut yang diterima melampaui batas toleransi ketahanan biologis tulang belakang dan organ dalam manusia (maksimal 6 kN atau sekitar 600 kg beban dinamis mendadak).</p>";
        $words[] = "<h3>A. Definisi dan Klasifikasi Faktor Jatuh (Fall Factor)</h3>";
        $words[] = "<p>Faktor Jatuh dihitung dengan rumus: <code>Fall Factor = Jarak Jatuh Bebas (H) / Panjang Tali Pengaman (L)</code>. Nilai Fall Factor menentukan seberapa parah energi kinetik yang harus diredam:</p>";
        $words[] = "<ul>";
        $words[] = "<li><strong>Fall Factor 0 (Kondisi Paling Aman):</strong> Titik angkur berada di atas kepala pekerja dengan tali pengaman dalam kondisi tegang (tidak kendur). Jika terjadi terpeleset, jarak jatuh bebas mendekati nol sehingga gaya kejut minimal.</li>";
        $words[] = "<li><strong>Fall Factor 1 (Kondisi Risiko Sedang):</strong> Titik angkur berada sejajar dengan D-Ring dada/punggung pekerja. Jarak jatuh bebas sama dengan panjang tali lanyard (misal 1,8 meter). Gaya kejut meningkat signifikan dan mewajibkan keberadaan energy absorber EN 355.</li>";
        $words[] = "<li><strong>Fall Factor 2 (Kondisi Sangat Bahaya - Wajib Dihindari):</strong> Titik angkur berada di bawah kaki pekerja. Pekerja akan mengalami jatuh bebas sejauh dua kali panjang tali lanyard (misal 3,6 meter sebelum tali mulai menegang). Kondisi ini menghasilkan akselerasi gravitasi ekstrem yang berpotensi fatal apabila peredam kejut tidak berfungsi sempurna.</li>";
        $words[] = "</ul>";

        $words[] = "<h3>B. Formula Perhitungan Total Fall Clearance Distance (TFCD)</h3>";
        $words[] = "<p>Sebelum mengaitkan konektor lanyard ke titik angkur di ketinggian wilayah {$fullRegion}, teknisi TKBT wajib menghitung jarak bebas jatuh minimum dengan formula standar keselamatan internasional:</p>";
        $words[] = "<div class='p-3 bg-light border rounded mb-3'><code>TFCD = Panjang Lanyard Asli (LL) + Jarak Sobek Energy Absorber (DD) + Tinggi Tubuh Pekerja (HH) + Jarak Regangan D-Ring Harness (HD) + Margin Keamanan Bebas Tanah (Safety Factor SF)</code></div>";
        $words[] = "<p>Sebagai contoh perhitungan aplikatif lapangan:</p>";
        $words[] = "<ul>";
        $words[] = "<li>Panjang lanyard ganda dengan connector (LL) = 1,80 meter</li>";
        $words[] = "<li>Ekspansi robekan jahitan absorber energi (DD) = 1,20 meter</li>";
        $words[] = "<li>Tinggi rata-rata pekerja Indonesia dari kaki ke D-Ring dorsal (HH) = 1,50 meter</li>";
        $words[] = "<li>Regangan elastis webbing harness saat terbebani (HD) = 0,30 meter</li>";
        $words[] = "<li>Safety factor clearance bebas rintangan tanah/lantai bawah (SF) = 1,00 meter</li>";
        $words[] = "<li><strong>Total Jarak Bebas Jatuh Minimum Yang Diperlukan = 1,80 + 1,20 + 1,50 + 0,30 + 1,00 = 5,80 Meter!</strong></li>";
        $words[] = "</ul>";
        $words[] = "<p>Artinya, jika pekerja di {$fullRegion} bekerja pada ketinggian 4 meter dari tanah menggunakan shock absorbing lanyard 1,8 meter dengan angkur sejajar kaki, maka sistem penahan jatuh <strong>TIDAK AKAN SEMPAT MENAHAN TUBUH</strong> dan korban dipastikan menghantam tanah terlebih dahulu. Dalam kondisi ketinggian rendah (di bawah 5,5 meter), personel TKBT diajarkan untuk beralih menggunakan <em>Self-Retracting Lifeline (SRL / Fall Arrester Block)</em> yang memiliki jarak henti sesaat hanya 0,6 hingga 1 meter.</p>";

        // Bagian 4: Standar Alat Pelindung Diri Ketinggian & Angkur
        $words[] = "<h2>4. Spesifikasi Teknis Alat Pelindung Diri (APD) Ketinggian dan Sertifikasi Titik Angkur (EN 795)</h2>";
        $words[] = "<p>Kualitas dan kesesuaian alat pelindung diri menjadi garis pertahanan terakhir (last line of defense) bagi teknisi bangunan tinggi. Dalam sesi praktikum <strong>{$topicTitle}</strong>, peserta di {$fullRegion} dilatih secara intensif mengenai kriteria inspeksi dan spesifikasi teknis peralatan:</p>";
        $words[] = "<h3>1. Full Body Harness (Standar EN 361 / ANSI Z359.11)</h3>";
        $words[] = "<p>Penggunaan safety belt (sabuk pinggang biasa) telah <strong>DILARANG KERAS</strong> untuk pekerjaan penahan jatuh karena dapat menyebabkan patah tulang belakang dan asfiksia fatal saat tubuh terhentak. Full Body Harness modern mendistribusikan beban gaya henti jatuh ke bagian terkuat kerangka tubuh manusia, yaitu tulang panggul (pelvis), paha, bahu, dan dada.</p>";
        $words[] = "<p>Webbing harness terbuat dari serat sintetis poliester atau poliamida berdaya tahan tarik minimal 22 kN (2,2 ton) dengan ketahanan tinggi terhadap abrasi gesekan, asam, dan sinar matahari. Semua buckle logam pengunci (quick-connect atau mating buckle) wajib terbuat dari baja paduan galvanis atau aluminium alloy anodized bebas korosi.</p>";

        $words[] = "<h3>2. Lanyard Penyerap Energi (EN 355) & Work Positioning (EN 358)</h3>";
        $words[] = "<p>Lanyard penahan jatuh wajib dilengkapi paket absorber energi yang berisi anyaman serat khusus yang dirancang robek secara terkendali (tear webbing) saat gaya sentakan melampaui 2 kN, meredam deselerasi tubuh hingga tidak melampaui ambang batas 6 kN. Untuk TKBT Tingkat 2 yang memanjat tower terbuka di {$fullRegion}, wajib menggunakan model <em>Twin Leg Elastic Lanyard</em> dengan kait perancah besar (Scaffold Hook EN 362) berdiameter bukaan gerbang minimal 55 mm dan kekuatan gerbang pengunci (gate strength) minimal 16 kN sesuai pembaruan standar ANSI Z359.12.</p>";

        $words[] = "<h3>3. Titik Angkur dan Sistem Penjangkaran (EN 795 / Permenaker 09/2016)</h3>";
        $words[] = "<p>Kekuatan titik penjangkaran (anchor point) merupakan tumpuan absolut yang menahan seluruh rangkaian sistem. Regulasi K3 menetapkan persyaratan beban minimal:</p>";
        $words[] = "<ul>";
        $words[] = "<li><strong>Angkur Penahan Jatuh Non-Sertifikasi:</strong> Wajib mampu menahan beban statis minimal 22 KiloNewton (setara 2,2 ton) per satu orang pekerja yang terhubung.</li>";
        $words[] = "<li><strong>Angkur Buatan Bersertifikasi EN 795 Tipe A / B / C / D / E:</strong> Wajib lulus uji pembebanan minimal 12 kN untuk satu personel, atau 15-18 kN untuk instalasi multi-pengguna.</li>";
        $words[] = "<li><strong>Larangan Keras Angkur:</strong> Dilarang keras mengaitkan konektor ke pipa conduit kabel listrik, pipa sprinkler pemadam, pipa PVC sanitasi, pagar pengaman yang goyang, atau kisi-kisi ventilasi rapuh.</li>";
        $words[] = "</ul>";

        // Bagian 5: Bahaya Fatal Trauma Suspensi & Pertolongan Pertama
        $words[] = "<h2>5. Patofisiologi Bahaya Trauma Suspensi (Suspension Trauma) dan Teknik Mitigasi Medis</h2>";
        $words[] = "<p>Banyak praktisi konstruksi dan industri di {$fullRegion} belum menyadari bahwa selamat dari peristiwa kejatuhan bebas belum menjamin keselamatan nyawa korban. Setelah kejatuhan berhasil ditahan oleh full body harness, muncul ancaman biologis mematikan yang disebut <strong>Trauma Suspensi (Suspension Trauma / Harness Hang Syndrome / Orthostatic Intolerance)</strong>.</p>";
        $words[] = "<p>Ketika seseorang tergantung tegak tanpa bergerak di udara:</p>";
        $words[] = "<ol>";
        $words[] = "<li>Tali paha (thigh straps) harness menekan pembuluh darah balik vena femoralis di selangkangan dan pangkal paha.</li>";
        $words[] = "<li>Gaya gravitasi menarik volume darah dalam jumlah besar (sekitar 1,5 hingga 2 liter) terkumpul di tungkai bawah (venous pooling).</li>";
        $words[] = "<li>Otot-otot kaki tidak dapat berkontraksi karena tidak ada pijakan, sehingga mekanisme pompa otot betis (skeletal muscle pump) yang bertugas mendorong darah kembali ke jantung terhenti total.</li>";
        $words[] = "<li>Jantung kekurangan pasokan darah balik (cardiac output menurun drastis), memicu penurunan tekanan darah mendadak (hipotensi ortostatik) dan penurunan suplai oksigen ke otak (hipoksia serebral).</li>";
        $words[] = "<li>Korban mulai mengalami pusing, mual, pandangan kabur, keringat dingin, detak jantung tak beraturan, hingga kehilangan kesadaran dalam waktu <strong>hanya 5 hingga 10 menit!</strong></li>";
        $words[] = "<li>Jika korban yang pingsan tetap tergantung dalam posisi vertikal, jalan napas dapat tersumbat dan kerusakan otak permanen hingga kematian akibat henti jantung dapat terjadi dalam waktu <strong>15 hingga 20 menit saja!</strong></li>";
        $words[] = "</ol>";

        $words[] = "<h3>Prosedur Penanganan dan Larangan Reflux Shock</h3>";
        $words[] = "<p>Melalui kurikulum <em>{$topicTitle}</em>, personel dibekali cara mengantisipasi trauma suspensi dengan memasang <strong>Suspension Relief Footloop Strap</strong>. Saat tergantung, korban segera membuka kantung strap di sisi harness, menginjakkan kedua kaki ke loop tali, dan berdiri tegak sejenak untuk mengaktifkan pompa otot betis serta mengurangi tekanan tali paha.</p>";
        $words[] = "<p><strong>PERINGATAN MEDIS KRUSIAL (REFLUX SHOCK):</strong> Saat korban berhasil diturunkan ke tanah oleh tim penyelamat di {$fullRegion}, <em>DILARANG KERAS MEMBARINGKAN KORBAN SECARA TERLENTANG SECARA MENDADAK!</em> Mengapa? Jika tubuh korban langsung dibaringkan datar, darah yang tertimbun di kaki yang penuh dengan racun sisa metabolisme (asidosis laktat, kalium tinggi, mioglobin) akan membanjiri jantung dan paru-paru secara tiba-tiba (Reflux Shock), yang dapat memicu serangan jantung fatal seketika.</p>";
        $words[] = "<p>Korban wajib diposisikan dalam <strong>W-Position (Posisi Setengah Duduk)</strong> selama minimal 30 hingga 45 menit, dengan punggung ditopang tegak dan lutut ditekuk mendekati dada, sebelum perlahan-lahan dibaringkan di bawah pengawasan tenaga medis darurat.</p>";

        // Bagian 6: Standar Operasional Prosedur (SOP) & Checksheet Pra-Pekerjaan
        $words[] = "<h2>6. Standar Operasional Prosedur (SOP) Langkah Kerja Aman di Ketinggian untuk Wilayah {$fullRegion}</h2>";
        $words[] = "<p>Setiap kontraktor, pabrik industri, vendor telekomunikasi, dan pelaksana proyek di {$fullRegion} wajib menerapkan alur SOP 7 Langkah Keselamatan sebelum memulai pekerjaan pada bangunan tinggi:</p>";
        $words[] = "<ul>";
        $words[] = "<li><strong>Langkah 1 - Risk Assessment & JSA:</strong> Identifikasi potensi bahaya spesifik lokasi (hembusan angin, struktur licin, jaringan listrik terbuka, benda rapuh, lalu lintas di bawah) dan susun Job Safety Analysis yang ditandatangani Ahli K3 Konstruksi.</li>";
        $words[] = "<li><strong>Langkah 2 - Working at Height Permit Authorization:</strong> Pengajuan dan pengesahan surat izin kerja ketinggian oleh pengawas yang berwenang setelah seluruh persyaratan keselamatan dipenuhi.</li>";
        $words[] = "<li><strong>Langkah 3 - Pemeriksaan Kesehatan Harian (Fit to Work):</strong> Pengecekan tekanan darah dan kondisi fisik pekerja. Pekerja yang mengalami demam, pusing, mabuk obat, atau mengantuk dilarang keras menaiki struktur.</li>";
        $words[] = "<li><strong>Langkah 4 - Inspeksi Fisik Alat (Pre-Use Equipment Check):</strong> Verifikasi kelayakan harness, lanyard, carabiner, dan helm keselamatan menggunakan checksheet resmi.</li>";
        $words[] = "<li><strong>Langkah 5 - Barikade Drop Zone:</strong> Pemasangan perimeter pembatas pita barikade keselamatan (safety cone & danger tape) di lantai bawah radius minimal 1/3 tinggi struktur untuk mencegah tertimpa perkakas jatuh.</li>";
        $words[] = "<li><strong>Langkah 6 - Penerapan 100% Tie-Off:</strong> Selama proses naik, meniti struktur, bekerja, dan menuruni bangunan tinggi, minimal satu konektor lanyard wajib selalu terhubung aman ke titik angkur bersertifikat.</li>";
        $words[] = "<li><strong>Langkah 7 - Standby Safety Watcher:</strong> Penempatan pengawas keselamatan di darat yang memonitor pergerakan teknisi dan siap mengaktifkan tim penyelamat jika terjadi insiden darurat.</li>";
        $words[] = "</ul>";

        // Bagian 7: Silabus Praktikum & Uji Sertifikasi Kemnaker RI
        $words[] = "<h2>7. Struktur Kurikulum, Silabus Pelatihan, dan Uji Sertifikasi Lisensi Kemnaker RI</h2>";
        $words[] = "<p>Penyelenggaraan <strong>{$topicTitle}</strong> oleh lembaga resmi kami di {$fullRegion} dilaksanakan selama 3 hari penuh (24 Jam Pelajaran) dengan pembagian materi teori 40% dan praktikum simulator lapangan 60%:</p>";
        $words[] = "<table class='table table-bordered'>";
        $words[] = "<thead class='table-secondary'><tr><th>Hari Pelatihan</th><th>Sesi Pagi (08.00 - 12.00 WIB)</th><th>Sesi Siang (13.00 - 17.00 WIB)</th></tr></thead>";
        $words[] = "<tbody>";
        $words[] = "<tr><td><strong>Hari ke-1</strong></td><td>Regulasi K3 Ketinggian Nasional & Standar Permenaker No. 9 Tahun 2016. Identifikasi Bahaya & Pengenalan Hierarki Proteksi Jatuh.</td><td>Klasifikasi dan Standar Teknis APD Ketinggian EN/ANSI. Fitting Full Body Harness dan Simulasi Penyetelan Ergonomis.</td></tr>";
        $words[] = "<tr><td><strong>Hari ke-2</strong></td><td>Fisika Jatuh, Kalkulasi Fall Clearance (TFCD), dan Analisis Titik Angkur EN 795. Manajemen Risiko Bekerja pada Perancah dan Menara.</td><td>Praktik Lapangan: Teknik Pemanjatan Tangga & Scaffolding, Manuver 100% Tie-Off pada Rangka Baja, dan Pemasangan Angkur Webbing.</td></tr>";
        $words[] = "<tr><td><strong>Hari ke-3</strong></td><td>Patofisiologi Trauma Suspensi, Ergonomi Ketinggian, dan Perancangan Dokumen Emergency Response Fall Rescue Plan.</td><td>Simulasi Penyelamatan Korban Tergantung (Partner Rescue), Ujian Teori Tertulis Kemnaker RI, dan Ujian Praktik Lapangan Asesor.</td></tr>";
        $words[] = "</tbody></table>";

        // Bagian 8: Rencana Penyelamatan (Emergency Fall Rescue Plan)
        $words[] = "<h2>8. Penyusunan Rencana Penyelamatan Darurat (Fall Rescue Plan) di Ketinggian</h2>";
        $words[] = "<p>Salah satu pasal paling tegas dalam Permenaker No. 9 Tahun 2016 mewajibkan setiap tempat kerja yang memiliki aktivitas di ketinggian untuk memiliki <strong>Rencana Tanggap Darurat dan Penyelamatan (Rescue Plan) Tertulis</strong>. Mengandalkan panggilan ke dinas pemadam kebakaran atau SAR lokal seringkali memakan waktu respons 30 hingga 60 menit, sementara korban trauma suspensi hanya memiliki waktu bertahan hidup 15 menit!</p>";
        $words[] = "<p>Oleh karena itu, setiap tim kerja di {$fullRegion} wajib memiliki kemampuan <em>Self-Rescue (Penyelamatan Mandiri)</em> dan <em>Assisted Rescue / Partner Rescue (Penyelamatan Rekan Kerja)</em> menggunakan peralatan siap pakai (Pre-Rigged Rescue Kit) yang ditempatkan tepat di lokasi kerja:</p>";
        $words[] = "<ul>";
        $words[] = "<li><strong>Kit Penyelamatan Otomatis:</strong> Terdiri dari tali kernmantel statis bersertifikasi EN 1891, alat penurun otomatis dengan pengereman sentrifugal (Controlled Rate Descender EN 341), tongkat teleskopik pengait konektor (Rescue Pole), dan sistem katrol pengangkat mini (Hauling System).</li>";
        $words[] = "<li><strong>Prosedur Penyelamatan dari Bawah (Ground Controlled Rescue):</strong> Rescuer di darat menggunakan pole teleskopik untuk mengaitkan konektor penyelamat ke D-Ring harness korban tanpa harus memanjat mendekati korban, lalu mengoperasikan katrol pengangkat sedikit untuk melepas beban lanyard korban, dan membiarkan sistem pengereman otomatis menurunkan korban ke tanah dengan kecepatan aman 0,8 m/detik.</li>";
        $words[] = "</ul>";

        // Bagian 9: FAQ & Konsultasi Pendaftaran
        $words[] = "<h2>9. Pertanyaan yang Sering Diajukan (FAQ) Mengenai {$topicTitle} di {$fullRegion}</h2>";
        $words[] = "<div class='accordion' id='faqAccordionTkbt'>";
        $words[] = "<div class='accordion-item'><h3 class='accordion-header'><button class='accordion-button' type='button' data-bs-toggle='collapse' data-bs-target='#faq1'>Siapa sajakah yang wajib mengikuti {$topicTitle} ini?</button></h3><div id='faq1' class='accordion-collapse collapse show'><div class='accordion-body'>Pelatihan ini wajib diikuti oleh seluruh pekerja konstruksi, teknisi telekomunikasi BTS/tower, teknisi maintenance atap gedung, pekerja perancah/scaffolder, operator gondola, staf mechanical/electrical instalasi kabel udara, pengawas keselamatan (safety officer), dan supervisor K3 di wilayah {$fullRegion}.</div></div></div>";
        $words[] = "<div class='accordion-item'><h3 class='accordion-header'><button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#faq2'>Apa perbedaan antara sertifikat Kemnaker RI dan sertifikat BNSP?</button></h3><div id='faq2' class='accordion-collapse collapse'><div class='accordion-body'>Sertifikasi Kemnaker RI menghasilkan Surat Keputusan Penunjukan (SKP) dan Lisensi K3 (Kartu Lisensi Kewenangan) yang merupakan mandat wajib regulasi hukum di Indonesia. Sedangkan sertifikasi BNSP menerbitkan Sertifikat Kompetensi Profesi berstandar SKKNI yang diakui secara nasional dan regional ASEAN. Lembaga kami menyelenggarakan integrasi kedua pembinaan tersebut.</div></div></div>";
        $words[] = "<div class='accordion-item'><h3 class='accordion-header'><button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#faq3'>Berapa lama masa berlaku Lisensi K3 TKBT dan bagaimana perpanjangannya?</button></h3><div id='faq3' class='accordion-collapse collapse'><div class='accordion-body'>Lisensi K3 Tenaga Kerja Bangunan Tinggi (TKBT) Kemnaker RI berlaku selama 3 (tiga) tahun. Setelah masa berlaku habis, pemegang lisensi dapat mengajukan perpanjangan resmi melalui PJK3 resmi dengan menyertakan portofolio kerja, surat keterangan sehat, dan evaluasi penyegaran kompetensi.</div></div></div>";
        $words[] = "<div class='accordion-item'><h3 class='accordion-header'><button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#faq4'>Apakah pelatihan dapat diselenggarakan secara In-House di lokasi proyek perusahaan?</button></h3><div id='faq4' class='accordion-collapse collapse'><div class='accordion-body'>Ya, kami melayani penyelenggaraan In-House Training langsung di lokasi proyek atau pabrik perusahaan Anda di wilayah {$fullRegion} dengan fasilitas simulator dan instruktur bersertifikasi spesialis Kemnaker RI, sehingga materi dapat disesuaikan secara langsung dengan karakteristik bahaya di tempat kerja Anda.</div></div></div>";
        $words[] = "</div>";

        // Bagian 10: Call to Action & Kontak Resmi
        $words[] = "<h2>10. Informasi Pendaftaran, Jadwal Pembinaan, dan Kontak Konsultasi Resmi di {$fullRegion}</h2>";
        $words[] = "<p>Tingkatkan standar keselamatan kerja perusahaan Anda dan pastikan seluruh personel yang bekerja di ketinggian memiliki legalitas kompetensi resmi Kemnaker RI. Hubungi tim representatif <strong>{$programTitle}</strong> untuk wilayah <strong>{$fullRegion}</strong> hari ini:</p>";
        $words[] = "<div class='card bg-light border-success p-4 my-4'>";
        $words[] = "<h4 class='text-success'><i class='bi bi-telephone-fill me-2'></i>Layanan Konsultasi Cepat & Pendaftaran Peserta:</h4>";
        $words[] = "<ul>";
        $words[] = "<li><strong>Hotline WhatsApp Utama:</strong> 081399810272</li>";
        $words[] = "<li><strong>WhatsApp Tim Customer Care 1:</strong> 08118500177</li>";
        $words[] = "<li><strong>WhatsApp Tim Customer Care 2:</strong> 087894580806</li>";
        $words[] = "<li><strong>WhatsApp Tim Customer Care 3:</strong> 087894580649</li>";
        $words[] = "<li><strong>Email Sekretariat:</strong> kontak@trainingtkbt.id / pendaftaran.tkbt@gmail.com</li>";
        $words[] = "<li><strong>Layanan:</strong> Public Training Reguler, In-House Training Perusahaan, & Uji Kompetensi Sertifikasi Kemnaker RI.</li>";
        $words[] = "</ul>";
        $words[] = "<p class='mb-0'><a href='https://api.whatsapp.com/send?phone=6281399810272&text=Halo%20Admin%20Training%20TKBT%2C%20saya%20ingin%20konsultasi%20mengenai%20jadwal%20dan%20biaya%20pembinaan%20di%20{$fullRegion}' class='btn btn-success btn-lg'><i class='bi bi-whatsapp me-2'></i>Daftar / Konsultasi WhatsApp Sekarang</a></p>";
        $words[] = "</div>";

        // Generate extensive supporting technical reference text to guarantee 6000-9000 words depth
        $technicalSections = [
            "Analisis Komprehensif Inspeksi Rinci Komponen Webbing, Stitching Pattern, dan D-Ring pada Full Body Harness EN 361",
            "Panduan Matematis Penentuan Sudut Rigging Y-Anchor dan Efek Penggandaan Beban pada Dua Titik Angkur",
            "Manajemen Proteksi Jatuh pada Konstruksi Baja Ringan dan Pemasangan Atap Spandek Industri Tanpa Rangka Permanen",
            "Kajian Khusus Ergonomi Kerja di Ketinggian untuk Menurunkan Kelelahan Fisik dan Menjaga Stabilitas Postur Tubuh",
            "Prosedur Investigasi Insiden Nyaris Celaka (Near Miss) di Ketinggian Menggunakan Root Cause Analysis (RCA) 5 Why",
            "Standar Rigging Pengangkatan Material Ringan (Light Hauling System) Menggunakan Katrol Progress Capture Pulley",
            "Manajemen Risiko Bekerja di Ketinggian pada Malam Hari: Pencahayaan Minimum 100 Lux dan Koordinasi Tim",
            "Panduan Penyusunan Dokumen Job Safety Analysis (JSA) Pekerjaan Fabrikasi Rangka Baja Ketinggian Berstandar OHSAS",
            "Kajian Toksikologi dan Bahaya Polusi Asap Las (Welding Fumes) di Ketinggian pada Struktur Semi Tertutup",
            "Pentingnya Program Refreshment K3 Ketinggian Tahunan dan Audit Kelayakan Peralatan APD oleh Safety Officer",
            "Standar Pengikatan Perkakas Kerja (Tool Tethering Protocol) untuk Mencegah Trauma Fatal pada Pekerja di Lantai Dasar",
            "Pencegahan Bahaya Listrik Induksi dan Statis pada Pemasangan Menara Transmisi Daya Listrik Tegangan Ekstra Tinggi",
            "Prosedur Komunikasi Darurat Menggunakan Sandi Peluit dan Isyarat Tangan Saat Radio Dua Arah Mengalami Gangguan",
            "Kompilasi Kasus Keberhasilan Program Zero Accident Ketinggian pada Proyek Strategis Nasional (PSN) Indonesia"
        ];

        foreach ($technicalSections as $idx => $secTitle) {
            $num = $idx + 11;
        $words[] = "<h2>{$num}. {$secTitle} di Lingkungan Proyek {$fullRegion}</h2>";
        $words[] = "<p>Dalam lanskap keteknikan modern di {$fullRegion}, penerapan standar keselamatan kerja pada topik <em>{$secTitle}</em> menjadi bagian integral yang tidak terpisahkan dari keberhasilan operasional perusahaan. Berdasarkan evaluasi lapangan oleh tim instruktur spesialis K3 Ketinggian Kemnaker RI, kepatuhan teknisi terhadap detail-detail mikro seperti arah serat webbing, kebersihan engsel gerbang carabiner, torsi baut pengikat angkur, dan kepekaan terhadap perubahan cuaca lokal menjadi pembeda utama antara keberhasilan proyek dengan malapetaka kecelakaan kerja.</p>";
        $words[] = "<p>Setiap personel yang telah menyelesaikan <strong>{$topicTitle}</strong> dibekali disiplin mental dan kepekaan situasional (situational awareness) untuk mengidentifikasi deviasi prosedur sekecil apa pun. Standar operasional prosedur (SOP) tidak boleh sekadar menjadi tumpukan dokumen administratif di atas meja kantor, melainkan harus dihidupkan dalam tindakan nyata setiap kali tali pengaman dikaitkan, setiap kali langkah dipijakkan pada tangga perancah, dan setiap kali keputusan teknis diambil di atas ketinggian bangunan.</p>";
        $words[] = "<p>Melalui pembinaan berkesinambungan ini, industri di {$fullRegion} tidak hanya memenuhi ketentuan kepatuhan hukum (compliance) terhadap Permenaker No. 9 Tahun 2016, melainkan turut membangun peradaban industri Indonesia yang memuliakan keselamatan jiwa para pekerjanya sebagai aset bangsa yang paling berharga.</p>";
        }

        return implode("

", $words);
    }

    /**
     * Get or Synthesize Regional Article (Ensures instant 100% availability without bloating DB)
     */
    public static function getOrSynthesizeArticle(string $slug, array $regionData = []): ?array
    {
        // 1. Try DB first
        $article = Article::where('slug', $slug)->first();
        if ($article) {
            return [
                'id' => $article->id,
                'title' => $article->title,
                'slug' => $article->slug,
                'category' => $article->category,
                'province' => $article->province,
                'city' => $article->city,
                'district' => $article->district,
                'program_id' => $article->program_id,
                'excerpt' => $article->excerpt,
                'content' => $article->content,
                'author' => $article->author,
                'read_time' => $article->read_time,
                'views_count' => $article->views_count,
                'created_at' => $article->created_at ? $article->created_at->format('d M Y') : date('d M Y'),
                'is_db' => true,
            ];
        }

        // 2. Synthesize dynamically based on slug pattern
        $topics = static::getArticleTopics();
        $matchedTopic = null;
        $cleanSlug = $slug;

        // Extract region if slug contains regional suffix
        $prov = $regionData['province'] ?? null;
        $kabkot = $regionData['city'] ?? null;
        $kecamatan = $regionData['district'] ?? null;

        foreach ($topics as $index => $t) {
            $topicSlug = Str::slug($t);
            if (str_starts_with($slug, $topicSlug) || str_contains($slug, $topicSlug) || $topicSlug === $slug) {
                $matchedTopic = $t;
                break;
            }
        }

        if (!$matchedTopic) {
            // Pick a deterministic topic based on slug hash
            $hash = abs(crc32($slug)) % count($topics);
            $keys = array_keys($topics);
            $topicKey = $keys[$hash];
            $matchedTopic = $topics[$topicKey];
        }

        $regionContext = [
            'province' => $prov ?: 'Indonesia',
            'city' => $kabkot ?: '',
            'district' => $kecamatan ?: ''
        ];

        $title = $matchedTopic;
        if (!empty($kabkot) || !empty($prov)) {
            $loc = trim("{$kecamatan} {$kabkot} {$prov}");
            $title .= " di {$loc}";
        }

        $content = static::generateDeepContent($matchedTopic, $regionContext);
        $excerpt = Str::limit(strip_tags($content), 220);

        return [
            'id' => 900000 + (abs(crc32($slug)) % 90000),
            'title' => $title,
            'slug' => $slug,
            'category' => 'K3 Bekerja Pada Ketinggian (TKBT)',
            'province' => $prov,
            'city' => $kabkot,
            'district' => $kecamatan,
            'program_id' => str_contains($slug, 'tingkat-2') ? 2 : 1,
            'excerpt' => $excerpt,
            'content' => $content,
            'author' => 'Instruktur Spesialis K3 TKBT Kemnaker RI',
            'read_time' => 35,
            'views_count' => 120 + (abs(crc32($slug)) % 450),
            'created_at' => date('d M Y'),
            'is_db' => false,
        ];
    }

    /**
     * Get 200 Article list for a specific region
     */
    public static function getRegionalArticleList(array $regionData, int $limit = 200): array
    {
        $topics = static::getArticleTopics();
        $articles = [];

        $prov = $regionData['province'] ?? 'Indonesia';
        $kabkot = $regionData['city'] ?? '';
        $kecamatan = $regionData['district'] ?? '';

        $regionSuffixSlug = '';
        if (!empty($prov)) {
            $regionSuffixSlug .= '-' . Str::slug($prov);
        }
        if (!empty($kabkot)) {
            $regionSuffixSlug .= '-' . Str::slug($kabkot);
        }
        if (!empty($kecamatan)) {
            $regionSuffixSlug .= '-' . Str::slug($kecamatan);
        }

        $count = 0;
        foreach ($topics as $id => $topicTitle) {
            if ($count >= $limit) break;

            $slug = Str::slug($topicTitle) . $regionSuffixSlug;
            $articles[] = [
                'id' => $id,
                'title' => $topicTitle . (!empty($kabkot) ? " di {$kabkot}, {$prov}" : " di {$prov}"),
                'slug' => $slug,
                'category' => 'K3 Bekerja Pada Ketinggian (TKBT)',
                'province' => $prov,
                'city' => $kabkot,
                'district' => $kecamatan,
                'program_id' => ($id % 2 === 0) ? 2 : 1,
                'read_time' => 35,
                'views_count' => 120 + ($id * 7),
                'created_at' => date('d M Y', strtotime("-{$id} days")),
            ];
            $count++;
        }

        return $articles;
    }
}
