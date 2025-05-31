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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            // သူနဲ့ပတ်သတ်ပြီးရှာဖွေမူတွေများကြီးလုပ်နိုင်အောင် index ကိုထည့် 
            $table->string("slug")->index();
            $table->string("release_date");
            $table->string("name")->index();
            $table->string("image");
            $table->longtext("description");
            $table->string("embed_link");
            $table->double("rating");
            $table->bigInteger("view_count");
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
