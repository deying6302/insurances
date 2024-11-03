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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('social_insurance_number')->unique(); // Mã số BHXH
            $table->string('name'); // Họ và tên
            $table->date('birthdate'); // Ngày sinh
            $table->string('gender'); // Giới tính
            $table->string('nationality'); // Quốc tịch
            $table->string('ethnicity')->nullable(); // Dân tộc
            $table->string('identity_number')->nullable(); // Số CMT/HC/CC
            $table->string('phone_number')->nullable(); // Số điện thoại liên hệ
            $table->string('household_number')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
