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
        Schema::create('site_info', function (Blueprint $table) {
            $table->id();
            $table->string('site_name')->nullable();
            $table->string('hero_text')->nullable();
            $table->string('subhero_text')->nullable();
            $table->string('hero_img')->nullable();
            $table->string('portfolio_img')->nullable();
            $table->string('career_img')->nullable();
            $table->string('address')->nullable();
            $table->integer('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('info')->nullable();
            $table->string('portfolio_title')->nullable();
            $table->string('portfolio_subtext')->nullable();
            $table->string('who_we_are')->nullable();
            $table->integer('projects_delivered')->nullable();
            $table->integer('satisfied_customers')->nullable();
            $table->integer('year_of_exp')->nullable();
            $table->string('service_title')->nullable();
            $table->string('service_subtext')->nullable();
            $table->string('careers_title')->nullable();
            $table->string('careers_subtext')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_info');
    }
};
