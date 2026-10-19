# Training TKBT Indonesia - Web Pelatihan Sertifikasi Kemnaker RI

Platform resmi informasi dan pendaftaran **Pelatihan & Sertifikasi Tenaga Kerja Bangunan Tinggi (TKBT)** berdasarkan regulasi ketenagakerjaan Permenaker RI No. 09 Tahun 2016.

---

## 🏗️ Program Pelatihan
1. **Training TKBT (Tenaga Kerja Bangunan Tinggi) Tingkat 1**
   - Sertifikasi Resmi Kemnaker RI
   - Standar Bekerja Pada Ketinggian dengan Akses Tali (*Rope Access* Dasar), Penahan Jatuh (*Fall Arrest*), Posisi Kerja (*Work Positioning*), dan Penyelamatan Mandiri.
2. **Training TKBT (Tenaga Kerja Bangunan Tinggi) Tingkat 2**
   - Sertifikasi Resmi Kemnaker RI
   - Tingkat Lanjut: Perencanaan Akses Tali, Pembuatan Lintasan (*Rigging* & *Anchorage*), Supervisi Keselamatan Ketinggian, dan Evakuasi Kompleks (*High-Angle Rescue*).

---

## 🚀 Fitur Unggulan
- **Website Publik**:
  - Tema Modern & Elegan dengan aksen dominan **Hijau Muda / Mint Emerald**.
  - Navigasi 1-baris responsif (Beranda, Tentang Kami, Program, Artikel, Wilayah, Kontak).
  - Floating WhatsApp Interaktif multi-agent dengan 4 nomor resmi (Hotline Utama: `081399810272` disorot).
  - Direktori Wilayah Nasional mencakup **38 Provinsi, Seluruh Kabupaten/Kota, dan Kecamatan**.
  - Dynamic Regional Article Engine: 200 topik artikel per wilayah (6.000 - 9.000 kata per artikel kaya konteks K3 & TKBT).
- **Admin Panel**:
  - Desain modern bertema **Biru Muda / Sky Blue**.
  - Manajemen Program Pelatihan, Artikel Berita, Pesan Masuk Kontak, dan Pengaturan Sistem (Termasuk kontak WhatsApp dinamis).
  - Akses Admin: `/admin/login`

---

## 🛠️ Persyaratan Sistem
- PHP >= 8.2 (Ekstensi: `pdo_mysql`, `mbstring`, `openssl`, `tokenizer`, `xml`, `ctype`, `json`)
- Composer
- MySQL >= 5.7 / MariaDB >= 10.3
- Node.js & NPM (Opsional untuk asset compilation)

---

## 📦 Panduan Instalasi Lokal
1. **Clone Repository**:
   ```bash
   git clone https://github.com/dhani2610/training-tkbt.git
   cd training-tkbt
   ```
2. **Install Dependencies**:
   ```bash
   composer install
   ```
3. **Konfigurasi Environment**:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
   Sesuaikan konfigurasi database di file `.env`:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=db_training_tkbt
   DB_USERNAME=root
   DB_PASSWORD=
   ```
4. **Migrasi dan Seeder**:
   ```bash
   php artisan migrate --seed
   ```
5. **Jalankan Aplikasi**:
   ```bash
   php artisan serve
   ```
   Buka di browser: `http://127.0.0.1:8000`

---

## 👤 Kredensial Default Admin
- **URL**: `http://127.0.0.1:8000/admin/login`
- **Email**: `admin@trainingtkbt.id`
- **Password**: `admin123`

---

## 📞 Layanan Konsultasi & WhatsApp
- **Hotline Utama**: 0813-9981-0272
- **CS 2**: 0811-8500-177
- **CS 3**: 0878-9458-0806
- **CS 4**: 0878-9458-0649

---
*Dikembangkan dengan standar industri K3 Kemnaker RI.*
