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
       
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->date('dateOfMeasurement');
            $table->tinyInteger('mk')->default('0')->comment('0 -> маркиран 1-> немаркиран');
            $table->tinyInteger('osv')->default('0')->comment('0 -> маркиран 1-> немаркиран');
            $table->tinyInteger('sh')->default('0')->comment('0 -> маркиран 1-> немаркиран');
            $table->tinyInteger('vent')->default('0')->comment('0 -> маркиран 1-> немаркиран');
            $table->tinyInteger('klim')->default('0')->comment('0 -> маркиран 1-> немаркиран');
            $table->tinyInteger('f0')->default('0')->comment('0 -> маркиран 1-> немаркиран');
            $table->tinyInteger('z')->default('0')->comment('0 -> маркиран 1-> немаркиран');
            $table->tinyInteger('m')->default('0')->comment('0 -> маркиран 1-> немаркиран');
            $table->tinyInteger('izol')->default('0')->comment('0 -> маркиран 1-> немаркиран');
            $table->tinyInteger('dtz')->default('0')->comment('0 -> маркиран 1-> немаркиран');         
            $table->string('wayOfShowingDocumentation');
            $table->string('certificateNumber');
            $table->date('certificateDate');

            $table->date('nextMeasurement')->nullable();
            $table->tinyInteger('mkNext')->default('0')->comment('0 -> маркиран 1-> немаркиран');
            $table->tinyInteger('osvNext')->default('0')->comment('0 -> маркиран 1-> немаркиран');
            $table->tinyInteger('shNext')->default('0')->comment('0 -> маркиран 1-> немаркиран');
            $table->tinyInteger('ventNext')->default('0')->comment('0 -> маркиран 1-> немаркиран');
            $table->tinyInteger('klimNext')->default('0')->comment('0 -> маркиран 1-> немаркиран');
            $table->tinyInteger('f0Next')->default('0')->comment('0 -> маркиран 1-> немаркиран');
            $table->tinyInteger('zNext')->default('0')->comment('0 -> маркиран 1-> немаркиран');
            $table->tinyInteger('mNext')->default('0')->comment('0 -> маркиран 1-> немаркиран');
            $table->tinyInteger('izolNext')->default('0')->comment('0 -> маркиран 1-> немаркиран');
            $table->tinyInteger('dtzNext')->default('0')->comment('0 -> маркиран 1-> немаркиран');

            $table->string('invoice');
            $table->string('payment_method');
            $table->date('invoice_date');
            $table->float('price_without_vat');
            $table->tinyInteger('paid')->default(false);
            $table->float('contragent_sum');
            $table->float('total_sum');

            $table->string('client');
            $table->string('client_address_1');
            $table->string('client_address_2')->nullable();
            $table->string('client_address_3')->nullable();
            $table->string('client_address_4')->nullable();
            $table->string('contragent');
            
            $table->timestamps();
                        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
