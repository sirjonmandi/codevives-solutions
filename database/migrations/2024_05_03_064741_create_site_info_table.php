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
            $table->longText('subhero_text')->nullable();
            $table->string('hero_img')->nullable();
            $table->string('portfolio_img')->nullable();
            $table->string('career_img')->nullable();
            $table->string('address')->nullable();
            $table->stiring('mobile')->nullable();
            $table->string('email')->nullable();
            $table->text('info')->nullable();
            $table->string('portfolio_title')->nullable();
            $table->text('portfolio_subtext')->nullable();
            $table->longText('who_we_are')->nullable();
            $table->integer('projects_delivered')->nullable();
            $table->integer('satisfied_customers')->nullable();
            $table->integer('year_of_exp')->nullable();
            $table->string('service_title')->nullable();
            $table->text('service_subtext')->nullable();
            $table->string('careers_title')->nullable();
            $table->text('careers_subtext')->nullable();
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
