<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SitemapService;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

class SitemapController extends Controller
{
    /**
     * Public route to serve sitemap.xml
     */
    public function index()
    {
        $path = public_path('sitemap.xml');

        if (!File::exists($path)) {
            SitemapService::generate();
        }

        $content = File::get($path);

        return Response::make($content, 200, [
            'Content-Type' => 'application/xml',
            'Cache-Control' => 'public, max-age=3600',
        ]);
    }

    /**
     * Admin trigger to manually regenerate sitemap.xml
     */
    public function generateAdmin(Request $request)
    {
        try {
            $result = SitemapService::generate();
            $kb = round($result['file_size'] / 1024, 2);

            return redirect()->back()->with('success', "XML Sitemap berhasil diperbarui! Sebanyak {$result['total_urls']} URL telah disimpan ke public/sitemap.xml ({$kb} KB).");
        } catch (\Exception $e) {
            return redirect()->back()->with('error', "Gagal membuat sitemap: " . $e->getMessage());
        }
    }
}
