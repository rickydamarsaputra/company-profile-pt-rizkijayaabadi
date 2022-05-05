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
        Schema::create('tracking_detail', function (Blueprint $table) {
            $table->id();
            $table->string('tracking_no_surat_jalan');
            $table->string('title');
            $table->string('sub_title');
            $table->integer('step');
            $table->timestamps();

            $table->foreign('tracking_no_surat_jalan')->references('no_surat_jalan')->on('tracking');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tracking_detail');
    }
};