<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUstadzsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ustadzs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->string('jabatan');
            $table->longText('biografi');
            $table->date('tanggal_lahir');
            $table->string('foto');
            $table->foreignId('pendidikan_id')->constrained('pendidikans');
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
        Schema::dropIfExists('ustadzs');
    }
}
