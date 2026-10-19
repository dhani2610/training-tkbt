<?php

namespace App\Services;

use Illuminate\Support\Str;

class RegionService
{
    protected static ?array $provinces = null;

    public static function getProvinces(): array
    {
        if (static::$provinces !== null) {
            return static::$provinces;
        }

        $raw = [
            [
                'name' => 'Aceh',
                'island' => 'Sumatera',
                'kabkot' => [
                    'Kabupaten Simeulue', 'Kabupaten Aceh Singkil', 'Kabupaten Aceh Selatan', 'Kabupaten Aceh Tenggara',
                    'Kabupaten Aceh Timur', 'Kabupaten Aceh Tengah', 'Kabupaten Aceh Barat', 'Kabupaten Aceh Besar',
                    'Kabupaten Pidie', 'Kabupaten Bireuen', 'Kabupaten Aceh Utara', 'Kabupaten Aceh Barat Daya',
                    'Kabupaten Gayo Lues', 'Kabupaten Aceh Tamiang', 'Kabupaten Nagan Raya', 'Kabupaten Aceh Jaya',
                    'Kabupaten Bener Meriah', 'Kabupaten Pidie Jaya', 'Kota Banda Aceh', 'Kota Sabang',
                    'Kota Langsa', 'Kota Lhokseumawe', 'Kota Subulussalam'
                ],
                'sample_kecamatan' => [
                    'Kabupaten Simeulue' => ['Teupah Selatan', 'Simeulue Timur', 'Teupah Barat', 'Teupah Tengah', 'Simeulue Tengah', 'Teluk Dalam', 'Simeulue Cut', 'Salang', 'Alafan', 'Simeulue Barat']
                ]
            ],
            [
                'name' => 'Sumatera Utara',
                'island' => 'Sumatera',
                'kabkot' => [
                    'Kabupaten Asahan', 'Kabupaten Batu Bara', 'Kabupaten Dairi', 'Kabupaten Deli Serdang',
                    'Kabupaten Humbang Hasundutan', 'Kabupaten Karo', 'Kabupaten Labuhanbatu', 'Kabupaten Labuhanbatu Selatan',
                    'Kabupaten Labuhanbatu Utara', 'Kabupaten Langkat', 'Kabupaten Mandailing Natal', 'Kabupaten Nias',
                    'Kabupaten Nias Barat', 'Kabupaten Nias Selatan', 'Kabupaten Nias Utara', 'Kabupaten Padang Lawas',
                    'Kabupaten Padang Lawas Utara', 'Kabupaten Pakpak Bharat', 'Kabupaten Samosir', 'Kabupaten Serdang Bedagai',
                    'Kabupaten Simalungun', 'Kabupaten Tapanuli Selatan', 'Kabupaten Tapanuli Tengah', 'Kabupaten Tapanuli Utara',
                    'Kabupaten Toba', 'Kota Binjai', 'Kota Gunungsitoli', 'Kota Medan',
                    'Kota Padangsidimpuan', 'Kota Pematangsiantar', 'Kota Sibolga', 'Kota Tanjungbalai', 'Kota Tebing Tinggi'
                ]
            ],
            [
                'name' => 'Sumatera Barat',
                'island' => 'Sumatera',
                'kabkot' => [
                    'Kabupaten Agam', 'Kabupaten Dharmasraya', 'Kabupaten Kepulauan Mentawai', 'Kabupaten Lima Puluh Kota',
                    'Kabupaten Padang Pariaman', 'Kabupaten Pasaman', 'Kabupaten Pasaman Barat', 'Kabupaten Pesisir Selatan',
                    'Kabupaten Sijunjung', 'Kabupaten Solok', 'Kabupaten Solok Selatan', 'Kabupaten Tanah Datar',
                    'Kota Bukittinggi', 'Kota Padang', 'Kota Padang Panjang', 'Kota Pariaman',
                    'Kota Payakumbuh', 'Kota Sawahlunto', 'Kota Solok'
                ]
            ],
            [
                'name' => 'Riau',
                'island' => 'Sumatera',
                'kabkot' => [
                    'Kabupaten Bengkalis', 'Kabupaten Indragiri Hilir', 'Kabupaten Indragiri Hulu', 'Kabupaten Kampar',
                    'Kabupaten Kepulauan Meranti', 'Kabupaten Kuantan Singingi', 'Kabupaten Pelalawan', 'Kabupaten Rokan Hilir',
                    'Kabupaten Rokan Hulu', 'Kabupaten Siak', 'Kota Dumai', 'Kota Pekanbaru'
                ]
            ],
            [
                'name' => 'Jambi',
                'island' => 'Sumatera',
                'kabkot' => [
                    'Kabupaten Batanghari', 'Kabupaten Bungo', 'Kabupaten Kerinci', 'Kabupaten Merangin',
                    'Kabupaten Muaro Jambi', 'Kabupaten Sarolangun', 'Kabupaten Tanjung Jabung Barat', 'Kabupaten Tanjung Jabung Timur',
                    'Kabupaten Tebo', 'Kota Jambi', 'Kota Sungai Penuh'
                ]
            ],
            [
                'name' => 'Sumatera Selatan',
                'island' => 'Sumatera',
                'kabkot' => [
                    'Kabupaten Banyuasin', 'Kabupaten Empat Lawang', 'Kabupaten Lahat', 'Kabupaten Muara Enim',
                    'Kabupaten Musi Banyuasin', 'Kabupaten Musi Rawas', 'Kabupaten Musi Rawas Utara', 'Kabupaten Ogan Ilir',
                    'Kabupaten Ogan Komering Ilir', 'Kabupaten Ogan Komering Ulu', 'Kabupaten Ogan Komering Ulu Selatan', 'Kabupaten Ogan Komering Ulu Timur',
                    'Kabupaten Penukal Abab Lematang Ilir', 'Kota Lubuklinggau', 'Kota Pagar Alam', 'Kota Palembang', 'Kota Prabumulih'
                ]
            ],
            [
                'name' => 'Bengkulu',
                'island' => 'Sumatera',
                'kabkot' => [
                    'Kabupaten Bengkulu Selatan', 'Kabupaten Bengkulu Tengah', 'Kabupaten Bengkulu Utara', 'Kabupaten Kaur',
                    'Kabupaten Kepahiang', 'Kabupaten Lebong', 'Kabupaten Mukomuko', 'Kabupaten Rejang Lebong',
                    'Kabupaten Seluma', 'Kota Bengkulu'
                ]
            ],
            [
                'name' => 'Lampung',
                'island' => 'Sumatera',
                'kabkot' => [
                    'Kabupaten Lampung Barat', 'Kabupaten Lampung Selatan', 'Kabupaten Lampung Tengah', 'Kabupaten Lampung Timur',
                    'Kabupaten Lampung Utara', 'Kabupaten Mesuji', 'Kabupaten Pesawaran', 'Kabupaten Pesisir Barat',
                    'Kabupaten Pringsewu', 'Kabupaten Tanggamus', 'Kabupaten Tulang Bawang', 'Kabupaten Tulang Bawang Barat',
                    'Kabupaten Way Kanan', 'Kota Bandar Lampung', 'Kota Metro'
                ]
            ],
            [
                'name' => 'Kepulauan Bangka Belitung',
                'island' => 'Sumatera',
                'kabkot' => [
                    'Kabupaten Bangka', 'Kabupaten Bangka Barat', 'Kabupaten Bangka Selatan', 'Kabupaten Bangka Tengah',
                    'Kabupaten Belitung', 'Kabupaten Belitung Timur', 'Kota Pangkalpinang'
                ]
            ],
            [
                'name' => 'Kepulauan Riau',
                'island' => 'Sumatera',
                'kabkot' => [
                    'Kabupaten Bintan', 'Kabupaten Karimun', 'Kabupaten Kepulauan Anambas', 'Kabupaten Lingga',
                    'Kabupaten Natuna', 'Kota Batam', 'Kota Tanjungpinang'
                ]
            ],
            [
                'name' => 'DKI Jakarta',
                'island' => 'Jawa',
                'kabkot' => [
                    'Kabupaten Kepulauan Seribu', 'Kota Jakarta Barat', 'Kota Jakarta Pusat', 'Kota Jakarta Selatan',
                    'Kota Jakarta Timur', 'Kota Jakarta Utara'
                ]
            ],
            [
                'name' => 'Jawa Barat',
                'island' => 'Jawa',
                'kabkot' => [
                    'Kabupaten Bandung', 'Kabupaten Bandung Barat', 'Kabupaten Bekasi', 'Kabupaten Bogor',
                    'Kabupaten Ciamis', 'Kabupaten Cianjur', 'Kabupaten Cirebon', 'Kabupaten Garut',
                    'Kabupaten Indramayu', 'Kabupaten Karawang', 'Kabupaten Kuningan', 'Kabupaten Majalengka',
                    'Kabupaten Pangandaran', 'Kabupaten Purwakarta', 'Kabupaten Subang', 'Kabupaten Sukabumi',
                    'Kabupaten Sumedang', 'Kabupaten Tasikmalaya', 'Kota Bandung', 'Kota Banjar',
                    'Kota Bekasi', 'Kota Bogor', 'Kota Cimahi', 'Kota Cirebon', 'Kota Depok',
                    'Kota Sukabumi', 'Kota Tasikmalaya'
                ]
            ],
            [
                'name' => 'Jawa Tengah',
                'island' => 'Jawa',
                'kabkot' => [
                    'Kabupaten Banjarnegara', 'Kabupaten Banyumas', 'Kabupaten Batang', 'Kabupaten Blora',
                    'Kabupaten Boyolali', 'Kabupaten Brebes', 'Kabupaten Cilacap', 'Kabupaten Demak',
                    'Kabupaten Grobogan', 'Kabupaten Jepara', 'Kabupaten Karanganyar', 'Kabupaten Kebumen',
                    'Kabupaten Kendal', 'Kabupaten Klaten', 'Kabupaten Kudus', 'Kabupaten Magelang',
                    'Kabupaten Pati', 'Kabupaten Pekalongan', 'Kabupaten Pemalang', 'Kabupaten Purbalingga',
                    'Kabupaten Purworejo', 'Kabupaten Rembang', 'Kabupaten Semarang', 'Kabupaten Sragen',
                    'Kabupaten Sukoharjo', 'Kabupaten Tegal', 'Kabupaten Temanggung', 'Kabupaten Wonogiri',
                    'Kabupaten Wonosobo', 'Kota Magelang', 'Kota Pekalongan', 'Kota Salatiga',
                    'Kota Semarang', 'Kota Surakarta', 'Kota Tegal'
                ]
            ],
            [
                'name' => 'DI Yogyakarta',
                'island' => 'Jawa',
                'kabkot' => [
                    'Kabupaten Bantul', 'Kabupaten Gunungkidul', 'Kabupaten Kulon Progo', 'Kabupaten Sleman',
                    'Kota Yogyakarta'
                ]
            ],
            [
                'name' => 'Jawa Timur',
                'island' => 'Jawa',
                'kabkot' => [
                    'Kabupaten Bangkalan', 'Kabupaten Banyuwangi', 'Kabupaten Blitar', 'Kabupaten Bojonegoro',
                    'Kabupaten Bondowoso', 'Kabupaten Gresik', 'Kabupaten Jember', 'Kabupaten Jombang',
                    'Kabupaten Kediri', 'Kabupaten Lamongan', 'Kabupaten Lumajang', 'Kabupaten Madiun',
                    'Kabupaten Magetan', 'Kabupaten Malang', 'Kabupaten Mojokerto', 'Kabupaten Nganjuk',
                    'Kabupaten Ngawi', 'Kabupaten Pacitan', 'Kabupaten Pamekasan', 'Kabupaten Pasuruan',
                    'Kabupaten Ponorogo', 'Kabupaten Probolinggo', 'Kabupaten Sampang', 'Kabupaten Sidoarjo',
                    'Kabupaten Situbondo', 'Kabupaten Sumenep', 'Kabupaten Trenggalek', 'Kabupaten Tuban',
                    'Kabupaten Tulungagung', 'Kota Batu', 'Kota Blitar', 'Kota Kediri',
                    'Kota Madiun', 'Kota Malang', 'Kota Mojokerto', 'Kota Pasuruan',
                    'Kota Probolinggo', 'Kota Surabaya'
                ]
            ],
            [
                'name' => 'Banten',
                'island' => 'Jawa',
                'kabkot' => [
                    'Kabupaten Lebak', 'Kabupaten Pandeglang', 'Kabupaten Serang', 'Kabupaten Tangerang',
                    'Kota Cilegon', 'Kota Serang', 'Kota Tangerang', 'Kota Tangerang Selatan'
                ]
            ],
            [
                'name' => 'Bali',
                'island' => 'Kepulauan Nusa Tenggara',
                'kabkot' => [
                    'Kabupaten Badung', 'Kabupaten Bangli', 'Kabupaten Buleleng', 'Kabupaten Gianyar',
                    'Kabupaten Jembrana', 'Kabupaten Karangasem', 'Kabupaten Klungkung', 'Kabupaten Tabanan',
                    'Kota Denpasar'
                ]
            ],
            [
                'name' => 'Nusa Tenggara Barat',
                'island' => 'Kepulauan Nusa Tenggara',
                'kabkot' => [
                    'Kabupaten Bima', 'Kabupaten Dompu', 'Kabupaten Lombok Barat', 'Kabupaten Lombok Tengah',
                    'Kabupaten Lombok Timur', 'Kabupaten Lombok Utara', 'Kabupaten Sumbawa', 'Kabupaten Sumbawa Barat',
                    'Kota Bima', 'Kota Mataram'
                ]
            ],
            [
                'name' => 'Nusa Tenggara Timur',
                'island' => 'Kepulauan Nusa Tenggara',
                'kabkot' => [
                    'Kabupaten Alor', 'Kabupaten Belu', 'Kabupaten Ende', 'Kabupaten Flores Timur',
                    'Kabupaten Kupang', 'Kabupaten Lembata', 'Kabupaten Malaka', 'Kabupaten Manggarai',
                    'Kabupaten Manggarai Barat', 'Kabupaten Manggarai Timur', 'Kabupaten Nagekeo', 'Kabupaten Ngada',
                    'Kabupaten Rote Ndao', 'Kabupaten Sabu Raijua', 'Kabupaten Sikka', 'Kabupaten Sumba Barat',
                    'Kabupaten Sumba Barat Daya', 'Kabupaten Sumba Tengah', 'Kabupaten Sumba Timur', 'Kabupaten Timor Tengah Selatan',
                    'Kabupaten Timor Tengah Utara', 'Kota Kupang'
                ]
            ],
            [
                'name' => 'Kalimantan Barat',
                'island' => 'Kalimantan',
                'kabkot' => [
                    'Kabupaten Bengkayang', 'Kabupaten Kapuas Hulu', 'Kabupaten Kayong Utara', 'Kabupaten Ketapang',
                    'Kabupaten Kubu Raya', 'Kabupaten Landak', 'Kabupaten Melawi', 'Kabupaten Mempawah',
                    'Kabupaten Sambas', 'Kabupaten Sanggau', 'Kabupaten Sekadau', 'Kabupaten Sintang',
                    'Kota Pontianak', 'Kota Singkawang'
                ]
            ],
            [
                'name' => 'Kalimantan Tengah',
                'island' => 'Kalimantan',
                'kabkot' => [
                    'Kabupaten Barito Selatan', 'Kabupaten Barito Timur', 'Kabupaten Barito Utara', 'Kabupaten Gunung Mas',
                    'Kabupaten Kapuas', 'Kabupaten Katingan', 'Kabupaten Kotawaringin Barat', 'Kabupaten Kotawaringin Timur',
                    'Kabupaten Lamandau', 'Kabupaten Murung Raya', 'Kabupaten Pulang Pisau', 'Kabupaten Sukamara',
                    'Kabupaten Seruyan', 'Kota Palangka Raya'
                ]
            ],
            [
                'name' => 'Kalimantan Selatan',
                'island' => 'Kalimantan',
                'kabkot' => [
                    'Kabupaten Balangan', 'Kabupaten Banjar', 'Kabupaten Barito Kuala', 'Kabupaten Hulu Sungai Selatan',
                    'Kabupaten Hulu Sungai Tengah', 'Kabupaten Hulu Sungai Utara', 'Kabupaten Kotabaru', 'Kabupaten Tabalong',
                    'Kabupaten Tanah Bumbu', 'Kabupaten Tanah Laut', 'Kabupaten Tapin', 'Kota Banjarbaru', 'Kota Banjarmasin'
                ]
            ],
            [
                'name' => 'Kalimantan Timur',
                'island' => 'Kalimantan',
                'kabkot' => [
                    'Kabupaten Berau', 'Kabupaten Kutai Barat', 'Kabupaten Kutai Kartanegara', 'Kabupaten Kutai Timur',
                    'Kabupaten Mahakam Ulu', 'Kabupaten Paser', 'Kabupaten Penajam Paser Utara', 'Kota Balikpapan',
                    'Kota Bontang', 'Kota Samarinda'
                ]
            ],
            [
                'name' => 'Kalimantan Utara',
                'island' => 'Kalimantan',
                'kabkot' => [
                    'Kabupaten Bulungan', 'Kabupaten Malinau', 'Kabupaten Nunukan', 'Kabupaten Tana Tidung',
                    'Kota Tarakan'
                ]
            ],
            [
                'name' => 'Sulawesi Utara',
                'island' => 'Sulawesi',
                'kabkot' => [
                    'Kabupaten Bolaang Mongondow', 'Kabupaten Bolaang Mongondow Selatan', 'Kabupaten Bolaang Mongondow Timur', 'Kabupaten Bolaang Mongondow Utara',
                    'Kabupaten Kepulauan Sangihe', 'Kabupaten Kepulauan Siau Tagulandang Biaro', 'Kabupaten Kepulauan Talaud', 'Kabupaten Minahasa',
                    'Kabupaten Minahasa Selatan', 'Kabupaten Minahasa Tenggara', 'Kabupaten Minahasa Utara', 'Kota Bitung',
                    'Kota Kotamobagu', 'Kota Manado', 'Kota Tomohon'
                ]
            ],
            [
                'name' => 'Sulawesi Tengah',
                'island' => 'Sulawesi',
                'kabkot' => [
                    'Kabupaten Banggai', 'Kabupaten Banggai Kepulauan', 'Kabupaten Banggai Laut', 'Kabupaten Buol',
                    'Kabupaten Donggala', 'Kabupaten Morowali', 'Kabupaten Morowali Utara', 'Kabupaten Parigi Moutong',
                    'Kabupaten Poso', 'Kabupaten Sigi', 'Kabupaten Tojo Una-Una', 'Kabupaten Tolitoli', 'Kota Palu'
                ]
            ],
            [
                'name' => 'Sulawesi Selatan',
                'island' => 'Sulawesi',
                'kabkot' => [
                    'Kabupaten Bantaeng', 'Kabupaten Barru', 'Kabupaten Bone', 'Kabupaten Bulukumba',
                    'Kabupaten Enrekang', 'Kabupaten Gowa', 'Kabupaten Jeneponto', 'Kabupaten Kepulauan Selayar',
                    'Kabupaten Luwu', 'Kabupaten Luwu Timur', 'Kabupaten Luwu Utara', 'Kabupaten Maros',
                    'Kabupaten Pangkajene dan Kepulauan', 'Kabupaten Pinrang', 'Kabupaten Sidenreng Rappang', 'Kabupaten Sinjai',
                    'Kabupaten Soppeng', 'Kabupaten Takalar', 'Kabupaten Tana Toraja', 'Kabupaten Toraja Utara',
                    'Kabupaten Wajo', 'Kota Makassar', 'Kota Palopo', 'Kota Parepare'
                ]
            ],
            [
                'name' => 'Sulawesi Tenggara',
                'island' => 'Sulawesi',
                'kabkot' => [
                    'Kabupaten Bombana', 'Kabupaten Buton', 'Kabupaten Buton Selatan', 'Kabupaten Buton Tengah',
                    'Kabupaten Buton Utara', 'Kabupaten Kolaka', 'Kabupaten Kolaka Timur', 'Kabupaten Kolaka Utara',
                    'Kabupaten Konawe', 'Kabupaten Konawe Kepulauan', 'Kabupaten Konawe Selatan', 'Kabupaten Konawe Utara',
                    'Kabupaten Muna', 'Kabupaten Muna Barat', 'Kabupaten Wakatobi', 'Kota Baubau', 'Kota Kendari'
                ]
            ],
            [
                'name' => 'Gorontalo',
                'island' => 'Sulawesi',
                'kabkot' => [
                    'Kabupaten Boalemo', 'Kabupaten Bone Bolango', 'Kabupaten Gorontalo', 'Kabupaten Gorontalo Utara',
                    'Kabupaten Pohuwato', 'Kota Gorontalo'
                ]
            ],
            [
                'name' => 'Sulawesi Barat',
                'island' => 'Sulawesi',
                'kabkot' => [
                    'Kabupaten Majene', 'Kabupaten Mamasa', 'Kabupaten Mamuju', 'Kabupaten Mamuju Tengah',
                    'Kabupaten Pasangkayu', 'Kabupaten Polewali Mandar'
                ]
            ],
            [
                'name' => 'Maluku',
                'island' => 'Maluku',
                'kabkot' => [
                    'Kabupaten Buru', 'Kabupaten Buru Selatan', 'Kabupaten Kepulauan Aru', 'Kabupaten Kepulauan Tanimbar',
                    'Kabupaten Maluku Barat Daya', 'Kabupaten Maluku Tengah', 'Kabupaten Maluku Tenggara', 'Kabupaten Seram Bagian Barat',
                    'Kabupaten Seram Bagian Timur', 'Kota Ambon', 'Kota Tual'
                ]
            ],
            [
                'name' => 'Maluku Utara',
                'island' => 'Maluku',
                'kabkot' => [
                    'Kabupaten Halmahera Barat', 'Kabupaten Halmahera Tengah', 'Kabupaten Halmahera Timur', 'Kabupaten Halmahera Selatan',
                    'Kabupaten Halmahera Utara', 'Kabupaten Kepulauan Sula', 'Kabupaten Pulau Morotai', 'Kabupaten Pulau Taliabu',
                    'Kota Ternate', 'Kota Tidore Kepulauan'
                ]
            ],
            [
                'name' => 'Papua',
                'island' => 'Papua',
                'kabkot' => [
                    'Kabupaten Biak Numfor', 'Kabupaten Jayapura', 'Kabupaten Keerom', 'Kabupaten Kepulauan Yapen',
                    'Kabupaten Mamberamo Raya', 'Kabupaten Sarmi', 'Kabupaten Supiori', 'Kabupaten Waropen', 'Kota Jayapura'
                ]
            ],
            [
                'name' => 'Papua Barat',
                'island' => 'Papua',
                'kabkot' => [
                    'Kabupaten Fakfak', 'Kabupaten Kaimana', 'Kabupaten Manokwari', 'Kabupaten Manokwari Selatan',
                    'Kabupaten Pegunungan Arfak', 'Kabupaten Teluk Bintuni', 'Kabupaten Teluk Wondama'
                ]
            ],
            [
                'name' => 'Papua Selatan',
                'island' => 'Papua',
                'kabkot' => [
                    'Kabupaten Asmat', 'Kabupaten Boven Digoel', 'Kabupaten Mappi', 'Kabupaten Merauke'
                ]
            ],
            [
                'name' => 'Papua Tengah',
                'island' => 'Papua',
                'kabkot' => [
                    'Kabupaten Deiyai', 'Kabupaten Dogiyai', 'Kabupaten Intan Jaya', 'Kabupaten Mimika',
                    'Kabupaten Nabire', 'Kabupaten Paniai', 'Kabupaten Puncak', 'Kabupaten Puncak Jaya'
                ]
            ],
            [
                'name' => 'Papua Pegunungan',
                'island' => 'Papua',
                'kabkot' => [
                    'Kabupaten Jayawijaya', 'Kabupaten Lanny Jaya', 'Kabupaten Mamberamo Tengah', 'Kabupaten Nduga',
                    'Kabupaten Pegunungan Bintang', 'Kabupaten Tolikara', 'Kabupaten Yalimo', 'Kabupaten Yahukimo'
                ]
            ],
            [
                'name' => 'Papua Barat Daya',
                'island' => 'Papua',
                'kabkot' => [
                    'Kabupaten Maybrat', 'Kabupaten Raja Ampat', 'Kabupaten Sorong', 'Kabupaten Sorong Selatan',
                    'Kabupaten Tambrauw', 'Kota Sorong'
                ]
            ],
        ];

        $provinces = [];
        foreach ($raw as $item) {
            $slug = Str::slug($item['name']);
            $kabkotList = [];
            foreach ($item['kabkot'] as $kk) {
                $kkSlug = Str::slug($kk);
                $kabkotList[] = [
                    'name' => $kk,
                    'slug' => $kkSlug,
                ];
            }

            $provinces[$slug] = [
                'name' => $item['name'],
                'slug' => $slug,
                'island' => $item['island'],
                'total_kabkot' => count($item['kabkot']),
                'kabkot' => $kabkotList,
                'sample_kecamatan' => $item['sample_kecamatan'] ?? [],
            ];
        }

        static::$provinces = $provinces;
        return static::$provinces;
    }

    public static function findProvince(string $slug): ?array
    {
        $all = static::getProvinces();
        return $all[$slug] ?? null;
    }

    public static function findKabkot(string $provinceSlug, string $kabkotSlug): ?array
    {
        $province = static::findProvince($provinceSlug);
        if (!$province) {
            return null;
        }

        foreach ($province['kabkot'] as $kk) {
            if ($kk['slug'] === $kabkotSlug) {
                $kecamatan = $province['sample_kecamatan'][$kk['name']] ?? static::generateSampleKecamatan($kk['name']);
                return [
                    'province' => $province,
                    'name' => $kk['name'],
                    'slug' => $kk['slug'],
                    'kecamatan' => $kecamatan,
                ];
            }
        }

        return null;
    }

    public static function getKecamatanForRegion(string $regionName): array
    {
        $specific = [
            'Kabupaten Bengkulu Selatan' => [
                'Kota Manna', 'Pasar Manna', 'Manna', 'Pino', 'Pinoraya', 'Seginim',
                'Bunga Mas', 'Kedurang', 'Kedurang Ilir', 'Air Nipis', 'Ulu Manna'
            ],
            'Kota Banda Aceh' => [
                'Baiturrahman', 'Kuta Alam', 'Meuraxa', 'Syiah Kuala', 'Lueng Bata',
                'Kuta Raja', 'Banda Raya', 'Jaya Baru', 'Ulee Kareng'
            ],
            'Kabupaten Simeulue' => [
                'Teupah Selatan', 'Simeulue Timur', 'Teupah Barat', 'Teupah Tengah',
                'Simeulue Tengah', 'Teluk Dalam', 'Simeulue Cut', 'Salang', 'Alafan', 'Simeulue Barat'
            ],
            'Kota Langsa' => [
                'Langsa Barat', 'Langsa Kota', 'Langsa Lama', 'Langsa Baro', 'Langsa Timur'
            ],
            'Kota Medan' => [
                'Medan Belawan', 'Medan Deli', 'Medan Labuhan', 'Medan Marelan', 'Medan Barat',
                'Medan Timur', 'Medan Kota', 'Medan Petisah', 'Medan Baru', 'Medan Sunggal',
                'Medan Helvetia', 'Medan Johor', 'Medan Tembung', 'Medan Denai', 'Medan Area',
                'Medan Selayang', 'Medan Tuntungan', 'Medan Maimun', 'Medan Perjuangan', 'Medan Polonia'
            ],
        ];

        if (isset($specific[$regionName])) {
            return $specific[$regionName];
        }

        // Search through provinces
        $all = static::getProvinces();
        foreach ($all as $province) {
            if (isset($province['sample_kecamatan'][$regionName])) {
                return $province['sample_kecamatan'][$regionName];
            }
        }

        return static::generateSampleKecamatan($regionName);
    }

    protected static function generateSampleKecamatan(string $kabkotName): array
    {
        $clean = str_replace(['Kabupaten ', 'Kota '], '', $kabkotName);
        return [
            $clean . ' Barat',
            $clean . ' Timur',
            $clean . ' Utara',
            $clean . ' Selatan',
            $clean . ' Kota',
            $clean . ' Tengah',
            'Sentra Industri ' . $clean,
            'Pelabuhan / Logistik ' . $clean,
            'Kawasan Pergudangan ' . $clean,
            $clean . ' Jaya',
        ];
    }

    public static function findKecamatan(string $provinceSlug, string $kabkotSlug, string $kecamatanSlug): ?array
    {
        $kabkot = static::findKabkot($provinceSlug, $kabkotSlug);
        if (!$kabkot) {
            return null;
        }

        $kecamatanList = $kabkot['kecamatan'] ?? [];
        foreach ($kecamatanList as $kec) {
            if (Str::slug($kec) === $kecamatanSlug) {
                return [
                    'province' => $kabkot['province'],
                    'kabkot' => [
                        'name' => $kabkot['name'],
                        'slug' => $kabkot['slug'],
                    ],
                    'name' => $kec,
                    'slug' => Str::slug($kec),
                ];
            }
        }

        return [
            'province' => $kabkot['province'],
            'kabkot' => [
                'name' => $kabkot['name'],
                'slug' => $kabkot['slug'],
            ],
            'name' => ucwords(str_replace('-', ' ', $kecamatanSlug)),
            'slug' => $kecamatanSlug,
        ];
    }

    public static function getMapUrl(string $regionName): string
    {
        $query = urlencode($regionName . ', Indonesia');
        return "https://maps.google.com/maps?q={$query}&t=&z=11&ie=UTF8&iwloc=&output=embed";
    }
}
