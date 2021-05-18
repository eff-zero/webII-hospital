<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hospital_id')
                  ->constrained()
                  ->onDelete('cascade')
                  ->upUpdate('cascade');

            $table->string('name');
            $table->string('adress');
            $table->bigInteger('phone')->unique();
            $table->string('type_blood');
            $table->string('years_exp');
            $table->date('date'); 
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
        Schema::dropIfExists('doctors');
    }
}
