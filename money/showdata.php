<?php  require "connect.php";

session_start();
$steamname = $_GET['steamname'];
$_SESSION['steamname']= "$steamname";

$data = "SELECT * FROM users WHERE name ='$steamname'";
$result = mysqli_query($con, $data);

$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

if($row == 0){
  echo "<script>";
 			 echo "alert('ไม่มีชื่อนี้ในฐานข้อมูลเซิฟเวอร์ของเราค่ะ !');";
 			 echo "window.location='index.php';";
           	 echo "</script>";
}
?>
<html>
<head>
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="phone.css">
<style media="screen">
body{
  background: url(https://images6.alphacoders.com/692/thumb-1920-692283.jpg) 0 -100px;
}
</style>

<script type="text/javascript" src="js/phone.js"></script>

</head>
<body onload="startTime()">

<phone>
<div class="top-bar">
	<div class="speaker"></div>
</div>
	<button class="lock"></button>
	<button class="volup"></button>
	<button class="voldown"></button>
<div class="screen">
	<div class="content">
		<div class="status-bar">
			<div class="left-side">
        <i class="fa fa-signal"></i><?php echo $row['name']; ?>
        <i class="fa fa-wifi"></i>📵
      </div>
      <div class="middle-side">
        <i class="fa fa-lock"></i>LC ROLEPLAY
      </div>
      <div class="right-side">
        <i class="fa fa-location-arrow"></i>🔋
        <i class="fa fa-battery-three-quarters"></i>
			</div>
		</div>
		<div class="clock"><br>
			<div id='time'>12:40</div>
			<div id="date">Sunday, 11 June</div>
      <!--------------------------------------------------เพิ่มข้อมูลในโทรศัพตรงนี้----------------------------------------->

      <div class="container">

          <div class="d-flex justify-content-center"style="background-color: black;">
      <h3 style="color:white; ">ข้อมูลตัวละคร</h3>
    </div>
      <br>

      <div class="row">
      <div id="h3"class="col"style="color:white;text-align: left;">
       ชื่อตัวละคร : <br><br>
       เงินในตัวละคร : <br>
       เงินในธนาคาร : <br>
       เบอร์ภายในเกมส์ : <br>
       แก๊ง  :
     </div>
     <div id="h3"class="col"style="text-align: right;color:white;background-color:orange;">
       <?php echo $row['name']; ?> <br><br>
       <?php echo $row['money']."       บาท"; ?> <br>
       <?php echo $row['bank']."  บาท"; ?><br>
       <?php echo $row['phone_number']; ?><br>
       <?php echo $row['gang']; ?>
     </div>
   </div>


    <br><br>

    <div class="d-flex justify-content-center">
      <div class="input-group mb-3">

  </div>
  </div>
  <div class="d-flex justify-content-center">
  <button type="button" class="btn btn-primary btn-lg btn-block"onclick="location.href='true.php';"><img src="http://xn--l3cvhg5c5b.com/assets/image/tm.png" width="25" height="27">TRUE MONEY</button>
  </div>
    <div class="d-flex justify-content-center">
    <button type="button" class="btn btn-warning btn-lg btn-block"onclick="location.href='wallet.php';"style="color:white;"><img src="http://xn--l3cvhg5c5b.com/assets/image/tw.png" width="25" height="27"> TRUE WALLET</button>
  </div>
  <div class="d-flex justify-content-center">
  <button type="button"onclick="location.href='showprice.php'" class="btn btn-link btn-sm btn-block">อัตตราค่าบริการเติมเงิน</button>
  </div>
  <div class="d-flex justify-content-center">
  <button type="button"onclick="goBack();" class="btn btn-danger btn-lg btn-block">ออกจากระบบ</button>
  </div>
</div>
</div>


		<div class="downside">
			<i class="fa fa-circle"></i>
			<i class="fa fa-circle"></i>
			<i class="fa fa-camera"></i>
		</div>
	</div>
	</div>
<div class="bottom-bar">
	<div class="the-button"onclick="location.href='index.php';"></div>
</div>
</phone>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
