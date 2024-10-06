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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->integer('project_category_id');
            $table->string('name')->nullable();
            $table->string('client')->nullable();
            $table->text('description')->nullable();
            $table->string('floor')->nullable();
            $table->text('scope_of_work')->nullable();
            $table->text('image')->nullable();
            $table->string('status')->nullable();
            $table->integer('showcase')->default(0);
            $table->string('project_type')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
