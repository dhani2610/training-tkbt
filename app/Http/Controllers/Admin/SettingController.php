<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function whatsapp()
    {
        $whatsappNumber = Setting::get('whatsapp_number', '081399810272');
        $whatsappDetail1 = Setting::get('whatsapp_detail_1', '08118500177');
        $whatsappDetail2 = Setting::get('whatsapp_detail_2', '081399810272');
        $whatsappDetail3 = Setting::get('whatsapp_detail_3', '087894580806');
        $whatsappDetail4 = Setting::get('whatsapp_detail_4', '087894580649');
        $whatsappTemplate = Setting::get('whatsapp_template', 'Halo Admin Training Confined Space, saya ingin informasi dan konsultasi pendaftaran pelatihan K3 Ruang Terbatas untuk wilayah {region}. Mohon info jadwal terbaru dan persyaratannya.');

        return view('admin.settings.whatsapp', compact(
            'whatsappNumber',
            'whatsappDetail1',
            'whatsappDetail2',
            'whatsappDetail3',
            'whatsappDetail4',
            'whatsappTemplate'
        ));
    }

    public function updateWhatsapp(Request $request)
    {
        $request->validate([
            'whatsapp_number' => 'required|string|max:30',
            'whatsapp_detail_1' => 'nullable|string|max:30',
            'whatsapp_detail_2' => 'nullable|string|max:30',
            'whatsapp_detail_3' => 'nullable|string|max:30',
            'whatsapp_detail_4' => 'nullable|string|max:30',
            'whatsapp_template' => 'required|string|max:1000',
        ]);

        $clean = function($num) {
            $n = preg_replace('/[^0-9]/', '', $num);
            if (str_starts_with($n, '0')) {
                $n = '62' . substr($n, 1);
            }
            return $n;
        };

        Setting::set('whatsapp_number', $clean($request->whatsapp_number), 'Nomor WhatsApp Utama / Floating', 'whatsapp');
        Setting::set('whatsapp_detail_1', $clean($request->whatsapp_detail_1), 'Hotline WA Detail 1', 'whatsapp');
        Setting::set('whatsapp_detail_2', $clean($request->whatsapp_detail_2), 'Hotline WA Detail 2', 'whatsapp');
        Setting::set('whatsapp_detail_3', $clean($request->whatsapp_detail_3), 'Hotline WA Detail 3', 'whatsapp');
        Setting::set('whatsapp_detail_4', $clean($request->whatsapp_detail_4), 'Hotline WA Detail 4', 'whatsapp');
        Setting::set('whatsapp_template', $request->whatsapp_template, 'Template Pesan WhatsApp', 'whatsapp');

        return redirect()->back()->with('success', 'Pengaturan WhatsApp dan 4 Hotline berhasil diperbarui!');
    }

    public function general()
    {
        $settings = [
            'site_name' => Setting::get('site_name', 'TRAINING CONFINED SPACE'),
            'site_subtitle' => Setting::get('site_subtitle', 'Pusat Sertifikasi & Pelatihan K3 Ruang Terbatas Indonesia'),
            'contact_phone' => Setting::get('contact_phone', '0813-9981-0272'),
            'contact_email' => Setting::get('contact_email', 'info@trainingconfinedspace.com'),
            'contact_address' => Setting::get('contact_address', 'Jakarta, Indonesia'),
            'notice_text' => Setting::get('notice_text', 'Lembaga Pelatihan Resmi K3 Confined Space (Ruang Terbatas) Tingkat Muda, Madya, Utama, dan Penyelamat (Rescue).'),
        ];

        return view('admin.settings.general', compact('settings'));
    }

    public function updateGeneral(Request $request)
    {
        $request->validate([
            'site_name' => 'required|string|max:100',
            'site_subtitle' => 'nullable|string|max:200',
            'contact_phone' => 'nullable|string|max:50',
            'contact_email' => 'nullable|email|max:100',
            'contact_address' => 'nullable|string|max:500',
            'notice_text' => 'nullable|string|max:1000',
        ]);

        foreach ($request->only(['site_name', 'site_subtitle', 'contact_phone', 'contact_email', 'contact_address', 'notice_text']) as $key => $val) {
            Setting::set($key, $val);
        }

        return redirect()->back()->with('success', 'Pengaturan Umum berhasil disimpan!');
    }
}
