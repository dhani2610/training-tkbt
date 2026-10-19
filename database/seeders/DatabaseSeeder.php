<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Setting;
use App\Models\Statistic;
use App\Models\HeroSlide;
use App\Models\Program;
use App\Models\Article;
use App\Models\Testimonial;
use App\Models\Faq;
use App\Services\TkbtSchemeService;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        // 1. Super Admin User
        User::updateOrCreate(
            ['email' => 'admin@trainingtkbt.id'],
            [
                'name' => 'Administrator TKBT Indonesia',
                'password' => Hash::make('admin123'),
                'email_verified_at' => now(),
            ]
        );

        // 2. Settings (Includes official WhatsApp numbers requested by client)
        $settings = [
            'site_name' => 'Training TKBT Indonesia',
            'site_tagline' => 'Pusat Pembinaan & Sertifikasi K3 Tenaga Kerja Bangunan Tinggi Kemnaker RI & BNSP',
            'company_name' => 'Lembaga Pelatihan K3 Ketinggian & Konstruksi Indonesia',
            'license_info' => 'Sertifikasi Resmi Kemnaker RI Berdasarkan Permenaker No. 9 Tahun 2016 & Standar BNSP',
            'whatsapp' => '081399810272', // Main WA Utama
            'whatsapp_detail_1' => '08118500177',
            'whatsapp_detail_2' => '081399810272',
            'whatsapp_detail_3' => '087894580806',
            'whatsapp_detail_4' => '087894580649',
            'email' => 'kontak@trainingtkbt.id',
            'email_secondary' => 'sekretariat.tkbt@gmail.com',
            'phone' => '081399810272',
            'address' => 'Gedung K3 Safety Center Indonesia, Kawasan Industri & Bisnis Terpadu, Jakarta',
            'maps_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126920.28298835848!2d106.759478!3d-6.2297465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e498c0a531%3A0x7d87f7b2c0e86b0a!2sJakarta%2C%20Indonesia!5e0!3m2!1sen!2sid!4v1700000000000!5m2!1sen!2sid',
            'office_hours' => 'Senin - Jumat: 08.00 - 17.00 WIB | Layanan Konsultasi WA: 24 Jam',
            'hero_title' => 'Pusat Training TKBT (Tenaga Kerja Bangunan Tinggi) Berlisensi Kemnaker RI',
            'hero_description' => 'Membentuk tenaga kerja profesional yang kompeten, berlisensi resmi, dan menguasai teknik keselamatan bekerja di ketinggian sesuai Permenaker No. 9 Tahun 2016 di seluruh Indonesia.',
            'about_history' => 'Lembaga Training TKBT didirikan sebagai respons komprehensif terhadap tingginya kebutuhan tenaga kerja bersertifikat resmi K3 Ketinggian di sektor konstruksi, telekomunikasi tower, manufaktur, migas, energi terbarukan, dan pemeliharaan gedung bertingkat. Mengacu pada Permenaker No. 9 Tahun 2016 dan standar internasional EN/ANSI, kami telah melatih lebih dari 14.800 teknisi di seluruh penjuru Indonesia dengan rekor Zero Accident.',
            'about_vision' => 'Menjadi pusat rujukan utama pelatihan dan sertifikasi kompetensi K3 Bekerja Pada Ketinggian (TKBT Tingkat 1 & Tingkat 2) terkemuka, terpercaya, dan berstandar internasional di Indonesia.',
            'about_mission' => "1. Menyelenggarakan pelatihan dan uji kompetensi Tenaga Kerja Bangunan Tinggi (TKBT 1 & TKBT 2) berlisensi resmi Kemnaker RI dan BNSP.\n2. Menyediakan fasilitas instruktur profesional berpengalaman dan simulator menara ketinggian yang aman dan modern.\n3. Mengedukasi penerapan Alat Pelindung Diri (APD) berstandar EN/ANSI dan prosedur pencegahan trauma suspensi.\n4. Mendampingi perusahaan dan mitra industri dalam menciptakan lingkungan kerja bebas kecelakaan fatal (Zero Accident).",
            'floating_wa_text' => 'Halo Admin, saya ingin konsultasi mengenai pendaftaran dan jadwal Training TKBT (Tenaga Kerja Bangunan Tinggi) Kemnaker RI.',
        ];

        foreach ($settings as $key => $val) {
            Setting::updateOrCreate(['key' => $key], ['value' => $val, 'group' => 'general']);
        }

        // 3. Statistics
        $statistics = [
            [
                'key' => 'peserta_tersertifikasi',
                'label' => 'Teknisi Tersertifikasi',
                'value' => '14.800',
                'unit' => '+',
                'icon' => 'bi-people-fill',
                'description' => 'Alumni teknisi TKBT Tingkat 1 & Tingkat 2 berlisensi Kemnaker RI dari berbagai industri.',
                'sort_order' => 1,
            ],
            [
                'key' => 'perusahaan_mitra',
                'label' => 'Perusahaan Mitra & Klien',
                'value' => '620',
                'unit' => '+',
                'icon' => 'bi-building-check',
                'description' => 'Kontraktor BUMN, Operator Telekomunikasi BTS, Manufaktur, dan Pabrik Ketinggian.',
                'sort_order' => 2,
            ],
            [
                'key' => 'tingkat_kelulusan',
                'label' => 'Tingkat Kelulusan Uji',
                'value' => '99.2',
                'unit' => '%',
                'icon' => 'bi-patch-check-fill',
                'description' => 'Kelulusan ujian teori tertulis dan evaluasi praktik lapangan simulator Kemnaker RI.',
                'sort_order' => 3,
            ],
            [
                'key' => 'jangkauan_provinsi',
                'label' => 'Jangkauan Wilayah',
                'value' => '38',
                'unit' => 'Provinsi',
                'icon' => 'bi-geo-alt-fill',
                'description' => 'Layanan in-house training dan public class di seluruh kota/kabupaten se-Indonesia.',
                'sort_order' => 4,
            ]
        ];

        Statistic::truncate();
        foreach ($statistics as $stat) {
            Statistic::create($stat);
        }

        // 4. Hero Slides
        $slides = [
            [
                'title' => 'Training TKBT (Tenaga Kerja Bangunan Tinggi) Resmi Kemnaker RI',
                'subtitle' => 'Sertifikasi kompetensi K3 Ketinggian Tingkat 1 & Tingkat 2 sesuai Permenaker No. 9 Tahun 2016 untuk konstruksi, tower, dan gedung tinggi.',
                'badge' => 'Sertifikasi Resmi Kemnaker RI & BNSP',
                'cta_text' => 'Lihat Program Pelatihan',
                'cta_link' => '#program',
                'cta2_text' => 'Konsultasi WhatsApp',
                'cta2_link' => 'https://api.whatsapp.com/send?phone=6281399810272',
                'image' => 'https://images.unsplash.com/photo-1541888946425-d0fbb18615f3?w=1600&auto=format&fit=crop&q=80',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Lindungi Diri di Ketinggian dengan Standar Perlindungan Jatuh Terbaik',
                'subtitle' => 'Kuasai teknik 100% Tie-Off, inspeksi Full Body Harness EN 361, peredam kejut EN 355, dan mitigasi bahaya trauma suspensi.',
                'badge' => 'Zero Accident Commitment',
                'cta_text' => 'Pelajari Kurikulum',
                'cta_link' => '#program',
                'cta2_text' => 'Daftar Sekarang',
                'cta2_link' => '#kontak',
                'image' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=1600&auto=format&fit=crop&q=80',
                'sort_order' => 2,
                'is_active' => true,
            ]
        ];

        HeroSlide::truncate();
        foreach ($slides as $slide) {
            HeroSlide::create($slide);
        }

        // 5. Programs (TKBT Tingkat 1 & Tingkat 2)
        Program::truncate();
        $masterPrograms = TkbtSchemeService::getMasterPrograms();
        foreach ($masterPrograms as $prog) {
            Program::create($prog);
        }

        // 6. Initial DB Articles (3 featured articles for home page)
        Article::truncate();
        $initialArticles = [
            [
                'title' => 'Training TKBT: Panduan Lengkap K3 Bekerja Pada Ketinggian Sesuai Permenaker No. 9 Tahun 2016',
                'slug' => 'training-tkbt-panduan-lengkap-k3-bekerja-pada-ketinggian-sesuai-permenaker-no-9-tahun-2016',
                'category' => 'Regulasi K3 Ketinggian',
                'province' => 'DKI Jakarta',
                'province_slug' => 'dki-jakarta',
                'city' => 'Kota Jakarta Pusat',
                'city_slug' => 'kota-jakarta-pusat',
                'district' => 'Gambir',
                'district_slug' => 'gambir',
                'program_id' => 1,
                'excerpt' => 'Panduan komprehensif implementasi K3 Ketinggian berlandaskan Permenaker No. 9 Tahun 2016. Mengupas hierarki proteksi jatuh, kewajiban sertifikasi TKBT 1 & TKBT 2, serta SOP penjaminan keselamatan pekerja bangunan tinggi.',
                'content' => TkbtSchemeService::generateDeepContent(
                    'Training TKBT: Panduan Lengkap K3 Bekerja Pada Ketinggian Sesuai Permenaker No. 9 Tahun 2016',
                    ['province' => 'DKI Jakarta', 'city' => 'Kota Jakarta Pusat', 'district' => 'Gambir'],
                    Program::where('slug', 'training-tkbt-tingkat-1')->first()
                ),
                'author' => 'Instruktur Spesialis K3 TKBT Kemnaker RI',
                'read_time' => 30,
                'views_count' => 1420,
                'featured_image' => 'https://images.unsplash.com/photo-1541888946425-d0fbb18615f3?w=1200&auto=format&fit=crop&q=80',
                'is_featured' => true,
                'is_published' => true,
                'meta_title' => 'Training TKBT Panduan Lengkap Permenaker No 9 Tahun 2016 Kemnaker RI',
                'meta_description' => 'Pelajari regulasi resmi Permenaker No. 9 Tahun 2016 tentang K3 Ketinggian, syarat sertifikasi TKBT 1 dan TKBT 2, serta SOP keselamatan bangunan tinggi.',
                'created_at' => now()->subDays(2),
            ],
            [
                'title' => 'Training TKBT Tingkat 2: Standar Operasional Bergerak dan Bekerja Pada Struktur Bangunan Tinggi',
                'slug' => 'training-tkbt-tingkat-2-standar-operasional-bergerak-dan-bekerja-pada-struktur-bangunan-tinggi',
                'category' => 'Teknik & Manuver Ketinggian',
                'province' => 'Jawa Barat',
                'province_slug' => 'jawa-barat',
                'city' => 'Kota Bandung',
                'city_slug' => 'kota-bandung',
                'district' => 'Coblong',
                'district_slug' => 'coblong',
                'program_id' => 2,
                'excerpt' => 'Standar operasional prosedur (SOP) teknik 100% tie-off, instalasi horizontal lifeline sementara, kalkulasi jarak bebas jatuh TFCD, dan manuver aman memanjat tower telekomunikasi kisi.',
                'content' => TkbtSchemeService::generateDeepContent(
                    'Training TKBT Tingkat 2: Standar Operasional Bergerak dan Bekerja Pada Struktur Bangunan Tinggi',
                    ['province' => 'Jawa Barat', 'city' => 'Kota Bandung', 'district' => 'Coblong'],
                    Program::where('slug', 'training-tkbt-tingkat-2')->first()
                ),
                'author' => 'Instruktur Spesialis K3 TKBT Kemnaker RI',
                'read_time' => 35,
                'views_count' => 1180,
                'featured_image' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=1200&auto=format&fit=crop&q=80',
                'is_featured' => true,
                'is_published' => true,
                'meta_title' => 'Training TKBT Tingkat 2 Standar Bergerak Struktur Bangunan Tinggi',
                'meta_description' => 'Teknik pemanjatan tower, manuver 100% tie-off, pemasangan angkur sementara, dan prosedur K3 TKBT Tingkat 2 Kemnaker RI.',
                'created_at' => now()->subDays(5),
            ],
            [
                'title' => 'Training TKBT: Patofisiologi Bahaya Trauma Suspensi dan Teknik Mitigasi Medis Darurat',
                'slug' => 'training-tkbt-patofisiologi-bahaya-trauma-suspensi-dan-teknik-mitigasi-medis-darurat',
                'category' => 'Tanggap Darurat & Medis',
                'province' => 'Jawa Timur',
                'province_slug' => 'jawa-timur',
                'city' => 'Kota Surabaya',
                'city_slug' => 'kota-surabaya',
                'district' => 'Gubeng',
                'district_slug' => 'gubeng',
                'program_id' => 1,
                'excerpt' => 'Kajian medis mendalam mengenai trauma suspensi (harness hang syndrome), batas kritis 10-15 menit penyelamatan korban tergantung, penggunaan relief footloop, dan larangan posisi terlentang (Reflux Shock).',
                'content' => TkbtSchemeService::generateDeepContent(
                    'Training TKBT: Patofisiologi Bahaya Trauma Suspensi dan Teknik Mitigasi Medis Darurat',
                    ['province' => 'Jawa Timur', 'city' => 'Kota Surabaya', 'district' => 'Gubeng'],
                    Program::where('slug', 'training-tkbt-tingkat-1')->first()
                ),
                'author' => 'Instruktur Medis Darurat K3 Ketinggian',
                'read_time' => 28,
                'views_count' => 970,
                'featured_image' => 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?w=1200&auto=format&fit=crop&q=80',
                'is_featured' => true,
                'is_published' => true,
                'meta_title' => 'Training TKBT Bahaya Trauma Suspensi dan Pertolongan Pertama Korban Ketinggian',
                'meta_description' => 'Kenali bahaya fatal trauma suspensi pada korban yang tergantung di safety harness dan tata cara pertolongan pertama yang benar.',
                'created_at' => now()->subDays(7),
            ],
        ];

        foreach ($initialArticles as $art) {
            Article::create($art);
        }

        // 7. Testimonials
        $testimonials = [
            [
                'name' => 'Bambang Prasetyo, S.T.',
                'role' => 'HSE Project Manager',
                'company' => 'PT Pembangunan Perumahan (Persero) Tbk',
                'content' => 'Pelatihan TKBT Tingkat 1 dan 2 dari lembaga ini sangat luar biasa. Instruktur memiliki sertifikasi spesialis Kemnaker RI dengan pemahaman mendalam tentang Permenaker 09/2016. Praktik simulator towernya sangat aplikatif.',
                'rating' => 5,
                'program_name' => 'Training TKBT Tingkat 1 & 2',
                'sort_order' => 1,
            ],
            [
                'name' => 'Hendro Wijaya',
                'role' => 'Lead Rigger & Telecom Tower Supervisor',
                'company' => 'PT Dayamitra Telekomunikasi (Mitratel)',
                'content' => 'Materi teknik 100% tie-off dan kalkulasi total fall clearance distance (TFCD) benar-benar membuka mata tim kami tentang betapa pentingnya presisi jarak bebas jatuh. Sangat direkomendasikan untuk seluruh teknisi tower BTS.',
                'rating' => 5,
                'program_name' => 'Training TKBT Tingkat 2',
                'sort_order' => 2,
            ],
            [
                'name' => 'Siti Rahmawati, S.K.M.',
                'role' => 'Safety Officer',
                'company' => 'PT Total Bangun Persada Tbk',
                'content' => 'Simulasi partner rescue dan penjelasan bahaya trauma suspensi sangat detail. Kami sekarang memiliki Emergency Fall Rescue Plan yang teruji dan siap pakai di seluruh lokasi proyek gedung kami.',
                'rating' => 5,
                'program_name' => 'Training TKBT Tingkat 1',
                'sort_order' => 3,
            ]
        ];

        Testimonial::truncate();
        foreach ($testimonials as $t) {
            Testimonial::create($t);
        }

        // 8. FAQs
        $faqs = [
            [
                'question' => 'Apa dasar hukum kewajiban sertifikasi TKBT di Indonesia?',
                'answer' => 'Kewajiban sertifikasi mengacu pada Peraturan Menteri Ketenagakerjaan RI No. 9 Tahun 2016 tentang Keselamatan dan Kesehatan Kerja Dalam Pekerjaan Pada Ketinggian, serta Undang-Undang No. 1 Tahun 1970 tentang Keselamatan Kerja.',
                'category' => 'regulasi',
                'sort_order' => 1,
            ],
            [
                'question' => 'Apa perbedaan utama antara TKBT Tingkat 1 dan TKBT Tingkat 2?',
                'answer' => 'TKBT Tingkat 1 diperuntukkan bagi pekerja yang beraktivitas pada lantai kerja tetap, lantai kerja sementara, perancah (scaffolding), tangga, gondola, dan elevating platform. Sedangkan TKBT Tingkat 2 diperuntukkan bagi teknisi yang memanjat, bergerak aktif, dan bekerja pada struktur terbuka seperti menara kisi telekomunikasi, rangka atap, pylon, tiang transmisi, dan jembatan.',
                'category' => 'program',
                'sort_order' => 2,
            ],
            [
                'question' => 'Berapa lama masa berlaku Lisensi K3 TKBT Kemnaker RI?',
                'answer' => 'Lisensi K3 (Kartu Kewenangan) TKBT Kemnaker RI berlaku selama 3 (tiga) tahun dan dapat diperpanjang melalui PJK3 resmi dengan menyertakan evaluasi kesehatan dan portofolio kerja.',
                'category' => 'sertifikasi',
                'sort_order' => 3,
            ],
            [
                'question' => 'Berapa hari durasi pelaksanaan pelatihan TKBT?',
                'answer' => 'Pelatihan diselenggarakan selama 3 hari penuh (24 Jam Pelajaran) yang mencakup pembekalan teori regulasi, fisika kejatuhan, inspeksi APD, serta praktikum intensif di simulator ketinggian dan ujian resmi.',
                'category' => 'jadwal',
                'sort_order' => 4,
            ],
            [
                'question' => 'Bagaimana cara mendaftar dan nomor WhatsApp yang bisa dihubungi?',
                'answer' => 'Anda dapat mendaftar secara online melalui formulir kontak web ini atau langsung menghubungi Hotline WhatsApp Resmi kami di 081399810272, 08118500177, 087894580806, atau 087894580649 untuk konsultasi jadwal dan penawaran in-house training.',
                'category' => 'pendaftaran',
                'sort_order' => 5,
            ]
        ];

        Faq::truncate();
        foreach ($faqs as $f) {
            Faq::create($f);
        }

        Schema::enableForeignKeyConstraints();
    }
}
