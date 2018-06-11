@extends('layout.main') @section('page_title', 'Customers') @section('activeUrl')

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
@stop @section('content')
<div class="form-header">
    <h1>ข้อมูลงานซ่อม</h1>
</div>
<table>
<tr>
	<div align="Center">
    <a href="User" class="btn btn-primary" role="button">สร้างใบรับรถใหม่ </a>
    <a href="#" class="btn btn-primary" role="button">Update สถานะรถลูกค้า</a>
</div>
</tr>

<tr>
    <td>
        <div id="UpdatePanel1">
            <select name="ddlSearch_Type" onchange="javascript:setTimeout('__doPostBack(\'ddlSearch_Type\',\'\')', 0)" id="ddlSearch_Type" style="height:18px;">
                <optgroup label="InBox-OutBox">
                    <option selected="selected" value="all_IO">ทั้งหมด (In-Out)</option>
                    <option value="IO1">ทะเบียนรถ</option>
                    <option value="IO2">เลขเคลม</option>
                    <option value="IO3">เลขรับแจ้ง</option>
                    <option value="IO4">เลขที่ e-Claim</option>H
                    <option value="IO5">Job No.</option>
                </optgroup>	
                <optgroup label="ข้อมูลใบรับรถ">
                    <option value="all_Car">ทั้งหมด (ใบรับรถ)</option>
                    <option value="C1">ทะเบียนรถ</option>
                    <option value="C2">เลขเคลม</option>
                    <option value="C3">เลขรับแจ้ง</option>
                    <option value="C4">เลขที่ใบรับรถ</option>
                </optgroup>
            </select>
        </div>
    </td>
    <td>
        <div id="UpdatePanel2">
            <select name="ddlSearch_Status" onchange="javascript:setTimeout('__doPostBack(\'ddlSearch_Status\',\'\')', 0)" id="ddlSearch_Status">
                <option selected="selected" value="IO0">--- ทั้งหมด ---</option>
                <option value="1">สร้างใหม่</option>
                <option value="11">แก้ไข</option>
                <option value="13">เพิ่มเติมรายการ</option>
                <option value="4">อนุมัติแล้ว</option>
                <option value="6">ดำเนินการซ่อม</option>
                <option value="7">เสร็จสมบูรณ์</option>
                <option value="8">เคลมถูกยกเลิก</option>
                <option value="3">รออนุมัติ</option>
                <option value="12">รออนุมัติแก้ไข</option>
                <option value="14">รออนุมัติเพิ่มเติม</option>
            </select>
        </div>
    </td>
    <td>
        <div id="UpdatePanel3">
            <select name="ddlSearch_Other" id="ddlSearch_Other">
                <option selected="selected" value="0">--- ทั้งหมด ---</option>
                <option value="1">ประกันจัดอะไหล่</option>
                <option value="2">สาขาจัดอะไหล่</option>
                <option value="3">อู่/ศูนย์จัดอะไหล่</option>
                <option value="4">รถเสียหายหนัก</option>
                <option value="5">ไม่ได้ส่งเข้า e-PVP</option>
                <option value="6">มีการจัดอะไหล่</option>
            </select>
        </div>
    </td>
    <td style="padding: 8px">
        <input name="txtSearch_Word" type="text" id="txtSearch_Word" class="txt">
    </td>
    <td>
        <input type="submit" name="btnSearch" value="ค้นหาข้อมูล" id="btnSearch" >
        <div id="Show"></div>
    </td>
</tr>
</table>

<td style="width: 1000px; vertical-align: top; ">
	

<!-- -------------------------------------data------------------- -->
<div  bottom:0px; top:150px ;width:83.5%">
	<table cellspacing="0" cellpadding="3" align="Left" rules="all" border="1" id="grvBoxDetail" style="border-collapse:collapse; width: 100%;">
		<tbody><tr>
	<th>วันที่/เวลา</th>
	<th>เลขที่รายการ</th>
	<th>เลขที่เคลม</th>
    <th>เลขที่รับแจ้ง</th>
	<th>ทะเบียนรถ</th>
	<th>ยี่ห้อ</th>
	<th>รุ่น</th>
	<th>ชื่อประกัน</th>
	<th>สถานะเคลม</th>
	<th>ชื่อลูกค้า</th>
</tr>
    
    <?php foreach ($forms as $form ): ?>
        <tr>
      <td>{{$form->created_at}}</td>
        <td>{{$form->id}}</td>
        <td>{{$form->firstName}}</td>
        <td>{{$form->lastName}}</td>
        <td>{{$form->idCard}}</td>
        <td>{{$form->tel}}</td>
        <td>{{$form->address}}</td>
      

    <?php endforeach; ?>
  </tr>
</td>	
</tbody>
</table></div>	
@stop
