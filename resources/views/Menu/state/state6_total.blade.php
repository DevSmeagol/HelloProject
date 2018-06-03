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
    <li><a href="Picture">รูปประกอบ</a></li> 
    <li class="active"><a href="Total">สรุป</a></li>               
  </ul>

@stop