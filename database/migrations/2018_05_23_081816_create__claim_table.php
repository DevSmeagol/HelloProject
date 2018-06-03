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
            $table->text('txtRepairname');//ชื่ออู่
            $table->text('ddlInsurer');//name insurer
            $table->text('txtCarRegNo');//เลขทะเบียน
            $table->text('ddlCarRegProvince');//จังหวัด
            $table->text('ddlCMFG');//ยี่ห้อ
            $table->text('txtCModel');//รุ่น
            $table->text('txtAccPolicyNo');//เลขกรมธรรม์
            $table->text('txtRefClaimNo');//เลขที่เคลม
            $table->text('txtAccClaimNo');//เลขรับแจ้ง
            $table->text('rbStatusCar'); //สถานะจอดซ่อม
            $table->text('txtRepContactDate');//วันที่ติดต่อซ่อม
            $table->text('txtClientNameContact');//ชื่อผู้ตืดต่อซ่อม
            $table->text('txtClientTelContact');//เบอร์โทรศัพท์
            $table->text('txtClientMobileContact');//เบอร์มือถือ
            $table->text('txtRepContactname');//ชื่อเจ้าหน้าที่อู่
            $table->text('wuCalendarContact_txtCalendar');//วันที่ติดต่อซ่อมล่วงหน้า
            $table->text('txtCarRepairDate');//วันที่รถเข้าซ่อม
            $table->text('txtClientStaffNameCarRepairo');//ชื่อเจ้าหน้าที่
            $table->text('txtClientNameCarRepair');//ชื่อผู้นำรถเข้าซ่อม
            $table->text('txtClientIDCardCarRepair');//เลขที่บัตรประชาชน
            $table->text('txtClientTelCarRepair');//เบอร์โทรศัพท์
            $table->text('txtClientMobileCarRepair');//เบอร์มือถือ
            $table->text('txtClientAddressCarRepair');//ที่อยู่
            $table->text('txtKMCarRepair');//หมายเลขกม
            $table->text('rbOil');//ระดับเชื้อเพลิง
            $table->text('cblItemCarRepair');//อุปกรณ์ในรถ
            $table->text('txtLossOther');//ความเสียหายอื่นๆ
            $table->text('wuCalendarHopeFinishDate_txtCalendar');//วันที่นัดรับรถ
            $table->text('ddlHopeFinishTime');//เวลา
            $table->text('txtEstimateLabor');//ประมานค่าแรงซ่อม
            $table->text('ddlTypeRepair');//ประเภทงานซ่อม
            $table->text('rbPart');//รายการอะไหล่
            $table->text('wuCalendarCompleteDate_txtCalendar');//วันที่ซ่อมรถเสร็จ
            $table->text('txtClientGetcardate');//วันที่ลูกค้ามารับรถ
            $table->text('txtClientNameGetcar');//ชื่อผู้มารับรถ
            $table->text('lbClientIDCardGetcar');//เลขบัตรประชาชนผู้มารับรถ
            $table->text('txtClientTelGetcar');//เบอร์ผู้มารับรถ
            $table->text('txtClientMobileGetcar');//เบอร์มือถือผู้มารับรถ
            $table->text('txtKMGetcar');//เลขกมตอนมารับรถ
            $table->text('txtLINEGetcar');//lineอผู้มารับรถ
            $table->text('txtRelation');//เกี่ยวข้องกับผู้เอาประกัน
            $table->text('txtRepNameGetCar');//ชื่อเจ้าหน้าที่ส่งมอบรถ
            $table->text('rbCommentGetcar');//ผลการซ่อม
            $table->text('rbItemGetcar');//อุปกรณ์ในรถ
            
            //add User
            $table->text('txtChassino');//เลขตัวถัง
            $table->text('txtModelNo');//โมเดล
            $table->text('txtEngineNo');//หมายเลขเครื่อง
            $table->text('DrpCarDescId');//สภาพรถ
            $table->text('drpCCL_ID');//สีรถ
            $table->text('drpCptId');//สีที่พ่นรถ
            $table->text('DrpCarIden');//รถประกันหรือคู่กรณี
            $table->text('txtCarIdenNo');//คันที่
            $table->text('txtDeduction');//ค่าเสียหายส่วนแรก
            $table->text('DrpDeductionSrc');//การเรียกเก็บเงิน
            $table->text('drpInsurBrId');//สาขาบริษัทประกัน
            $table->text('txtInsurBrFax');//หมายเลขแฟ็ก
            $table->text('DrpPolicyTypeId');//กรมธรรม์ชั้นไหน
            $table->text('txtAccInsuredValue');//จำนวนเงินคุ้มครอง
            $table->text('wuCalAcc_txtCalendar');//วันที่แจ้งอุบัติเหตุ
            $table->text('wuCalOcc_txtCalendar');//วันที่เกิดอุบัติเหตุ
            $table->text('txtDRIVER_NAME');//ชื่อผู้ขับขี่
            $table->text('txtDRIVER_IDCARD');//เลขบัตรชาชน
            $table->text('txtDRIVER_PASSPORTNO');//เลขใบขับขี่
            $table->text('txtDRIVER_PHONE_NO');//เบอร์อผู้ขับขี่
            $table->text('txtRepEstimateDays');//วันที่คาดว่าจะซ่อมเสร็จ
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
