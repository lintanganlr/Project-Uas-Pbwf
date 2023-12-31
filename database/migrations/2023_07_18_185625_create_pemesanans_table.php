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
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('barang_id');
            $table->date('tanggal_pemesanan');
            $table->string('status_pemesanan');
            $table->decimal('total_pemesanan', 10, 2);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('barang_id')->references('id')->on('barangs');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanans');
    }
};
