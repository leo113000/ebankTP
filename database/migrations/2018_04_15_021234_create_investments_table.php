<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvestmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("total");
            
            //Foreign keys constraints
            $table->unsignedInteger('account_id');
            $table->foreign('account_id')
                ->references('id')->on('accounts')
                ->onDelete('cascade');

            //Foreign keys constraints
            $table->unsignedInteger('investment_type_id');
            $table->foreign('investment_type_id')
                ->references('id')->on('investment_types')
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
        Schema::dropIfExists('investments');
    }
}
