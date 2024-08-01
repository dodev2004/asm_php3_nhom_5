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
        Schema::create('tb_giam_gia', function (Blueprint $table) {
            $table->id();
            $table->string("ten_ma_giam_gia");
            $table->unsignedBigInteger("dieu_kien");
            $table->integer("so_luong");
            $table->decimal("giam_gia",8,2);
            $table->string("ma_giam_gia",50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_giam_gia');
    }
};
