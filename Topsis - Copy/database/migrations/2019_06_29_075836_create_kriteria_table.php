<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKriteriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kriteria', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('pendidikan');
            $table->string('wawancara');
            $table->string('pengetahuan');
            $table->string('testing');
            $table->string('cv');
            $table->string('waktu_pengerjaan');
            $table->string('gaji');
            $table->string('img_path');
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
        Schema::dropIfExists('kriteria');
    }
}
