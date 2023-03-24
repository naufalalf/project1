<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblKeranjang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_keranjang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_user');
            $table->string('id_produk');
            $table->string('qty');
            $table->enum('status_checkout',['Tidak','Ya'])->default('Tidak');
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
       Schema::dropIfExists('tbl_keranjang');
    }
}
