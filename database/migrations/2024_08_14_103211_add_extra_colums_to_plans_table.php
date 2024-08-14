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
        Schema::table('plans', function (Blueprint $table) {
            $table->string('serv8',50)->nullable()->after('price');
            $table->string('serv7',50)->nullable()->after('price');
            $table->string('serv6',50)->nullable()->after('price');
            $table->string('serv5',50)->nullable()->after('price');
            $table->string('serv4',50)->nullable()->after('price');
            $table->string('serv3',50)->nullable()->after('price');
            $table->string('serv2',50)->nullable()->after('price');
            $table->string('serv1',50)->nullable()->after('price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('plans', function (Blueprint $table) {
            $table->dropColumn('serv1');
            $table->dropColumn('serv2');
            $table->dropColumn('serv3');
            $table->dropColumn('serv4');
            $table->dropColumn('serv5');
            $table->dropColumn('serv6');
            $table->dropColumn('serv7');
            $table->dropColumn('serv8');
        });
    }
};
