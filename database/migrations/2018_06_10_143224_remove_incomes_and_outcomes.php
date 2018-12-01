<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveIncomesAndOutcomes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('incomes');
        Schema::dropIfExists('outcomes');
        Schema::dropIfExists('income_types');
        Schema::dropIfExists('outcome_types');
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
