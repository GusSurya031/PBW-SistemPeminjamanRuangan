<?php

use Carbon\Carbon;
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
            $table->foreignId('admin_id')->nullable()->constrained();

            $table->string('user_nim');
            $table->foreign('user_nim')->references('nim')->on('users');

            $table->date('loan_date');
            $table->date('end_loan_date');
            $table->time('start_time');
            $table->time('end_time');
            $table->string('purpose');
            $table->tinyInteger('status_id')->default(0);
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
