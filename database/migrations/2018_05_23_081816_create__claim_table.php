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
            ////-----Create form
            $table->text('repairname');//ชื่ออู่
            $table->text('insurerName');//name insurer
            $table->text('carRegNo');//เลขทะเบียน
            $table->text('carRegProvince');//จังหวัด
            $table->text('CMFG');//ยี่ห้อ
            $table->text('car_model_c');//รุ่น ใส่ไปก่อน
            $table->text('accPolicyNo');//เลขกรมธรรม์
            $table->text('claimNo');//เลขที่เคลม
            $table->text('accClaimNo');//เลขรับแจ้ง
            $table->text('statusCar'); //สถานะจอดซ่อม

            // part 1 date contact  null except  contect date and repcontact name
            // if statuscar = ไม่จอด  not null
            $table->text('contactDate');//วันที่ติดต่อซ่อม
            $table->text('clientNameContact');//ชื่อผู้ตืดต่อซ่อม
            $table->text('clientTelContact');//เบอร์โทรศัพท์
            $table->text('clientMobileContact');//เบอร์มือถือ
            $table->text('repContactname');//ชื่อเจ้าหน้าที่อู่
            $table->text('appointmentsRepair');//วันที่ติดต่อซ่อมล่วงหน้า
            // part 2 date contact
            // if statuscat = ไม่จอด null all
            $table->text('carRepairDate');//วันที่รถเข้าซ่อม  nullll
            $table->text('clientStaffNameCarRepair');//ชื่อเจ้าหน้าที่
            $table->text('clientNameCarRepair');//ชื่อผู้นำรถเข้าซ่อม
            $table->text('clientIDCardCarRepair');//เลขที่บัตรประชาชน
            $table->text('clientTelCarRepair');//เบอร์โทรศัพท์
            $table->text('clientMobileCarRepair');//เบอร์มือถือ
            $table->text('clientAddressCarRepair');//ที่อยู่
            $table->text('rbOil');//ระดับเชื้อเพลิง
            $table->text('cblItemCarRepair');//อุปกรณ์ในรถ
            $table->text('lossOther');//ความเสียหายอื่นๆ
            $table->text('hopeFinishDate_Calendar');//วันที่นัดรับรถ
            $table->text('hopeFinishTime');//เวลา
            $table->text('estimateLabor');//ประมานค่าแรงซ่อม
            $table->text('typeRepair');//ประเภทงานซ่อม
            $table->text('rbPart');//รายการอะไหล่

            // part 3 date contact null
            $table->text('completeDate_Calendar');//วันที่ซ่อมรถเสร็จ
            //part 4 getcar null all
            $table->text('clientGetcardate');//วันที่ลูกค้ามารับรถ
            $table->text('clientNameGetcar');//ชื่อผู้มารับรถ
            $table->text('clientIDCardGetcar');//เลขบัตรประชาชนผู้มารับรถ
            $table->text('clientTelGetcar');//เบอร์ผู้มารับรถ
            $table->text('clientMobileGetcar');//เบอร์มือถือผู้มารับรถ
            $table->text('KMGetcar');//เลขกมตอนมารับรถ
            $table->text('LINEGetcar');//lineอผู้มารับรถ
            $table->text('relation');//เกี่ยวข้องกับผู้เอาประกัน
            $table->text('repNameGetCar');//ชื่อเจ้าหน้าที่ส่งมอบรถ
            $table->text('CommentGetcar');//ผลการซ่อม
            $table->text('ItemGetcar');//อุปกรณ์ในรถ
            
            //------User
            //add User-----car
             // $table->text('carRegNo');//เลขทะเบียน upppp
            //$table->text('carRegProvince');//จังหวัด upppppppppp
            $table->text('carType');//ประเภทรถ กระบะ
            // $table->text('CMFG');//ยี่ห้อ upppp
            $table->text('carModel');//รุ่น uppp
            $table->text('carModel_Year');//รุ่นปี
            $table->text('carModelType');//ประเภทรถ กระบะ
            $table->text('Chassino');//เลขตัวถัง
            $table->text('ModelNo');//โมเดล
            $table->text('EngineNo');//หมายเลขเครื่อง
            $table->text('KMCarRepair');//หมายเลขกม
            $table->text('CarDescId');//สภาพรถ
            $table->text('color_ID');//สีรถ
            $table->text('useColorType_Id');//สีที่พ่นรถ
            $table->text('CarIden');//รถประกันหรือคู่กรณี
            $table->text('CarIdenNo');//คันที่
            $table->text('Deduction');//ค่าเสียหายส่วนแรก
            $table->text('DeductionSrc');//การเรียกเก็บเงิน

            //add insurance
            // $table->text('insurerName');//name insurer   upppppp
            $table->text('InsurBrId');//สาขาบริษัทประกัน
            $table->text('InsurBrPhone');//หมายเลขโทรศัพท์

            $table->text('InsurBrFax');//หมายเลขแฟ็ก
            // $table->text('accPolicyNo');//เลขกรมธรรม์  uppppppp
            $table->text('PolicyTypeId');//กรมธรรม์ชั้นไหน
            // $table->text('claimNo');//เลขที่เคลม        upppppp
            $table->text('AccInsuredValue');//จำนวนเงินคุ้มครอง
            // $table->text('accClaimNo');//เลขรับแจ้ง   uppppppppppp
            $table->text('CallAcc_Calendar');//วันที่แจ้งอุบัติเหตุ
            $table->text('CallOcc_Calendar');//วันที่เกิดอุบัติเหตุ


            //add diver
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
        Schema::dropIfExists('createClaim');
    }
}
