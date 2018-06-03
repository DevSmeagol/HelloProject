<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ShowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
                $table->timestamps();
                $table->increments('id');
                $table->text('claim_id');
                $table->text('accident_id');
                $table->text('car_id');
                $table->text('car_brand');
                $table->text('car_gen');
                $table->text('company');
                $table->text('state');
                $table->text('customer_name');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
