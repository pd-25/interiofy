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
        Schema::create('sub_banners', function (Blueprint $table) {
            $table->id();
            $table->text('media');
            $table->text('short_description')->nullable();
            $table->boolean('status')->default(1)->comment('1=Active 0=Inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_banners');
    }
};
