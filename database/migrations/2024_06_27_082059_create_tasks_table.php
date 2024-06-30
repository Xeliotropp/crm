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
            $table->boolean('mk')->nullable();
            $table->boolean('osv')->nullable();
            $table->boolean('sh')->nullable();
            $table->boolean('vent')->nullable();
            $table->boolean('klim')->nullable();
            $table->boolean('f0')->nullable();
            $table->boolean('z')->nullable();
            $table->boolean('m')->nullable();
            $table->boolean('izol')->nullable();
            $table->boolean('dtz')->nullable();         
            $table->string('wayOfShowingDocumentation');
            $table->string('certificateNumber');
            $table->date('certificateDate');

            $table->date('nextMeasurement');
            $table->boolean('mkNext')->nullable();
            $table->boolean('osvNext')->nullable();
            $table->boolean('shNext')->nullable();
            $table->boolean('ventNext')->nullable();
            $table->boolean('klimNext')->nullable();
            $table->boolean('f0Next')->nullable();
            $table->boolean('zNext')->nullable();
            $table->boolean('mNext')->nullable();
            $table->boolean('izolNext')->nullable();
            $table->boolean('dtzNext')->nullable();
            
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
