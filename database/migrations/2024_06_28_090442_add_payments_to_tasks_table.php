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
        Schema::table('tasks', function (Blueprint $table) {
            $table->string('invoice');
            $table->string('payment_method');
            $table->date('invoice_date');
            $table->decimal('price_without_vat');
            $table->boolean('paid')->default(false);
            $table->decimal('contragent_sum');
            $table->decimal('total_sum');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tasks', function (Blueprint $table) {
            //
        });
    }
};
