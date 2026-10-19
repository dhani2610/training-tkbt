<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // 1. Settings Table
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->text('value')->nullable();
            $table->string('group')->default('general');
            $table->timestamps();
        });

        // 2. Statistics Table
        Schema::create('statistics', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->string('label');
            $table->string('value');
            $table->string('unit')->nullable();
            $table->string('icon')->default('bi-bar-chart-fill');
            $table->text('description')->nullable();
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // 3. Hero Slides Table
        Schema::create('hero_slides', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->string('badge')->nullable();
            $table->string('cta_text')->nullable();
            $table->string('cta_link')->nullable();
            $table->string('cta2_text')->nullable();
            $table->string('cta2_link')->nullable();
            $table->string('image')->nullable();
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // 4. Programs Table (TKBT 1 & TKBT 2)
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('code')->nullable();
            $table->string('slug')->unique();
            $table->string('level_name')->nullable();
            $table->string('badge')->nullable();
            $table->text('short_description')->nullable();
            $table->longText('full_description')->nullable();
            $table->json('curriculum')->nullable();
            $table->json('requirements')->nullable();
            $table->string('certification_body')->default('Kemnaker RI & BNSP');
            $table->string('duration')->nullable();
            $table->string('icon')->default('bi-shield-check');
            $table->string('image')->nullable();
            $table->string('topic_key')->nullable();
            $table->boolean('is_featured')->default(true);
            $table->boolean('is_active')->default(true);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });

        // 5. Articles Table (Includes full regional articles 6000-9000 words per region)
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('category')->default('K3 Bekerja Pada Ketinggian (TKBT)');
            $table->string('province')->nullable();
            $table->string('province_slug')->nullable()->index();
            $table->string('city')->nullable();
            $table->string('city_slug')->nullable()->index();
            $table->string('district')->nullable();
            $table->string('district_slug')->nullable()->index();
            $table->foreignId('program_id')->nullable()->constrained('programs')->nullOnDelete();
            $table->text('excerpt')->nullable();
            $table->longText('content');
            $table->string('author')->default('Instruktur Spesialis K3 TKBT Kemnaker RI');
            $table->integer('read_time')->default(25);
            $table->integer('views_count')->default(150);
            $table->string('featured_image')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_published')->default(true);
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->timestamps();

            // Crucial composite indexes for high-speed queries
            $table->index(['is_published', 'created_at'], 'idx_articles_pub_date');
            $table->index(['is_published', 'is_featured'], 'idx_articles_pub_feat');
        });

        // 6. Testimonials Table
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('role');
            $table->string('company');
            $table->string('avatar')->nullable();
            $table->text('content');
            $table->integer('rating')->default(5);
            $table->string('program_name')->nullable();
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // 7. FAQs Table
        Schema::create('faqs', function (Blueprint $table) {
            $table->id();
            $table->string('question');
            $table->text('answer');
            $table->string('category')->default('general');
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // 8. Contact Messages Table
        Schema::create('contact_messages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('company')->nullable();
            $table->string('subject')->nullable();
            $table->text('message');
            $table->boolean('is_read')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_messages');
        Schema::dropIfExists('faqs');
        Schema::dropIfExists('testimonials');
        Schema::dropIfExists('articles');
        Schema::dropIfExists('programs');
        Schema::dropIfExists('hero_slides');
        Schema::dropIfExists('statistics');
        Schema::dropIfExists('settings');
    }
};
