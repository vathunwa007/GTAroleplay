<?php  require "connect.php";
require ('include/steamauth/steamauth.php');
include ('include/steamauth/userInfo.php');
/*-----------------------[ SETTINGS ]------------------------------*/
$server_settings['title'] = "LC-Roleplay #1"; // Server name or brand to display
$server_settings['ip'] = "103.253.73.193"; // localhost for local servers / IP or domain name for VDS/VPS
$server_settings['port'] = "30120"; // basically 30120
$server_settings['max_slots'] = 64; // maximum slots. By default 24
/*----------------------------------------------------------------*/


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

<?php
print "<div style='background-color: pink; border: 4px double black; border-radius: 5px; width: 300px; padding: 2px; border: 4px double black;  margin: auto;
'>";
$content = json_decode(file_get_contents("http://".$server_settings['ip'].":".$server_settings['port']."/info.json"), true);
$img_d64 = $content['icon'];
if($content):
    $gta5_players = file_get_contents("http://".$server_settings['ip'].":".$server_settings['port']."/players.json");
	$content = json_decode($gta5_players, true);
	$pl_count = count($content);
	$SRV_STATUS = "<font style='color: green;'>Online</font>";
	if($img_d64) { print "<div align='center'><img  width='150' src='data:image/png;base64, $img_d64' ></div>"; }
	print "<p align='center' style='color:#000000; background-color: #ffffff;'><strong>$server_settings[title]</strong></p>";
	print "<p align='center'><strong>Players:</strong> $pl_count / $server_settings[max_slots]</p>";
	echo'<a href="fivem:connect/103.253.73.193:30120">Join Now</a>';
else:
	print "<p align='center' style='color:#000000; background-color: #ffffff;'><strong>$server_settings[title]</strong></p>";
	$SRV_STATUS = "<font style='color: red;'>Offline</font>";
endif;
print "<br/><hr/><p align='center'><strong>Status: $SRV_STATUS</strong></p></div>";
 ?>

<br>
<div class="d-flex justify-content-center">
<button type="button" class="btn btn-warning btn-lg btn-block"onclick="goBack();">กลับหน้าจอหลัก</button>
</div>
</form></div>
		</div>
		<div class="downside">
			<i class="fa fa-circle"></i>
			<i class="fa fa-circle"></i>
			<i class="fa fa-camera"></i>
		</div>
	</div>
	</div>
<div class="bottom-bar">
	<div class="the-button" onclick="location.href='index.php';"></div>
</div>
</phone>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
