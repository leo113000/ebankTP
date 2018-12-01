<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutcomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outcomes', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('value');

            //Foreign keys constraints
            $table->unsignedInteger('account_id');
            $table->foreign('account_id')
                ->references('id')->on('accounts')
                ->onDelete('cascade');

            $table->unsignedInteger('outcome_type_id');
            $table->foreign('outcome_type_id')
                ->references('id')->on('outcome_types')
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
        Schema::dropIfExists('outcomes');
    }
}
