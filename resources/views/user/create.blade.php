<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/signin.css" rel="stylesheet">

</head>
<body class="text-center">
    <form class="form-signin" method="POST" action="/users/post1150">
      {{ csrf_field() }}
      <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Hello World</h1>

      <div class="form-group">
      <label class="sr-only" for="body">ชื่อ :</label>
      <input type="text" class="form-control" name="Firstname" id="Firstname" required="">
      </div>
      <div class="form-group">
      <label class="sr-only" for="body">นามสกุล :</label>
      <input type="text" class="form-control" name="Lastname" id="Lastname" required="">
      </div>
      <div class="form-group">
      <label class="sr-only" for="body">รหัสประจำตัวประชนชน :</label>
      <input type="text" class="form-control" name="Idcard" id="Idcard" required="">
      </div>
      <div class="form-group">
      <label class="sr-only" for="body">เบอร์โทรศัพท์ :</label>
      <input type="text" class="form-control" name="Tel" id="Tel" required="">
      </div>
      <div class="form-group">
      <label class="sr-only" for="body">ID LINE :</label>
      <input type="text" class="form-control" name="Idline" id="Idline" required="">
      </div>
      <div class="form-group">
      <label class="sr-only" for="body">ที่อยู่ :</label>
      <input type="text" class="form-control" name="Address" id="Address" required="">
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Fuck Me</button>
      
    </form>
  

</body>
</html>

  