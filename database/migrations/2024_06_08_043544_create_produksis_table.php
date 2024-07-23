<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produksis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('periode_id')->constrained('tahuns')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('kecamatan_id')->constrained('kecamatans')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('desa_id')->constrained('desas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('komoditi_id')->constrained('komoditis')->onDelete('cascade')->onUpdate('cascade');
            $table->string('produksi');
            $table->float('rata_rata')->nullable();
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
        Schema::dropIfExists('produksis');
    }
}