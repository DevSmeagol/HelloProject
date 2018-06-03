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
<br>
<form method="POST" action="/posts">
	{{csrf_field()}}
<div align="center">
<button type="submit" class="btn btn-primary " style="width: 100px text-align:center;">บันทึกข้อมูล</button>
</div>
@stop 




@section('content')
<div class="form-header">
  <h1>รายละเอียดลูกค้า
  </h1>
</div>
  <!-- body -->
  <table align="center" style="width: 1000px;">
    <tbody>
      <tr id="trDetailCar">
        <td>
          <table id="tbsubDetailCar" style="width: 100%;">
            <tbody>
              <tr style="height: 30px;">
                <td colspan="4" style="background-color: #2277d4">
                  &nbsp;
                  <span id="lbDeatilCar" class="THeader2" style="color:White;">::  รายละเอียดรถยนต์
                  </span>
                  &nbsp;
                  <input name="tmpTextbox" type="text" id="tmpTextbox" style="background-color:#2277D4;border-style:None;width:1px;">
                </td>
              </tr>
              <tr bgcolor="#f3f3f4">
                <td class="tdC1">
                  <span id="lbRepairename" class="lbText">ชื่ออู่
                  </span>
                </td>
                <td class="tdC2">
                  <input name="txtRepairename" type="text" value="ตึ๋ง เซอร์วิส" readonly="readonly" id="txtRepairename"  class="itemDtg" style="border-style:None;">
                  <!-- <input name="txtRepaireBRname" type="text" value="สำนักงานใหญ่" readonly="readonly" id="txtRepaireBRname"  class="itemDtg" style="border-style:None;"> -->
                </td>
                <td class="tdC3">
                  <span id="lbInsurername" class="lbText">บริษัทประกัน
                  </span>
                  <font class="itemDtg">
                    <span id="lbr_txtDRIVER_NAME1" style="color:Red;">*
                    </span>
                  </font>
                </td>
                <td class="tdC4">
                  <select name="ddlInsurer" onchange="javascript:setTimeout('__doPostBack(\'ddlInsurer\',\'\')', 0)" id="ddlInsurer">
                    <option selected="selected" value="0">- ประกัน -
                    </option>
                    <option value="4">สินทรัพย์ประกันภัย
                    </option>
                    <option value="15">แอลเอ็มจีประกันภัย จำกัด (มหาชน)
                    </option>
                    <option value="800">เอเชีย ประกันภัย 1950
                    </option>
                    <option value="822">เจ้าพระยาประกันภัย
                    </option>
                    <option value="1101">ไทยเศรษฐกิจประกันภัย
                    </option>
                    <option value="1468">ทูนประกันภัย บมจ.
                    </option>
                    <option value="1614">ประกันภัยไทยวิวัฒน์
                    </option>
                    <option value="1789">อินทรประกันภัย บมจ.
                    </option>
                    <option value="2417">สหมงคลประกันภัย บมจ.
                    </option>
                  </select>
                  <span id="Rfv_ddlInsurer" class="txtRegex" style="color:Red;display:none;">
                  </span>
                </td>
              </tr>
              <tr bgcolor="#e6e7e8">
                <td>
                  <span id="lbCarRegNo" class="lbText">ทะเบียนรถ
                  </span>
                  <font class="itemDtg">
                    <span id="lbr_txtDRIVER_NAME" style="color:Red;">*
                    </span>
                  </font>
                </td>
                <td>
                  <input name="txtCarRegNo" type="text" id="txtCarRegNo"  class="txtLB">
                  <span id="Regex_txtCarRegNo" class="txtRegex" style="color:Red;display:none;">
                  </span>
                  <span id="Rfv_txtCarRegNo" class="txtRegex" style="color:Red;display:none;">
                  </span>
                </td>
                <td>
                  <span id="lbCarRegProvince" class="lbText">จังหวัด
                  </span>
                  <font class="itemDtg">
                    <span id="lbr_txtDRIVER_NAME0" style="color:Red;">*
                    </span>
                  </font>
                </td>
                <td>
                  <select name="ddlCarRegProvince" id="ddlCarRegProvince" >
                    <option selected="selected" value="0">- จังหวัด -
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
                  <span id="Rfv_ddlCarRegProvince" class="txtRegex" style="color:Red;visibility:hidden;">
                  </span>
                </td>
              </tr>
              <tr bgcolor="#f3f3f4">
                <td>
                  <span id="lbCMFG" class="lbText">ยี่ห้อ
                  </span>
                  <font class="itemDtg">
                    <span id="lbr_txtDRIVER_NAME3" style="color:Red;">*
                    </span>
                  </font>
                </td>
                <td>
                  <select name="ddlCMFG" id="ddlCMFG" >
                    <option selected="selected" value="0">- ยี่ห้อ -
                    </option>
                    <option value="ALFA">ALFA
                    </option>
                    <option value="APRILIA">APRILIA
                    </option>
                    <option value="ASTONMARTIN">ASTONMARTIN
                    </option>
                    <option value="ATV">ATV
                    </option>
                    <option value="AUDI">AUDI
                    </option>
                    <option value="AUSTIN">AUSTIN
                    </option>
                    <option value="BENELLI">BENELLI
                    </option>
                    <option value="BENTLEY">BENTLEY
                    </option>
                    <option value="BENZ">BENZ
                    </option>
                    <option value="BMC">BMC
                    </option>
                    <option value="BMW">BMW
                    </option>
                    <option value="BYD">BYD
                    </option>
                    <option value="CADILLAC">CADILLAC
                    </option>
                    <option value="CAMC">CAMC
                    </option>
                    <option value="CATERPILLAR">CATERPILLAR
                    </option>
                    <option value="CHANGAN">CHANGAN
                    </option>
                    <option value="CHEETAH">CHEETAH
                    </option>
                    <option value="CHERY">CHERY
                    </option>
                    <option value="CHEVROLET">CHEVROLET
                    </option>
                    <option value="CHRYSLER">CHRYSLER
                    </option>
                    <option value="CIAGIA">CIAGIA
                    </option>
                    <option value="CITROEN">CITROEN
                    </option>
                    <option value="CLAAS">CLAAS
                    </option>
                    <option value="DAEWOO">DAEWOO
                    </option>
                    <option value="DAF">DAF
                    </option>
                    <option value="DAIHATSU">DAIHATSU
                    </option>
                    <option value="DAIMLER">DAIMLER
                    </option>
                    <option value="DATSUN">DATSUN
                    </option>
                    <option value="DAYUN">DAYUN
                    </option>
                    <option value="DENWAY">DENWAY
                    </option>
                    <option value="DEVA">DEVA
                    </option>
                    <option value="DFM">DFM
                    </option>
                    <option value="DODGE">DODGE
                    </option>
                    <option value="DONGFENG">DONGFENG
                    </option>
                    <option value="DUCATI">DUCATI
                    </option>
                    <option value="FAW">FAW
                    </option>
                    <option value="FERRARI">FERRARI
                    </option>
                    <option value="FIAT">FIAT
                    </option>
                    <option value="FORD">FORD
                    </option>
                    <option value="FOTON">FOTON
                    </option>
                    <option value="GMC">GMC
                    </option>
                    <option value="GOLDENDRAGON">GOLDENDRAGON
                    </option>
                    <option value="GPX">GPX
                    </option>
                    <option value="HARLEYDEVIDSON">HARLEYDEVIDSON
                    </option>
                    <option value="HENGTONG">HENGTONG
                    </option>
                    <option value="HIGER">HIGER
                    </option>
                    <option value="HILLMAN">HILLMAN
                    </option>
                    <option value="HINO">HINO
                    </option>
                    <option value="HITACHI">HITACHI
                    </option>
                    <option value="HOLDEN">HOLDEN
                    </option>
                    <option value="HONDA">HONDA
                    </option>
                    <option value="HUMMER">HUMMER
                    </option>
                    <option value="HUNTER">HUNTER
                    </option>
                    <option value="HYUNDAI">HYUNDAI
                    </option>
                    <option value="INTERNATIONAL">INTERNATIONAL
                    </option>
                    <option value="ISUZU">ISUZU
                    </option>
                    <option value="IVECO">IVECO
                    </option>
                    <option value="JAC">JAC
                    </option>
                    <option value="JAGUAR">JAGUAR
                    </option>
                    <option value="JCB">JCB
                    </option>
                    <option value="JEEP">JEEP
                    </option>
                    <option value="JINBEI">JINBEI
                    </option>
                    <option value="JMC">JMC
                    </option>
                    <option value="JOYLONG">JOYLONG
                    </option>
                    <option value="JRD">JRD
                    </option>
                    <option value="KARRY">KARRY
                    </option>
                    <option value="KAWASAKI">KAWASAKI
                    </option>
                    <option value="KEEWAY">KEEWAY
                    </option>
                    <option value="KIA">KIA
                    </option>
                    <option value="KINGLONG">KINGLONG
                    </option>
                    <option value="KOBELCO">KOBELCO
                    </option>
                    <option value="KOMATSU">KOMATSU
                    </option>
                    <option value="KTM">KTM
                    </option>
                    <option value="KUBOTA">KUBOTA
                    </option>
                    <option value="LAMBORGHINI">LAMBORGHINI
                    </option>
                    <option value="LANCIA">LANCIA
                    </option>
                    <option value="LANDROVER">LANDROVER
                    </option>
                    <option value="LEXUS">LEXUS
                    </option>
                    <option value="LIFAN">LIFAN
                    </option>
                    <option value="LINCOLN">LINCOLN
                    </option>
                    <option value="LONDON">LONDON
                    </option>
                    <option value="LOTUS">LOTUS
                    </option>
                    <option value="MAN">MAN
                    </option>
                    <option value="MASERATI">MASERATI
                    </option>
                    <option value="MAXUS">MAXUS
                    </option>
                    <option value="MAZDA">MAZDA
                    </option>
                    <option value="MG">MG
                    </option>
                    <option value="MIDEA">MIDEA
                    </option>
                    <option value="MINI">MINI
                    </option>
                    <option value="MITSUBISHI">MITSUBISHI
                    </option>
                    <option value="MITSUOKA">MITSUOKA
                    </option>
                    <option value="MONIKA">MONIKA
                    </option>
                    <option value="NASA">NASA
                    </option>
                    <option value="NAZA">NAZA
                    </option>
                    <option value="NICHIYU">NICHIYU
                    </option>
                    <option value="NISSAN">NISSAN
                    </option>
                    <option value="OPEL">OPEL
                    </option>
                    <option value="PERODUA">PERODUA
                    </option>
                    <option value="PEUGEOT">PEUGEOT
                    </option>
                    <option value="PIAGGIO">PIAGGIO
                    </option>
                    <option value="PLATINUM">PLATINUM
                    </option>
                    <option value="POLARSUN">POLARSUN
                    </option>
                    <option value="PONTIAC">PONTIAC
                    </option>
                    <option value="PORSCHE">PORSCHE
                    </option>
                    <option value="PROTON">PROTON
                    </option>
                    <option value="RCK">RCK
                    </option>
                    <option value="RELY">RELY
                    </option>
                    <option value="RENAULT">RENAULT
                    </option>
                    <option value="ROLLSROYCE">ROLLSROYCE
                    </option>
                    <option value="ROVER">ROVER
                    </option>
                    <option value="ROYAL ENFIELD">ROYAL ENFIELD
                    </option>
                    <option value="RYUKA">RYUKA
                    </option>
                    <option value="SAAB">SAAB
                    </option>
                    <option value="SAMMITR">SAMMITR
                    </option>
                    <option value="SANY">SANY
                    </option>
                    <option value="SCANIA">SCANIA
                    </option>
                    <option value="SEAT">SEAT
                    </option>
                    <option value="SHACMAN">SHACMAN
                    </option>
                    <option value="SINOTRUK">SINOTRUK
                    </option>
                    <option value="SKODA">SKODA
                    </option>
                    <option value="SMART">SMART
                    </option>
                    <option value="SOKON">SOKON
                    </option>
                    <option value="SSANGYONG">SSANGYONG
                    </option>
                    <option value="STALLIONS">STALLIONS
                    </option>
                    <option value="STEYR">STEYR
                    </option>
                    <option value="SUBARU">SUBARU
                    </option>
                    <option value="SUNLONG">SUNLONG
                    </option>
                    <option value="SUZUKI">SUZUKI
                    </option>
                    <option value="SYM">SYM
                    </option>
                    <option value="TADANO">TADANO
                    </option>
                    <option value="TATA">TATA
                    </option>
                    <option value="TCM">TCM
                    </option>
                    <option value="TESLA">TESLA
                    </option>
                    <option value="THAIRUNG">THAIRUNG
                    </option>
                    <option value="TIGER">TIGER
                    </option>
                    <option value="TKING">TKING
                    </option>
                    <option value="TOYOTA">TOYOTA
                    </option>
                    <option value="TRAILER">TRAILER
                    </option>
                    <option value="TRIUMPH">TRIUMPH
                    </option>
                    <option value="UDTRUCKS">UDTRUCKS
                    </option>
                    <option value="VESPA">VESPA
                    </option>
                    <option value="VMC">VMC
                    </option>
                    <option value="VOLKSWAGEN">VOLKSWAGEN
                    </option>
                    <option value="VOLVO">VOLVO
                    </option>
                    <option value="WIRTGEN">WIRTGEN
                    </option>
                    <option value="WULING">WULING
                    </option>
                    <option value="YAMAHA">YAMAHA
                    </option>
                    <option value="YUTONG">YUTONG
                    </option>
                    <option value="ZONGSHEN">ZONGSHEN
                    </option>
                  </select>
                  <span id="Rfv_ddlCMFG" class="txtRegex" style="color:Red;visibility:hidden;">
                  </span>
                </td>
                <td>
                  <span id="lbModel" class="lbText">รุ่น
                  </span>
                  <font class="itemDtg">
                    <span id="lbr_txtDRIVER_NAME2" style="color:Red;">*
                    </span>
                  </font>
                </td>
                <td>
                  <input name="txtCModel" type="text" id="txtCModel"  class="txtLB">
                  <span id="Regex_txtCModel" class="txtRegex" style="color:Red;display:none;">
                  </span>
                  <span id="Rfv_txtCModel" class="txtRegex" style="color:Red;display:none;">
                  </span>
                </td>
              </tr>
              <tr bgcolor="#e6e7e8">
                <td>
                  <span id="lbAccPolicyNo" class="lbText">หมายเลขกรมธรรม์
                  </span>
                </td>
                <td>
                  <input name="txtAccPolicyNo" type="text" id="txtAccPolicyNo"  class="txtLB">
                  <span id="Regex_txtAccPolicyNo" class="txtRegex" style="color:Red;display:none;">
                  </span>
                </td>
                <td>
                </td>
                <td>
                </td>
              </tr>
              <tr bgcolor="#f3f3f4">
                <td>
                  <span id="lbRefClaimNo" class="lbText">เลขที่เคลม
                  </span>
                </td>
                <td>
                  <input name="txtRefClaimNo" type="text" id="txtRefClaimNo"  class="txtLB">
                  <span id="Regex_txtRefClaimNo" class="txtRegex" style="color:Red;display:none;">
                  </span>
                  <span id="Rfv_txtRefClaimNo" class="txtRegex" style="color:Red;display:none;">
                  </span>
                </td>
                <td>
                  <span id="lbAccClaimNo" class="lbText">เลขที่รับแจ้ง
                  </span>
                </td>
                <td>
                  <input name="txtAccClaimNo" type="text" id="txtAccClaimNo"  class="txtLB">
                  <span id="Regex_txtAccClaimNo" class="txtRegex" style="color:Red;display:none;">
                  </span>
                </td>
              </tr>
              <tr>
                <td>
                  <span id="lbStatusCar" class="lbText">สถานะการจอดซ่อม
                  </span>
                  <font class="itemDtg">
                    <span id="lbr_txtDRIVER_NAME4" style="color:Red;">*
                    </span>
                  </font>
                </td>
                <td colspan="3">
                  <table id="rbStatusCar"  class="txtLB" border="0" style="width:435px;">
                    <tbody>
                      <tr>
                        <td>
                          <span disabled="disabled">
                            <input id="rbStatusCar_0" type="radio" name="rbStatusCar" value="2"  onclick="javascript:setTimeout('__doPostBack(\'rbStatusCar$0\',\'\')', 0)">
                            <label for="rbStatusCar_0">จอดซ่อม
                            </label>
                          </span>
                        </td>
                        <td>
                          <span disabled="disabled">
                            <input id="rbStatusCar_1" type="radio" name="rbStatusCar" value="1"  onclick="javascript:setTimeout('__doPostBack(\'rbStatusCar$1\',\'\')', 0)">
                            <label for="rbStatusCar_1">ไม่จอดซ่อม
                            </label>
                          </span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <span id="Rfv_rbStatusCar" class="txtRegex" style="color:Red;display:none;">
                  </span>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
      <tr id="trContact">
        <td>
          <table id="tbsubContact" style="width: 100%">
            <tbody>
              <tr>
                <td colspan="4" style="background-color: #2277d4">
                  &nbsp;
                  <span id="lbContract" class="THeader2" style="color:White;">:: วันที่ติดต่อซ่อม
                  </span>
                </td>
              </tr>
              <tr bgcolor="#f3f3f4">
                <td class="tdC1">
                  <span id="lbContactDate" class="lbText">วันที่ติดต่อเข้าซ่อม
                  </span>
                </td>
                <td class="tdC2">
                  <input name="txtRepContactDate" type="text" value="4/29/2018 10:39 AM" id="txtRepContactDate"  class="txtLB">
                  <span id="lbContractDate" style="color:#F3F3F4;">
                  </span>
                </td>
                <td class="tdC3">
                  &nbsp;
                </td>
                <td class="tdC4">
                  <input name="hdConfirm" type="hidden" id="hdConfirm" value="N">
                  <input name="hdStatus" type="hidden" id="hdStatus" value="0">
                </td>
              </tr>
              <tr bgcolor="#e6e7e8">
                <td>
                  <span id="lbClientNameContact" class="lbText">ชื่อผู้ติดต่อขอเข้าซ่อม
                  </span>
                  <font class="itemDtg">
                    <span id="lbr_txtDRIVER_NAME5" style="color:Red;">*
                    </span>
                  </font>
                </td>
                <td>
                  <input name="txtClientNameContact" type="text" id="txtClientNameContact"  class="txtLB" style="width:180px;">
                  <span id="Regex_txtClientNameContact" class="txtRegex" style="color:Red;display:none;">
                  </span>
                  <span id="Rfv_txtClientNameContact" class="txtRegex" style="color:Red;display:none;">
                  </span>
                </td>
                <td>
                </td>
                <td>
                </td>
              </tr>
              <tr bgcolor="#f3f3f4">
                <td>
                  <span id="lbClientTelContact" class="lbText">เบอร์โทรศัพท์
                  </span>
                  <font class="itemDtg">
                    <span id="lbr_txtDRIVER_NAME6" style="color:Red;">*
                    </span>
                  </font>
                </td>
                <td>
                  <input name="txtClientTelContact" type="text" id="txtClientTelContact"  class="txtLB">
                  <span id="Regex_txtClientTelContact" class="txtRegex" style="color:Red;display:none;">
                  </span>
                  <span id="Rfv_txtClientTelContact" class="txtRegex" style="color:Red;display:none;">
                  </span>
                </td>
                <td>
                  <span id="lbClientMobileContact" class="lbText">เบอร์โทรศัพท์มือถือ
                  </span>
                  <font class="itemDtg">
                    <span id="lbr_txtDRIVER_NAME7" style="color:Red;">*
                    </span>
                  </font>
                </td>
                <td>
                  <input name="txtClientMobileContact" type="text" id="txtClientMobileContact"  class="txtLB">
                  <span id="Regex_txtClientMobileContact" class="txtRegex" style="color:Red;display:none;">
                  </span>
                  <span id="Rfv_txtClientMobileContact" class="txtRegex" style="color:Red;display:none;">
                  </span>
                </td>
              </tr>
              <tr bgcolor="#e6e7e8">
                <td>
                  <span id="lbRepContactname" class="lbText">ชื่อเจ้าหน้าที่อู่
                  </span>
                </td>
                <td>
                  <input name="txtRepContactname" type="text" value="ศศกรณ์ ศักดากรกุล" id="txtRepContactname"  class="txtLB" style="width:180px;">
                </td>
                <td>
                  <span id="lbRepHopeContact" class="lbText">วันที่นัดรถเข้าซ่อมล่วงหน้า
                  </span>
                  <font class="itemDtg">
                  </font>
                </td>
                <td>
                  <input name="wuCalendarContact$txtCalendar" type="text" id="wuCalendarContact_txtCalendar" maxlength="10" readonly="readonly" onblur="setCarlendarFormat('wuCalendarContact_txtCalendar');">&nbsp;
                  <img src="Images/Calendar/calendar.gif" id="wuCalendarContact_imgCalendar" style="BORDER-TOP-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-RIGHT-WIDTH: 0px; cursor: pointer;" name="imgCalendar" onclick="return false;">
                  <span id="Rfv_wuCalendarContact" class="txtRegex" style="color:Red;visibility:hidden;">
                  </span>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
      <tr id="trCar2Rep">
        <td>
          <table id="tbsubCar2Rep" style="width: 1000px">
            <tbody>
              <tr>
                <td colspan="4" style="background-color: #2277d4">
                  &nbsp;
                  <span id="lbCarRepair" class="THeader2" style="color:White;">:: รายละเอียดนำรถเข้าซ่อม
                  </span>
                </td>
              </tr>
              <tr bgcolor="#f3f3f4">
                <td>
                  <span id="lbCarRepairDate" class="lbText">วันที่นำรถเข้าซ่อม
                  </span>
                </td>
                <td colspan="3">
                  <input name="txtCarRepairDate" type="text" id="txtCarRepairDate"  class="txtRegex">
                  <span id="lbCar2RepDate" style="color:#F3F3F4;">
                  </span>
                </td>
              </tr>
              <tr bgcolor="#f3f3f4">
                <td>
                  <span id="Label2" class="lbText">ชื่อเจ้าหน้าที่อู่
                  </span>
                  <font class="itemDtg">
                    <span id="Label5" style="color:Red;">*
                    </span>
                  </font>
                </td>
                <td colspan="3">
                  <input name="txtClientStaffNameCarRepair" type="text" value="ศศกรณ์ ศักดากรกุล" id="txtClientStaffNameCarRepair" class="txtLB" style="width:180px;">
                  <span id="Regex_txtClientStaffNameCarRepair" class="txtRegex" style="color:Red;display:none;">
                  </span>
                  <span id="Rfv_txtClientStaffNameCarRepair" class="txtRegex" style="color:Red;visibility:hidden;">
                  </span>
                </td>
              </tr>
              <tr bgcolor="#e6e7e8">
                <td class="tdC1">
                  <span id="lbClientNameCarRepair" class="lbText">ชื่อผู้นำรถเข้าซ่อม
                  </span>
                  <font class="itemDtg">
                    <span id="lbr_txtDRIVER_NAME9" style="color:Red;">*
                    </span>
                  </font>
                </td>
                <td class="tdC2">
                  <input name="txtClientNameCarRepair" type="text" id="txtClientNameCarRepair"  class="txtLB" style="width:180px;">
                  <span id="Regex_txtClientNameCarRepair" class="txtRegex" style="color:Red;display:none;">
                  </span>
                  <span id="Rfv_txtClientNameCarRepair" class="txtRegex" style="color:Red;visibility:hidden;">
                  </span>
                </td>
                <td class="tdC3">
                  <span id="lbClientIDCardCarRepair" class="lbText">เลขที่บัตรประชาชน
                  </span>
                  <font class="itemDtg">
                    <span id="lbr_ddlTypeRepair10" style="color:Red;">*
                    </span>
                  </font>
                </td>
                <td class="tdC4">
                  <input name="txtClientIDCardCarRepair" type="text" id="txtClientIDCardCarRepair"  class="txtLB">
                  <span id="Regex_txtClientIDCardCarRepair" class="txtRegex" style="color:Red;display:none;">
                  </span>
                  <span id="Rfv_txtClientIDCardCarRepair" class="txtRegex" style="color:Red;visibility:hidden;">
                  </span>
                </td>
              </tr>
              <tr bgcolor="#f3f3f4">
                <td>
                  <span id="lbClientTelCarRepair" class="lbText">เบอร์โทรศัพท์
                  </span>
                  <font class="itemDtg">
                    <span id="lbr_txtDRIVER_NAME10" style="color:Red;">*
                    </span>
                  </font>
                </td>
                <td>
                  <input name="txtClientTelCarRepair" type="text" id="txtClientTelCarRepair"  class="txtLB">
                  <span id="Regex_txtClientTelCarRepair" class="txtRegex" style="color:Red;display:none;">
                  </span>
                  <span id="Rfv_txtClientTelCarRepair" class="txtRegex" style="color:Red;visibility:hidden;">
                  </span>
                </td>
                <td>
                  <span id="lbClientMobileCarRepair" class="lbText">เบอร์โทรศัพท์มือถือ
                  </span>
                  <font class="itemDtg">
                    <span id="lbr_ddlTypeRepair13" style="color:Red;">*
                    </span>
                  </font>
                </td>
                <td>
                  <input name="txtClientMobileCarRepair" type="text" id="txtClientMobileCarRepair"  class="txtLB">
                  <span id="Regex_txtClientMobileCarRepair" class="txtRegex" style="color:Red;display:none;">
                  </span>
                  <span id="Rfv_txtClientMobileCarRepair" class="txtRegex" style="color:Red;visibility:hidden;">
                  </span>
                </td>
              </tr>
              <tr bgcolor="#e6e7e8">
                <td valign="top">
                  <span id="lbClientAddressCarRepair" class="lbText">สถานที่ติดต่อ
                  </span>
                  <font class="itemDtg">
                    <span id="lbr_txtDRIVER_NAME11" style="color:Red;">*
                    </span>
                  </font>
                </td>
                <td colspan="3">
                  <textarea name="txtClientAddressCarRepair" rows="2" cols="20" id="txtClientAddressCarRepair"  style="height:60px;width:250px;">
                  </textarea>
                  <span id="Regex_txtClientAddressCarRepair" class="txtRegex" style="color:Red;display:none;">
                  </span>
                  <span id="Rfv_txtClientAddressCarRepair" class="txtRegex" style="color:Red;visibility:hidden;">
                  </span>
                </td>
              </tr>
              <tr bgcolor="#f3f3f4">
                <td>
                  <span id="lbKMCarRepair" class="lbText">หมายเลข กม.
                  </span>
                  <font class="itemDtg">
                    <span id="lbr_txtDRIVER_NAME12" style="color:Red;">*
                    </span>
                  </font>
                </td>
                <td>
                  <input name="txtKMCarRepair" type="text" id="txtKMCarRepair"  class="txtLB">
                  <span id="Regex_txtKMCarRepair" class="txtRegex" style="color:Red;display:none;">
                  </span>
                  <span id="Rfv_txtKMCarRepair" class="txtRegex" style="color:Red;display:none;">
                  </span>
                </td>
                <td>
                  <span id="lbOilCarRepair" class="lbText">ระดับเชื้อเพลิง
                  </span>
                  <font class="itemDtg">
                    <span id="lbr_ddlTypeRepair12" style="color:Red;">*
                    </span>
                  </font>
                </td>
                <td>
                  <table id="rbOil"  class="lbText" border="0">
                    <tbody>
                      <tr>
                        <td>
                          <span >
                            <input id="rbOil_0" type="radio" name="rbOil" value="0" >
                            <label for="rbOil_0">E
                            </label>
                          </span>
                        </td>
                        <td>
                          <span >
                            <input id="rbOil_1" type="radio" name="rbOil" value="1"
                            <label for="rbOil_1">1/4
                            </label>
                          </span>
                        </td>
                        <td>
                          <span >
                            <input id="rbOil_2" type="radio" name="rbOil" value="2" >
                            <label for="rbOil_2">1/2
                            </label>
                          </span>
                        </td>
                        <td>
                          <span >
                            <input id="rbOil_3" type="radio" name="rbOil" value="3" >
                            <label for="rbOil_3">3/4
                            </label>
                          </span>
                        </td>
                        <td>
                          <span >
                            <input id="rbOil_4" type="radio" name="rbOil" value="4" >
                            <label for="rbOil_4">F
                            </label>
                          </span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <span id="Rfv_rbOil" class="txtRegex" style="color:Red;display:none;">
                  </span>
                </td>
              </tr>
              <tr bgcolor="#e6e7e8">
                <td>
                  <span id="lbItemCarRepair" class="lbText">อุปกรณ์ภายในรถ
                  </span>
                  <font class="itemDtg">
                    <span id="lbr_txtDRIVER_NAME13" style="color:Red;">*
                    </span>
                  </font>
                </td>
                <td colspan="3">
                  <table id="cblItemCarRepair"  class="lbText" border="0" style="width:250px;">
                    <tbody>
                      <tr>
                        <td>
                          <span >
                            <input id="cblItemCarRepair_0" type="checkbox" name="cblItemCarRepair$0" >
                            <label for="cblItemCarRepair_0">แม่แรง
                            </label>
                          </span>
                        </td>
                        <td>
                          <span >
                            <input id="cblItemCarRepair_2" type="checkbox" name="cblItemCarRepair$2" >
                            <label for="cblItemCarRepair_2">ฝาครอบล้อ
                            </label>
                          </span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span >
                            <input id="cblItemCarRepair_1" type="checkbox" name="cblItemCarRepair$1" >
                            <label for="cblItemCarRepair_1">แผ่นรองปูพื้น
                            </label>
                          </span>
                        </td>
                        <td>
                          <span >
                            <input id="cblItemCarRepair_3" type="checkbox" name="cblItemCarRepair$3" >
                            <label for="cblItemCarRepair_3">ยางอะไหล่
                            </label>
                          </span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <span id="Cv_cblItemCarRepair" class="txtRegex" style="color:Red;display:none;">
                  </span>
                </td>
              </tr>
              <tr bgcolor="#f3f3f4">
                <td>
                </td>
                <td>
                  <span class="lbText" >
                    <input id="cbRadio" type="checkbox" name="cbRadio" >
                    <label for="cbRadio">เครื่องเสียง
                    </label>
                  </span>
                </td>
                <td colspan="2">
                  <input name="txtRadioDesc" type="text" id="txtRadioDesc"  class="txtLB">
                </td>
              </tr>
              <tr bgcolor="#e6e7e8">
                <td>
                </td>
                <td>
                  <span class="lbText" >
                    <input id="cbOther" type="checkbox" name="cbOther" >
                    <label for="cbOther">อื่นๆ(ระบุ)
                    </label>
                  </span>
                </td>
                <td colspan="2">
                  <input name="txtOtherDesc" type="text" id="txtOtherDesc"  class="txtLB">
                </td>
              </tr>
              <tr bgcolor="#f3f3f4">
                <td>
                  <span id="lbLossOther" class="lbText">ความเสียหายอื่นๆ
                    <br>
                    (ไม่รวมอยู่ในรายการซ่อม)
                  </span>
                </td>
                <td colspan="3">
                  <textarea name="txtLossOther" rows="2" cols="20" id="txtLossOther"  style="height:60px;width:250px;">
                  </textarea>
                </td>
              </tr>
              <tr bgcolor="#e6e7e8">
                <td>
                  <span id="lbHopeFinishDate" class="lbText">วันที่นัดรับรถ
                  </span>
                  <font class="itemDtg">
                  </font>
                </td>
                <td>
                  <input name="wuCalendarHopeFinishDate$txtCalendar" type="text" id="wuCalendarHopeFinishDate_txtCalendar" maxlength="10" readonly="readonly" onblur="setCarlendarFormat('wuCalendarHopeFinishDate_txtCalendar');">&nbsp;
                  <img src="Images/Calendar/calendar.gif" id="wuCalendarHopeFinishDate_imgCalendar" style="BORDER-TOP-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-RIGHT-WIDTH: 0px; cursor: pointer;" name="imgCalendar" onclick="return false;">
                </td>
                <td>
                  <span id="lbHopeFinishTime" class="lbText">เวลา
                  </span>
                </td>
                <td>
                  <select name="ddlHopeFinishTime" id="ddlHopeFinishTime"  style="width:80px;">
                    <option selected="selected" value="0">-เวลา-
                    </option>
                    <option value="0:00">0:00
                    </option>
                    <option value="0:30">0:30
                    </option>
                    <option value="1:00">1:00
                    </option>
                    <option value="1:30">1:30
                    </option>
                    <option value="2:00">2:00
                    </option>
                    <option value="2:30">2:30
                    </option>
                    <option value="3:00">3:00
                    </option>
                    <option value="3:30">3:30
                    </option>
                    <option value="4:00">4:00
                    </option>
                    <option value="4:30">4:30
                    </option>
                    <option value="5:00">5:00
                    </option>
                    <option value="5:30">5:30
                    </option>
                    <option value="6:00">6:00
                    </option>
                    <option value="6:30">6:30
                    </option>
                    <option value="7:00">7:00
                    </option>
                    <option value="7:30">7:30
                    </option>
                    <option value="8:00">8:00
                    </option>
                    <option value="8:30">8:30
                    </option>
                    <option value="9:00">9:00
                    </option>
                    <option value="9:30">9:30
                    </option>
                    <option value="10:00">10:00
                    </option>
                    <option value="10:30">10:30
                    </option>
                    <option value="11:00">11:00
                    </option>
                    <option value="11:30">11:30
                    </option>
                    <option value="12:00">12:00
                    </option>
                    <option value="12:30">12:30
                    </option>
                    <option value="13:00">13:00
                    </option>
                    <option value="13:30">13:30
                    </option>
                    <option value="14:00">14:00
                    </option>
                    <option value="14:30">14:30
                    </option>
                    <option value="15:00">15:00
                    </option>
                    <option value="15:30">15:30
                    </option>
                    <option value="16:00">16:00
                    </option>
                    <option value="16:30">16:30
                    </option>
                    <option value="17:00">17:00
                    </option>
                    <option value="17:30">17:30
                    </option>
                    <option value="18:00">18:00
                    </option>
                    <option value="18:30">18:30
                    </option>
                    <option value="19:00">19:00
                    </option>
                    <option value="19:30">19:30
                    </option>
                    <option value="20:00">20:00
                    </option>
                    <option value="20:30">20:30
                    </option>
                    <option value="21:00">21:00
                    </option>
                    <option value="21:30">21:30
                    </option>
                    <option value="22:00">22:00
                    </option>
                    <option value="22:30">22:30
                    </option>
                    <option value="23:00">23:00
                    </option>
                    <option value="23:30">23:30
                    </option>
                    <option value="23:59">23:59
                    </option>
                  </select>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <span class="headDtgs">
                    <input id="cbHopeCompleteLate" type="checkbox" name="cbHopeCompleteLate">
                    <label for="cbHopeCompleteLate">แจ้งให้ทราบภายหลัง
                    </label>
                  </span>
                </td>
              </tr>
              <tr style="height: 0px; text-align: left; border: 0px;" bgcolor="#f3f3f4">
                <td>
                  &nbsp;
                </td>
                <td>
                  <span id="Label26" style="color:Red;font-family:tahoma;font-size:9.5pt;">กรณีเลื่อนนัด กรุณาแจ้งลูกค้าล่วงหน้า 24 ชม.
                  </span>
                </td>
                <td>
                  &nbsp;
                </td>
                <td>
                  &nbsp;
                </td>
              </tr>
              <tr style="height:0px; text-align:center; border:0px;">
                <td colspan="4">
                  <span id="Rfv_wuCalendarHopeFinishDate" class="txtRegex" style="color:Red;visibility:hidden;">
                  </span>
                  <span id="Cv_ValidateHopeFinishDate" class="txtRegex" style="color:Red;display:none;">
                  </span>
                  <span id="Rfv_ddlHopeFinishTime" class="txtRegex" style="color:Red;display:none;">
                  </span>
                </td>
              </tr>
              <tr id="trEstimatrlabor" bgcolor="#e6e7e8">
                <td>
                  <span id="lbEstimateLabor" class="lbText">ประมาณค่าแรงซ่อม
                  </span>
                  <font class="itemDtg">
                    <span id="lbr_txtEstimateLabor" style="color:Red;">*
                    </span>
                  </font>
                </td>
                <td>
                  <input name="txtEstimateLabor" type="text" id="txtEstimateLabor"  class="txtLB">
                  <span id="Regex_txtEstimateLabor" class="txtRegex" style="color:Red;display:none;">
                  </span>
                  <span id="Rfv_txtEstimateLabor" class="txtRegex" style="color:Red;display:none;">
                  </span>
                </td>
                <td>
                  <span id="lbTypeRepair" class="lbText">ประเภทงานซ่อม
                  </span>
                  <font class="itemDtg">
                    <span id="lbr_ddlTypeRepair" style="color:Red;">*
                    </span>
                  </font>
                </td>
                <td>
                  <select name="ddlTypeRepair" id="ddlTypeRepair"  style="width:80px;">
                    <option selected="selected" value="">-ประเภท-
                    </option>
                    <option value="Q1">Q1
                    </option>
                    <option value="Q2">Q2
                    </option>
                    <option value="M1">M1
                    </option>
                    <option value="M2">M2
                    </option>
                    <option value="H1">H1
                    </option>
                    <option value="H2">H2
                    </option>
                    <option value="H3">H3
                    </option>
                  </select>
                  <span id="Rfv_ddlTypeRepair" class="txtRegex" style="color:Red;display:none;">
                  </span>
                </td>
              </tr>
              <tr id="trChkPart" bgcolor="#f3f3f4">
                <td>
                  <span id="lbPart" class="lbText">รายการอะไหล่
                  </span>
                  <font class="itemDtg">
                    <span id="lbr_rbPart" style="color:Red;">*
                    </span>
                  </font>
                </td>
                <td colspan="3">
                  <table id="rbPart"  class="lbText" border="0">
                    <tbody>
                      <tr>
                        <td>
                          <span >
                            <input id="rbPart_0" type="radio" name="rbPart" value="Y" >
                            <label for="rbPart_0">มี
                            </label>
                          </span>
                        </td>
                        <td>
                          <span >
                            <input id="rbPart_1" type="radio" name="rbPart" value="N" >
                            <label for="rbPart_1">ไม่มี
                            </label>
                          </span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <span id="Rfv_rbPart" class="txtRegex" style="color:Red;display:none;">
                  </span>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
      <tr id="trCarRepair">
        <td>
          <table style="width: 1000px">
            <tbody>
              <tr style="background-color: #2277d4;">
                <td colspan="4">
                  &nbsp;
                  <span id="lbRepairComplete" class="THeader2" style="color:White;">:: รายละเอียดการซ่อมรถยนต์
                  </span>
                </td>
              </tr>
              <tr bgcolor="#f3f3f4">
                <td class="tdC1">
                  <span id="lbCompleteDate" class="lbText">วันที่ซ่อมรถเสร็จ
                  </span>
                  <font class="itemDtg">
                    <span id="lbr_wuCalendarCompleteDate" style="color:Red;">*
                    </span>
                  </font>
                </td>
                <td class="tdC2">
                  <input name="wuCalendarCompleteDate$txtCalendar" type="text" id="wuCalendarCompleteDate_txtCalendar" maxlength="10" readonly="readonly" onblur="setCarlendarFormat('wuCalendarCompleteDate_txtCalendar');">&nbsp;
                  <img src="Images/Calendar/calendar.gif" id="wuCalendarCompleteDate_imgCalendar" style="BORDER-TOP-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-RIGHT-WIDTH: 0px; cursor: pointer;" name="imgCalendar" onclick="return false;">
                  <span id="Rfv_wuCalendarCompleteDate" class="txtRegex" style="color:Red;display:none;">
                  </span>
                </td>
                <td class="tdC3">
                </td>
                <td class="tdC4">
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
      <tr id="trRepairFinish">
        <td>
          <table style="width: 1000px">
            <tbody>
              <tr>
                <td colspan="4" style="background-color: #2277d4">
                  &nbsp;
                  <span id="lbGetcar" class="THeader2" style="color:White;">:: รายละเอียดการส่งมอบรถ
                  </span>
                </td>
              </tr>
              <tr bgcolor="#f3f3f4">
                <td>
                  <span id="lbClientGetcardate" class="lbText">วันที่ลูกค้ามารับรถ
                  </span>
                </td>
                <td colspan="3">
                  <input name="txtClientGetcardate" type="text" id="txtClientGetcardate"  class="txtRegex">
                </td>
              </tr>
              <tr bgcolor="#e6e7e8">
                <td class="tdC1">
                  <span id="lbClientNameGetcar" class="lbText">ชื่อผู้มารับรถ
                  </span>
                  <font class="itemDtg">
                    <span id="lbr_ddlTypeRepair1" style="color:Red;">*
                    </span>
                  </font>
                </td>
                <td class="tdC2">
                  <input name="txtClientNameGetcar" type="text" id="txtClientNameGetcar"  class="txtLB" style="width:180px;">
                  <span id="Regex_txtClientNameGetcar" class="txtRegex" style="color:Red;display:none;">
                  </span>
                  <span id="Rfv_txtClientNameGetcar" class="txtRegex" style="color:Red;visibility:hidden;">
                  </span>
                </td>
                <td class="tdC3">
                  <span id="lbClientIDCardGetcar" class="lbText">เลขที่บัตรประชาชน
                  </span>
                  <font class="itemDtg">
                    <span id="lbr_ddlTypeRepair9" style="color:Red;">*
                    </span>
                  </font>
                </td>
                <td class="tdC4">
                  <input name="txtClientIDCardGetcar" type="text" id="txtClientIDCardGetcar"  class="txtLB">
                  <span id="Regex_txtClientIDCardGetcar" class="txtRegex" style="color:Red;display:none;">
                  </span>
                  <span id="Rfv_txtClientIDCardGetcar" class="txtRegex" style="color:Red;visibility:hidden;">
                  </span>
                </td>
              </tr>
              <tr bgcolor="#f3f3f4">
                <td>
                  <span id="lbClientTelGetcar" class="lbText">เบอร์โทรศัพท์
                  </span>
                  <font class="itemDtg">
                    <span id="lbr_ddlTypeRepair2" style="color:Red;">*
                    </span>
                  </font>
                </td>
                <td>
                  <input name="txtClientTelGetcar" type="text" id="txtClientTelGetcar"  class="txtLB">
                  <span id="Regex_txtClientTelGetcar" class="txtRegex" style="color:Red;display:none;">
                  </span>
                  <span id="Rfv_txtClientTelGetcar" class="txtRegex" style="color:Red;visibility:hidden;">
                  </span>
                </td>
                <td>
                  <span id="lbClientMobileGetcar" class="lbText">เบอร์โทรศัพท์มือถือ
                  </span>
                  <font class="itemDtg">
                    <span id="lbr_ddlTypeRepair8" style="color:Red;">*
                    </span>
                  </font>
                </td>
                <td>
                  <input name="txtClientMobileGetcar" type="text" id="txtClientMobileGetcar"  class="txtLB">
                  <span id="Regex_txtClientMobileGetcar" class="txtRegex" style="color:Red;display:none;">
                  </span>
                  <span id="Rfv_txtClientMobileGetcar" class="txtRegex" style="color:Red;visibility:hidden;">
                  </span>
                </td>
              </tr>
              <tr bgcolor="#e6e7e8">
                <td>
                  <span id="lbKMGetcar" class="lbText">หมายเลข กม.
                  </span>
                  <font class="itemDtg">
                    <span id="lbr_ddlTypeRepair3" style="color:Red;">*
                    </span>
                  </font>
                </td>
                <td>
                  <input name="txtKMGetcar" type="text" id="txtKMGetcar"  class="txtLB">
                  <span id="Regex_txtKMGetcar" class="txtRegex" style="color:Red;display:none;">
                  </span>
                  <span id="Rfv_txtKMGetcar" class="txtRegex" style="color:Red;visibility:hidden;">
                  </span>
                </td>
                <td>
                  <span id="lbLINEGetcar" class="lbText">Line <!-- สำหรับส่งสถานะขั้นตอนการทำงาน --> 
                  </span>
                </td>
                <td>
                  <input name="txtLINEGetcar" type="text" id="txtLINEGetcar"  class="txtLB">
                  <span id="Regex_txtLINEGetcar" class="txtRegex" style="color:Red;display:none;">
                  </span>
                  <span id="Rfv_txtLINEGetcar" class="txtRegex" style="color:Red;visibility:hidden;">
                  </span>
                </td>
              </tr>
              <tr bgcolor="#f3f3f4">
                <td>
                  <span id="lbRelation" class="lbText">เกี่ยวข้องกับผู้เอาประกัน
                  </span>
                  <font class="itemDtg">
                    <span id="lbr_ddlTypeRepair4" style="color:Red;">*
                    </span>
                  </font>
                </td>
                <td>
                  <input name="txtRelation" type="text" id="txtRelation"  class="txtLB">
                  <span id="Regex_txtRelation" class="txtRegex" style="color:Red;display:none;">
                  </span>
                  <span id="Rfv_txtRelation" class="txtRegex" style="color:Red;visibility:hidden;">
                  </span>
                </td>
                <td class="tdC1">
                  <span id="lbRepNameGetCar" class="lbText">ชื่อเจ้าหน้าที่ส่งมอบรถ
                  </span>
                  <font class="itemDtg">
                    <span id="Label3" style="color:Red;">*
                    </span>
                  </font>
                </td>
                <td class="tdC2">
                  <input name="txtRepNameGetCar" type="text" id="txtRepNameGetCar"  class="txtLB" style="width:180px;">
                  <span id="Regex_txtRepNameGetCar" class="txtRegex" style="color:Red;display:none;">
                  </span>
                  <span id="Rfv_txtRepNameGetCar" class="txtRegex" style="color:Red;visibility:hidden;">
                  </span>
                </td>
              </tr>
              <tr bgcolor="#e6e7e8">
                <td>
                  <span id="lbCommentGetcar" class="lbText">ผลการซ่อมรถ
                  </span>
                  <font class="itemDtg">
                    <span id="lbr_ddlTypeRepair5" style="color:Red;">*
                    </span>
                  </font>
                </td>
                <td>
                  <table id="rbCommentGetcar"  class="lbText" border="0">
                    <tbody>
                      <tr>
                        <td>
                          <span >
                            <input id="rbCommentGetcar_0" type="radio" name="rbCommentGetcar" value="0" >
                            <label for="rbCommentGetcar_0">สภาพรถเรียบร้อย
                            </label>
                          </span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span >
                            <input id="rbCommentGetcar_1" type="radio" name="rbCommentGetcar" value="1" >
                            <label for="rbCommentGetcar_1">รถซ่อมไม่เรียบร้อยพบปัญหา
                            </label>
                          </span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <span id="Rfv_rbCommentGetcar" class="txtRegex" style="color:Red;display:none;">
                  </span>
                </td>
                <td colspan="2">
                  <textarea name="txtCommentGetcar" rows="2" cols="20" id="txtCommentGetcar"  style="height:60px;width:250px;">
                  </textarea>
                </td>
              </tr>
              <tr bgcolor="#f3f3f4">
                <td>
                  <span id="lbItemGetcar" class="lbText">อุปกรณ์ / ทรัยพ์สินภายในรถ
                  </span>
                  <font class="itemDtg">
                    <span id="lbr_ddlTypeRepair6" style="color:Red;">*
                    </span>
                  </font>
                </td>
                <td>
                  <table id="rbItemGetcar"  class="lbText" border="0">
                    <tbody>
                      <tr>
                        <td>
                          <span >
                            <input id="rbItemGetcar_0" type="radio" name="rbItemGetcar" value="0" >
                            <label for="rbItemGetcar_0">ครบ
                            </label>
                          </span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span >
                            <input id="rbItemGetcar_1" type="radio" name="rbItemGetcar" value="1" >
                            <label for="rbItemGetcar_1">ไม่ครบ
                            </label>
                          </span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <span id="Rfv_rbItemGetcar" class="txtRegex" style="color:Red;display:none;">
                  </span>
                </td>
                <td colspan="2">
                  <textarea name="txtItemGetcar" rows="2" cols="20" id="txtItemGetcar" style="height:60px;width:250px;">
                  </textarea>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
      <tr>
        <td>
          &nbsp;
        </td>
      </tr>
    </tbody>
  </table>
  </td>

<script type="text/javascript">
  //<![CDATA[
  var Page_Validators =  new Array(document.getElementById("Rfv_ddlInsurer"), document.getElementById("Regex_txtCarRegNo"), document.getElementById("Rfv_txtCarRegNo"), document.getElementById("Rfv_ddlCarRegProvince"), document.getElementById("Rfv_ddlCMFG"), document.getElementById("Regex_txtCModel"), document.getElementById("Rfv_txtCModel"), document.getElementById("Regex_txtAccPolicyNo"), document.getElementById("Regex_txtRefClaimNo"), document.getElementById("Rfv_txtRefClaimNo"), document.getElementById("Regex_txtAccClaimNo"), document.getElementById("Rfv_rbStatusCar"), document.getElementById("Regex_txtClientNameContact"), document.getElementById("Rfv_txtClientNameContact"), document.getElementById("Regex_txtClientTelContact"), document.getElementById("Rfv_txtClientTelContact"), document.getElementById("Regex_txtClientMobileContact"), document.getElementById("Rfv_txtClientMobileContact"), document.getElementById("Rfv_wuCalendarContact"), document.getElementById("Regex_txtClientStaffNameCarRepair"), document.getElementById("Rfv_txtClientStaffNameCarRepair"), document.getElementById("Regex_txtClientNameCarRepair"), document.getElementById("Rfv_txtClientNameCarRepair"), document.getElementById("Regex_txtClientIDCardCarRepair"), document.getElementById("Rfv_txtClientIDCardCarRepair"), document.getElementById("Regex_txtClientTelCarRepair"), document.getElementById("Rfv_txtClientTelCarRepair"), document.getElementById("Regex_txtClientMobileCarRepair"), document.getElementById("Rfv_txtClientMobileCarRepair"), document.getElementById("Regex_txtClientAddressCarRepair"), document.getElementById("Rfv_txtClientAddressCarRepair"), document.getElementById("Regex_txtKMCarRepair"), document.getElementById("Rfv_txtKMCarRepair"), document.getElementById("Rfv_rbOil"), document.getElementById("Cv_cblItemCarRepair"), document.getElementById("Rfv_wuCalendarHopeFinishDate"), document.getElementById("Cv_ValidateHopeFinishDate"), document.getElementById("Rfv_ddlHopeFinishTime"), document.getElementById("Regex_txtEstimateLabor"), document.getElementById("Rfv_txtEstimateLabor"), document.getElementById("Rfv_ddlTypeRepair"), document.getElementById("Rfv_rbPart"), document.getElementById("Rfv_wuCalendarCompleteDate"), document.getElementById("Regex_txtClientNameGetcar"), document.getElementById("Rfv_txtClientNameGetcar"), document.getElementById("Regex_txtClientIDCardGetcar"), document.getElementById("Rfv_txtClientIDCardGetcar"), document.getElementById("Regex_txtClientTelGetcar"), document.getElementById("Rfv_txtClientTelGetcar"), document.getElementById("Regex_txtClientMobileGetcar"), document.getElementById("Rfv_txtClientMobileGetcar"), document.getElementById("Regex_txtKMGetcar"), document.getElementById("Rfv_txtKMGetcar"), document.getElementById("Regex_txtSMSGetcar"), document.getElementById("Rfv_txtSMSGetcar"), document.getElementById("Regex_txtRelation"), document.getElementById("Rfv_txtRelation"), document.getElementById("Regex_txtRepNameGetCar"), document.getElementById("Rfv_txtRepNameGetCar"), document.getElementById("Rfv_rbCommentGetcar"), document.getElementById("Rfv_rbItemGetcar"));
  //]]>
</script>
<script type="text/javascript">
  //<![CDATA[
  var Rfv_ddlInsurer = document.all ? document.all["Rfv_ddlInsurer"] : document.getElementById("Rfv_ddlInsurer");
  Rfv_ddlInsurer.controltovalidate = "ddlInsurer";
  Rfv_ddlInsurer.focusOnError = "t";
  Rfv_ddlInsurer.display = "Dynamic";
  Rfv_ddlInsurer.validationGroup = "v1";
  Rfv_ddlInsurer.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
  Rfv_ddlInsurer.initialvalue = "";
  var Regex_txtCarRegNo = document.all ? document.all["Regex_txtCarRegNo"] : document.getElementById("Regex_txtCarRegNo");
  Regex_txtCarRegNo.controltovalidate = "txtCarRegNo";
  Regex_txtCarRegNo.focusOnError = "t";
  Regex_txtCarRegNo.display = "Dynamic";
  Regex_txtCarRegNo.validationGroup = "v1";
  Regex_txtCarRegNo.evaluationfunction = "RegularExpressionValidatorEvaluateIsValid";
  var Rfv_txtCarRegNo = document.all ? document.all["Rfv_txtCarRegNo"] : document.getElementById("Rfv_txtCarRegNo");
  Rfv_txtCarRegNo.controltovalidate = "txtCarRegNo";
  Rfv_txtCarRegNo.focusOnError = "t";
  Rfv_txtCarRegNo.display = "Dynamic";
  Rfv_txtCarRegNo.validationGroup = "v1";
  Rfv_txtCarRegNo.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
  Rfv_txtCarRegNo.initialvalue = "";
  var Rfv_ddlCarRegProvince = document.all ? document.all["Rfv_ddlCarRegProvince"] : document.getElementById("Rfv_ddlCarRegProvince");
  Rfv_ddlCarRegProvince.controltovalidate = "ddlCarRegProvince";
  Rfv_ddlCarRegProvince.focusOnError = "t";
  Rfv_ddlCarRegProvince.validationGroup = "v1";
  Rfv_ddlCarRegProvince.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
  Rfv_ddlCarRegProvince.initialvalue = "";
  var Rfv_ddlCMFG = document.all ? document.all["Rfv_ddlCMFG"] : document.getElementById("Rfv_ddlCMFG");
  Rfv_ddlCMFG.controltovalidate = "ddlCMFG";
  Rfv_ddlCMFG.focusOnError = "t";
  Rfv_ddlCMFG.validationGroup = "v1";
  Rfv_ddlCMFG.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
  Rfv_ddlCMFG.initialvalue = "";
  var Regex_txtCModel = document.all ? document.all["Regex_txtCModel"] : document.getElementById("Regex_txtCModel");
  Regex_txtCModel.controltovalidate = "txtCModel";
  Regex_txtCModel.focusOnError = "t";
  Regex_txtCModel.display = "Dynamic";
  Regex_txtCModel.validationGroup = "v1";
  Regex_txtCModel.evaluationfunction = "RegularExpressionValidatorEvaluateIsValid";
  var Rfv_txtCModel = document.all ? document.all["Rfv_txtCModel"] : document.getElementById("Rfv_txtCModel");
  Rfv_txtCModel.controltovalidate = "txtCModel";
  Rfv_txtCModel.focusOnError = "t";
  Rfv_txtCModel.display = "Dynamic";
  Rfv_txtCModel.validationGroup = "v1";
  Rfv_txtCModel.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
  Rfv_txtCModel.initialvalue = "";
  var Regex_txtAccPolicyNo = document.all ? document.all["Regex_txtAccPolicyNo"] : document.getElementById("Regex_txtAccPolicyNo");
  Regex_txtAccPolicyNo.controltovalidate = "txtAccPolicyNo";
  Regex_txtAccPolicyNo.focusOnError = "t";
  Regex_txtAccPolicyNo.display = "Dynamic";
  Regex_txtAccPolicyNo.validationGroup = "v1";
  Regex_txtAccPolicyNo.evaluationfunction = "RegularExpressionValidatorEvaluateIsValid";
  var Regex_txtRefClaimNo = document.all ? document.all["Regex_txtRefClaimNo"] : document.getElementById("Regex_txtRefClaimNo");
  Regex_txtRefClaimNo.controltovalidate = "txtRefClaimNo";
  Regex_txtRefClaimNo.focusOnError = "t";
  Regex_txtRefClaimNo.display = "Dynamic";
  Regex_txtRefClaimNo.validationGroup = "v1";
  Regex_txtRefClaimNo.evaluationfunction = "RegularExpressionValidatorEvaluateIsValid";
  var Rfv_txtRefClaimNo = document.all ? document.all["Rfv_txtRefClaimNo"] : document.getElementById("Rfv_txtRefClaimNo");
  Rfv_txtRefClaimNo.controltovalidate = "txtRefClaimNo";
  Rfv_txtRefClaimNo.focusOnError = "t";
  Rfv_txtRefClaimNo.display = "Dynamic";
  Rfv_txtRefClaimNo.validationGroup = "v1";
  Rfv_txtRefClaimNo.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
  Rfv_txtRefClaimNo.initialvalue = "";
  var Regex_txtAccClaimNo = document.all ? document.all["Regex_txtAccClaimNo"] : document.getElementById("Regex_txtAccClaimNo");
  Regex_txtAccClaimNo.controltovalidate = "txtAccClaimNo";
  Regex_txtAccClaimNo.focusOnError = "t";
  Regex_txtAccClaimNo.display = "Dynamic";
  Regex_txtAccClaimNo.validationGroup = "v1";
  Regex_txtAccClaimNo.evaluationfunction = "RegularExpressionValidatorEvaluateIsValid";
  var Rfv_rbStatusCar = document.all ? document.all["Rfv_rbStatusCar"] : document.getElementById("Rfv_rbStatusCar");
  Rfv_rbStatusCar.controltovalidate = "rbStatusCar";
  Rfv_rbStatusCar.focusOnError = "t";
  Rfv_rbStatusCar.display = "Dynamic";
  Rfv_rbStatusCar.validationGroup = "v1";
  Rfv_rbStatusCar.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
  Rfv_rbStatusCar.initialvalue = "";
  var Regex_txtClientNameContact = document.all ? document.all["Regex_txtClientNameContact"] : document.getElementById("Regex_txtClientNameContact");
  Regex_txtClientNameContact.controltovalidate = "txtClientNameContact";
  Regex_txtClientNameContact.focusOnError = "t";
  Regex_txtClientNameContact.display = "Dynamic";
  Regex_txtClientNameContact.validationGroup = "v1";
  Regex_txtClientNameContact.evaluationfunction = "RegularExpressionValidatorEvaluateIsValid";
  var Rfv_txtClientNameContact = document.all ? document.all["Rfv_txtClientNameContact"] : document.getElementById("Rfv_txtClientNameContact");
  Rfv_txtClientNameContact.controltovalidate = "txtClientNameContact";
  Rfv_txtClientNameContact.focusOnError = "t";
  Rfv_txtClientNameContact.display = "Dynamic";
  Rfv_txtClientNameContact.validationGroup = "v1";
  Rfv_txtClientNameContact.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
  Rfv_txtClientNameContact.initialvalue = "";
  var Regex_txtClientTelContact = document.all ? document.all["Regex_txtClientTelContact"] : document.getElementById("Regex_txtClientTelContact");
  Regex_txtClientTelContact.controltovalidate = "txtClientTelContact";
  Regex_txtClientTelContact.focusOnError = "t";
  Regex_txtClientTelContact.display = "Dynamic";
  Regex_txtClientTelContact.validationGroup = "v1";
  Regex_txtClientTelContact.evaluationfunction = "RegularExpressionValidatorEvaluateIsValid";
  var Rfv_txtClientTelContact = document.all ? document.all["Rfv_txtClientTelContact"] : document.getElementById("Rfv_txtClientTelContact");
  Rfv_txtClientTelContact.controltovalidate = "txtClientTelContact";
  Rfv_txtClientTelContact.focusOnError = "t";
  Rfv_txtClientTelContact.display = "Dynamic";
  Rfv_txtClientTelContact.validationGroup = "v1";
  Rfv_txtClientTelContact.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
  Rfv_txtClientTelContact.initialvalue = "";
  var Regex_txtClientMobileContact = document.all ? document.all["Regex_txtClientMobileContact"] : document.getElementById("Regex_txtClientMobileContact");
  Regex_txtClientMobileContact.controltovalidate = "txtClientMobileContact";
  Regex_txtClientMobileContact.focusOnError = "t";
  Regex_txtClientMobileContact.display = "Dynamic";
  Regex_txtClientMobileContact.validationGroup = "v1";
  Regex_txtClientMobileContact.evaluationfunction = "RegularExpressionValidatorEvaluateIsValid";
  var Rfv_txtClientMobileContact = document.all ? document.all["Rfv_txtClientMobileContact"] : document.getElementById("Rfv_txtClientMobileContact");
  Rfv_txtClientMobileContact.controltovalidate = "txtClientMobileContact";
  Rfv_txtClientMobileContact.focusOnError = "t";
  Rfv_txtClientMobileContact.display = "Dynamic";
  Rfv_txtClientMobileContact.validationGroup = "v1";
  Rfv_txtClientMobileContact.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
  Rfv_txtClientMobileContact.initialvalue = "";
  var Rfv_wuCalendarContact = document.all ? document.all["Rfv_wuCalendarContact"] : document.getElementById("Rfv_wuCalendarContact");
  Rfv_wuCalendarContact.controltovalidate = "tmpTextbox";
  Rfv_wuCalendarContact.validationGroup = "v1";
  Rfv_wuCalendarContact.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
  Rfv_wuCalendarContact.initialvalue = "";
  var Regex_txtClientStaffNameCarRepair = document.all ? document.all["Regex_txtClientStaffNameCarRepair"] : document.getElementById("Regex_txtClientStaffNameCarRepair");
  Regex_txtClientStaffNameCarRepair.controltovalidate = "txtClientStaffNameCarRepair";
  Regex_txtClientStaffNameCarRepair.focusOnError = "t";
  Regex_txtClientStaffNameCarRepair.display = "Dynamic";
  Regex_txtClientStaffNameCarRepair.validationGroup = "v1";
  Regex_txtClientStaffNameCarRepair.evaluationfunction = "RegularExpressionValidatorEvaluateIsValid";
  var Rfv_txtClientStaffNameCarRepair = document.all ? document.all["Rfv_txtClientStaffNameCarRepair"] : document.getElementById("Rfv_txtClientStaffNameCarRepair");
  Rfv_txtClientStaffNameCarRepair.controltovalidate = "txtClientStaffNameCarRepair";
  Rfv_txtClientStaffNameCarRepair.focusOnError = "t";
  Rfv_txtClientStaffNameCarRepair.validationGroup = "v1";
  Rfv_txtClientStaffNameCarRepair.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
  Rfv_txtClientStaffNameCarRepair.initialvalue = "";
  var Regex_txtClientNameCarRepair = document.all ? document.all["Regex_txtClientNameCarRepair"] : document.getElementById("Regex_txtClientNameCarRepair");
  Regex_txtClientNameCarRepair.controltovalidate = "txtClientNameCarRepair";
  Regex_txtClientNameCarRepair.focusOnError = "t";
  Regex_txtClientNameCarRepair.display = "Dynamic";
  Regex_txtClientNameCarRepair.validationGroup = "v1";
  Regex_txtClientNameCarRepair.evaluationfunction = "RegularExpressionValidatorEvaluateIsValid";
  var Rfv_txtClientNameCarRepair = document.all ? document.all["Rfv_txtClientNameCarRepair"] : document.getElementById("Rfv_txtClientNameCarRepair");
  Rfv_txtClientNameCarRepair.controltovalidate = "txtClientNameCarRepair";
  Rfv_txtClientNameCarRepair.focusOnError = "t";
  Rfv_txtClientNameCarRepair.validationGroup = "v1";
  Rfv_txtClientNameCarRepair.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
  Rfv_txtClientNameCarRepair.initialvalue = "";
  var Regex_txtClientIDCardCarRepair = document.all ? document.all["Regex_txtClientIDCardCarRepair"] : document.getElementById("Regex_txtClientIDCardCarRepair");
  Regex_txtClientIDCardCarRepair.controltovalidate = "txtClientIDCardCarRepair";
  Regex_txtClientIDCardCarRepair.focusOnError = "t";
  Regex_txtClientIDCardCarRepair.display = "Dynamic";
  Regex_txtClientIDCardCarRepair.validationGroup = "v1";
  Regex_txtClientIDCardCarRepair.evaluationfunction = "RegularExpressionValidatorEvaluateIsValid";
  var Rfv_txtClientIDCardCarRepair = document.all ? document.all["Rfv_txtClientIDCardCarRepair"] : document.getElementById("Rfv_txtClientIDCardCarRepair");
  Rfv_txtClientIDCardCarRepair.controltovalidate = "txtClientIDCardCarRepair";
  Rfv_txtClientIDCardCarRepair.focusOnError = "t";
  Rfv_txtClientIDCardCarRepair.validationGroup = "v1";
  Rfv_txtClientIDCardCarRepair.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
  Rfv_txtClientIDCardCarRepair.initialvalue = "";
  var Regex_txtClientTelCarRepair = document.all ? document.all["Regex_txtClientTelCarRepair"] : document.getElementById("Regex_txtClientTelCarRepair");
  Regex_txtClientTelCarRepair.controltovalidate = "txtClientTelCarRepair";
  Regex_txtClientTelCarRepair.focusOnError = "t";
  Regex_txtClientTelCarRepair.display = "Dynamic";
  Regex_txtClientTelCarRepair.validationGroup = "v1";
  Regex_txtClientTelCarRepair.evaluationfunction = "RegularExpressionValidatorEvaluateIsValid";
  var Rfv_txtClientTelCarRepair = document.all ? document.all["Rfv_txtClientTelCarRepair"] : document.getElementById("Rfv_txtClientTelCarRepair");
  Rfv_txtClientTelCarRepair.controltovalidate = "txtClientTelCarRepair";
  Rfv_txtClientTelCarRepair.focusOnError = "t";
  Rfv_txtClientTelCarRepair.validationGroup = "v1";
  Rfv_txtClientTelCarRepair.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
  Rfv_txtClientTelCarRepair.initialvalue = "";
  var Regex_txtClientMobileCarRepair = document.all ? document.all["Regex_txtClientMobileCarRepair"] : document.getElementById("Regex_txtClientMobileCarRepair");
  Regex_txtClientMobileCarRepair.controltovalidate = "txtClientMobileCarRepair";
  Regex_txtClientMobileCarRepair.focusOnError = "t";
  Regex_txtClientMobileCarRepair.display = "Dynamic";
  Regex_txtClientMobileCarRepair.validationGroup = "v1";
  Regex_txtClientMobileCarRepair.evaluationfunction = "RegularExpressionValidatorEvaluateIsValid";
  var Rfv_txtClientMobileCarRepair = document.all ? document.all["Rfv_txtClientMobileCarRepair"] : document.getElementById("Rfv_txtClientMobileCarRepair");
  Rfv_txtClientMobileCarRepair.controltovalidate = "txtClientMobileCarRepair";
  Rfv_txtClientMobileCarRepair.focusOnError = "t";
  Rfv_txtClientMobileCarRepair.validationGroup = "v1";
  Rfv_txtClientMobileCarRepair.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
  Rfv_txtClientMobileCarRepair.initialvalue = "";
  var Regex_txtClientAddressCarRepair = document.all ? document.all["Regex_txtClientAddressCarRepair"] : document.getElementById("Regex_txtClientAddressCarRepair");
  Regex_txtClientAddressCarRepair.controltovalidate = "txtClientAddressCarRepair";
  Regex_txtClientAddressCarRepair.focusOnError = "t";
  Regex_txtClientAddressCarRepair.display = "Dynamic";
  Regex_txtClientAddressCarRepair.validationGroup = "v1";
  Regex_txtClientAddressCarRepair.evaluationfunction = "RegularExpressionValidatorEvaluateIsValid";
  var Rfv_txtClientAddressCarRepair = document.all ? document.all["Rfv_txtClientAddressCarRepair"] : document.getElementById("Rfv_txtClientAddressCarRepair");
  Rfv_txtClientAddressCarRepair.controltovalidate = "txtClientAddressCarRepair";
  Rfv_txtClientAddressCarRepair.focusOnError = "t";
  Rfv_txtClientAddressCarRepair.validationGroup = "v1";
  Rfv_txtClientAddressCarRepair.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
  Rfv_txtClientAddressCarRepair.initialvalue = "";
  var Regex_txtKMCarRepair = document.all ? document.all["Regex_txtKMCarRepair"] : document.getElementById("Regex_txtKMCarRepair");
  Regex_txtKMCarRepair.controltovalidate = "txtKMCarRepair";
  Regex_txtKMCarRepair.focusOnError = "t";
  Regex_txtKMCarRepair.display = "Dynamic";
  Regex_txtKMCarRepair.validationGroup = "v1";
  Regex_txtKMCarRepair.evaluationfunction = "RegularExpressionValidatorEvaluateIsValid";
  var Rfv_txtKMCarRepair = document.all ? document.all["Rfv_txtKMCarRepair"] : document.getElementById("Rfv_txtKMCarRepair");
  Rfv_txtKMCarRepair.controltovalidate = "txtKMCarRepair";
  Rfv_txtKMCarRepair.focusOnError = "t";
  Rfv_txtKMCarRepair.display = "Dynamic";
  Rfv_txtKMCarRepair.validationGroup = "v1";
  Rfv_txtKMCarRepair.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
  Rfv_txtKMCarRepair.initialvalue = "";
  var Rfv_rbOil = document.all ? document.all["Rfv_rbOil"] : document.getElementById("Rfv_rbOil");
  Rfv_rbOil.controltovalidate = "rbOil";
  Rfv_rbOil.focusOnError = "t";
  Rfv_rbOil.display = "Dynamic";
  Rfv_rbOil.validationGroup = "v1";
  Rfv_rbOil.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
  Rfv_rbOil.initialvalue = "";
  var Cv_cblItemCarRepair = document.all ? document.all["Cv_cblItemCarRepair"] : document.getElementById("Cv_cblItemCarRepair");
  Cv_cblItemCarRepair.display = "Dynamic";
  Cv_cblItemCarRepair.validationGroup = "v1";
  Cv_cblItemCarRepair.evaluationfunction = "CustomValidatorEvaluateIsValid";
  Cv_cblItemCarRepair.clientvalidationfunction = "ValidatecblItemCarRepair";
  var Rfv_wuCalendarHopeFinishDate = document.all ? document.all["Rfv_wuCalendarHopeFinishDate"] : document.getElementById("Rfv_wuCalendarHopeFinishDate");
  Rfv_wuCalendarHopeFinishDate.controltovalidate = "tmpTextbox";
  Rfv_wuCalendarHopeFinishDate.validationGroup = "v1";
  Rfv_wuCalendarHopeFinishDate.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
  Rfv_wuCalendarHopeFinishDate.initialvalue = "";
  var Cv_ValidateHopeFinishDate = document.all ? document.all["Cv_ValidateHopeFinishDate"] : document.getElementById("Cv_ValidateHopeFinishDate");
  Cv_ValidateHopeFinishDate.display = "Dynamic";
  Cv_ValidateHopeFinishDate.validationGroup = "v1";
  Cv_ValidateHopeFinishDate.evaluationfunction = "CustomValidatorEvaluateIsValid";
  var Rfv_ddlHopeFinishTime = document.all ? document.all["Rfv_ddlHopeFinishTime"] : document.getElementById("Rfv_ddlHopeFinishTime");
  Rfv_ddlHopeFinishTime.controltovalidate = "ddlHopeFinishTime";
  Rfv_ddlHopeFinishTime.focusOnError = "t";
  Rfv_ddlHopeFinishTime.display = "Dynamic";
  Rfv_ddlHopeFinishTime.validationGroup = "v1";
  Rfv_ddlHopeFinishTime.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
  Rfv_ddlHopeFinishTime.initialvalue = "";
  var Regex_txtEstimateLabor = document.all ? document.all["Regex_txtEstimateLabor"] : document.getElementById("Regex_txtEstimateLabor");
  Regex_txtEstimateLabor.controltovalidate = "txtEstimateLabor";
  Regex_txtEstimateLabor.focusOnError = "t";
  Regex_txtEstimateLabor.display = "Dynamic";
  Regex_txtEstimateLabor.validationGroup = "v1";
  Regex_txtEstimateLabor.evaluationfunction = "RegularExpressionValidatorEvaluateIsValid";
  var Rfv_txtEstimateLabor = document.all ? document.all["Rfv_txtEstimateLabor"] : document.getElementById("Rfv_txtEstimateLabor");
  Rfv_txtEstimateLabor.controltovalidate = "txtEstimateLabor";
  Rfv_txtEstimateLabor.focusOnError = "t";
  Rfv_txtEstimateLabor.display = "Dynamic";
  Rfv_txtEstimateLabor.validationGroup = "v1";
  Rfv_txtEstimateLabor.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
  Rfv_txtEstimateLabor.initialvalue = "";
  var Rfv_ddlTypeRepair = document.all ? document.all["Rfv_ddlTypeRepair"] : document.getElementById("Rfv_ddlTypeRepair");
  Rfv_ddlTypeRepair.controltovalidate = "ddlTypeRepair";
  Rfv_ddlTypeRepair.focusOnError = "t";
  Rfv_ddlTypeRepair.display = "Dynamic";
  Rfv_ddlTypeRepair.validationGroup = "v1";
  Rfv_ddlTypeRepair.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
  Rfv_ddlTypeRepair.initialvalue = "";
  var Rfv_rbPart = document.all ? document.all["Rfv_rbPart"] : document.getElementById("Rfv_rbPart");
  Rfv_rbPart.controltovalidate = "rbPart";
  Rfv_rbPart.focusOnError = "t";
  Rfv_rbPart.display = "Dynamic";
  Rfv_rbPart.validationGroup = "v1";
  Rfv_rbPart.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
  Rfv_rbPart.initialvalue = "";
  var Rfv_wuCalendarCompleteDate = document.all ? document.all["Rfv_wuCalendarCompleteDate"] : document.getElementById("Rfv_wuCalendarCompleteDate");
  Rfv_wuCalendarCompleteDate.controltovalidate = "tmpTextbox";
  Rfv_wuCalendarCompleteDate.focusOnError = "t";
  Rfv_wuCalendarCompleteDate.display = "Dynamic";
  Rfv_wuCalendarCompleteDate.validationGroup = "v1";
  Rfv_wuCalendarCompleteDate.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
  Rfv_wuCalendarCompleteDate.initialvalue = "";
  var Regex_txtClientNameGetcar = document.all ? document.all["Regex_txtClientNameGetcar"] : document.getElementById("Regex_txtClientNameGetcar");
  Regex_txtClientNameGetcar.controltovalidate = "txtClientNameGetcar";
  Regex_txtClientNameGetcar.focusOnError = "t";
  Regex_txtClientNameGetcar.display = "Dynamic";
  Regex_txtClientNameGetcar.validationGroup = "v1";
  Regex_txtClientNameGetcar.evaluationfunction = "RegularExpressionValidatorEvaluateIsValid";
  var Rfv_txtClientNameGetcar = document.all ? document.all["Rfv_txtClientNameGetcar"] : document.getElementById("Rfv_txtClientNameGetcar");
  Rfv_txtClientNameGetcar.controltovalidate = "txtClientNameGetcar";
  Rfv_txtClientNameGetcar.focusOnError = "t";
  Rfv_txtClientNameGetcar.validationGroup = "v1";
  Rfv_txtClientNameGetcar.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
  Rfv_txtClientNameGetcar.initialvalue = "";
  var Regex_txtClientIDCardGetcar = document.all ? document.all["Regex_txtClientIDCardGetcar"] : document.getElementById("Regex_txtClientIDCardGetcar");
  Regex_txtClientIDCardGetcar.controltovalidate = "txtClientIDCardGetcar";
  Regex_txtClientIDCardGetcar.focusOnError = "t";
  Regex_txtClientIDCardGetcar.display = "Dynamic";
  Regex_txtClientIDCardGetcar.validationGroup = "v1";
  Regex_txtClientIDCardGetcar.evaluationfunction = "RegularExpressionValidatorEvaluateIsValid";
  var Rfv_txtClientIDCardGetcar = document.all ? document.all["Rfv_txtClientIDCardGetcar"] : document.getElementById("Rfv_txtClientIDCardGetcar");
  Rfv_txtClientIDCardGetcar.controltovalidate = "txtClientIDCardGetcar";
  Rfv_txtClientIDCardGetcar.focusOnError = "t";
  Rfv_txtClientIDCardGetcar.validationGroup = "v1";
  Rfv_txtClientIDCardGetcar.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
  Rfv_txtClientIDCardGetcar.initialvalue = "";
  var Regex_txtClientTelGetcar = document.all ? document.all["Regex_txtClientTelGetcar"] : document.getElementById("Regex_txtClientTelGetcar");
  Regex_txtClientTelGetcar.controltovalidate = "txtClientTelGetcar";
  Regex_txtClientTelGetcar.focusOnError = "t";
  Regex_txtClientTelGetcar.display = "Dynamic";
  Regex_txtClientTelGetcar.validationGroup = "v1";
  Regex_txtClientTelGetcar.evaluationfunction = "RegularExpressionValidatorEvaluateIsValid";
  var Rfv_txtClientTelGetcar = document.all ? document.all["Rfv_txtClientTelGetcar"] : document.getElementById("Rfv_txtClientTelGetcar");
  Rfv_txtClientTelGetcar.controltovalidate = "txtClientTelGetcar";
  Rfv_txtClientTelGetcar.focusOnError = "t";
  Rfv_txtClientTelGetcar.validationGroup = "v1";
  Rfv_txtClientTelGetcar.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
  Rfv_txtClientTelGetcar.initialvalue = "";
  var Regex_txtClientMobileGetcar = document.all ? document.all["Regex_txtClientMobileGetcar"] : document.getElementById("Regex_txtClientMobileGetcar");
  Regex_txtClientMobileGetcar.controltovalidate = "txtClientMobileGetcar";
  Regex_txtClientMobileGetcar.focusOnError = "t";
  Regex_txtClientMobileGetcar.display = "Dynamic";
  Regex_txtClientMobileGetcar.validationGroup = "v1";
  Regex_txtClientMobileGetcar.evaluationfunction = "RegularExpressionValidatorEvaluateIsValid";
  var Rfv_txtClientMobileGetcar = document.all ? document.all["Rfv_txtClientMobileGetcar"] : document.getElementById("Rfv_txtClientMobileGetcar");
  Rfv_txtClientMobileGetcar.controltovalidate = "txtClientMobileGetcar";
  Rfv_txtClientMobileGetcar.focusOnError = "t";
  Rfv_txtClientMobileGetcar.validationGroup = "v1";
  Rfv_txtClientMobileGetcar.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
  Rfv_txtClientMobileGetcar.initialvalue = "";
  var Regex_txtKMGetcar = document.all ? document.all["Regex_txtKMGetcar"] : document.getElementById("Regex_txtKMGetcar");
  Regex_txtKMGetcar.controltovalidate = "txtKMGetcar";
  Regex_txtKMGetcar.focusOnError = "t";
  Regex_txtKMGetcar.display = "Dynamic";
  Regex_txtKMGetcar.validationGroup = "v1";
  Regex_txtKMGetcar.evaluationfunction = "RegularExpressionValidatorEvaluateIsValid";
  var Rfv_txtKMGetcar = document.all ? document.all["Rfv_txtKMGetcar"] : document.getElementById("Rfv_txtKMGetcar");
  Rfv_txtKMGetcar.controltovalidate = "txtKMGetcar";
  Rfv_txtKMGetcar.focusOnError = "t";
  Rfv_txtKMGetcar.validationGroup = "v1";
  Rfv_txtKMGetcar.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
  Rfv_txtKMGetcar.initialvalue = "";
  var Regex_txtSMSGetcar = document.all ? document.all["Regex_txtSMSGetcar"] : document.getElementById("Regex_txtSMSGetcar");
  Regex_txtSMSGetcar.controltovalidate = "txtSMSGetcar";
  Regex_txtSMSGetcar.focusOnError = "t";
  Regex_txtSMSGetcar.display = "Dynamic";
  Regex_txtSMSGetcar.validationGroup = "v1";
  Regex_txtSMSGetcar.evaluationfunction = "RegularExpressionValidatorEvaluateIsValid";
  var Rfv_txtSMSGetcar = document.all ? document.all["Rfv_txtSMSGetcar"] : document.getElementById("Rfv_txtSMSGetcar");
  Rfv_txtSMSGetcar.controltovalidate = "txtSMSGetcar";
  Rfv_txtSMSGetcar.focusOnError = "t";
  Rfv_txtSMSGetcar.validationGroup = "v1";
  Rfv_txtSMSGetcar.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
  Rfv_txtSMSGetcar.initialvalue = "";
  var Regex_txtRelation = document.all ? document.all["Regex_txtRelation"] : document.getElementById("Regex_txtRelation");
  Regex_txtRelation.controltovalidate = "txtRelation";
  Regex_txtRelation.focusOnError = "t";
  Regex_txtRelation.display = "Dynamic";
  Regex_txtRelation.validationGroup = "v1";
  Regex_txtRelation.evaluationfunction = "RegularExpressionValidatorEvaluateIsValid";
  var Rfv_txtRelation = document.all ? document.all["Rfv_txtRelation"] : document.getElementById("Rfv_txtRelation");
  Rfv_txtRelation.controltovalidate = "txtRelation";
  Rfv_txtRelation.focusOnError = "t";
  Rfv_txtRelation.validationGroup = "v1";
  Rfv_txtRelation.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
  Rfv_txtRelation.initialvalue = "";
  var Regex_txtRepNameGetCar = document.all ? document.all["Regex_txtRepNameGetCar"] : document.getElementById("Regex_txtRepNameGetCar");
  Regex_txtRepNameGetCar.controltovalidate = "txtRepNameGetCar";
  Regex_txtRepNameGetCar.focusOnError = "t";
  Regex_txtRepNameGetCar.display = "Dynamic";
  Regex_txtRepNameGetCar.validationGroup = "v1";
  Regex_txtRepNameGetCar.evaluationfunction = "RegularExpressionValidatorEvaluateIsValid";
  var Rfv_txtRepNameGetCar = document.all ? document.all["Rfv_txtRepNameGetCar"] : document.getElementById("Rfv_txtRepNameGetCar");
  Rfv_txtRepNameGetCar.controltovalidate = "txtRepNameGetCar";
  Rfv_txtRepNameGetCar.focusOnError = "t";
  Rfv_txtRepNameGetCar.validationGroup = "v1";
  Rfv_txtRepNameGetCar.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
  Rfv_txtRepNameGetCar.initialvalue = "";
  var Rfv_rbCommentGetcar = document.all ? document.all["Rfv_rbCommentGetcar"] : document.getElementById("Rfv_rbCommentGetcar");
  Rfv_rbCommentGetcar.controltovalidate = "rbCommentGetcar";
  Rfv_rbCommentGetcar.focusOnError = "t";
  Rfv_rbCommentGetcar.display = "Dynamic";
  Rfv_rbCommentGetcar.validationGroup = "v1";
  Rfv_rbCommentGetcar.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
  Rfv_rbCommentGetcar.initialvalue = "";
  var Rfv_rbItemGetcar = document.all ? document.all["Rfv_rbItemGetcar"] : document.getElementById("Rfv_rbItemGetcar");
  Rfv_rbItemGetcar.controltovalidate = "rbItemGetcar";
  Rfv_rbItemGetcar.focusOnError = "t";
  Rfv_rbItemGetcar.display = "Dynamic";
  Rfv_rbItemGetcar.validationGroup = "v1";
  Rfv_rbItemGetcar.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
  Rfv_rbItemGetcar.initialvalue = "";
  //]]>
</script>
<script type="text/javascript">
  //<![CDATA[
  var Page_ValidationActive = false;
  if (typeof(ValidatorOnLoad) == "function") {
    ValidatorOnLoad();
  }
  function ValidatorOnSubmit() {
    if (Page_ValidationActive) {
      return ValidatorCommonOnSubmit();
    }
    else {
      return true;
    }
  }
  //]]>
</script>
</form>
@stop


<!-- @section('content')
kuy

	{{ csrf_field()}}
	<div class="form-group">
		<label for="title">Title</label>
		<input type="text" class="form-control" name="title" id="title">
	</div>
	<div class="form-group">
		<label for="body">Body</label>
		<textarea class="form-control" name="body" id="body"></textarea> 
	</div>
	 -->

<!-- @stop -->