<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRuangtamusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruangtamus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namabarang');
            $table->string('jenisbarang');
            // $table->string('golongan');
            $table->string('harga');
            $table->string('ketersediaan');
            $table->string('image');
            $table->enum('status',['ada','tidak ada' ]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ruangtamus');
    }
}
