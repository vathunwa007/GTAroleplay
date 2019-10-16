<?php  require "connect.php";

require ('include/steamauth/steamauth.php');
include ('include/steamauth/userInfo.php');

?>
<html>
<head>
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="phone.css">
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
				<i class="fa fa-signal"></i><?php echo $steamprofile['personaname'] ;?>
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
			<div id="date">Sunday, 11 June</div><br>
			<!--------------------------------------------------เพิ่มข้อมูลในโทรศัพตรงนี้----------------------------------------->


			<div><form method="get" action="showdata.php">

				<?php echo '<center><img src="'.$steamprofile['avatarfull'].'" title="" alt="" style="border-radius: 50%;border: 20px solid;border-color: #c535dc cf4ac0 #c600ff #cf4ac0;"  /></center';?>
  <div class="d-flex justify-content-center">
    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default"style="background-color: #ffffff;
    border: 1px solid #ea0d0d;">กรอกชื่อsteamของท่าน</span>
  </div>
  <input type="text"value="<?php echo $steamprofile['personaname'] ;?>"name="steamname"class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">

</div>
  </div>
  <div class="d-flex justify-content-center">
  <button type="submit" class="btn btn-danger btn-lg btn-block">ตรวจสอบข้อมูล</button>

</div>

<div class="d-flex justify-content-center">
<button type="button"style="color:white;" class="btn btn-warning btn-lg btn-block"onclick="location.href='showstatus.php';"
>ดูสถานะเซิฟเวอร์</button>
</div>
</form></div>
		</div>
		<div class="downside">
			<i class="fa fa-circle">server</i>
			<i class="fa fa-circle">on</i>
			<i class="fa fa-camera"></i>
		</div>
	</div>
	</div>
<div class="bottom-bar">
	<!--<div class="the-button"onclick="location.href='index.php';"></div>-->
	<?php logoutbutton(); ?>
</div>
</phone>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
