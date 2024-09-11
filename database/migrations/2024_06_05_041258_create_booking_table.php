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
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->string('jumlah_booking');
            $table->integer('durasi_booking')->default(30); // Nilai default 30
            $table->string('status_booking')->default('pending'); // Nilai default 'pending'
            $table->string('bukti_penyerahan');
            $table->string('bukti_pengembalian');
            $table->timestamps();
            
            // Menambahkan kolom foreign key
            $table->unsignedBigInteger('id_pelanggan');
            $table->unsignedBigInteger('id_produk');
            $table->integer('harga_total');
            $table->string('bukti_pembayaran');
            
            // Menambahkan foreign key constraint
            $table->foreign('id_pelanggan')->references('id')->on('pelanggan')->onDelete('cascade');
            $table->foreign('id_produk')->references('id')->on('produk')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};
