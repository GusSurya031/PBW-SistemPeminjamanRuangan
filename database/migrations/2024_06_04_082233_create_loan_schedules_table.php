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
        Schema::create('loan_schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('room_id')->constrained();
            $table->foreignId('admin_id')->constrained();

            $table->string('user_nim');
            $table->foreign('user_nim')->references('nim')->on('users');
            $table->date('loan_date');
            $table->date('end_loan_date');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->string('purpose');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_schedules');
    }
};
