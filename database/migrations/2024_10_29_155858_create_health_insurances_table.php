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
        Schema::create('health_insurances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id'); // Liên kết với bảng customers
            $table->string('insurance_number')->unique(); // Số thẻ BHYT
            $table->date('old_from_date')->nullable(); // Từ ngày thẻ cũ
            $table->date('old_to_date')->nullable(); // Đến ngày thẻ cũ
            $table->date('new_from_date')->nullable(); // Từ ngày
            $table->date('new_to_date')->nullable(); // Đến ngày
            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('health_insurances');
    }
};
