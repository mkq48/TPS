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
        Schema::create('films', function (Blueprint $table) {
            $table->increments('Film_ID');
            $table->string('Film_Name');
            $table->string('Description');
            $table->integer('Age');
            $table->string('Image_url');
            $table->string('Trailler_url');
            $table->integer('Film_time');
            $table->string('Language');
            $table->date('DOS');
            $table->date('DOE');
            $table->string('Category');
            $table->string('Actor');
            $table->string('Director');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
