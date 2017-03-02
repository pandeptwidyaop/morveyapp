<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->char('kode_barang',10)->unique();
            $table->string('nama_barang');
            $table->integer('harga_pokok_barang');
            $table->integer('harga_reseller_barang');
            $table->integer('harga_jual_barang');
            $table->integer('stok_barang');
            $table->string('image_barang')->default('barang.png');
            $table->text('keterangan_barang');
            $table->timestamps();
        });
        Schema::table('barangs', function(Blueprint $table){
          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barangs');
    }
}
