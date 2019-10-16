<?php require "connect.php";
$phone = $_GET['phone'];
$data = "SELECT * FROM users WHERE phone_number ='$phone'";
$result = mysqli_query($con, $data);

$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

if($row == 0){
  echo "<script>";
 			 echo "alert('ไม่มีเบอร์นี้ในฐานข้อมูล !');";
 			 echo "window.location='index.php';";
           	 echo "</script>";
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MONNEY</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style media="screen">
    body{margin-top: 100px;}
    #h3 {font-size: 30px;
    border-bottom: 100px}

  </style>
  <script type="text/javascript">

function goBack() {
  window.history.back();
}
</script>

  </head>
  <body>
    <div class="container">

        <div class="d-flex justify-content-center">
    <h1>ข้อมูลตัวละคร</h1>
  </div>
    <br>
    <br>
    <div class="row">
    <div id="h3"class="col">
     ชื่อตัวละคร : <br>
     เงินทั้งหมด : <br>
     เบอร์ภายในเกมส์ :
   </div>
   <div id="h3"class="col"style="text-align: right;color:blue;">
     <?php echo $row['name']; ?> <br>
     <?php echo $row['money']."       บาท"; ?> <br>
     <?php echo $row['phone_number']; ?>
   </div>
 </div>


  <br><br>

  <div class="d-flex justify-content-center">
    <div class="input-group mb-3">

</div>
</div>
<div class="d-flex justify-content-center">
<button type="button" class="btn btn-primary btn-lg btn-block">TRUE MONEY</button>
</div><br>
  <div class="d-flex justify-content-center">
  <button type="button" class="btn btn-warning btn-lg btn-block">TRUE WALLET</button>
</div><br>
<div class="d-flex justify-content-center">
<button type="button"onclick="goBack();" class="btn btn-danger btn-lg btn-block">ออกจากระบบ</button>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
