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
        Schema::create('local_seo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('title');
            $table->string('slug');
            $table->string('category');
            $table->string('category_slug');
            $table->string('location');
            $table->text('page_description')->nullable();
            $table->text('header_text');
            $table->text('about_us_green_subtitle');
            $table->text('about_us_paragraph');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_local_seo');
    }
};
