<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('rockband_award', function (Blueprint $table) {
            $table->string('id_rockband', 50);
            $table->string('id_award', 50);
            $table->primary(['id_rockband', 'id_award']);
            $table->foreign('id_rockband')->references('id_rockband')->on('rockbands')->onDelete('cascade');
            $table->foreign('id_award')->references('id_award')->on('awards')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rockband_award');
    }
};