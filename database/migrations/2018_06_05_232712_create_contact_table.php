<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_Table', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('contactDate');//วันที่ติดต่อซ่อม
            $table->text('clientNameContact');//ชื่อผู้ตืดต่อซ่อม
            $table->text('clientTelContact');//เบอร์โทรศัพท์
            $table->text('clientMobileContact');//เบอร์มือถือ
            $table->text('repContactname');//ชื่อเจ้าหน้าที่อู่
            $table->text('appointmentsRepair');//วันที่ติดต่อซ่อมล่วงหน้า

            $table->text('carRepairDate');//วันที่รถเข้าซ่อม  nullll
            $table->text('clientStaffNameCarRepair');//ชื่อเจ้าหน้าที่
            // $table->text('clientNameCarRepair');//ชื่อผู้นำรถเข้าซ่อม
            // $table->text('clientIDCardCarRepair');//เลขที่บัตรประชาชน
            // $table->text('clientTelCarRepair');//เบอร์โทรศัพท์
            // $table->text('clientMobileCarRepair');//เบอร์มือถือ
            // $table->text('clientAddressCarRepair');//ที่อยู่

            $table->text('hopeFinishDate_Calendar');//วันที่นัดรับรถ
            $table->text('hopeFinishTime');//เวลา
            $table->text('completeDate_Calendar');//วันที่ซ่อมรถเสร็จ
            //part 4 getcar null all
            $table->text('clientGetcardate');//วันที่ลูกค้ามารับรถ
            $table->text('clientNameGetcar');//ชื่อผู้มารับรถ
            $table->text('clientIDCardGetcar');//เลขบัตรประชาชนผู้มารับรถ
            $table->text('clientTelGetcar');//เบอร์ผู้มารับรถ
            $table->text('clientMobileGetcar');//เบอร์มือถือผู้มารับรถ

            $table->text('LINEGetcar');//lineอผู้มารับรถ
            $table->text('relation');//เกี่ยวข้องกับผู้เอาประกัน
            $table->text('repNameGetCar');//ชื่อเจ้าหน้าที่ส่งมอบรถ

            $table->text('DRIVER_NAME');//ชื่อผู้ขับขี่
            $table->text('DRIVER_IDCARD');//เลขบัตรชาชน
            $table->text('DRIVER_PASSPORTNO');//เลขใบขับขี่
            $table->text('DRIVER_PHONE_NO');//เบอร์อผู้ขับขี่

            //add getcar
            //upppppppp ---null
            $table->text('RepGetName');//ชื่อจนท รับรถ
            $table->text('RepEstimateDays');//วันที่คาดว่าจะซ่อมเสร็จ
            $table->text('hopeFinish');//วันที่คาดว่าซ้่อมเสร็จ
            $table->text('hopeFinish_Fix');//วันที่คาดว่าซ้่อมเสร็จ แก้ไข
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_Table');
    }
}
