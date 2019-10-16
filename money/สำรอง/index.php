<?php  require "connect.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MONNEY</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


  <style media="screen">
    body{margin-top: 100px;
      background: url(https://cdn.wccftech.com/wp-content/uploads/2014/11/gtav-comp-2-1.png) 0 -50px;
    }
    p {font-size:80px;
    text-align:center;}
    html {
  /*background: url(https://cdn.wccftech.com/wp-content/uploads/2014/11/gtav-comp-2-1.png) 0 -50px;*/
}
  </style>
  </head>
  <body>

    <div class="container">
<p>GTA V LC ROLEPLAY </p> <br><br>
        <div class="d-flex justify-content-center">

    <h1>ระบบเติมเงิน</h1>
    <h3 id="userid"></h3>
  </div><br><br>
<form method="get" action="showdata.php">
  <div class="d-flex justify-content-center">
    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">กรอกเบอร์โทรศัพภายในเกมส์</span>
  </div>
  <input type="text"value=""name="phone"class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">

</div>
  </div>
  <div class="d-flex justify-content-center">
  <button type="submit" class="btn btn-danger btn-lg btn-block">เช็คข้อมูล</button>
</div>
</form>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
