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
        Schema::create('drafts', function (Blueprint $table) {
            $table->id();
            $table->string('partname');
            $table->string('partnum');
            $table->string('drawnum');
            $table->string('posnum');
            $table->string('matnum');
            $table->string('impa');
            $table->string('artnum');
            $table->longText('specs');
            $table->integer('timeper');
            $table->date('requested_at');
            $table->string('token');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drafts');
    }
};
