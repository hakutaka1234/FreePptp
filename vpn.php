<?php
//GAUSAH DI RECODE BABI!!!
system('clear');
//github.com/hakutaka1234
//Kalau buat belajar Gapapa 
//Asal JangaN di recode

$WarnaRandom = array(
"\033[0;31m",
"\033[0;32m",
"\033[0;33m",
"\033[0;34m",
"\033[0;35m",
"\033[0;36m",
"\033[1;32m",
"\033[1;33m",
"\033[1;34m",
"\033[1;35m",
"\033[1;36m");
$rundom = $WarnaRandom[mt_rand(0, sizeof($WarnaRandom) - 1)];
$rundom1 = $WarnaRandom[mt_rand(0, sizeof($WarnaRandom) - 1)];
$rundom2 = $WarnaRandom[mt_rand(0, sizeof($WarnaRandom) - 1)];
$rundom3 = $WarnaRandom[mt_rand(0, sizeof($WarnaRandom) - 1)];
$rundom4 = $WarnaRandom[mt_rand(0, sizeof($WarnaRandom) - 1)];
function internet($url, $header ,$post){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
  return curl_exec($ch);
  curl_close($ch);
}
// FUNGSION!!!
echo"$rundom
++++++++++++++++++++++++++++++++++
$rundom [+] Author   : Hakutaka
$rundom1 [+] Github   : hakutaka1234
$rundom [+] Language : PHP
$rundom1 [+] Script   : Free PPTP VPN
$rundom [+] Use      : Support All Android
$rundom1 [+] Contac Me: +12522502299
$rundom [+] Version      : 4
++++++++++++++++++++++++++++++++++
";
echo"
$rundom \*/ [1] Server ASIA [23] SERVER
$rundom1 /*\
$rundom \*/ [2] Server EUROPE [17] SERVER
$rundom1 /*\
$rundom \*/ [3] Server AMERIKA [17] SERVER
$rundom1 /*\
$rundom \*/ [4] Server 7 DAYS
";
echo "\nCHOSE>>> ";
$create=trim(fgets(STDIN));
if($create=="1"){
system('clear');
echo"$rundom
++++++++++++++++++++++++++++++++++
$rundom [+] Author   : Hakutaka
$rundom1 [+] Github   : hakutaka1234
$rundom [+] Language : PHP
$rundom1 [+] SERVER   : ASIA(23) SERVER
$rundom [+] Use      : Support All Android
$rundom1 [+] Contac Me: +12522502299
++++++++++++++++++++++++++++++++++
";
echo"
$rundom1 /*\
$rundom \*/ [1] Server ASIA INDIA 1
$rundom1 /*\
$rundom \*/ [2] Server ASIA INDIA 2
$rundom1 /*\
$rundom \*/ [3] Server ASIA INDIA 3
$rundom1 /*\
$rundom \*/ [4] Server ASIA  INDONESIA 1
$rundom1 /*\
$rundom \*/ [5] Server ASIA  INDONESIA 2
$rundom1 /*\
$rundom \*/ [6] Server ASIA  INDONESIA 3
$rundom1 /*\
$rundom \*/ [7] Server ASIA  INDONESIA 4
$rundom1 /*\
$rundom \*/ [8] Server ASIA  JAPAN 1
$rundom1 /*\
$rundom \*/ [9] Server ASIA  JAPAN 2
$rundom1 /*\
$rundom \*/ [10] Server ASIA  PHILIPPINES 1
$rundom1 /*\
$rundom \*/ [11] Server ASIA  PHILIPPINES 2
$rundom1 /*\
$rundom \*/ [12] Server ASIA  PHILIPPINES 8
$rundom1 /*\
$rundom \*/ [13] Server ASIA  SINGAPORE 1
$rundom1 /*\
$rundom \*/ [14] Server ASIA  SINGAPORE 2
$rundom1 /*\
$rundom \*/ [15] Server ASIA  SINGAPORE 3
$rundom1 /*\
$rundom \*/ [16] Server ASIA  SINGAPORE 4
$rundom1 /*\
$rundom \*/ [17] Server ASIA  SINGAPORE 5
$rundom1 /*\
$rundom \*/ [18] Server ASIA  SINGAPORE 6
$rundom1 /*\
$rundom \*/ [19] Server ASIA  SINGAPORE 7
$rundom1 /*\
$rundom \*/ [20] Server ASIA  KOREA 1
$rundom1 /*\
$rundom \*/ [21] Server ASIA  KOREA 2
$rundom1 /*\
$rundom \*/ [22] Server ASIA  THAILAND 2
$rundom1 /*\
$rundom \*/ [23] Server ASIA  TURKEY 1
";
echo "\nCHOSE>>> ";
$pil=trim(fgets(STDIN));
if($pil=="1"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=in1&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('India</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";
}
}


if($pil=="2"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=in2&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('India</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";
}
}

if($pil=="3"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=in3&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('India</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";
}
}

if($pil=="4"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=indo&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('Indonesia</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";
}
}

if($pil=="5"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=indo2&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('Indonesia</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";
}
}

if($pil=="6"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=indo3&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('Indonesia</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";
}
}

if($pil=="7"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=indo4&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('Indonesia</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";
}
}

if($pil=="8"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=jp1&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('Japan</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";
}
}

if($pil=="9"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=jp2&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('Japan</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";
}
}

if($pil=="10"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=ph2&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('Philippines</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";
}
}

if($pil=="11"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=ph3&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('Philippines</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";
}
}

if($pil=="12"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=ph8&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('Philippines</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";
}
}

if($pil=="13"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=sg1&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('Singapore</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";
}
}

if($pil=="14"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=sg2&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('Singapore</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";
}
}

if($pil=="15"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=sg3&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('Singapore</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";
}
}


if($pil=="16"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=sg4&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('Singapore</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";
}
}

if($pil=="17"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=sg5&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('Singapore</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";
}
}

if($pil=="18"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=sg6&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('Singapore</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";
}
}


if($pil=="19"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=sg7&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('Singapore</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";
}
}

if($pil=="20"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=kr1&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('South Korea</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";
}
}

if($pil=="21"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=kr2&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('South Korea</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";
}
}

if($pil=="22"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=th2&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('Thailand</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";
}
}

if($pil=="23"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=tr1&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('Turkey</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";
}
}
}
elseif($create=="2"){
system('clear');
echo"$rundom
++++++++++++++++++++++++++++++++++
$rundom [+] Author   : Hakutaka
$rundom1 [+] Github   : hakutaka1234
$rundom [+] Language : PHP
$rundom1 [+] SERVER   : EUROPE(17) SERVER
$rundom [+] Use      : Support All Android
$rundom1 [+] Contac Me: +12522502299
++++++++++++++++++++++++++++++++++
";
echo"
$rundom1 /*\
$rundom \*/ [1] Server EUROPE BULGARIA 1
$rundom1 /*\
$rundom \*/ [2] Server EUROPE BULGARIA 2
$rundom1 /*\
$rundom \*/ [3] Server EUROPE BULGARIA 3
$rundom1 /*\
$rundom \*/ [4] Server EUROPE  CZECH REPUBLIC 1
$rundom1 /*\
$rundom \*/ [5] Server EUROPE  FRANCE 1
$rundom1 /*\
$rundom \*/ [6] Server EUROPE  FRANCE 2
$rundom1 /*\
$rundom \*/ [7] Server EUROPE  GERMANY 1
$rundom1 /*\
$rundom \*/ [8] Server EUROPE  GERMANY 2
$rundom1 /*\
$rundom \*/ [9] Server EUROPE  ITALY 1
$rundom1 /*\
$rundom \*/ [10] Server EUROPE  ITALY 2
$rundom1 /*\
$rundom \*/ [11] Server EUROPE  NETHERLANDS 1
$rundom1 /*\
$rundom \*/ [12] Server EUROPE  NETHERLANDS 2
$rundom1 /*\
$rundom \*/ [13] Server EUROPE  ROMANIA 1
$rundom1 /*\
$rundom \*/ [14] Server EUROPE  RUSSIA 1
$rundom1 /*\
$rundom \*/ [15] Server EUROPE  SPAIN 1
$rundom1 /*\
$rundom \*/ [16] Server EUROPE  PREMIUM UNITED KINGDOM
$rundom1 /*\
$rundom \*/ [17] Server EUROPE  UNITED KINGDOM 1
";
echo "\nCHOSE>>> ";
$pilek=trim(fgets(STDIN));
if($pilek=="1"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=bg1&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('Bulgaria</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";
}
}

if($pilek=="2"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=bg2&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('Bulgaria</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";
}
}

if($pilek=="3"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=bg3&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('Bulgaria</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";
}
}

if($pilek=="4"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=cz1&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('Czech Republic</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";
}
}


if($pilek=="5"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=fr1&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('France</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";
}
}

if($pilek=="6"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=fr2&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('France</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";
}
}


if($pilek=="7"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=gr1&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('Germany</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";
}
}


if($pilek=="8"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=gr2&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('Germany</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";
}
}

if($pilek=="9"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=it1&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('Italy</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";
}
}

if($pilek=="10"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=it2&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('Italy</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";
}
}

if($pilek=="11"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=nl1&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('Netherlands</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";
}
}

if($pilek=="12"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=nl2&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('Netherlands</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";
}
}


if($pilek=="13"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=ro1&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('Romania</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";
}
}

if($pilek=="14"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=ru1&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('Russia</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";
}
}

if($pilek=="15"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=sp1&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('Spain</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";
}
}

if($pilek=="16"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=premiuk2&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('United Kingdom</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";
}
}

if($pilek=="17"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=uk&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('United Kingdom</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";}}}


elseif($create=="3"){
system('clear');
echo"$rundom
++++++++++++++++++++++++++++++++++
$rundom [+] Author   : Hakutaka
$rundom1 [+] Github   : hakutaka1234
$rundom [+] Language : PHP
$rundom1 [+] SERVER   : AMERIKA(17) SERVER
$rundom [+] Use      : Support All Android
$rundom1 [+] Contac Me: +12522502299
++++++++++++++++++++++++++++++++++
";
echo"
$rundom1 /*\
$rundom \*/ [1] Server AMERIKA BRAZIL 1
$rundom1 /*\
$rundom \*/ [2] Server AMERIKA BRAZIL 2
$rundom1 /*\
$rundom \*/ [3] Server AMERIKA BRAZIL 3
$rundom1 /*\
$rundom \*/ [4] Server AMERIKA  PREMIUM BRAZIL 
$rundom1 /*\
$rundom \*/ [5] Server AMERIKA  CANADA 1
$rundom1 /*\
$rundom \*/ [6] Server AMERIKA  USA 1
$rundom1 /*\
$rundom \*/ [7] Server AMERIKA  USA 2
$rundom1 /*\
$rundom \*/ [8] Server AMERIKA  USA 3
$rundom1 /*\
$rundom \*/ [9] Server AMERIKA  PREMIUM USA2
$rundom1 /*\
$rundom \*/ [10] Server AMERIKA  PREMIUM USA 3
$rundom1 /*\
$rundom \*/ [11] Server AMERIKA  NETHERLANDS 1
$rundom1 /*\
$rundom \*/ [12] Server AMERIKA  NETHERLANDS 2
$rundom1 /*\
$rundom \*/ [13] Server AMERIKA  ROMANIA 1
$rundom1 /*\
$rundom \*/ [14] Server AMERIKA  RUSSIA 1
$rundom1 /*\
$rundom \*/ [15] Server AMERIKA  SPAIN 1
$rundom1 /*\
$rundom \*/ [16] Server AMERIKA  PREMIUM UNITED KINGDOM
$rundom1 /*\
$rundom \*/ [17] Server AMERIKA  UNITED KINGDOM 1
";
echo "\nCHOSE>>> ";
$ahhh=trim(fgets(STDIN));
if($ahhh=="1"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=br1&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('Brazil</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";
}
}

if($ahhh=="2"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=br2&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('Brazil</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";
}
}

if($ahhh=="3"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=br3&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('Brazil</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";
}
}

if($ahhh=="4"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=premibr1&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('Brazil</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";
}
}

if($ahhh=="5"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=ca1&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('Canada</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";
}
}


if($ahhh=="6"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=usa1&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('USA</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";
}
}



if($ahhh=="7"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=usa2&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('USA</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";
}
}



if($ahhh=="9"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=premiusa2&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('USA</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";
}
}

if($ahhh=="10"){
error_reporting(0);
$ua = array("User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
echo"\033[0;31mCreate Username : ";
$user = trim(fgets(STDIN));
echo"Create Password : ";
$pass = trim(fgets(STDIN));
$data = "user=$user&pass=$pass";
$result=(internet("https://www.vpnjantit.com/create-free-account.html?server=premiusa3&type=PPTP", $ua, $data));
$result1=explode('<h5>',$result);system('clear');
if($result1[1]==('USA</h5>Max Login: <br>')){
echo"

          $rundom2 [++] MAAF USERNAME TIDAK VALID $rundom2 [++]   
             $rundom3 [++] ATAU SERVER FULL $rundom2 [++]
             $rundom4 [++] CODE BY HAKUTAKA $rundom2 [++]
             
\n";
echo"\r";
}
else{
$hasil2=explode('<h5>',$result)[2];
$username=explode('</h5>Password:',$hasil2);
$hasil3=explode('<h5>',$result)[3];
$pwd=explode('<a',$hasil3);
$hasil4=explode('<h5>',$result)[4];
$expired=explode('</h5>Location:<br>',$hasil4);
$hasil5=explode('<h5>',$result)[5];
$negara=explode('</h5>Max Login: <br>',$hasil5);
$hasil6=explode('<h5>',$result)[6];
$maxlogin=explode('</h5>PPTP Server:<br>',$hasil6);
$hasil7=explode('<h5>',$result)[7];
$server=explode('<a',$hasil7);
$hasil8=explode('<h5>',$result)[8];
$aktif=explode('</h5>',$hasil8);system('clear');
echo "
          $rundom2 [++] SUKSES CREATE ACCOUNT $rundom2 [++]
$rundom3 [+] Username : $username[0]
$rundom4 [+] Password : $pwd[0]
$rundom [+] Expired  : $expired[0]
$rundom2 [+] Negara   : $negara[0]
$rundom3 [+] Max Login: $maxlogin[0]
$rundom4 [+] Server   : $server[0]
$rundom2 [+] Masa     : $aktif[0]
\n";
echo"\r";}}}
