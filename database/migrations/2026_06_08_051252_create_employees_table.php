<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('emp_id');
            $table->string('name');
            $table->string('email');
            $table->decimal('salary', 10, 2);
            $table->date('joining_date');
            $table->timestamps();
        });
    }
};
