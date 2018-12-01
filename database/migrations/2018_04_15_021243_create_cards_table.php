<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('number');
            $table->integer('limit');
            
            //Foreign keys constraints
            $table->unsignedInteger('account_id');
            $table->foreign('account_id')
                ->references('id')->on('accounts')
                ->onDelete('cascade');

            //Foreign keys constraints
            $table->unsignedInteger('card_type_id');
            $table->foreign('card_type_id')
                ->references('id')->on('card_types')
                ->onDelete('cascade');

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
        Schema::dropIfExists('cards');
    }
}
