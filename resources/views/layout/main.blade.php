<!DOCTYPE html>
 <html lang="en">
 <head>
 <title>@yield('page_title')</title>
 <meta charset="utf-8">

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

 <meta name="viewport" content="width=device-width, initial-scale=1">
 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

 <link href="/css/album.css" rel="stylesheet">
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
 width: 200px;
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
<h4>Sombat .J Auto Center
</h4>
<table class="nav nav-pills nav-stacked">
	<tr><td><a href="#">สร้างเคลม</a></td><td align="left"><span class="badge ">5</span></td></tr>
	<tr><td><a href="#">ข้อมูลทั่วไป</a></td>	<td><span class="badge ">5</span></td></tr>
	<tr><td><a href="#">ข้อมูลงานซ่อม</a></td>	<td><span class="badge ">5</span></td></tr>
	<tr><td><a href="#">ค่าแรง</a></td>			<td><span class="badge ">5</span></td></tr>
	<tr><td><a href="#">ค่าอะไหล่ </a></td>		<td><span class="badge ">5</span></td></tr>
	<tr><td><a href="#">ค่าใช้จ่ายอื่นๆ</a></td>	<td><span class="badge ">5</span></td></tr>
	<tr><td><a href="#">รูปภาพ </a></td>		<td><span class="badge ">5</span></td></tr>
	<tr><td><a href="#">สรุป </a></td>			<td><span class="badge ">5</span></td></tr>
</table>
<!-- <ul class="nav nav-pills nav-stacked">
	
    <li class="active"><a href="#">Home</a></li>
    <li>Inbox</li>
    <li><a href="#">สร้างเคลม <span class="badge ">5</span></a></li>
    <li> <a href="#">ข้อมูลทั่วไป <span class="badge">2</span></a></li>
    <li><a href="#">ข้อมูลงานซ่อม <span class="badge">5</span></a></li>
    <li>สถานะรถซ่อม</li>
    <li><a href="#">ค่าแรง <span class="badge">5</span></a></li>
    <li><a href="#">ค่าอะไหล่ <span class="badge">5</span></a></li>
    <li><a href="#">ค่าใช้จ่ายอื่นๆ <span class="badge">5</span></a></li>
    <li><a href="#">รูปภาพ <span class="badge">5</span></a></li>
    <li><a href="#">สรุป <span class="badge">5</span></a></li>
</ul> -->
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
