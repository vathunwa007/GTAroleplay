<?php  require "connect.php";
require "apitrue.php";
$phone = $_SESSION['phone'];

$data = "SELECT * FROM users WHERE phone_number ='$phone'";
$result = mysqli_query($con, $data);

$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

if($row == 0){
  echo "<script>";
 			 echo "alert('ไม่มีการล็อกอินเข้ามาไม่สามารถเชื่อมกับฐานข้อมูลได้ !');";
 			 echo "window.location='index.php';";
           	 echo "</script>";
}
?>

<html>
<head>
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="phone.css">
      <meta name="KeyWords" content="True money,ทรูมันนี่ ,ตัดบัตรทรู ,auto truemoney" />
      <META content="Copyright (c) 2010 tmweasy.com All Rights Reserved. tmweasy.com V.1" name=copyright>
      <meta name="robots" content="all" />
      <meta content='index, follow, all' name='robots'/>
      <META Name="Googlebot" Content="index,follow">
      <meta name="revisit-after" content="1 days">
      <meta name="MSSmartTagsPreventParsing" content="True" />
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<style media="screen">
body{
  background: url(https://images6.alphacoders.com/692/thumb-1920-692283.jpg)  0 -100px;
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
		<br><br>
      <h3 style="color:white;background-color:black;text-align:center;"> อัตตราค่าบริการเติมเงิน </h3>
      <!--------------------------------------------------เพิ่มข้อมูลในโทรศัพตรงนี้----------------------------------------->

      <div class="container">
        <div class="d-flex justify-content-center">
          <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ราคา</th>
      <th scope="col">เงินที่ได้รับ</th>
      <th scope="col">โบนัส</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>50</td>
      <td>150000 <img src="https://image.flaticon.com/icons/svg/438/438526.svg"width="20"></td>
      <td>ไม่มี</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>90</td>
      <td>200000 <img src="https://image.flaticon.com/icons/svg/438/438526.svg"width="20"></td>
      <td>ไม่มี</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>150</td>
      <td>450000 <img src="https://image.flaticon.com/icons/svg/438/438526.svg"width="20"></td>
      <td>PCX</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>300</td>
      <td>900000 <img src="https://image.flaticon.com/icons/svg/438/438526.svg"width="20"></td>
      <td>Skyline</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>500</td>
      <td>1500000 <img src="https://image.flaticon.com/icons/svg/438/438526.svg"width="20"></td>
      <td>Ramboginie</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>1000</td>
      <td>3000000 <img src="https://image.flaticon.com/icons/svg/438/438526.svg"width="20"></td>
      <td>CAR-VIP</td>
    </tr>


  </tbody>
</table>
</div>

  <div class="d-flex justify-content-center">
  <button type="button"onclick="goBack();" class="btn btn-danger btn-lg btn-block">ย้อนกลับสู่เมนูหลัก</button>
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
