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
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('Employ_ID');
            $table->string('Employ_Name');
            $table->string('Employ_Email');
            $table->string('Employ_Phone');
            $table->string('Gender');
            $table->date('DOB');
            $table->string('Address');
            $table->string('Name_TK');
            $table->string('Password');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
