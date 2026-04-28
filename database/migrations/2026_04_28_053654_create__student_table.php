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
        Schema::create('_student', function (Blueprint $table) {
            $table->id();
            $table->timestamps(); //creation tym and updation time.
            $table->string('name');
            $table->integer('roll_no');
            $table->integer('class');

        });
    }  

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_student');
    }
};
