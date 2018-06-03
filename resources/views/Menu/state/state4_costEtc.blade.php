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
    <li ><a href="User">ข้อมูลทั่วไป</a></li>
    <li ><a href="costWork">ค่าแรง</a></li>
    <li ><a href="costItem">ค่าอะไหล่</a></li>
    <li class="active"><a href="costEtc">ค่าใช้จ่ายอื่นๆ</a></li>
    <li><a href="Picture">รูปประกอบ</a></li> 
    <li><a href="Total">สรุป</a></li>               
  </ul>
<br>

<td valign="top">
  <table class="style2">
    <tbody>
     <tr>
<td><div class="gallery2" style="position: relative; left: 0px; top: 0px; width: 1000px; height: 300px;">
  <!-- <a target="_blank" href="car2.jpg">
    <img src="car2.jpg" alt="Trolltunga Norway" width="1000" height="300"> -->
  </a></td></tr>
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
                <td style="height: 15px;">
                  <input name="hdfClaimid" type="hidden" id="hdfClaimid" value="RYD018051008">
                  <input name="hdfInsurerid" type="hidden" id="hdfInsurerid" value="822">
                  <input name="hdfurl" type="hidden" id="hdfurl">
                  <input name="hdBrowser" type="hidden" id="hdBrowser">
                </td>
              </tr>
              <tr>
                <td style="height: 40px;">
                  <table id="tbSumLabor" cellpadding="0" cellspacing="0" style="border: 1px solid #0066AA;
                                                                                width: 100%; border-bottom-color: #0066AA;">
                    
                    <tbody>
                    

                      <tr>
                        <td style="height: 10px;">
                          &nbsp;
                        </td>
                      </tr>
                      <tr>
                        <td bgcolor="#F2F2F2" align="center">
                          <table class="style5">
                            <tbody>

                              <!-- add-----------------Button----------- -->
                            </tbody>
                          </table>
                        </td>
                      </tr>
                      <tr bgcolor="#F2F2F2">
                        <td align="center">
                          <table>
                            <tbody>
                              <tr id="trPrice">
                                <td class="stytdSum1">
                                  <span id="lbRepexcVat" class="headDtg">ราคาเสนอก่อน (VAT) :
                                  </span>
                                </td>
                                <td class="stytdSum2">
                                  <span id="lbRepPriceexcVat" class="itemDtg">0.00
                                  </span>
                                  <font class="itemDtg"> บาท
                                  </font>
                                </td>
                                <td class="stytdSum3">
                                  <span id="lbInsexcVat" class="headDtg">ราคาอนุมัติก่อน (VAT) :
                                  </span>
                                </td>
                                <td class="stytdSum4">
                                  <span id="lbInsPriceexcVat" class="itemDtg">0.00
                                  </span>
                                  <font class="itemDtg"> บาท
                                  </font>
                                </td>
                                <td class="stytdSum5">
                                  &nbsp;
                                </td>
                              </tr>
                              <tr id="trDis">
                                <td class="stytdSum1">
                                  <span id="lbRepDis" class="headDtg">ส่วนลดค่าแรงเหมา :
                                  </span>
                                </td>
                                <td class="stytdSum2">
                                  <span id="lbRepPriceDis" class="itemDtg">0.00
                                  </span>
                                  <font class="itemDtg"> บาท
                                  </font>
                                </td>
                                <td class="stytdSum3">
                                  <span id="lbInsDis" class="headDtg">ส่วนลดค่าแรงเหมา :
                                  </span>
                                </td>
                                <td class="stytdSum4">
                                  <span id="lbInsPriceDis" class="itemDtg">0.00
                                  </span>
                                  <font class="itemDtg"> บาท
                                  </font>
                                </td>
                                <td class="stytdSum5">
                                  &nbsp;
                                </td>
                              </tr>
                              <tr id="trEditPrice">
                                <td class="stytdSum1">
                                  <span id="lbRepIncvat" class="headDtg">คงเหลือราคาเสนอก่อน(ก่อน VAT) :
                                  </span>
                                </td>
                                <td class="stytdSum2">
                                  <span id="lbRepPriceTotal" class="itemDtg">0.00
                                  </span>
                                  <font class="itemDtg"> บาท
                                  </font>
                                </td>
                                <td class="stytdSum3">
                                  <span id="lbInsIncvat" class="headDtg">คงเหลือราคาอนุมัติ (ก่อน VAT) :
                                  </span>
                                </td>
                                <td class="stytdSum4">
                                  <span id="lbInsPriceTotal" class="itemDtg">0.00
                                  </span>
                                  <font class="itemDtg"> บาท
                                  </font>
                                </td>
                                <td class="stytdSum5">
                                  &nbsp;
                                </td>
                              </tr>
                              <!-- <tr>
                                <td colspan="5" style="height: 20px;">
                                </td>
                              </tr>
                              <tr>
                                <td colspan="2" style="width: 50%; text-align: center;">
                                  <span id="lbRepDis0" class="headDtg" style="color:#0066CC;text-decoration:underline;">ความคิดเห็นจาก อู่
                                  </span>
                                </td>
                                <td colspan="3" style="width: 50%; text-align: center;">
                                  <span id="lbRepDis1" class="headDtg" style="color:#0066CC;text-decoration:underline;">ความคิดเห็นจาก บริษัทประกัน
                                  </span>
                                </td>
                              </tr>
                              <tr> -->
                                <!-- <td align="center" colspan="2" style="width: 50%;">
                                  <div style="overflow: auto; height: 150px; width: 430px;">
                                    <div>
                                      <table cellspacing="0" cellpadding="4" rules="cols" border="1" id="grvRep_Comment" style="color:Black;background-color:White;border-color:#DEDFDE;border-width:1px;border-style:None;width:405px;border-collapse:collapse;">
                                        <tbody>
                                          <tr class="headDtg" style="color:White;background-color:#6B696B;font-weight:bold;">
                                            <th scope="col">ลำดับ
                                            </th>
                                            <th scope="col">รายการ
                                            </th>
                                            <th scope="col">ข้อความ
                                            </th>
                                          </tr>
                                          <tr class="itemDtg" style="background-color:#F7F7DE;">
                                            <td align="center" style="width:5px;">&nbsp;
                                            </td>
                                            <td align="left" style="width:150px;">&nbsp;
                                            </td>
                                            <td align="left" style="width:250px;">&nbsp;
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </td> -->
                                <!-- <td align="center" colspan="3" style="width: 50%;">
                                  <div style="overflow: auto; height: 150px; width: 430px;">
                                    <div>
                                      <table cellspacing="0" cellpadding="4" rules="cols" border="1" id="grvIns_Comment" style="color:Black;background-color:White;border-color:#DEDFDE;border-width:1px;border-style:None;width:405px;border-collapse:collapse;">
                                        <tbody>
                                          <tr class="headDtg" style="color:White;background-color:#6B696B;font-weight:bold;">
                                            <th scope="col">ลำดับ
                                            </th>
                                            <th scope="col">รายการ
                                            </th>
                                            <th scope="col">ข้อความ
                                            </th>
                                          </tr>
                                          <tr class="itemDtg" style="background-color:#F7F7DE;">
                                            <td align="center" style="width:5px;">&nbsp;
                                            </td>
                                            <td align="left" style="width:250px;">&nbsp;
                                            </td>
                                            <td align="left" style="width:350px;">&nbsp;
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </td> -->
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
    </table>
  </td>
@stop