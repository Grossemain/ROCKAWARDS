<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('votes', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('vote_award', 50);
            $table->string('id_award', 50);
            $table->string('id_rockband', 50);
            $table->string('id_user', 50)->unique();
            $table->foreign('id_award')->references('id_award')->on('awards')->onDelete('cascade');
            $table->foreign('id_rockband')->references('id_rockband')->on('rockbands')->onDelete('cascade');
            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('votes');
    }
};
