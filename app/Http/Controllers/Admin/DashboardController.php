<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Program;
use App\Models\Article;
use App\Models\Faq;
use App\Models\ContactMessage;
use App\Models\Setting;

class DashboardController extends Controller
{
    public function index()
    {
        $totalPrograms = Program::count();
        $totalArticles = Article::count();
        $totalFaqs = Faq::count();
        $totalMessages = ContactMessage::count();
        $unreadMessages = ContactMessage::where('status', 'unread')->count();
        $recentMessages = ContactMessage::latest()->take(5)->get();
        $recentPrograms = Program::orderBy('sort_order', 'asc')->take(5)->get();
        $whatsappNumber = Setting::get('whatsapp_number', '-');

        return view('admin.dashboard', compact(
            'totalPrograms',
            'totalArticles',
            'totalFaqs',
            'totalMessages',
            'unreadMessages',
            'recentMessages',
            'recentPrograms',
            'whatsappNumber'
        ));
    }
}
