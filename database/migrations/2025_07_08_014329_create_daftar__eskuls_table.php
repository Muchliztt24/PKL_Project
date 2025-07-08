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
        Schema::create('daftar__eskuls', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('kelas');
            $table->unsignedBigInteger('eskul_id');
            $table->string('no_telp');
            $table->text('alasan');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('eskul_id')->references('id')->on('eskuls')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar__eskuls');
    }
};
            