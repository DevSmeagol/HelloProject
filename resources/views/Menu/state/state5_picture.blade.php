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
    <li><a href="costWork">ค่าแรง</a></li>
    <li><a href="costItem">ค่าอะไหล่</a></li>
    <li><a href="costEtc">ค่าใช้จ่ายอื่นๆ</a></li>
    <li class="active"><a href="Picture">รูปประกอบ</a></li> 
    <li><a href="Total">สรุป</a></li>               
  </ul>

<!-- //------------------before_Fix-------------- -->
<br>
<select name="ddl_image_type" onchange="javascript:setTimeout('__doPostBack(\'ddl_image_type\',\'\')', 0)" id="ddl_image_type">
    <option selected="selected" value="0">--ทั้งหมด--</option>
    <option value="10">ใบเคลม/ใบแจ้งอุบัติเหตุ</option>
    <option value="11">ใบขับขี่</option>
    <option value="12">ใบรับรถก่อนซ่อม</option>
    <option value="13">กรมธรรม์</option>
    <option value="1">เอกสารประกอบ(ศูนย์/อู่)</option>
    <option value="5">เอกสารประกอบ(ประกัน)</option>
    <option value="2">รูปก่อนซ่อม</option>
    <option value="3">รูประหว่างซ่อม</option>
    <option value="31"> -รื้อ/ เคาะ</option>
    <option value="32"> -เตรียมพื้น/ พ่นสี</option>
    <option value="7"> -เทียบอะไหล่</option>
    <option value="33"> -ประกอบชิ้นส่วน</option>
    <option value="4">รูปซ่อมเสร็จ</option>
    <option value="22">ใบรับรถ(ซ่อมเสร็จ)</option>
    <option value="8">รูปหน้าค่าแรง</option>

</select>
<h6>รูปก่อนซ่อม</h6>



<div class="gallery">
  <a target="_blank" href="img_fjords.jpg">
    <img src="img_fjords.jpg" alt="Trolltunga Norway" width="300" height="200">
  </a>
  <div class="desc">รูปก่อนซ่อม</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_forest.jpg">
    <img src="img_forest.jpg" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">รูปซ่อมเสร็จ</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_lights.jpg">
    <img src="img_lights.jpg" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="img_mountains.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>


<div class="gallery">
  <a target="_blank" href="img_fjords.jpg">
    <img src="img_fjords.jpg" alt="Trolltunga Norway" width="300" height="200">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>




<div class="gallery">
  <a target="_blank" href="img_forest.jpg">
    <img src="img_forest.jpg" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
    
  <a target="_blank" href="img_lights.jpg">
    <img src="img_lights.jpg" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="img_mountains.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>


@stop