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
            $table -> integer('company_identifier');
            $table -> string('contact_person');
            $table -> string('phone_number');
            $table -> string('address');
            $table -> longText('additional_information') -> nullable();
            $table -> json('object'); 
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
