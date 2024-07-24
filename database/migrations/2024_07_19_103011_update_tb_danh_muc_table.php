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
        Schema::table('tb_danh_muc', function (Blueprint $table) {
            $table->softDeletes();// thêm trường delete_at để xóa mềm
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tb_danh_muc', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
};
