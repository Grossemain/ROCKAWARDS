<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('rockband_award', function (Blueprint $table) {
            $table->string('rockband_id', 50);
            $table->string('award_id', 50);
            $table->primary(['rockband_id', 'award_id']);
            $table->foreign('rockband_id')->references('rockband_id')->on('rockbands')->onDelete('cascade');
            $table->foreign('award_id')->references('award_id')->on('awards')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rockband_award');
    }
};