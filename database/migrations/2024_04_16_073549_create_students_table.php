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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('no_identitas')->unique();
            $table->string('nama');
            $table->foreignId('ta_id');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->enum('agama', ['Islam', 'Katolik', 'Protestan', 'Hindu', 'Budha', 'Lainya']);
            $table->enum('kewarganegaraan', ['WNI', 'WNA']);
            $table->string('negara');
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->text('alamat');
            $table->string('kode_pos');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('pekerjaan_ayah');
            $table->string('pekerjaan_ibu');
            $table->string('telphone_ayah');
            $table->string('telphone_ibu');
            $table->string('asal_sekolah');
            $table->enum('status', ['baru', 'pindahan'])->default('baru');
            $table->enum('jenjang', ['mts', 'ma']);
            $table->string('kontak')->nullable();
            $table->string('email')->unique();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
