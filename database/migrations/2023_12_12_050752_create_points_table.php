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
        Schema::create('points', function (Blueprint $table) {
        

            $table->integer('user_id')->default(0);
            $table->string('batsman1',50);
            $table->string('batsman2',50);
            $table->string('batsman3',50);
            $table->string('wicket_keeper1',50);
            $table->string('wicket_keeper2',50);
            $table->string('all_rounder1',50);
            $table->string('all_rounder2',50);
            $table->string('all_rounder3',50);
            $table->string('bowler1',50);
            $table->string('bowler2',50);
            $table->string('bowler3',50);
            $table->integer('total_points')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('points');
    }
};
