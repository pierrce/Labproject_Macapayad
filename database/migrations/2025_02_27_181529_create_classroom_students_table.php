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
        Schema::create('classroom_students', function (Blueprint $table) {
            $table->id();
        $table->string('email');
        $table->string('password');
        $table->string('fname');
        $table->string('lname');
        $table->date('dob');
        $table->string('phone', 15)->nullable();
        $table->string('mobile', 15)->nullable();
        $table->unsignedBigInteger('parent_id')->nullable();
        $table->date('date_of_join')->nullable();
        $table->boolean('status')->default(1);
        $table->timestamp('last_login_date')->nullable();
        $table->string('last_login_ip', 45)->nullable();
        $table->foreign('parent_id')->references('id')->on('parents')->onDelete('set null');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classroom_students');
    }
};
