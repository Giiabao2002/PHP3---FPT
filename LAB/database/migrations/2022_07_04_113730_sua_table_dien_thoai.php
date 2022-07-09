<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dienthoai', function (Blueprint $table) {
            $table->text('baiViet')->nullable();
            $table->string('ghiChu',500)->nullable();
            $table->unsignedBigInteger('idLoai');
            $table->foreign('idLoai')->references('id')->on('loaisp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dienthoai', function (Blueprint $table) {
            //
        });
    }
};
