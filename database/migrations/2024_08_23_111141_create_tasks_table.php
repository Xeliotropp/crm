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
            $table->id(); // id with AUTO_INCREMENT
            $table->date('dateOfMeasurement')->nullable();
            $table->tinyInteger('mk')->unsigned()->default(0);
            $table->tinyInteger('osv')->unsigned()->default(0);
            $table->tinyInteger('sh')->unsigned()->default(0);
            $table->tinyInteger('vent')->unsigned()->default(0);
            $table->tinyInteger('klim')->unsigned()->default(0);
            $table->tinyInteger('f0')->unsigned()->default(0);
            $table->tinyInteger('z')->unsigned()->default(0);
            $table->tinyInteger('m')->unsigned()->default(0);
            $table->tinyInteger('izol')->unsigned()->default(0);
            $table->tinyInteger('dtz')->unsigned()->default(0);
            $table->string('wayOfShowingDocumentation')->nullable();
            $table->string('certificateNumber')->nullable();
            $table->date('certificateDate')->nullable();
            $table->date('nextMeasurement')->nullable();
            $table->tinyInteger('mkNext')->unsigned()->default(0);
            $table->tinyInteger('osvNext')->unsigned()->default(0);
            $table->tinyInteger('shNext')->unsigned()->default(0);
            $table->tinyInteger('ventNext')->unsigned()->default(0);
            $table->tinyInteger('klimNext')->unsigned()->default(0);
            $table->tinyInteger('f0Next')->unsigned()->default(0);
            $table->tinyInteger('zNext')->unsigned()->default(0);
            $table->tinyInteger('mNext')->unsigned()->default(0);
            $table->tinyInteger('izolNext')->unsigned()->default(0);
            $table->tinyInteger('dtzNext')->unsigned()->default(0);
            $table->string('invoice')->nullable();
            $table->string('payment_method')->nullable();
            $table->date('invoice_date')->nullable();
            $table->double('price_without_vat')->nullable();
            $table->tinyInteger('paid')->unsigned()->default(0);
            $table->double('contragent_sum')->nullable();
            $table->double('total_sum')->nullable();
            $table->unsignedBigInteger('client_id')->nullable();
            $table->string('client_address_1')->nullable();
            $table->string('client_address_2')->nullable();
            $table->string('client_address_3')->nullable();
            $table->string('client_address_4')->nullable();
            $table->unsignedBigInteger('contragent_id')->nullable();
            $table->string('contragent')->nullable();
            $table->tinyInteger('mkcold');
            $table->tinyInteger('osvEvak');
            $table->tinyInteger('shobSgr');
            $table->tinyInteger('shokolSr');
            $table->tinyInteger('mkcoldNext');
            $table->tinyInteger('osvEvakNext');
            $table->tinyInteger('shobSgrNext');
            $table->tinyInteger('shokolSrNext');
            $table->text('courrierDetails');
            $table->timestamps(); // created_at and updated_at fields
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
