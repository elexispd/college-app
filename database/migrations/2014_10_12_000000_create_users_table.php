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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('state');
            $table->string('ap_number')->nullable();
            $table->string('student_type')->nullable();
            $table->string('gender');
            $table->string('password');
            $table->string('birth_year');
            $table->boolean('is_staff')->default(false);
            $table->date('enlistment_date')->nullable();
            $table->date('promotion_date')->nullable();
            $table->string('qualification');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
