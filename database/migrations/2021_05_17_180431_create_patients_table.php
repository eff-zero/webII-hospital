<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doctor_id')
                  ->constrained()
                  ->onDelete('cascade')
                  ->upUpdate('cascade');

            $table->string('name');
            $table->string('adress');
            $table->string('eps');
            $table->string('comp_name');
            $table->bigInteger('comp_phone');
            $table->text('med_history')->nullable(true); //Faltaba
            $table->text('reasons'); //Faltaba
            $table->text('diagnosis');
            $table->boolean('covid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
