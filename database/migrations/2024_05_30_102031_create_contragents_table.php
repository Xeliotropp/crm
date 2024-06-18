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
            $table -> string('contragent_name');
            $table -> integer('contragent_company_identifier');
            $table -> string('contragent_contact_person');
            $table -> string('contragent_phone_number');
            $table -> longText('contragent_additional_information') -> nullable();
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
