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
        Schema::create('serie_eposides', function (Blueprint $table) {
            $table->id();
            $table->string("slug")->index();
            $table->unsignedBigInteger('serie_id')->index();
            $table->integer('eposide_no');
            $table->string('embed_link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('serie_eposides');
    }
};
