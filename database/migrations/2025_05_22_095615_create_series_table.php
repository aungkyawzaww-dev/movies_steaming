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
        Schema::create('series', function (Blueprint $table) {
            $table->id();
            // သူနဲ့ပတ်သတ်ပြီးရှာဖွေမူတွေများကြီးလုပ်နိုင်အောင် index ကိုထည့် 
            $table->string("slug")->index();
            $table->string("name")->index();
            $table->string("release_date");
            $table->string("image");
            $table->longtext("description");
            $table->double("rating");
            $table->bigInteger("view_count")->default(0);
            $table->timestamps();
        });

        Schema::create('category_series', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("serie_id")->index();
            $table->unsignedBigInteger("category_id")->index();
            $table->bigInteger("view_count")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('series');
    }
};
