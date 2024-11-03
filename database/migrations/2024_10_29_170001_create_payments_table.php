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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->decimal('salary', 15, 2); // Mức lương
            $table->string('payment_method'); // Phương thức đóng
            $table->integer('months'); // Số tháng
            $table->decimal('insurance_rate', 5, 2); // Tỷ lệ BHYT
            $table->decimal('amount_due', 15, 2); // Số tiền phải đóng
            $table->date('receipt_date')->nullable(); // Ngày biên lai
            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
