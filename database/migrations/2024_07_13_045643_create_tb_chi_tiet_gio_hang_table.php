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
        
            Schema::create('tb_chi_tiet_gio_hang', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('gio_hang_id');
                $table->unsignedBigInteger('san_pham_id');
                $table->integer('so_luong');
                $table->timestamps();
        
               
            });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_chi_tiet_gio_hang');
    }
};
