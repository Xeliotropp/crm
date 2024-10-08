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
        Schema::create('clients', function(Blueprint $table){
            $table -> id()->autoIncrement();
            $table -> string('client');
            $table -> string('company_identifier');
            $table -> string('contact_person');
            $table -> string('email');
            $table -> string('phone_number');
            $table -> string('address');
            $table -> longText('additional_information') -> nullable();
            $table->string('vat_number')->nullable();
            $table->unsignedBigInteger('contragent_client_id');
            $table->foreign('contragent_client_id')->references('id')->on('contragents')->onDelete('cascade');
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
