<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsetsTable extends Migration
{
    public function up()
    {
        Schema::create('asets', function (Blueprint $table) {
            $table->id();
            $table->string('nama_aset');
            $table->string('kategori');
            $table->integer('jumlah');
            $table->string('kondisi');
            $table->string('lokasi');
            $table->date('tanggal_perolehan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('asets');
    }
}