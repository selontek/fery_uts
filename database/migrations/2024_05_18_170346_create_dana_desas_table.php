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
        Schema::create('dana_desas', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->decimal('pendapatan', 65, 2);
            $table->decimal('anggaran', 65, 2);
            $table->decimal('realisasi', 65, 2);
            $table->decimal('sisa', 65, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dana_desas');
    }
};
