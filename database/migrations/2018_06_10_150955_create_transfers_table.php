<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfers', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('value');

            //Foreign keys constraints
            $table->unsignedInteger('sender_account_id');
            $table->foreign('sender_account_id')
                ->references('id')->on('accounts')
                ->onDelete('cascade');

            $table->bigInteger('CBU');

            $table->unsignedInteger('transfer_status_id');
            $table->foreign('transfer_status_id')
                ->references('id')->on('transfer_statuses')
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
        Schema::dropIfExists('transfers');
    }
}
