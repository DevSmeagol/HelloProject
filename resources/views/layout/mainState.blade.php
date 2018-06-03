<!DOCTYPE html>
 <html lang="en">
 <head>
 <title>@yield('page_title')</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 <style>
 /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
 .container {
 margin: 13px;
 padding-left: 8px;
 }

 .row.content {
 height: 1500px;
 }

 .modal-content{
 	 height: 800px;
 }

 .navbar-header{
 background-color: #E5E5E5;
 width: 81.6%;
 }
 h1{
 text-shadow: 0 0 20px #FFFFFF, 0 0 30px #FFFFFF;
 }

 h6{
 font-size: 18px;
 text-shadow: 0 0 20px #FFFFFF, 0 0 30px #FFFFFF;
 }
 /* Set gray background color and 100% height */
 h2{
 margin-top: 50px;
 background-color: black;
 }

 .sidenav {
 background-color: #f1f1f1;
 width: 300px;
 height: 100%;
 outline-color: #003;
 }
 /* Set black background color, white text and some padding */
 footer {
   background-color: #555;
   color: white;
   padding: 15px;
 }
 /* On small screens, set height to 'auto' for sidenav and grid */
 @media screen and (max-width: 767px) {
   .sidenav {
     height: auto;
     padding: 15px;
   }

   .row.content {height: auto;}
 }
 
 td, th {
 border: 1px solid #dddddd;
 text-align: left;
 padding: 8px;
 }
 tbody {
     display: table-row-group;
     vertical-align: middle;
     border-color: inherit;
 }
 table {
    display: table;
    border-collapse: separate;
    border-spacing: 2px;
    border-color: grey;
}
div.gallery {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 180px;
}
div.gallery2 {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 1000px;
    height: 300px;
}
div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}
img {
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;
    width: 150px;
   	
}
 </style>	
 </head>
 <body>
 <div class="container-fluid">
 <div class="row content">

 <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 sidenav">
      <h4>Sombat .J Auto Center</h4>
      <!-- <table class="nav nav-pills nav-stacked">
  <tr><td>ชื่อบริษัท :</td>     <td align="left">เจ้าพระยาประกันภัย</td></tr>
  <tr><td>สาขา :</td>           <td>Zone 2</td></tr>
  <tr><td>เลขที่e-Claim :</td>  <td>RYD018031002</td></tr>
  <tr><td>เลขรับแจ้ง :</td>      <td>610302/111</td></tr>
  <tr><td>เลขที่กรมธรรม์ :</td>  <td>15911V1016004/00252-1</td></tr>
  <tr><td>จังหวัด :</td>        <td>กรุงเทพฯ</td></tr>
  <tr><td>ทะเบียนรถ :</td>       <td>1ฒฆ4049กท</td></tr>
  <tr><td>ยี่ห้อ :</td>         <td>TOYOTA</td></tr>
  <tr><td>หมายเลขตัวถัง :</td>   <td>MROGR39G196745943</td></tr>
  <tr><td>ประเภท :</td>          <td>รถคู่กรณี</td></tr>
  <tr><td>ผู้เอาประกันภัย :</td> <td></td></tr>
  <tr><td>สถานะ :</td>           <td>เสร็จสมบูรณ์</td></tr>
  <tr><td>วันที่สร้าง :</td>     <td>DATE</td></tr>
  <tr><td>วันที่ส่งเคลม :</td>   <td>DATE</td></tr>
  <tr><td>เลขที่รายการ :</td>    <td>0000001</td></tr>


</table> -->
<ul class="nav nav-pills nav-stacked ">
    <li class="active"><a href="homepage">Home</a></li>
    <li>ชื่อบริษัท  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : <span >เจ้าพระยาประกันภัย</span></li>
    <li> สาขา &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : <span>Zone 2</span></li>
    <li>เลขที่e-Claim &nbsp&nbsp: <span>RYD018031002</span></li>
    <li>เลขรับแจ้ง &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <span>610302/111</span></li>
    <li>เลขที่กรมธรรม์ &nbsp&nbsp: <span>15911V1016004/00252-1</span></li>
    <li>จังหวัด &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <span>กรุงเทพฯ</span></li>
    <li>ทะเบียนรถ &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <span>1ฒฆ4049กท</span></li>
    <li>ยี่ห้อ &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <span>TOYOTA</span></li>
    <li>หมายเลขตัวถัง &nbsp: <span>MROGR39G196745943</span></li>
    <li>ประเภท &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <span>รถคู่กรณี</span></li>
    <li>ผู้เอาประกันภัย &nbsp: <span></span></li>
    <li>สถานะ &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <span>เสร็จสมบูรณ์</span></li>
    <li>วันที่สร้าง &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <span>DATE</span></li>
    <li>วันที่ส่งเคลม &nbsp&nbsp&nbsp&nbsp: <span>DATE</span></li>
    <li>เลขที่รายการ &nbsp&nbsp&nbsp: <span>0000001</span></li>
</ul>
     @yield('activeUrl')


 </div>

 <br><br>
 <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9">
@yield('content')
 <!-- <div class="navbar-header">
   <a class="navbar-brand" href="#">WebSiteName</a>
 <ul class="nav navbar-nav">
   <li class="active"><a href="#">Home</a></li>
   <li><a href="#">Page 1</a></li>
   <li><a href="#">Page 2</a></li>
   <li><a href="#">Page 3</a></li>
 </ul>
 </div>
 </div>
 </div>
</div> -->
 </body>
 <!-- <footer class="container-fluid">
 <p> Design by zen</p>
 </footer> -->
