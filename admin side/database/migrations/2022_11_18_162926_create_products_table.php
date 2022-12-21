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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('categories');
            $table->string('btn_color');
            $table->string('images')->nullable();

            $table->text('ady_TM');
            $table->text('sarp_edilisi_TM');
            $table->text('ulanys_hasiyetleri_TM');

            $table->text('ady_RU');
            $table->text('sarp_edilisi_RU');
            $table->text('ulanys_hasiyetleri_RU');

            $table->text('ady_EN');
            $table->text('sarp_edilisi_EN');
            $table->text('ulanys_hasiyetleri_EN');

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
        Schema::dropIfExists('products');
    }
};
