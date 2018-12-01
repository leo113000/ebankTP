<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger("account_number")->unique();
            $table->double("balance",9,2)->unique();
            $table->bigInteger("CBU")->unique();
            
            //Foreign keys constraints
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');

            $table->unsignedInteger('account_type_id');
            $table->foreign('account_type_id')
                ->references('id')->on('account_types')
                ->onDelete('cascade');

            $table->unsignedInteger('account_currency_type_id');
            $table->foreign('account_currency_type_id')
                ->references('id')->on('account_currency_types')
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
        Schema::dropIfExists('accounts');
    }
}
