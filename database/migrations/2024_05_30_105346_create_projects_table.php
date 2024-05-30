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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->string('object_address');
            $table->date('date_of_measurment');
            $table->text('parameters');
            $table->foreign('contragent_id')->references('id')->on('contragents')->onDelete('cascade');
            $table->text('way_of_giving_information');
            $table->string('certificate_number');
            $table->date('certificate_date');
            $table->date('certificate_validity');
            $table->integer('reminder');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
        Schema::table('clients', function (Blueprint $table) {
            $table->dropForeign(['client_id']);
            $table->dropColumn('client_id');
        });
        Schema::table('contragents', function(Blueprint $table){
            $table->dropForeign(['contragent_id']);
            $table->dropColumn('contragent_id');
        });
    }
};
