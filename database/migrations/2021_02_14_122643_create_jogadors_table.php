<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJogadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::create('player', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable(false);
            $table->string('slug')->nullable(false);
            $table->string('nickname')->nullable();
            $table->text('description')->nullable();
            $table->string('email')->nullable();
            $table->string('external_profile')->nullable();
            $table->decimal('pontuation', 10, 2)->nullable();	
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
        Schema::dropIfExists('player');
    }
}
