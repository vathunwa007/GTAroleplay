<?php  require "connect.php";
require "apitrue.php";
//$steamname = $_SESSION['steamname'];

$data = "SELECT * FROM users WHERE name ='$steamname'";
$result = mysqli_query($con, $data);

$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

/*if($row == 0){
  echo "<script>";
 			 echo "alert('ไม่มีการล็อกอินเข้ามาไม่สามารถเชื่อมกับฐานข้อมูลได้ !');";
 			 echo "window.location='index.php';";
           	 echo "</script>";
}*/
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
		<div class="clock"><br>
      <h3 style="color:white;background-color:black;"> ระบบแจ้งโอนผ่าน True money Wallet อัตโนมัติ </h3>
      <!--------------------------------------------------เพิ่มข้อมูลในโทรศัพตรงนี้----------------------------------------->

      <div class="container">
        <div class="d-flex justify-content-center">
        <?php
        if($_POST[send]){
        	if(strlen($_POST[transactionid])<$transaction_leng){
        		echo "<script>alert('กรุณากรอก เลขที่อ้างอิง ให้ครบ!');location='';</script>";
        	}else{
        	$returnserver=tmtopupconnect($tmapi_user,$tmpapi_assword,$truewall_email,$truepassword,my_ip(),$_POST[session],$_POST[transactionid],"yes",$_POST[ref1]);
        	$returnserver=json_decode($returnserver,true);
        	}
        	if($returnserver[Status]=="check_success"){
        		$money_total=$returnserver[Amount]; //จำนวนเงินที่ได้รับ
        		if($returnserver[Type]=="truewallet"){
        			//ยอดสำเร็จที่ถูกเช็คจากทรูวอเลท
        			$point=$money_total*$mul;
        		}else{
        			//ยอดสำเร็จที่ถูกเช็คจากบัตรทรูมันนี่
        			$point=$truemoney_set[$money_total];
        		}
        		mysqli_query($conn,"update users set money=money+$point where name='$row[name]' ");
        		echo "<p><h4 style='color:green'>เรียบร้อย</h4></p>
        		<p>จำนวนเงิน คือ $money_total บาท ได้รับ $point เครดิตร</p>
        		<p>ขอบคุณที่ใช้บริการครับ !  [ ปิดหน้านี้ได้เลย ]</p>";
        		//-------------------------------------------------------------------------------------------
        	}else{
        		$error=$returnserver[Msg];//ค่าผิดพลาด ที่ส่งกลับมา

        		//-------------------------------------------------------------------------------------------
        		echo "<p><h4>ไม่สำเร็จ </h4></p>
        		<p>$error</p>
        		<p><a href='wallet.php'>[กลับไปลองอีกครั้ง]</a> </p>";
        		//-------------------------------------------------------------------------------------------
        	}

        } else{
        	$returnserver=tmtopupconnect($tmapi_user,$tmpapi_assword,"","","","","","","");
        	$returnserver=json_decode($returnserver,true);
        	if($returnserver[Status]=="ready"){
        ?>
        <script>
        co=0;
        function loading(){
        	co=co+1;
        	switch(co)
        	{
        		case 1:
        		char_load="โปรดรอสักครู่ ครับ |";
        		break;
        		case 2:
        		char_load="โปรดรอสักครู่ ครับ /";
        		break;
        		case 3:
        		char_load="โปรดรอสักครู่ ครับ -";
        		break;
        		case 4:
        		char_load="โปรดรอสักครู่ ครับ \\";
        		co=0;
        		break;
        	}
        	document.getElementById("loadvip").innerHTML=char_load;
        	setTimeout("loading()", 100);
        }

        </script>


        	<hr>
        	<div align="left">
        	<form method="POST" name="tmtopup">
        		<INPUT TYPE="hidden" NAME="send" value="ok">
        		<table align="center" cellpadding="0" cellspacing="0">
        			<tr bgcolor="#F4F2F7"><td colspan="2" align="center"><img src="https://uppic.cc/d/KuJq"></td></tr>
        			<tr bgcolor="#ff9900"><td align="center"><h2>Step 1</h2></td><td align="center"><p><b>โอน - เติมยอดเข้า บัญชี True Money Wallet</b></p><h2><?php echo $truewall_phone; ?></h2>
        			<p>แล้วนำเลขอ้างอิงที่ได้รับ มาใส่ใน step2</p></td></tr>

        			<tr bgcolor="#009966"><td rowspan="2" align="center" bgcolor="#009966"><h2>Step 2</h2></td>
        			<td align="center"><br>  <span style="color:white;">ชื่อตัวละครในเกมส์</span><INPUT TYPE="text" NAME="ref1" placeholder="Username" value="<?php echo $row['name']; ?>" style="width:95%;height:30px;font-size:20px"disabled="disabled"></td></tr>

        			<tr bgcolor="#009966"><td align="center"><br><input name="transactionid" value="" maxlength="<?php echo $transaction_leng; ?>" placeholder="เลขที่อ้างอิงวอลเล็ต" style="width:95%;height:30px;font-size:20px">
        			<div><a href="http://tmwallet.thaighost.net/images/transactionid.jpg" target="_transactionid">ตัวอย่างการดูเลขที่อ้างอิง</a></div></font>

        			<tr bgcolor="#ff0000"><td colspan="2" align="center"><div id="loadvip"></div>
        			<input class="btn btn-info btn-lg btn-block"type="submit" value="แจ้งโอน" name="send" onClick="this.disabled=1;this.value='รอสักครู่กำลังตรวจสอบเลขบัตร...';document.forms[0].submit();loading()" style="height:60px;font-size:20px"></td></tr>
        		</table>
        	</form>
        	</div>
        <?php
        	}else if($returnserver[Status]=="noready"){
        		echo "<p><img src='https://www.tmweasy.com/images/busy.png'></p><p><b>กำลังมีผู้ทำรายการอยู่ โปรดรอประมาณ 20 วินาที</b> </p>
        		<p><a href='wallet.php'>คลิกเพื่อลองใหม่อีกครั้ง</a></p>";
        	}else if($returnserver[Status]=="not_connect"){
        		echo "<p><img src='https://www.tmweasy.com/images/notcon.png'></p><p><b>ไม่สามารถติดต่อ Server True Money ได้ โปรดรอสักครู่..</b> </p>
        		<p><a href='wallet.php'>คลิกเพื่อลองใหม่อีกครั้ง</a></p>";
        	}else if($returnserver[Status]=="block_ip"){
        		echo "<p><img src='https://www.tmweasy.com/images/block_ip.png'></p><p><b>ถูก block ip ชั่วคราว เนื่องจากทำรายการไม่ถูกต้อง เกิน 6 ครั้ง</b> </p>
        		<p><a href='wallet.php'>คลิกเพื่อลองใหม่อีกครั้ง</a></p>";
        	}else{
        		echo "<p>ยังไม่พร้อมใช้งาน โปรดติดต่อผู้ดูแลระบบ </p>";
        	}
        }
        ?>
        <hr>


    <br><br>

    <div class="d-flex justify-content-center">
      <div class="input-group mb-3">

  </div>
  </div>
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
