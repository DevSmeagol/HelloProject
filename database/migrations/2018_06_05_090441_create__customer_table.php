<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_Table', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('clientNameCarRepair');//ชื่อผู้นำรถเข้าซ่อม
            $table->text('clientIDCardCarRepair');//เลขที่บัตรประชาชน
            $table->text('clientTelCarRepair');//เบอร์โทรศัพท์
            $table->text('clientMobileCarRepair');//เบอร์มือถือ
            $table->text('clientAddressCarRepair');//ที่อยู่

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_Table');
    }
}
