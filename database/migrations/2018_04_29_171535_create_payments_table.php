<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('value');

            //Foreign keys constraints
            $table->unsignedInteger('account_id');
            $table->foreign('account_id')
                ->references('id')->on('accounts')
                ->onDelete('cascade');

            $table->unsignedInteger('service_id');
            $table->foreign('service_id')
                ->references('id')->on('services')
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
        Schema::dropIfExists('payments');
    }
}
