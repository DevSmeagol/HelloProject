@extends('layout.mainState') @section('page_title', 'Customers') @section('activeUrl')

<br>
<div class="input-group">
    <input type="text" class="form-control" placeholder="Search Blog..">
    <span class="input-group-btn">
    <button class="btn btn-default" type="button">
      <span class="glyphicon glyphicon-search">
      </span>
    </button>
    </span>
</div>
@stop 
@section('content')

<a href="gotoIndex" class="btn btn-default" role="button" >กลับสู่หน้าหลัก</a>

<div class="form-header">
    <h1>ข้อมูลงานซ่อม</h1>
</div>
<ul class="nav nav-pills nav-justified" role="tablist">
    <li class="active"><a href="User">ข้อมูลทั่วไป</a></li>
    <li><a href="costWork">ค่าแรง</a></li>
    <li><a href="costItem">ค่าอะไหล่</a></li>
    <li><a href="costEtc">ค่าใช้จ่ายอื่นๆ</a></li>
    <li><a href="Picture">รูปประกอบ</a></li> 
    <li><a href="Total">สรุป</a></li>               
</ul>
<br>
<td >
  <table style="width: 1000px; vertical-align: top; ">
    <tbody>
      


      <tr>
        <td>
          <table width="100%">
            <tbody>
              <tr>
                <td colspan="4">
                  <a name="#g01">
                  </a>
                  <table border="0" cellspacing="0" cellpadding="0" style="width: 100%; height: 25px;">
                    <tbody>
                      <tr>
                        <td bgcolor="#2277D4" align="left">
                          &nbsp;
                          <span id="Label1" class="g1" style="color:#F9FBEE;">:: รายละเอียดรถยนต์
                          </span>&nbsp;
                        </td>

                        

                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
              <tr>
                <td valign="top" colspan="4" align="center">
                  <input name="hidCType" type="hidden" id="hidCType" style="width: 1px;" size="1">
                  <input name="hidCMFG" type="hidden" id="hidCMFG" style="width: 1px;" size="1">
                  <input name="hidCModel" type="hidden" id="hidCModel" style="width: 1px;" size="2">
                  <input name="hidDSTYear" type="hidden" id="hidDSTYear" style="width: 1px;" size="1">
                  <input name="hidCVechTyp" type="hidden" id="hidCVechTyp" style="width: 1px;" size="1">
                  <input name="hidEngsize" type="hidden" id="hidEngsize" style="width: 1px;" size="3">
                  <input name="hidCMFG_Text" type="hidden" id="hidCMFG_Text" style="width: 1px;" size="1">
                  <input name="hidCVechTyp_Text" type="hidden" id="hidCVechTyp_Text" style="width: 1px;" size="1">
                  <input name="hidNewPart" type="hidden" id="hidNewPart" style="width: 1px;" value="0">
                  <input name="hidHavePart" type="hidden" id="hidHavePart" style="width: 1px;" size="1">
                  <input name="hidCProjref" type="hidden" id="hidCProjref" style="width: 1px;" size="1">
                  <input name="hidDENDYear" type="hidden" id="hidDENDYear" style="width: 1px;" size="1">
                  <input name="hidCTrimLevel" type="hidden" id="hidCTrimLevel" style="width: 1px;" size="1">
                  <input name="hidstrURL" type="hidden" id="hidstrURL" style="width: 1px;" size="1" value="http://eclaim2.emcsthai.com/SelVech4/frmSelVech.aspx">
                  <input name="hidClaimType" type="hidden" id="hidClaimType" style="width: 1px;" size="1">
                  <input name="hidInoutStatus" type="hidden" id="hidInoutStatus" style="width: 1px;" size="1" value="2">
                  <input name="hidCarStatus" type="hidden" id="hidCarStatus" style="width: 1px;" size="1" value="Y">
                  <input name="hidCProjrefDB" type="hidden" id="hidCProjrefDB" size="1">
                </td>
              </tr>
              <tr bgcolor="#f3f3f4">
                <td align="right" class="stTd1">
                  <div align="left">
                    <font style="font-family: Tahoma; font-size: 10pt">&nbsp;ทะเบียนรถ
                    </font>
                    <font color="#ff0000">
                      *
                    </font>
                  </div>
                </td>
                <td class="stTd2">
                  <input name="carRegNo" type="text"  maxlength="50" id="carRegNo" class="itemDtg" style="color:Black;width:144px;">&nbsp;
                  <span id="Regex_txtCarRegNo" class="txtRegex" style="color:Red;display:none;">กรุณากรอก ทะเบียนรถ ให้ถูกต้อง
                  </span>
                  <span id="Rfv_txtCarRegNo" class="txtRegex" style="color:Red;display:none;">กรุณากรอก ทะเบียนรถ ให้ถูกต้อง
                  </span>
                </td>
                <td align="right" class="stTd3">
                  <div align="left">
                    <font class="itemDtg">จังหวัด
                      <font color="#ff0000">*
                      </font>
                    </font>
                  </div>
                </td>
                <td class="stTd4">
                  <select name="carRegProvince" id="carRegProvince" class="itemDtg" style="width:114px;">
                    <option value="0">- เลือกจังหวัด -
                    </option>
                    <option value="1">กระบี่
                    </option>
                    <option value="2">กรุงเทพ ฯ
                    </option>
                    <option value="3">กาญจนบุรี
                    </option>
                    <option value="4">กาฬสินธุ์
                    </option>
                    <option value="5">กำแพงเพชร
                    </option>
                    <option value="6">ขอนแก่น
                    </option>
                    <option value="7">จันทบุรี
                    </option>
                    <option value="8">ฉะเชิงเทรา
                    </option>
                    <option value="9">ชลบุรี
                    </option>
                    <option value="10">ชัยนาท
                    </option>
                    <option value="11">ชัยภูมิ
                    </option>
                    <option value="12">ชุมพร
                    </option>
                    <option value="13">เชียงราย
                    </option>
                    <option value="14">เชียงใหม่
                    </option>
                    <option value="15">ตรัง
                    </option>
                    <option value="16">ตราด
                    </option>
                    <option value="17">ตาก
                    </option>
                    <option value="18">นครนายก
                    </option>
                    <option value="19">นครปฐม
                    </option>
                    <option value="20">นครพนม
                    </option>
                    <option value="21">นครราชสีมา
                    </option>
                    <option value="22">นครศรีธรรมราช
                    </option>
                    <option value="23">นครสวรรค์
                    </option>
                    <option value="24">นนทบุรี
                    </option>
                    <option value="25">นราธิวาส
                    </option>
                    <option value="26">น่าน
                    </option>
                    <option value="27">บุรีรัมย์
                    </option>
                    <option value="28">ปทุมธานี
                    </option>
                    <option value="29">ประจวบคีรีขันธ์
                    </option>
                    <option value="30">ปราจีนบุรี
                    </option>
                    <option value="31">ปัตตานี
                    </option>
                    <option value="32">พะเยา
                    </option>
                    <option value="33">พังงา
                    </option>
                    <option value="34">พัทลุง
                    </option>
                    <option value="35">พิจิตร
                    </option>
                    <option value="36">พิษณุโลก
                    </option>
                    <option value="37">เพชรบุรี
                    </option>
                    <option value="38">เพชรบูรณ์
                    </option>
                    <option value="39">แพร่
                    </option>
                    <option value="40">ภูเก็ต
                    </option>
                    <option value="41">มหาสารคาม
                    </option>
                    <option value="42">มุกดาหาร
                    </option>
                    <option value="43">แม่ฮ่องสอน
                    </option>
                    <option value="44">ยโสธร
                    </option>
                    <option value="45">ยะลา
                    </option>
                    <option value="46">ร้อยเอ็ด
                    </option>
                    <option value="47">ระนอง
                    </option>
                    <option value="48">ระยอง
                    </option>
                    <option value="49">ราชบุรี
                    </option>
                    <option value="50">ลพบุรี
                    </option>
                    <option value="51">ลำปาง
                    </option>
                    <option value="52">ลำพูน
                    </option>
                    <option value="53">เลย
                    </option>
                    <option value="54">ศรีสะเกษ
                    </option>
                    <option value="55">สกลนคร
                    </option>
                    <option value="56">สงขลา
                    </option>
                    <option value="57">สตูล
                    </option>
                    <option value="58">สมุทรปราการ
                    </option>
                    <option value="59">สมุทรสงคราม
                    </option>
                    <option value="60">สมุทรสาคร
                    </option>
                    <option value="61">สระแก้ว
                    </option>
                    <option value="62">สระบุรี
                    </option>
                    <option value="63">สิงห์บุรี
                    </option>
                    <option value="64">สุโขทัย
                    </option>
                    <option value="65">สุพรรณบุรี
                    </option>
                    <option value="66">สุราษฎร์ธานี
                    </option>
                    <option value="67">สุรินทร์
                    </option>
                    <option value="68">หนองคาย
                    </option>
                    <option value="69">หนองบัวลำภู
                    </option>
                    <option value="70">พระนครศรีอยุธยา
                    </option>
                    <option value="71">อ่างทอง
                    </option>
                    <option value="72">อำนาจเจริญ
                    </option>
                    <option value="73">อุดรธานี
                    </option>
                    <option value="74">อุตรดิตถ์
                    </option>
                    <option value="75">อุทัยธานี
                    </option>
                    <option value="76">อุบลราชธานี
                    </option>
                    <option value="77">เบตง
                    </option>
                    <option value="79">อื่นๆ
                    </option>
                    <option value="78">บึงกาฬ
                    </option>
                  </select>
                  <span id="Rfv_drpCarProvinceId" class="txtRegex" style="color:Red;visibility:hidden;">กรุณาระบุ จังหวัดรถ
                  </span>
                </td>
              </tr>
              <tr id="trNewSelVech1" bgcolor="#e6e7e8">
                <td align="right">
                  <div align="left">
                    <font class="itemDtg">&nbsp;ประเภทรถ
                      <font color="#ff0000">*
                      </font>
                    </font>
                  </div>
                </td>
                <td>
                  <input name="carType" type="text" id="carType" style="width: 144px;" maxlength="40" size="18" readonly="readonly">&nbsp;
                  <!-- <div id="divSelvech" style="border-bottom-style: outset; text-align: center; border-right-style: outset; 
                                              background-color: #DCDCDC; width: 72px; display: inline; font-family: 'MS Reference Sans Serif';
                                              border-top-style: outset; height: 27px; font-size: 12px; vertical-align: baseline;
                                              border-left-style: outset; cursor: hand; font-weight: bold" onclick="showArea('frame_select');" ms_positioning="FlowLayout">
                    เลือกรุ่นรถ
                  </div>  -->
                                    &nbsp;
                </td>
                <td>
                  <div align="left">
                    <font class="itemDtg">ยี่ห้อ
                      <font color="#ff0000">*
                      </font>
                    </font>
                  </div>
                </td>
                <td>
                  <input name="CMFG" type="text" id="CMFG" maxlength="40" readonly="readonly">
                </td>
              </tr>
              <tr id="trNewSelVech2" valign="top" bgcolor="#f3f3f4">
                <td id="Td2" align="right" name="Td1">
                  <div align="left">
                    <font class="itemDtg">&nbsp;รุ่น
                      <font color="#ff0000">*
                      </font>
                    </font>
                  </div>
                </td>
                <td oncontextmenu="false">
                  <input name="carModel" type="text" id="carModel" maxlength="40" readonly="readonly">&nbsp;
                  <font class="itemDtg">ปี
                  </font>&nbsp;
                  <input name="carModel_Year" type="text" id="carModel_Year" style="width: 45px;" maxlength="8" size="1" readonly="readonly">
                  <span id="Rfv_txtCModel" class="txtRegex" style="color:Red;display:none;">
                  </span>
                </td>
                <td align="right">
                  <!-- <div align="left">
                    <font class="itemDtg">แบบ
                      <font color="#ff0000">*
                      </font>
                    </font>
                  </div> -->
                </td>
                <td style="height: 29px">
                  <!-- <input name="txtCVechTyp" type="text" id="txtCVechTyp" maxlength="40" style="width: 230px;" readonly="readonly">
                  <div style="border-bottom-style: outset; text-align: center; border-right-style: outset;
                              background-color: #DCDCDC; width: 40px; display: inline; font-family: 'MS Reference Sans Serif';
                              border-top-style: outset; height: 27px; font-size: 12px; vertical-align: baseline;
                              border-left-style: outset; cursor: hand; font-weight: bold" onclick="return showPic('frame_select',document.form1.hidCProjref.value)" ms_positioning="FlowLayout">
                    รูปรถ
                  </div> -->
                  <!-- <span id="Rfv_txtCVechTyp" class="txtRegex" style="color:Red;display:none;">กรุณาเลือก รุ่นรถ
                  </span> -->
                </td>
              </tr>
              <tr>
                <td colspan="4">
                  <div style="display: none" id="frame_select">
                    <iframe id="frame1" height="100" src="" width="740" name="frame1">
                    </iframe>
                  </div>
                </td>
              </tr>
              <tr bgcolor="#e6e7e8">
                <td align="right">
                  <div align="left">
                    <font class="itemDtg">&nbsp;หมายเลขตัวถัง/โมเดล
                      <font color="#ff0000">*
                      </font>
                    </font>
                  </div>
                </td>
                <td>
                  <input name="Chassino" type="text" maxlength="50" id="Chassino" class="itemDtg" style="width:130px;">/
                  <input name="ModelNo" type="text" maxlength="50" id="ModelNo" class="itemDtg" style="width:100px;">
                  <span id="Regex_txtChassino" class="txtRegex" style="color:Red;display:none;">กรุณากรอก หมายเลขตัวถัง
                  </span>
                  <span id="Rfv_txtChassino" class="txtRegex" style="color:Red;display:none;">กรุณากรอก หมายเลขตัวถัง
                  </span>
                </td>
                <td align="right">
                  <div align="left">
                    <font class="itemDtg">หมายเลขเครื่อง
                    </font>
                  </div>
                </td>
                <td>
                  <input name="EngineNo" type="text" maxlength="31" id="EngineNo" class="itemDtg">
                </td>
              </tr>
              <tr bgcolor="#f3f3f4">
                <td align="right">
                  <div align="left">
                    <font class="itemDtg">&nbsp;หมายเลข กม.
                    </font>
                  </div>
                </td>
                <td>
                  <input name="KMCarRepair" type="text" maxlength="10" id="KMCarRepair" class="itemDtg">
                  <span id="Regex_txtKM" class="txtRegex" style="color:Red;display:none;">กรุณากรอกตัวเลขเท่านั้น
                  </span>
                </td>
                <td align="right">
                  <div align="left">
                    <font class="itemDtg">สภาพรถ
                    </font>
                  </div>
                </td>
                <td>
                  <select name="CarDescId" id="CarDescId" class="itemDtg">
                    <option selected="selected" value="0">- สภาพรถ -
                    </option>
                    <option value="1">ขับเคลื่อนได้
                    </option>
                    <option value="2">ขับเคลื่อนไม่ได้
                    </option>
                  </select>
                </td>
              </tr>
              <tr bgcolor="#e6e7e8">
                <td height="27" align="right" class="style41">
                  <div align="left">
                    <font class="itemDtg">&nbsp;สีรถ
                    </font>
                  </div>
                </td>
                <td>
                  <select name="color_ID" id="color_ID" class="itemDtg" style="width:140px;">
                    <option selected="selected" value="0">- เลือกสี -
                    </option>
                    <option value="1">ขาว
                    </option>
                    <option value="2">เทา
                    </option>
                    <option value="3">เงิน
                    </option>
                    <option value="4">ทอง
                    </option>
                    <option value="5">เหลือง
                    </option>
                    <option value="6">เขียว
                    </option>
                    <option value="7">ฟ้า
                    </option>
                    <option value="8">น้ำเงิน
                    </option>
                    <option value="9">ม่วง
                    </option>
                    <option value="10">แดง
                    </option>
                    <option value="11">ส้ม
                    </option>
                    <option value="12">เลือดหมู
                    </option>
                    <option value="13">ดำ
                    </option>
                    <option value="14">ขาว / ทอง
                    </option>
                    <option value="15">เทา / เงิน
                    </option>
                    <option value="16">เหลือง / เงิน
                    </option>
                    <option value="17">เขียว / เงิน
                    </option>
                    <option value="18">น้ำเงิน / เทา
                    </option>
                    <option value="19">น้ำเงิน / เงิน
                    </option>
                    <option value="20">แดง / เทา
                    </option>
                    <option value="21">ดำ / เทา
                    </option>
                    <option value="22">น้ำตาล
                    </option>
                    <option value="23">เขียว / เทา
                    </option>
                    <option value="24">ชมพู
                    </option>
                    <option value="25">แดง/ทอง
                    </option>
                    <option value="26">เขียว / เหลือง
                    </option>
                    <option value="27">ขาวมุก
                    </option>
                    <option value="28">ขาว / เขียว / เหลือง
                    </option>
                    <option value="29">น้ำตาล / เทา
                    </option>
                    <option value="30">บรอน
                    </option>
                    <option value="31">เทา/น้ำเงิน/เหลือง
                    </option>
                    <option value="32">ฟ้า/แดง
                    </option>
                    <option value="33">ทอง / น้ำตาล
                    </option>
                    <option value="34">น้ำตาล / เขียว
                    </option>
                    <option value="35">ขาว / น้ำเงิน
                    </option>
                    <option value="36">บรอนทอง
                    </option>
                    <option value="37">ขาว / น้ำตาล
                    </option>
                    <option value="38">บรอนฟ้า
                    </option>
                    <option value="39">ครีม
                    </option>
                    <option value="40">ขาว / เหลือง / ส้ม
                    </option>
                    <option value="41">ดำ / น้ำตาล
                    </option>
                    <option value="42">น้ำเงิน / น้ำตาล
                    </option>
                    <option value="43">ขาว / เทา
                    </option>
                    <option value="44">เหลือง/ทอง
                    </option>
                    <option value="45">ม่วง/เทา
                    </option>
                    <option value="46">บรอน/ทอง
                    </option>
                    <option value="47">ขาว/ดำ
                    </option>
                    <option value="48">ขาว/แดง
                    </option>
                  </select>
                  <span id="Rfv_drpCCL_ID" class="txtRegex" style="color:Red;display:none;">
                  </span>
                </td>
                <td align="right">
                  <div align="left">
                    <font class="itemDtg">สีที่พ่น
                      <font color="#ff0000">*
                      </font>
                    </font>
                  </div>
                </td>
                <td>
                  <select name="useColorType_Id" id="useColorType_Id" class="itemDtg" style="width:80px;">
                    <option value="">- สีที่พ่น -
                    </option>
                    <option value="3">มุก
                    </option>
                    <option value="1">แห้งช้า
                    </option>
                    <option value="2">แห้งเร็ว
                    </option>
                    <option value="4">โอปอ
                    </option>
                  </select>
                  <span id="Rfv_drpCptId" class="txtRegex" style="color:Red;display:none;">กรุณาระบุ สีที่พ่น
                  </span>
                </td>
              </tr>
              <tr bgcolor="#f3f3f4">
                <td>
                  <font class="itemDtg">&nbsp;รถประกัน,รถคู่กรณี
                  </font>
                  <font color="#ff0000">*
                  </font>
                </td>
                <td>
                  <select name="CarIden" onchange="javascript:setTimeout('__doPostBack(\'DrpCarIden\',\'\')', 0)" id="CarIden" class="itemDtg" style="width:100px;">
                    <option selected="selected" value="">-ระบุ-
                    </option>
                    <option value="own">รถประกัน
                    </option>
                    <option value="opo">รถคู่กรณี
                    </option>
                  </select>
                  <font class="itemDtg">คันที่
                  </font>&nbsp;
                  <input name="CarIdenNo" type="text" maxlength="5" id="CarIdenNo" class="itemDtg" size="3">
                  <span id="Rfv_DrpCarIden" class="txtRegex" style="color:Red;display:none;">กรุณาระบุ รถประกัน หรือ รถคู่กรณี
                  </span>
                  <span id="Regex_txtCarIdenNo" class="txtRegex" style="color:Red;display:none;">
                  </span>
                  <span id="rfv_txtCarIdenNo" class="txtRegex" style="color:Red;display:none;">
                  </span>
                </td>
                <td>
                  <font class="itemDtg">ค่าเสียหายส่วนแรก
                  </font>
                </td>
                <td>
                  <table>
                    <tbody>
                      <tr>
                        <td>
                          <input name="Deduction" type="text" value="0.00" maxlength="10" id="Deduction" class="itemDtg" size="5" style="width:64px;">
                          <font class="itemDtg">บาท
                          </font>
                        </td>
                        <td>
                          <select name="DeductionSrc" id="DeductionSrc" style="width:200px;">
                            <option selected="selected" value="">-ระบุ-
                            </option>
                            <option value="ins">ประกันเรียกเก็บ - ไม่หักจากค่าซ่อม
                            </option>
                            <option value="rep">อู่เรียกเก็บ - หักจากค่าซ่อม
                            </option>
                            <option value="rno">อู่เรียกเก็บ - ไม่หักจากค่าซ่อม
                            </option>
                            <option value="ino">ไม่เรียกเก็บ
                            </option>
                          </select>
                          <span id="Rfv_DrpDeductionSrc" class="txtRegex" style="color:Red;visibility:hidden;">
                          </span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
              <tr bgcolor="#f9fbee">
                <td colspan="4">
                  &nbsp;
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
      <tr valign="top" align="center">
        <td>
          <a name="#g02">
          </a>
          <table id="tbDeatailIns" width="100%">
            <tbody>
              <tr id="Tr1" valign="top" align="center">
                <td valign="middle" width="100%" colspan="4" align="left" bgcolor="#2277D4">
                  <span id="lbisurer" class="g1" style="color:White;">:: รายละเอียดบริษัทประกัน
                  </span>&nbsp;
                </td>
              </tr>
              <tr bgcolor="#f3f3f4">
                <td align="left" class="stTd1T2">
                  <font class="itemDtg">&nbsp;บริษัทประกัน
                    <font color="#ff0000">*
                    </font>
                  </font>
                </td>
                <td align="left" class="stTd2T2">
                  <select name="InsurerId" onchange="javascript:setTimeout('__doPostBack(\'InsurerId\',\'\')', 0)" id="InsurerId" class="itemDtg" style="width:180px;">
                    <option value="822">
                    </option>
                  </select>
                </td>
                <td align="left" class="stTd3">
                  <font class="itemDtg">สาขา/ศูนย์ฯ
                    <font color="#ff0000">*
                    </font>
                  </font>
                </td>
                <td align="left" class="stTd4">
                  <select name="InsurBrId" id="InsurBrId" style="width:180px;">
                    <option value="1343">Zone 2
                    </option>
                  </select>
                </td>
              </tr>
              <tr bgcolor="#e6e7e8" align="left">
                <td>
                  <font class="itemDtg">&nbsp;หมายเลขโทรศัพท์
                  </font>
                </td>
                <td>
                  <input name="InsurBrPhone" type="text" maxlength="20" onchange="javascript:setTimeout('__doPostBack(\'InsurBrPhone\',\'\')', 0)" onkeypress="if (WebForm_TextBoxKeyHandler(event) == false) return false;" id="InsurBrPhone" class="itemDtg" style="color:Black;background-color:#E6E7E8;border-style:None;">
                </td>
                <td>
                  <div align="left">
                    <font class="itemDtg">หมายเลขแฟกซ์
                    </font>
                  </div>
                </td>
                <td class="colCtr">
                  <input name="InsurBrFax" type="text" maxlength="20" onchange="javascript:setTimeout('__doPostBack(\'txtInsurBrFax\',\'\')', 0)" onkeypress="if (WebForm_TextBoxKeyHandler(event) == false) return false;" id="InsurBrFax" class="itemDtg" style="background-color:#E6E7E8;border-style:None;">
                </td>
              </tr>
              <tr bgcolor="#f3f3f4" align="left">
                <td>
                  <font class="itemDtg">&nbsp;หมายเลขกรมธรรม์
                  </font>
                </td>
                <td>
                  <input name="accPolicyNo" type="text" maxlength="50" id="txtAccPolicyNo" class="itemDtg">
                  <span id="Regex_txtAccPolicyNo" class="txtRegex" style="color:Red;display:none;">กรุณากรอก หมายเลขกรมธรรม์ให้ถูกต้อง
                  </span>
                  <span id="Rfv_txtAccPolicyNo" class="txtRegex" style="color:Red;display:none;">กรุณากรอก หมายเลขกรมธรรม์ให้ถูกต้อง
                  </span>
                </td>
                <td>
                  <div align="left">
                    <font class="itemDtg">ประเภทกรมธรรม์
                    </font>
                  </div>
                </td>
                <td class="colCtr">
                  <select name="PolicyTypeId" id="PolicyTypeId" style="width:182px;">
                    <option selected="selected" value="0">- ประเภทกรมธรรม์ -
                    </option>
                    <option value="1">ประกันภัยชั้น 1
                    </option>
                    <option value="2">ประกันภัยชัน 2
                    </option>
                    <option value="3">ประกันภัยชัน 3
                    </option>
                    <option value="4">พรบ
                    </option>
                  </select>
                  <span id="Rfv_DrpPolicyTypeId" class="txtRegex" style="color:Red;visibility:hidden;">
                  </span>
                </td>
              </tr>
              <tr bgcolor="#e6e7e8" align="left">
                <td>
                  <div align="left">
                    <font class="itemDtg">&nbsp;เลขที่เคลม
                    </font>
                  </div>
                </td>
                <td valign="middle">
                  <table id="tbRefClaim" border="0" cellspacing="0" cellpadding="0" width="300" align="left">
                    <!-- <tbody> -->
                      <!-- <tr> -->
                        <td>
                          <input name="claimNo" type="text" maxlength="20" id="claimNo" tabindex="10" class="itemDtg" style="z-index: 0">
                        </td>
                        <td>
                          <span id="Regex_txtRefClaimNo" class="txtRegex" style="color:Red;display:none;">กรุณากรอก เลขเคลมให้ถูกต้อง
                          </span>
                          <span id="Rfv_txtRefClaimNo" class="txtRegex" style="color:Red;display:none;">
                          </span>
                        </td>
                      <!-- </tr> -->
                    <!-- </tbody> -->
                  </table>
                </td>
                <td>
                  <div align="left">
                    <font class="itemDtg">จำนวนเงินคุ้มครอง
                    </font>
                  </div>
                </td>
                <td class="colCtr">
                  <input name="AccInsuredValue" type="text" value="0" maxlength="10" id="AccInsuredValue" class="itemDtg" style="width:120px;">
                  <span id="Regex_txtAccInsuredValue" class="txtRegex" style="color:Red;display:none;">
                  </span>
                  <span id="Rfv_txtAccInsuredValue" class="txtRegex" style="color:Red;display:none;">
                  </span>
                </td>
              </tr>
              <tr bgcolor="#f3f3f4" align="left">
                <td>
                  <div align="left">
                    <font class="itemDtg">&nbsp;เลขที่แจ้งอุบัติเหตุ
                      <span id="lbr_txtAccClaimRefNo" style="color:Red;">*
                      </span>
                    </font>
                  </div>
                </td>
                <td valign="top">
                  <input name="accClaimNo" type="text" maxlength="20" id="accClaimNo" class="itemDtg">
                  <span id="Regex_txtAccClaimRefNo" class="txtRegex" style="color:Red;display:none;">กรุณากรอก เลขรับแจ้งให้ถูกต้อง เช่น 123456/123
                  </span>
                  <span id="Rfv_txtAccClaimRefNo" class="txtRegex" style="color:Red;display:none;">กรุณากรอก เลขรับแจ้งให้ถูกต้อง เช่น 123456/123
                  </span>
                </td>
                <td>
                  <div align="left">
                    <font class="itemDtg">วันที่แจ้งอุบัติเหตุ
                    </font>
                  </div>
                </td>
                <td class="colCtr">
                  <font face="Tahoma">
                  </font>
                  <input name="CallAcc_$Calendar" type="text" id="CallAcc_Calendar" maxlength="10" readonly="readonly" onblur="setCarlendarFormat('wuCalAcc_txtCalendar');">&nbsp;
                  <img src="Images/Calendar/calendar.gif" id="wuCalAcc_imgCalendar" style="BORDER-TOP-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-RIGHT-WIDTH: 0px; cursor: pointer;" name="imgCalendar" onclick="popUpCalendar(document.getElementById('wuCalAcc_txtCalendar'), document.getElementById('wuCalAcc_txtCalendar'), 78, 'dd/mm/yyyy', '');">
                  <span id="Rfv_wuCalAcc" class="txtRegex" style="color:Red;display:none;">
                  </span>
                  <input name="tmpTextbox" type="text" id="tmpTextbox" style="background-color:#F3F3F4;border-style:None;width:1px;">
                </td>
              </tr>
              <tr bgcolor="#e6e7e8">
                <td colspan="2">
                  <div align="left">
                    <font class="itemDtg">&nbsp;
                    </font>
                  </div>
                </td>
                <td>
                  <div align="left">
                    <font class="itemDtg">วันที่เกิดอุบัติเหตุ
                    </font>
                  </div>
                </td>
                <td class="colCtr">
                  <input name="CallOcc_$Calendar" type="text" id="CallOcc_Calendar" maxlength="10" readonly="readonly" onblur="setCarlendarFormat('wuCalOcc_txtCalendar');">&nbsp;
                  <img src="Images/Calendar/calendar.gif" id="wuCalOcc_imgCalendar" style="BORDER-TOP-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-RIGHT-WIDTH: 0px; cursor: pointer;" name="imgCalendar" onclick="popUpCalendar(document.getElementById('wuCalOcc_txtCalendar'), document.getElementById('wuCalOcc_txtCalendar'), 78, 'dd/mm/yyyy', '');">
                  <span id="Rfv_wuCalOcc" class="txtRegex" style="color:Red;display:none;">
                  </span>
                </td>
              </tr>
              <tr bgcolor="#f3f3f4">
                <td colspan="4">
                  &nbsp;
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
      <!-- รายละเอียดผู้เอาประกันภัย    -->
      <tr valign="top" align="left">
        <td colspan="4">
        </td>
      </tr>
      <!-- รายละเอียดผู้ขับขี่    -->
      <tr id="trinsuree8" valign="top" align="left" width="100%">
        <td>
          <a name="#g03">
          </a>
          <table id="tbDetailDriver" width="100%">
            <tbody>
              <tr id="Tr2" valign="top" align="center">
                <td valign="middle" colspan="4" bgcolor="#2277d4" align="left">
                  &nbsp;&nbsp;
                  <span id="Label4" class="g1" style="color:White;">:: รายละเอียดผู้ขับขี่
                  </span>
                </td>
              </tr>
              <tr id="Tr3" bgcolor="#f3f3f4">
                <td class="stTd1T2">
                  <font class="itemDtg">&nbsp;ชื่อผู้ขับขี่
                  </font>
                </td>
                <td class="stTd2T2">
                  <input name="DRIVER_NAME" type="text" maxlength="100" id="DRIVER_NAME" class="itemDtg" style="width:180px;">
                  <span id="Regex_txtDRIVER_NAME" class="txtRegex" style="color:Red;display:none;">
                  </span>
                  <span id="Rfv_txtDRIVER_NAME" class="txtRegex" style="color:Red;display:none;">
                  </span>
                </td>
                <td class="stTd3">
                  <font class="itemDtg">บัตรประจำตัว
                  </font>
                </td>
                <td class="stTd4">
                  <input name="DRIVER_IDCARD" type="text" maxlength="20" id="DRIVER_IDCARD" class="itemDtg" size="30" style="width:180px;">
                  <span id="Regex_txtDRIVER_IDCARD" class="txtRegex" style="color:Red;display:none;">
                  </span>
                  <span id="Rfv_txtDRIVER_IDCARD" class="txtRegex" style="color:Red;display:none;">
                  </span>
                </td>
              </tr>
              <tr id="Tr5" bgcolor="#e6e7e8">
                <td align="right">
                  <div align="left">
                    <font class="itemDtg">&nbsp;เลขที่ใบขับขี่
                    </font>
                    <font class="itemDtg">
                    </font>
                  </div>
                </td>
                <td>
                  <input name="DRIVER_PASSPORTNO" type="text" maxlength="15" id="DRIVER_PASSPORTNO" class="itemDtg" style="width:180px;">
                  <span id="Regex_txtDRIVER_PASSPORTNO" class="txtRegex" style="color:Red;display:none;">
                  </span>
                  <span id="Rfv_txtDRIVER_PASSPORTNO" class="txtRegex" style="color:Red;display:none;">
                  </span>
                </td>
                <td>
                  <div align="left">
                    <font class="itemDtg">หมายเลขโทรศัพท์
                    </font>
                  </div>
                </td>
                <td class="colCtr">
                  <input name="DRIVER_PHONE_NO" type="text" maxlength="10" id="DRIVER_PHONE_NO" class="itemDtg" size="30" style="width:180px;">
                  <span id="Regex_txtDRIVER_PHONE_NO" class="txtRegex" style="color:Red;display:none;">
                  </span>
                  <span id="Rfv_txtDRIVER_PHONE_NO" class="txtRegex" style="color:Red;display:none;">
                  </span>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
      <tr valign="top" align="center" bgcolor="#f9fbee" style="height: 20px;">
        <td>
        </td>
      </tr>
      <tr bgcolor="#f3f3f4">
        <td>
          <a name="#g04">
          </a>
          <table id="tbDetailGetcar" width="100%">
            <!-- รายละเอียด การรับส่ง-รถ    -->
            <tbody>
              <tr id="tg_r7" valign="top" align="center">
                <td valign="middle" width="100%" colspan="4" align="left" bgcolor="#2277D4">
                  &nbsp;&nbsp;
                  <span id="Label3" class="g1" style="color:#F9FBEE;">:: การรับส่ง-รถ
                  </span>&nbsp;
                </td>
              </tr>
              <tr id="tg_r1" bgcolor="#e6e7e8">
                <td class="stTd1T2">
                  <div align="left">
                    <font class="itemDtg">&nbsp;
                      <span id="Label7" class="itemDtg" style="color:Black;">วันที่ติดต่อขอเข้าซ่อม
                      </span>
                    </font>
                  </div>
                </td>
                <td class="stTd2T2">
                  <input name="contactDate$Calendar" type="text" id="contactDate" maxlength="10" readonly="readonly" value=""  onblur="setCarlendarFormat('wuCalContractDate_txtCalendar');">&nbsp;
                  <span id="Rfv_wuCalContractDate" class="txtRegex" style="color:Red;display:none;">
                  </span>
                </td>
                <td class="stTd3">
                  <div align="left">
                    <font class="itemDtg">
                      <span id="Label14" class="itemDtg" style="color:Black;">ชื่อจนท.(อู่/ศูนย์)ผู้รับรายงาน
                      </span>
                    </font>
                  </div>
                </td>
                <td class="stTd4">
                  <input name="repContactname" type="text" value="" maxlength="100" id="repContactname"  class="itemDtg" size="30">
                </td>
              </tr>
              <tr id="tg_r2" bgcolor="#f3f3f4">
                <td align="right">
                  <div align="left">
                    <font class="itemDtg">&nbsp;
                      <span id="Label8" style="color:Black;">วันที่รับรถเข้าซ่อม
                      </span>
                    </font>
                  </div>
                </td>
                <td>
                  <input name="carRepairDate" type="text" id="carRepairDate" maxlength="10" readonly="readonly" value=""  onblur="setCarlendarFormat('wuCalBringDate_txtCalendar');">&nbsp;
                  <span id="Rfv_wuCalBringDate" class="txtRegex" style="color:Red;display:none;">
                  </span>
                </td>
                <td align="right">
                  <div align="left">
                    <font class="itemDtg">
                      <span id="Label13" class="itemDtg" style="color:Black;">ชื่อจนท.(อู่/ศูนย์)ผู้รับรถ
                      </span>
                    </font>
                  </div>
                </td>
                <td>
                  <font class="itemDtg">
                    <input name="RepGetName" type="text" value="" maxlength="100" id="RepGetName"  class="itemDtg">
                    <span id="Regex_txtRepGetName" class="txtRegex" style="color:Red;display:none;">
                    </span>
                    <span id="Rfv_txtRepGetName" class="txtRegex" style="color:Red;display:none;">
                    </span>
                  </font>
                </td>
              </tr>
              <tr id="tg_r3" bgcolor="#e6e7e8">
                <td align="right">
                  <div align="left">
                    <font class="itemDtg">
                      <font face="Tahoma">&nbsp;
                      </font>
                      <span id="Label9" style="color:Black;">ชื่อผู้นำรถเข้าซ่อม
                      </span>
                    </font>
                  </div>
                </td>
                <td>
                  <font class="itemDtg">
                    <input name="clientNameCarRepair" type="text" value="" maxlength="100" id="clientNameCarRepair"  class="itemDtg" style="width:180px;">
                    <span id="Regex_txtRepBringName" class="txtRegex" style="color:Red;display:none;">
                    </span>
                    <span id="Rfv_txtRepBringName" class="txtRegex" style="color:Red;display:none;">
                    </span>
                  </font>
                </td>
                <td>
                  <span id="Label12" class="itemDtg" style="color:Black;">Job No. (อู่)
                  </span>
                </td>
                <td>
                  <input name="txtJobNo" type="text" maxlength="20" id="txtJobNo" class="itemDtg" style="width:180px;">
                </td>
              </tr>
              <tr id="tg_r4" bgcolor="#f3f3f4">
                <td align="right">
                  <div align="left">
                    <font class="itemDtg">&nbsp;
                      <span id="Label10" style="color:Black;">หมายเลขโทรศัพท์
                      </span>
                    </font>
                  </div>
                </td>
                <td>
                  <font class="itemDtg">
                    <input name="clientTelContact" type="text" value="" maxlength="50" id="clientTelContact"  class="itemDtg" style="width:180px;">&nbsp;
                    <span id="Regex_txtRepBringPhone" class="txtRegex" style="color:Red;display:none;">
                    </span>
                    <span id="Rfv_txtRepBringPhone" class="txtRegex" style="color:Red;display:none;">
                    </span>
                  </font>
                </td>
                <td id="tdRepEst1" align="right">
                  <div align="left">
                    <font class="itemDtg">
                      <span id="lbcar2rep_hope">วันที่นัดรับรถเข้าซ่อมล่วงหน้า
                      </span>
                    </font>
                  </div>
                </td>
                <td id="tdRepEst2">
                  <font class="itemDtg">
                    <p>
                      <span id="lbcar2rep_hope2" style="color:Blue;">
                      </span>
                    </p>
                  </font>
                </td>
              </tr>
              <tr id="tg_r14" bgcolor="#e6e7e8">
                <td align="left">
                  <font class="itemDtg">&nbsp;
                    <span id="Label16" style="color:Black;">หมายเลขโทรศัพท์มือถือ
                    </span>
                  </font>
                </td>
                <td>
                  <font class="itemDtg">
                    <input name="clientMobileContact" type="text" value="" maxlength="10" id="clientMobileContact"  class="itemDtg" style="width:180px;">
                    <span id="Regex_txtRepBringMobile" class="txtRegex" style="color:Red;display:none;">
                    </span>
                    <span id="Rfv_txtRepBringMobile" class="txtRegex" style="color:Red;display:none;">
                    </span>
                  </font>
                </td>
                <td align="right">
                </td>
                <td>
                  &nbsp;
                </td>
              </tr>
              <tr id="tg_r5" bgcolor="#f3f3f4">
                <td align="left">
                  <div align="left">
                    <font class="itemDtg">&nbsp;
                      <span id="Label17">วันที่อู่นัดรับรถ(ใบรับรถ)
                      </span>
                    </font>
                  </div>
                </td>
                <td>
                  <input name="hopeFinishDate_Calendar" type="text" id="hopeFinishDate_Calendar" maxlength="10" readonly="readonly" value=""  onblur="setCarlendarFormat('wuCalEstimateGetcar_txtCalendar');">&nbsp;
                  <span id="Rfv_wuCalEstimateGetcar" class="txtRegex" style="color:Red;display:none;">
                  </span>
                </td>
                <td align="right">
                  <div align="left">
                    <font class="itemDtg">
                      <span id="lbrepestimateDays">จำนวนวันที่คาดว่าจะเสร็จ
                      </span>
                      <span id="lblRed6" style="color:Red;">*
                      </span>
                    </font>
                  </div>
                </td>
                <td>
                  <input name="RepEstimateDays" type="text" value="0" maxlength="5" id="RepEstimateDays" class="itemDtg" size="30" style="width:136px;">
                  <font class="itemDtg">&nbsp;วัน
                  </font>
                  <span id="Regex_txtRepEstimateDays" class="txtRegex" style="color:Red;display:none;">กรุณากรอก จำนวนวัน ที่คาดว่าจะซ่อมเสร็จ
                  </span>
                  <span id="Rfv_txtRepEstimateDays" class="txtRegex" style="color:Red;display:none;">กรุณากรอก จำนวนวัน ที่คาดว่าจะซ่อมเสร็จ
                  </span>
                </td>
              </tr>
              <tr id="tg_r6" bgcolor="#e6e7e8">
                <td align="left">
                  <div align="left">
                    &nbsp;
                  </div>
                </td>
                <td>
                  <p align="left">
                  </p>
                </td>
                <td>
                  <div align="left">
                    <p align="left">
                      <b>
                        <font class="itemDtg" color="#999999">
                        </font>
                      </b>
                    </p>
                    <font class="itemDtg" color="#999999">
                    </font>
                  </div>
                  <font class="itemDtg" color="#999999">
                  </font>
                </td>
                <td>
                  <div align="left">
                  </div>
                </td>
              </tr>
              <tr id="trEst_Repair_Date">
                <td colspan="2" align="center">
                  <font class="itemDtg" color="#0000cc">วันที่คาดว่าจะซ่อมเสร็จ
                    <font color="#ff0000">
                      *
                    </font>
                  </font>
                  <table id="hopeFinish" class="itemDtg" cellspacing="0" cellpadding="0" title="Calendar" border="0" style="color:Black;background-color:White;border-color:#999999;border-width:1px;border-style:solid;height:150px;width:180px;border-collapse:collapse;">
                    <!-- <tbody>
                      <tr>
                        <td colspan="7" style="background-color:#999999;border-color:Black;">
                          <table class="itemDtg" cellspacing="0" border="0" style="color:Black;width:100%;border-collapse:collapse;">
                            <tbody>
                              <tr>
                                <td valign="bottom" style="width:15%;">
                                  <a href="javascript:__doPostBack('C1','V6665')" style="color:Black" title="Go to the previous month">&lt;
                                  </a>
                                </td>
                                <td align="center" style="width:70%;">May 2018
                                </td>
                                <td align="right" valign="bottom" style="width:15%;">
                                  <a href="javascript:__doPostBack('C1','V6726')" style="color:Black" title="Go to the next month">&gt;
                                  </a>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <th class="itemDtg" align="center" abbr="Sunday" scope="col" style="background-color:#CCCCCC;">S
                        </th>
                        <th class="itemDtg" align="center" abbr="Monday" scope="col" style="background-color:#CCCCCC;">M
                        </th>
                        <th class="itemDtg" align="center" abbr="Tuesday" scope="col" style="background-color:#CCCCCC;">T
                        </th>
                        <th class="itemDtg" align="center" abbr="Wednesday" scope="col" style="background-color:#CCCCCC;">W
                        </th>
                        <th class="itemDtg" align="center" abbr="Thursday" scope="col" style="background-color:#CCCCCC;">T
                        </th>
                        <th class="itemDtg" align="center" abbr="Friday" scope="col" style="background-color:#CCCCCC;">F
                        </th>
                        <th class="itemDtg" align="center" abbr="Saturday" scope="col" style="background-color:#CCCCCC;">S
                        </th>
                      </tr>
                      <tr>
                        <td align="center" style="color:Gray;background-color:#FFFFCC;width:14%;">
                          <a href="javascript:__doPostBack('C1','6693')" style="color:Gray" title="April 29">29
                          </a>
                        </td>
                        <td align="center" style="color:Gray;width:14%;">
                          <a href="javascript:__doPostBack('C1','6694')" style="color:Gray" title="April 30">30
                          </a>
                        </td>
                        <td align="center" style="color:Black;background-color:#CCCCCC;width:14%;">
                          <a href="javascript:__doPostBack('C1','6695')" style="color:Black" title="May 01">1
                          </a>
                        </td>
                        <td align="center" style="width:14%;">
                          <a href="javascript:__doPostBack('C1','6696')" style="color:Black" title="May 02">2
                          </a>
                        </td>
                        <td align="center" style="width:14%;">
                          <a href="javascript:__doPostBack('C1','6697')" style="color:Black" title="May 03">3
                          </a>
                        </td>
                        <td align="center" style="width:14%;">
                          <a href="javascript:__doPostBack('C1','6698')" style="color:Black" title="May 04">4
                          </a>
                        </td>
                        <td align="center" style="background-color:#FFFFCC;width:14%;">
                          <a href="javascript:__doPostBack('C1','6699')" style="color:Black" title="May 05">5
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td align="center" style="background-color:#FFFFCC;width:14%;">
                          <a href="javascript:__doPostBack('C1','6700')" style="color:Black" title="May 06">6
                          </a>
                        </td>
                        <td align="center" style="width:14%;">
                          <a href="javascript:__doPostBack('C1','6701')" style="color:Black" title="May 07">7
                          </a>
                        </td>
                        <td align="center" style="width:14%;">
                          <a href="javascript:__doPostBack('C1','6702')" style="color:Black" title="May 08">8
                          </a>
                        </td>
                        <td align="center" style="width:14%;">
                          <a href="javascript:__doPostBack('C1','6703')" style="color:Black" title="May 09">9
                          </a>
                        </td>
                        <td align="center" style="width:14%;">
                          <a href="javascript:__doPostBack('C1','6704')" style="color:Black" title="May 10">10
                          </a>
                        </td>
                        <td align="center" style="width:14%;">
                          <a href="javascript:__doPostBack('C1','6705')" style="color:Black" title="May 11">11
                          </a>
                        </td>
                        <td align="center" style="background-color:#FFFFCC;width:14%;">
                          <a href="javascript:__doPostBack('C1','6706')" style="color:Black" title="May 12">12
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td align="center" style="background-color:#FFFFCC;width:14%;">
                          <a href="javascript:__doPostBack('C1','6707')" style="color:Black" title="May 13">13
                          </a>
                        </td>
                        <td align="center" style="width:14%;">
                          <a href="javascript:__doPostBack('C1','6708')" style="color:Black" title="May 14">14
                          </a>
                        </td>
                        <td align="center" style="width:14%;">
                          <a href="javascript:__doPostBack('C1','6709')" style="color:Black" title="May 15">15
                          </a>
                        </td>
                        <td align="center" style="width:14%;">
                          <a href="javascript:__doPostBack('C1','6710')" style="color:Black" title="May 16">16
                          </a>
                        </td>
                        <td align="center" style="width:14%;">
                          <a href="javascript:__doPostBack('C1','6711')" style="color:Black" title="May 17">17
                          </a>
                        </td>
                        <td align="center" style="width:14%;">
                          <a href="javascript:__doPostBack('C1','6712')" style="color:Black" title="May 18">18
                          </a>
                        </td>
                        <td align="center" style="background-color:#FFFFCC;width:14%;">
                          <a href="javascript:__doPostBack('C1','6713')" style="color:Black" title="May 19">19
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td align="center" style="background-color:#FFFFCC;width:14%;">
                          <a href="javascript:__doPostBack('C1','6714')" style="color:Black" title="May 20">20
                          </a>
                        </td>
                        <td align="center" style="width:14%;">
                          <a href="javascript:__doPostBack('C1','6715')" style="color:Black" title="May 21">21
                          </a>
                        </td>
                        <td align="center" style="width:14%;">
                          <a href="javascript:__doPostBack('C1','6716')" style="color:Black" title="May 22">22
                          </a>
                        </td>
                        <td align="center" style="width:14%;">
                          <a href="javascript:__doPostBack('C1','6717')" style="color:Black" title="May 23">23
                          </a>
                        </td>
                        <td align="center" style="width:14%;">
                          <a href="javascript:__doPostBack('C1','6718')" style="color:Black" title="May 24">24
                          </a>
                        </td>
                        <td align="center" style="width:14%;">
                          <a href="javascript:__doPostBack('C1','6719')" style="color:Black" title="May 25">25
                          </a>
                        </td>
                        <td align="center" style="background-color:#FFFFCC;width:14%;">
                          <a href="javascript:__doPostBack('C1','6720')" style="color:Black" title="May 26">26
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td align="center" style="background-color:#FFFFCC;width:14%;">
                          <a href="javascript:__doPostBack('C1','6721')" style="color:Black" title="May 27">27
                          </a>
                        </td>
                        <td align="center" style="width:14%;">
                          <a href="javascript:__doPostBack('C1','6722')" style="color:Black" title="May 28">28
                          </a>
                        </td>
                        <td align="center" style="width:14%;">
                          <a href="javascript:__doPostBack('C1','6723')" style="color:Black" title="May 29">29
                          </a>
                        </td>
                        <td align="center" style="width:14%;">
                          <a href="javascript:__doPostBack('C1','6724')" style="color:Black" title="May 30">30
                          </a>
                        </td>
                        <td align="center" style="width:14%;">
                          <a href="javascript:__doPostBack('C1','6725')" style="color:Black" title="May 31">31
                          </a>
                        </td>
                        <td align="center" style="color:Gray;width:14%;">
                          <a href="javascript:__doPostBack('C1','6726')" style="color:Gray" title="June 01">1
                          </a>
                        </td>
                        <td align="center" style="color:Gray;background-color:#FFFFCC;width:14%;">
                          <a href="javascript:__doPostBack('C1','6727')" style="color:Gray" title="June 02">2
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td align="center" style="color:Gray;background-color:#FFFFCC;width:14%;">
                          <a href="javascript:__doPostBack('C1','6728')" style="color:Gray" title="June 03">3
                          </a>
                        </td>
                        <td align="center" style="color:Gray;width:14%;">
                          <a href="javascript:__doPostBack('C1','6729')" style="color:Gray" title="June 04">4
                          </a>
                        </td>
                        <td align="center" style="color:Gray;width:14%;">
                          <a href="javascript:__doPostBack('C1','6730')" style="color:Gray" title="June 05">5
                          </a>
                        </td>
                        <td align="center" style="color:Gray;width:14%;">
                          <a href="javascript:__doPostBack('C1','6731')" style="color:Gray" title="June 06">6
                          </a>
                        </td>
                        <td align="center" style="color:Gray;width:14%;">
                          <a href="javascript:__doPostBack('C1','6732')" style="color:Gray" title="June 07">7
                          </a>
                        </td>
                        <td align="center" style="color:Gray;width:14%;">
                          <a href="javascript:__doPostBack('C1','6733')" style="color:Gray" title="June 08">8
                          </a>
                        </td>
                        <td align="center" style="color:Gray;background-color:#FFFFCC;width:14%;">
                          <a href="javascript:__doPostBack('C1','6734')" style="color:Gray" title="June 09">9
                          </a>
                        </td>
                      </tr>
                    </tbody> -->
                  </table>
                  <input name="txtC1" type="text" maxlength="10" readonly="readonly" id="txtC1" style="background-color:#F3F3F4;border-style:None;width:1px;">
                  <span id="Rfv_txtC1" class="txtRegex" style="color:Red;display:none;">กรุณาระบุ วันที่คาดว่าจะซ่อมเสร็จ
                  </span>
                </td>
                <td colspan="2" align="center">
                  <font size="2">
                    <font color="#000099" face="Tahoma">
                      <u>
                        <font color="#cc0066">แก้ไข
                        </font>
                      </u>
                      <font color="#000099">วันที่คาดว่าจะซ่อมเสร็จ
                      </font>
                    </font>
                  </font>
                  <table id="hopeFinish_Fix" class="itemDtg" cellspacing="0" cellpadding="0" title="Calendar" border="0" style="color:Black;background-color:White;border-color:#999999;border-width:1px;border-style:solid;height:150px;width:180px;border-collapse:collapse;">
                    <!-- <tbody>
                      <tr>
                        <td colspan="7" style="background-color:#999999;border-color:Black;">
                          <table class="itemDtg" cellspacing="0" border="0" style="color:Black;width:100%;border-collapse:collapse;">
                            <tbody>
                              <tr>
                                <td valign="bottom" style="width:15%;">
                                  <a href="javascript:__doPostBack('C2','V6665')" style="color:Black" title="Go to the previous month">&lt;
                                  </a>
                                </td>
                                <td align="center" style="width:70%;">May 2018
                                </td>
                                <td align="right" valign="bottom" style="width:15%;">
                                  <a href="javascript:__doPostBack('C2','V6726')" style="color:Black" title="Go to the next month">&gt;
                                  </a>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <th class="itemDtg" align="center" abbr="Sunday" scope="col" style="background-color:#CCCCCC;">S
                        </th>
                        <th class="itemDtg" align="center" abbr="Monday" scope="col" style="background-color:#CCCCCC;">M
                        </th>
                        <th class="itemDtg" align="center" abbr="Tuesday" scope="col" style="background-color:#CCCCCC;">T
                        </th>
                        <th class="itemDtg" align="center" abbr="Wednesday" scope="col" style="background-color:#CCCCCC;">W
                        </th>
                        <th class="itemDtg" align="center" abbr="Thursday" scope="col" style="background-color:#CCCCCC;">T
                        </th>
                        <th class="itemDtg" align="center" abbr="Friday" scope="col" style="background-color:#CCCCCC;">F
                        </th>
                        <th class="itemDtg" align="center" abbr="Saturday" scope="col" style="background-color:#CCCCCC;">S
                        </th>
                      </tr>
                      <tr>
                        <td align="center" style="color:Gray;background-color:#FFFFCC;width:14%;">
                          <a href="javascript:__doPostBack('C2','6693')" style="color:Gray" title="April 29">29
                          </a>
                        </td>
                        <td align="center" style="color:Gray;width:14%;">
                          <a href="javascript:__doPostBack('C2','6694')" style="color:Gray" title="April 30">30
                          </a>
                        </td>
                        <td align="center" style="color:Black;background-color:#CCCCCC;width:14%;">
                          <a href="javascript:__doPostBack('C2','6695')" style="color:Black" title="May 01">1
                          </a>
                        </td>
                        <td align="center" style="width:14%;">
                          <a href="javascript:__doPostBack('C2','6696')" style="color:Black" title="May 02">2
                          </a>
                        </td>
                        <td align="center" style="width:14%;">
                          <a href="javascript:__doPostBack('C2','6697')" style="color:Black" title="May 03">3
                          </a>
                        </td>
                        <td align="center" style="width:14%;">
                          <a href="javascript:__doPostBack('C2','6698')" style="color:Black" title="May 04">4
                          </a>
                        </td>
                        <td align="center" style="background-color:#FFFFCC;width:14%;">
                          <a href="javascript:__doPostBack('C2','6699')" style="color:Black" title="May 05">5
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td align="center" style="background-color:#FFFFCC;width:14%;">
                          <a href="javascript:__doPostBack('C2','6700')" style="color:Black" title="May 06">6
                          </a>
                        </td>
                        <td align="center" style="width:14%;">
                          <a href="javascript:__doPostBack('C2','6701')" style="color:Black" title="May 07">7
                          </a>
                        </td>
                        <td align="center" style="width:14%;">
                          <a href="javascript:__doPostBack('C2','6702')" style="color:Black" title="May 08">8
                          </a>
                        </td>
                        <td align="center" style="width:14%;">
                          <a href="javascript:__doPostBack('C2','6703')" style="color:Black" title="May 09">9
                          </a>
                        </td>
                        <td align="center" style="width:14%;">
                          <a href="javascript:__doPostBack('C2','6704')" style="color:Black" title="May 10">10
                          </a>
                        </td>
                        <td align="center" style="width:14%;">
                          <a href="javascript:__doPostBack('C2','6705')" style="color:Black" title="May 11">11
                          </a>
                        </td>
                        <td align="center" style="background-color:#FFFFCC;width:14%;">
                          <a href="javascript:__doPostBack('C2','6706')" style="color:Black" title="May 12">12
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td align="center" style="background-color:#FFFFCC;width:14%;">
                          <a href="javascript:__doPostBack('C2','6707')" style="color:Black" title="May 13">13
                          </a>
                        </td>
                        <td align="center" style="width:14%;">
                          <a href="javascript:__doPostBack('C2','6708')" style="color:Black" title="May 14">14
                          </a>
                        </td>
                        <td align="center" style="width:14%;">
                          <a href="javascript:__doPostBack('C2','6709')" style="color:Black" title="May 15">15
                          </a>
                        </td>
                        <td align="center" style="width:14%;">
                          <a href="javascript:__doPostBack('C2','6710')" style="color:Black" title="May 16">16
                          </a>
                        </td>
                        <td align="center" style="width:14%;">
                          <a href="javascript:__doPostBack('C2','6711')" style="color:Black" title="May 17">17
                          </a>
                        </td>
                        <td align="center" style="width:14%;">
                          <a href="javascript:__doPostBack('C2','6712')" style="color:Black" title="May 18">18
                          </a>
                        </td>
                        <td align="center" style="background-color:#FFFFCC;width:14%;">
                          <a href="javascript:__doPostBack('C2','6713')" style="color:Black" title="May 19">19
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td align="center" style="background-color:#FFFFCC;width:14%;">
                          <a href="javascript:__doPostBack('C2','6714')" style="color:Black" title="May 20">20
                          </a>
                        </td>
                        <td align="center" style="width:14%;">
                          <a href="javascript:__doPostBack('C2','6715')" style="color:Black" title="May 21">21
                          </a>
                        </td>
                        <td align="center" style="width:14%;">
                          <a href="javascript:__doPostBack('C2','6716')" style="color:Black" title="May 22">22
                          </a>
                        </td>
                        <td align="center" style="width:14%;">
                          <a href="javascript:__doPostBack('C2','6717')" style="color:Black" title="May 23">23
                          </a>
                        </td>
                        <td align="center" style="width:14%;">
                          <a href="javascript:__doPostBack('C2','6718')" style="color:Black" title="May 24">24
                          </a>
                        </td>
                        <td align="center" style="width:14%;">
                          <a href="javascript:__doPostBack('C2','6719')" style="color:Black" title="May 25">25
                          </a>
                        </td>
                        <td align="center" style="background-color:#FFFFCC;width:14%;">
                          <a href="javascript:__doPostBack('C2','6720')" style="color:Black" title="May 26">26
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td align="center" style="background-color:#FFFFCC;width:14%;">
                          <a href="javascript:__doPostBack('C2','6721')" style="color:Black" title="May 27">27
                          </a>
                        </td>
                        <td align="center" style="width:14%;">
                          <a href="javascript:__doPostBack('C2','6722')" style="color:Black" title="May 28">28
                          </a>
                        </td>
                        <td align="center" style="width:14%;">
                          <a href="javascript:__doPostBack('C2','6723')" style="color:Black" title="May 29">29
                          </a>
                        </td>
                        <td align="center" style="width:14%;">
                          <a href="javascript:__doPostBack('C2','6724')" style="color:Black" title="May 30">30
                          </a>
                        </td>
                        <td align="center" style="width:14%;">
                          <a href="javascript:__doPostBack('C2','6725')" style="color:Black" title="May 31">31
                          </a>
                        </td>
                        <td align="center" style="color:Gray;width:14%;">
                          <a href="javascript:__doPostBack('C2','6726')" style="color:Gray" title="June 01">1
                          </a>
                        </td>
                        <td align="center" style="color:Gray;background-color:#FFFFCC;width:14%;">
                          <a href="javascript:__doPostBack('C2','6727')" style="color:Gray" title="June 02">2
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td align="center" style="color:Gray;background-color:#FFFFCC;width:14%;">
                          <a href="javascript:__doPostBack('C2','6728')" style="color:Gray" title="June 03">3
                          </a>
                        </td>
                        <td align="center" style="color:Gray;width:14%;">
                          <a href="javascript:__doPostBack('C2','6729')" style="color:Gray" title="June 04">4
                          </a>
                        </td>
                        <td align="center" style="color:Gray;width:14%;">
                          <a href="javascript:__doPostBack('C2','6730')" style="color:Gray" title="June 05">5
                          </a>
                        </td>
                        <td align="center" style="color:Gray;width:14%;">
                          <a href="javascript:__doPostBack('C2','6731')" style="color:Gray" title="June 06">6
                          </a>
                        </td>
                        <td align="center" style="color:Gray;width:14%;">
                          <a href="javascript:__doPostBack('C2','6732')" style="color:Gray" title="June 07">7
                          </a>
                        </td>
                        <td align="center" style="color:Gray;width:14%;">
                          <a href="javascript:__doPostBack('C2','6733')" style="color:Gray" title="June 08">8
                          </a>
                        </td>
                        <td align="center" style="color:Gray;background-color:#FFFFCC;width:14%;">
                          <a href="javascript:__doPostBack('C2','6734')" style="color:Gray" title="June 09">9
                          </a>
                        </td>
                      </tr>
                    </tbody> -->
                  </table>
                  <input name="txtC2" type="text" readonly="readonly" id="txtC2" disabled="disabled" style="background-color:#F3F3F4;border-style:None;width:1px;">
                  <span id="Rfv_txtC2" class="txtRegex" style="color:Red;display:none;">
                  </span>
                </td>
              </tr>
              <tr id="tg_r8" bgcolor="#e6e7e8">
                <td>
                  <div align="left">
                    <font class="itemDtg" color="#999999">&nbsp;
                      <span id="lblGetCar1" class="itemDtg">วันที่ซ่อมรถเสร็จ
                      </span>
                    </font>
                  </div>
                </td>
                <td>
                  <font color="#999999">
                    <input name="completeDate_Calendar" type="text" id="completeDate_Calendar" maxlength="10" readonly="readonly" onblur="setCarlendarFormat('wuCalFinishDate_txtCalendar');">&nbsp;
                  </font>
                </td>
                <td>
                  <div align="left">
                    <font class="itemDtg" color="#999999">
                      <span id="lblGetCar2" class="itemDtg">วันที่รับรถ
                      </span>
                    </font>
                  </div>
                </td>
                <td>
                  <input name="clientGetcardate" type="text" id="clientGetcardate" maxlength="10" readonly="readonly" onblur="setCarlendarFormat('wuCalGetcarDate_txtCalendar');">&nbsp;
                </td>
              </tr>
              <tr id="tg_r9" bgcolor="#f3f3f4">
                <td>
                  <div align="left">
                    <font class="itemDtg" color="#999999">
                      <font face="Tahoma">&nbsp;
                      </font>
                      <span id="lblGetCar3" class="itemDtg">เจ้าหน้าที่ส่งมอบรถ
                      </span>
                    </font>
                  </div>
                </td>
                <td>
                  <b>
                    <font size="2">
                      <input name="repNameGetCar" type="text" maxlength="100" id="repNameGetCar"  class="itemDtg" size="30">
                      <font color="#999999">
                      </font>
                    </font>
                  </b>
                </td>
                <td>
                  <div align="left">
                    <font class="itemDtg" color="#999999">
                      <span id="lblGetCar4" class="itemDtg">ผู้รับรถกลับ
                      </span>
                    </font>
                  </div>
                </td>
                <td>
                  <b>
                    <font size="2">
                      <input name="clientNameGetcar" type="text" maxlength="100" id="clientNameGetcar"  class="itemDtg" style="width:205px;">
                      <font color="#999999">
                      </font>
                    </font>
                  </b>
                </td>
              </tr>
              <tr id="tg_r10" bgcolor="#e6e7e8">
                <td>
                  <div align="left">
                    <font class="itemDtg" color="#999999">&nbsp;
                      <span id="lblGetCar5" class="itemDtg"> ผู้รับรถเกี่ยวข้องกับผู้เอาประกัน
                      </span>
                    </font>
                  </div>
                </td>
                <td>
                  <b>
                    <font size="2">
                      <input name="relation" type="text" maxlength="50" id="relation"  class="itemDtg" size="30">
                      <font color="#999999">
                      </font>
                    </font>
                  </b>
                </td>
                <td id="tdcar1">
                  <p align="left">
                    <font class="itemDtg" color="#999999">
                      <span id="lblGetCar6" class="itemDtg">หมายเลขบัตรประชาชน/
                      </span>
                      <br>
                      <span id="lblGetCar8" class="itemDtg">หมายเลขใบขับขี่
                      </span>
                    </font>
                  </p>
                </td>
                <td id="tdcar2">
                  <b>
                    <font class="itemDtg" color="#999999">
                      <input name="clientIDCardGetcar" type="text" maxlength="13" id="clientIDCardGetcar"  class="itemDtg">
                    </font>
                  </b>
                </td>
              </tr>
              <tr id="tg_r11" bgcolor="#f3f3f4">
                <td>
                  <div align="left">
                    <font class="itemDtg">
                      <!-- POM updated 24/11/2002-->
                      <font color="#999999">
                        <font face="Tahoma">&nbsp;
                        </font>
                        <span id="lblGetCar7" class="itemDtg">หมายเลขโทรศัพท์
                        </span>
                      </font>
                    </font>
                  </div>
                </td>
                <td>
                  <font color="#999999">
                    <input name="clientTelGetcar" type="text" maxlength="20" id="clientTelGetcar"  class="itemDtg" length="20">
                  </font>
                </td>
                <td id="tdcarpic">
                  <p align="left">
                    <font class="itemDtg" color="#999999">
                    </font>
                  </p>
                </td>
                <td>
                  <font color="#999999">
                    <font class="itemDtg">
                    </font>
                  </font>
                </td>
              </tr>
              <tr id="tg_r12" bgcolor="#e6e7e8">
                <td colspan="4">
                  <input id="hHavepart" value="1" type="hidden">
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
    </tbody>
  </table>
</td>
@stop