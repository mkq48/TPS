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
        Schema::create('s_c_s', function (Blueprint $table) {
            $table->increments('Cinema_ID');
            $table->string('Cinema_Name');
            $table->string('Film_Name');
            $table->string('SC');
            $table->date('DOS');
            $table->decimal('Price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('s_c_s');
    }
};
