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
        Schema::create('players', function (Blueprint $table) {
            $table->id();

            $table->string('name',50);
            $table->string('country',50);
            $table->string('role',50);
            $table->integer('runs')->default(0);
            $table->integer('fours')->default(0);
            $table->integer('sixes')->default(0);
            $table->integer('wickets')->default(0);
            $table->integer('catches')->default(0);
            $table->integer('total_points')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
