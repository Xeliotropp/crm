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
            $table->string('invoice_number');
            $table->date('invoice_date');
            $table->string('payment_way');
            $table->decimal('sum_without_vat');
            $table->boolean('paid')->comment('0-> не; 1-> да');
            $table->decimal('contragent_comission');
            $table->decimal('contragent_cut');
            $table->decimal('real_sum');
            $table->timestamps();
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
