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
        Schema::create('contragents', function(Blueprint $table){
            $table -> id()->autoIncrement();
            $table -> string('contragent');
            $table -> integer('company_identifier');
            $table -> string('contact_person');
            $table -> string('phone_number');
            $table -> longText('additional_information') -> nullable();
            $table -> integer('commission_percentage');
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contragents');
    }
};
