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
        Schema::create('website_users', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable();
            $table->string('ip_address')->nullable();
            $table->string('browser')->nullable();
            $table->integer('page_views')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('website_users');
    }
};
