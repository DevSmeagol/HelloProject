<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClaimTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('createClaim', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            //
            $table->text('Repairname');//ชื่ออู่
            $table->text('InsurerName');//name insurer
            $table->text('carRegNo');//เลขทะเบียน
            $table->text('carRegProvince');//จังหวัด
            $table->text('CMFG');//ยี่ห้อ
            $table->text('carModel');//รุ่น
            $table->text('accPolicyNo');//เลขกรมธรรม์
            $table->text('claimNo');//เลขที่เคลม
            $table->text('accClaimNo');//เลขรับแจ้ง
            $table->text('statusCar'); //สถานะจอดซ่อม
            $table->text('contactDate');//วันที่ติดต่อซ่อม
            $table->text('ClientNameContact');//ชื่อผู้ตืดต่อซ่อม
            $table->text('ClientTelContact');//เบอร์โทรศัพท์
            $table->text('ClientMobileContact');//เบอร์มือถือ
            $table->text('RepContactname');//ชื่อเจ้าหน้าที่อู่
            $table->text('appointmentsRepair');//วันที่ติดต่อซ่อมล่วงหน้า
            $table->text('carRepairDate');//วันที่รถเข้าซ่อม
            $table->text('ClientStaffNameCarRepair');//ชื่อเจ้าหน้าที่
            $table->text('ClientNameCarRepair');//ชื่อผู้นำรถเข้าซ่อม
            $table->text('ClientIDCardCarRepair');//เลขที่บัตรประชาชน
            $table->text('ClientTelCarRepair');//เบอร์โทรศัพท์
            $table->text('ClientMobileCarRepair');//เบอร์มือถือ
            $table->text('ClientAddressCarRepair');//ที่อยู่
            $table->text('KMCarRepair');//หมายเลขกม
            $table->text('rbOil');//ระดับเชื้อเพลิง
            $table->text('cblItemCarRepair');//อุปกรณ์ในรถ
            $table->text('LossOther');//ความเสียหายอื่นๆ
            $table->text('HopeFinishDate_txtCalendar');//วันที่นัดรับรถ
            $table->text('ddlHopeFinishTime');//เวลา
            $table->text('EstimateLabor');//ประมานค่าแรงซ่อม
            $table->text('ddlTypeRepair');//ประเภทงานซ่อม
            $table->text('rbPart');//รายการอะไหล่
            $table->text('wuCalendarCompleteDate_txtCalendar');//วันที่ซ่อมรถเสร็จ
            $table->text('ClientGetcardate');//วันที่ลูกค้ามารับรถ
            $table->text('ClientNameGetcar');//ชื่อผู้มารับรถ
            $table->text('lbClientIDCardGetcar');//เลขบัตรประชาชนผู้มารับรถ
            $table->text('ClientTelGetcar');//เบอร์ผู้มารับรถ
            $table->text('ClientMobileGetcar');//เบอร์มือถือผู้มารับรถ
            $table->text('KMGetcar');//เลขกมตอนมารับรถ
            $table->text('LINEGetcar');//lineอผู้มารับรถ
            $table->text('Relation');//เกี่ยวข้องกับผู้เอาประกัน
            $table->text('RepNameGetCar');//ชื่อเจ้าหน้าที่ส่งมอบรถ
            $table->text('rbCommentGetcar');//ผลการซ่อม
            $table->text('rbItemGetcar');//อุปกรณ์ในรถ
            
            //add User
            $table->text('Chassino');//เลขตัวถัง
            $table->text('ModelNo');//โมเดล
            $table->text('EngineNo');//หมายเลขเครื่อง
            $table->text('DrpCarDescId');//สภาพรถ
            $table->text('drpCCL_ID');//สีรถ
            $table->text('drpCptId');//สีที่พ่นรถ
            $table->text('DrpCarIden');//รถประกันหรือคู่กรณี
            $table->text('CarIdenNo');//คันที่
            $table->text('Deduction');//ค่าเสียหายส่วนแรก
            $table->text('DrpDeductionSrc');//การเรียกเก็บเงิน
            $table->text('drpInsurBrId');//สาขาบริษัทประกัน
            $table->text('InsurBrFax');//หมายเลขแฟ็ก
            $table->text('DrpPolicyTypeId');//กรมธรรม์ชั้นไหน
            $table->text('AccInsuredValue');//จำนวนเงินคุ้มครอง
            $table->text('wuCalAcc_txtCalendar');//วันที่แจ้งอุบัติเหตุ
            $table->text('wuCalOcc_txtCalendar');//วันที่เกิดอุบัติเหตุ
            $table->text('DRIVER_NAME');//ชื่อผู้ขับขี่
            $table->text('DRIVER_IDCARD');//เลขบัตรชาชน
            $table->text('DRIVER_PASSPORTNO');//เลขใบขับขี่
            $table->text('DRIVER_PHONE_NO');//เบอร์อผู้ขับขี่
            $table->text('RepEstimateDays');//วันที่คาดว่าจะซ่อมเสร็จ
            $table->text('txtC1');//วันที่คาดว่าซ้่อมเสร็จ
            $table->text('txtC2');//วันที่คาดว่าซ้่อมเสร็จ แก้ไข
            



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('createClaim');
    }
}
