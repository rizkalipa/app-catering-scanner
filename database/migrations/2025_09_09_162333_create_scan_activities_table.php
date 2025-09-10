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
        Schema::create('scan_activities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('barcode_id');
            $table->unsignedBigInteger('set_menu_id');
            $table->dateTime('scan_out_at')->nullable();
            $table->dateTime('scan_in_at')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->char('admin_number')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scan_activities');
    }
};
