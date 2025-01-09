<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('home_page_blocks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('meta_description');
            $table->json('hero');
            $table->json('about_us');
            $table->json('gallery');
            $table->json('testimonials');
            $table->json('logos');
            $table->timestamps();

            $table->unsignedBigInteger('tenant_id')->unique(); // Foreign key with unique constraint
            $table->foreign('tenant_id')->references('id')->on('tenants')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_page_blocks');
    }
};
