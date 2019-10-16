<?php
ob_start();
session_start();
header("Content-type: text/html; charset=utf-8");
error_reporting(0);
set_time_limit(0);
$datenow=date("Y-m-d");
$transaction_leng=14;
$url_api="https://www.tmweasy.com/apiwallet.php";


//-----------------------------------------config----------------------------------------------------
//ข้อมูล https://www.tmweasy.com ต้องสมัครสมาชิกที่เว็บนี้ก่อนแล้วเอา id มาใส
$tmapi_user="Thunwa007"; // Username
$tmpapi_assword="thunwa007"; // รหัสผ่าน

//ข้อมูล บัญชี True money Wallet ของเว็บ App Truemoneywallet ต้องกรอกให้ถูกต้อง เพราะอาจทำให้บัญชี True money  ของท่านถูกระงับได้
$truewall_email="vathunwa@gmail.com"; // Email ที่ใช้กับ  App Truemoneywallet
$truewall_phone="0827252869"; // เบอร์โทรที่ไว้รับยอดกับ True money Wallet เป็นเบอร์ที่สมัครคู่กับ Email ก่อนหน้า
$truepassword="tmpwokVXm4klNqbO4[pl]kmKrj35pbA[tr][tr]"; // รหัสผ่าน ต้องนำรหัสผ่าน True money Wallet ของท่านไปเข้ารหัสความปลอดภัยที่ https://www.tmweasy.com/encode.php ก่อนแล้วนำcodeที่ได้หลังเข้ารหัสมาใส่ตรงนี้ได้เลย  รูปแบบ tmpw..................

//config ฐานข้อมูล
$sql_server="localhost";
$sql_user="root";
$sql_password="";
$sql_database="essentialmode";

//ตัวคูณเครดิตรสำหรับทรูวอเลท
$mul=1;

//เชทค่าเครดิตรสำหรับบัตรทรูมันนี่ เปลี่ยนค่าหลัง =
$truemoney_set[50]=150000;
$truemoney_set[90]=200000;
$truemoney_set[150]=450000;
$truemoney_set[300]=900000;
$truemoney_set[500]=1500000;
$truemoney_set[1000]=3000000;

//-----------------------------------------config----------------------------------------------------

function tmtopupconnect($tmuser,$tmpassword,$trueemail,$truepassword,$ip,$session,$transactionid,$action,$ref1){
	global $url_api;
	$urlconnect=$url_api."?username=$tmuser&password=$tmpassword&action=$action&tmemail=$trueemail&truepassword=$truepassword&session=$session&transactionid=$transactionid&clientip=$ip&ref1=$ref1&json=1";
	$ch = curl_init($urlconnect);
	//curl_setopt($ch, CURLOPT_SSLVERSION,3);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; th; rv:1.9.2.12) Gecko/20101026 Firefox/3.6.12");
	curl_setopt($ch, CURLOPT_HEADER, 0);
	@curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	return $doc=curl_exec($ch);
	return curl_error($ch);
	curl_close($ch);
}
function capchar($ip,$tmuser){
	return md5($tmuser.$ip);
}
function my_ip(){
	if ($_SERVER['HTTP_CLIENT_IP']) {
		$IP = $_SERVER['HTTP_CLIENT_IP'];
	} elseif (preg_match("[0-9]",$_SERVER["HTTP_X_FORWARDED_FOR"] )) {
		$IP = $_SERVER["HTTP_X_FORWARDED_FOR"];
	} else {
		$IP = $_SERVER["REMOTE_ADDR"];
	}
		return $IP;
}


$conn=mysqli_connect($sql_server,$sql_user,$sql_password,$sql_database) or die("Error Database is not connect!");
?>
