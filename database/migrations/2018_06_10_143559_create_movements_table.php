<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movements', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('value');
            $table->string('description');

            //Foreign keys constraints
            $table->unsignedInteger('account_id');
            $table->foreign('account_id')
                ->references('id')->on('accounts')
                ->onDelete('cascade');

            $table->unsignedInteger('movement_type_id');
            $table->foreign('movement_type_id')
                ->references('id')->on('movement_types');

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
        Schema::dropIfExists('movements');
    }
}
