<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\SitemapService;

class GenerateSitemapCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate {--base-url= : Custom base URL for sitemap}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate XML Sitemap and save directly to public/sitemap.xml';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Generating XML Sitemap for Training TKBT...');
        
        $customBase = $this->option('base-url');
        $res = SitemapService::generate($customBase);

        $this->info("✓ Sitemap successfully generated!");
        $this->line("• Total URLs: {$res['total_urls']}");
        $this->line("• File saved at: {$res['file_path']}");
        $this->line("• File size: " . round($res['file_size'] / 1024, 2) . " KB");
        $this->line("• Base URL used: {$res['base_url']}");

        return Command::SUCCESS;
    }
}
