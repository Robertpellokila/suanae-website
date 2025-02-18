<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Ramsey\Uuid\Type\Integer;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('idms', function (Blueprint $table) {
            $table->id();
            $table->integer('tahun');
            $table->string('skor');
            $table->string('status');
            $table->string('target');
            $table->string('skor_iks');
            $table->string('skor_ike');
            $table->string('skor_ikl');
            $table->string('minimal');
            $table->string('penambahan');
            $table->boolean('is_active')->default(true);
            $table->string('dasar_hukum');
            $table->string('apbd');
            $table->string('file_apbd');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('idms');
    }
};